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
    public function index(Request $request){
        $restaurants = Auth::user()->restaurants;
        return view('restaurants/new',['restaurants' => $restaurants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(){
        return view('new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */

    public function store(Request $request){
        $this->validate($request, [
            'name_restaurant'    => 'required|unique:restaurant',
            // 'hour1'    => 'required|unique:restaurant_schedule',
            // 'hour2'    => 'required|unique:restaurant_schedule',
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


        //Imagenes y el propio restaurante
        $urlImagen = $this->uploadToImgur($request);
        $restaurantImagen = new RestaurantImage;
        $restaurantImagen->image_url = $urlImagen;

        $restaurante = new Restaurant;
        $restaurante->id_user_id = Auth::User()->id;
        $restaurante->name_restaurant = $request->name_restaurant;

        $restaurante->save();
        $restaurante->images()->save($restaurantImagen);



        //Horarios del restaurante
        $schedule = new RestaurantSchedule;
        $horasCerrar = $request->hour2;
        $horasAbrir = $request->hour1;
        $diasAbrir = $request->days;

        for ($i=0; $i < count($horasCerrar); $i++) {
                  error_log(json_encode($diasAbrir));
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
            return redirect()->route('restaurant.index');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id){
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id){
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id){
        $restaurant = Restaurant::find($id);
        $restaurant->images()->delete();
        $restaurant->schedules()->delete();
        $restaurant->delete();
       return redirect()->route('home');
    }

}
