<?php

namespace App\Http\Controllers;

use App\Restaurant;
use App\RestaurantSchedule;
use App\RestaurantImage;
use App\User as User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
Use App\Traits\Uploader as Uploader;


class RestaurantController extends Controller {
    //To check routes: php artisan route:list

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    use Uploader;
    public function index(){
        $restaurants = Auth::user()->restaurants;
        return view('restaurants/new', ['restaurants' => $restaurants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(){
        return view('restaurants.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */

    public function store(Request $request){
        $this->validate($request, [
            'name_restaurant'    => 'required|unique:restaurant',
            'picture'         =>  'required',
            /*'address_restaurant' => 'required',
            'city_restaurant' => 'required',
            'postalcode_restaurant' => 'required',
            'country_restaurant' => 'required',
            'state_restaurant' => 'required',
            'description' => 'required',
            'email_restaurant' => 'required',
            'picture_url' => 'required',*/
        ]);

        // $restaurante = Restaurant::create([
        //     'name_restaurant' => $request->name_restaurant,
        //     /*'address_restaurant' => $request->address_restaurant,
        //     'city_restaurant' => $request->city_restaurant,
        //     'postalcode_restaurant' => $request->postalcode_restaurant,
        //     'country_restaurant' => $request->country_restaurant,
        //     'state_restaurant' => $request->state_restaurant,
        //     'description' => $request->description,
        //     'email_restaurant' => $request->email_restaurant,*/
        //     'id_user_id' => Auth::User()->id
        // ]);

        $restaurante = new Restaurant;
        $restaurante->id_user_id = Auth::User()->id;
        $restaurante->name_restaurant = $request->name_restaurant;

        $restaurante->save();
        //Imagenes y el propio restaurante
        foreach ($request->file("picture") as $key => $image) {
          $urlImagen = $this->uploadToImgur($image);
          $restaurantImagen = new RestaurantImage;
          $restaurantImagen->image_url = $urlImagen;
          $restaurante->images()->save($restaurantImagen);
        }

        //Horarios del restaurante
        $schedule = new RestaurantSchedule;
        $horasCerrar = $request->hour2;
        $horasAbrir = $request->hour1;
        $diasAbrir = $request->days;

        for ($i=0; $i < count($horasCerrar); $i++) {
          $diasString = implode(";", $diasAbrir[$i]);
          $data[] = [
            'id_restaurant_id' => $restaurante->id,
            'days'  => $diasString,
            'openSchedule' => $horasAbrir[$i],
            'closeSchedule' => $horasCerrar[$i],
            'created_at' => $restaurante->created_at,
            'updated_at' => $restaurante->updated_at,
          ];
        }

        RestaurantSchedule::insert($data);

        if($restaurante){
            return redirect()->route('home');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id){
        $restaurant = Auth::user()->restaurants->find($id);
        return view('restaurants/show',['restaurant' => $restaurant]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id){
        $restaurant = Auth::user()->restaurants->find($id);
        return view('restaurants/edit',['restaurant' => $restaurant]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
        public function update(Request $request,$id) {
        //Restaurante a editar
        $restaurante = Auth::user()->restaurants->find($id);

        //Cogemos los campos de restaurantes
        $restaurante->name_restaurant = $request->name_restaurant;
        $restaurante->address_restaurant = $request->address_restaurant;
        $restaurante->city_restaurant = $request->city_restaurant;
        $restaurante->postalcode_restaurant = $request->postalcode_restaurant;
        $restaurante->country_restaurant = $request->country_restaurant;
        $restaurante->state_restaurant = $request->state_restaurant;
        $restaurante->description = $request->description;
        $restaurante->email_restaurant = $request->email_restaurant;
        $restaurante->specialty = $request->specialty;
        $restaurante->restaurant_url = $request->restaurant_url;

        //Guardamos el restaurante editado
        $restaurante->save();

        //Ahora a ese restaurante le editamos las imagenes/horarios si es necesario

        //Imagenes y el propio restaurante
        if($request->file("picture")){
          foreach ($request->file("picture") as $key => $image) {
            $urlImagen = $this->uploadToImgur($image);
            $restaurantImagen = new RestaurantImage;
            $restaurantImagen->image_url = $urlImagen;
            $restaurante->images()->save($restaurantImagen);
          }
        }


        //Horarios del restaurante
        $schedule = new RestaurantSchedule;
        $horasCerrar = $request->hour2;
        $horasAbrir = $request->hour1;
        $diasAbrir = $request->days;

        $restaurante->schedules()->delete();

        for ($i=0; $i < count($horasCerrar); $i++) {
          if(array_key_exists($i, $diasAbrir)){
            $diasString = implode(";", $diasAbrir[$i]);
            $data[] = [
              'id_restaurant_id' => $restaurante->id,
              'days'  => $diasString,
              'openSchedule' => $horasAbrir[$i],
              'closeSchedule' => $horasCerrar[$i],
              'created_at' => $restaurante->created_at,
              'updated_at' => $restaurante->updated_at,
            ];
          }
        }

        RestaurantSchedule::insert($data);

        //Se ha guardado correctamente
        if($restaurante){
            return redirect()->route('home');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    // public function destroy($id){
    //     $restaurant = Restaurant::find($id);
    //     $restaurant->images()->delete();
    //     $restaurant->schedules()->delete();
    //     $restaurant->delete();
    //     return redirect()->route('home');
    // }

    public function destroyImage($id){
        $restaurantImage = RestaurantImage::find($id);
        $restaurantImage->delete();
        return redirect()->back();
    }

}
