<?php

namespace App\Http\Controllers;

use App\Restaurant;
use App\RestaurantSchedule;
use App\RestaurantImage;
use App\User as User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;



class RestaurantController extends Controller {
    //To check routes: php artisan route:list

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function index(Request $request){
            $id = Auth::user()->id;
            $restaurant = User::find($id)->restaurants;
            $horario = User::find($id)->restaurants;
            $prueba = User::find($id)->restaurants->count();
            return view('restaurants/addRestaurant',['countRestaurantes' => $prueba])->with('restaurant', $restaurant);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(){
        return view('restaurant');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */

     public function upload(Request $request){
          $img=$_FILES['picture'];
          error_log($img['name']);
          $filename = $img['tmp_name'];
          $client_id="92395e9873f8e10";
          $handle = fopen($filename, "r");
          $data = fread($handle, filesize($filename));
          $pvars   = array('image' => base64_encode($data));
          $timeout = 100;
          $curl = curl_init();
          curl_setopt($curl, CURLOPT_URL, 'https://api.imgur.com/3/image.json');
          curl_setopt($curl, CURLOPT_TIMEOUT, $timeout);
          curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Client-ID ' . $client_id));
          curl_setopt($curl, CURLOPT_POST, 1);
          curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt($curl, CURLOPT_POSTFIELDS, $pvars);
          $out = curl_exec($curl);
          curl_close ($curl);
          $pms = json_decode($out,true);
          $url=$pms['data']['link'];
          if($url!=""){
           //echo "<h2>Uploaded Without Any Problem</h2>";
           //echo "<img src='$url'/>";
           return $url;
          }else{
           echo "<h2>There's a Problem</h2>";
           //echo $pms['data']['error'];  
          } 
     }

    public function store(Request $request){
        $this->validate($request, [
            'name_restaurant'    => 'required|unique:restaurant',
            // 'hour1'    => 'required|unique:restaurant_schedule',
            // 'hour2'    => 'required|unique:restaurant_schedule',

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
        $urlImagen = $this->upload($request);
        $restaurantImagen = new RestaurantImage;
        $restaurantImagen->image_url = $urlImagen;
        
        $schedule = new RestaurantSchedule;
        $schedule->hour1=$request->hour1;
        $schedule->hour2=$request->hour2;
        $dias = $request->days;
        foreach ($dias as $dia) {
            $schedule->$dia = true;
        }
        $restaurante = new Restaurant;
        $restaurante->id_user_id = Auth::User()->id;
        $restaurante->name_restaurant = $request->name_restaurant;

        $restaurante->save();
        $restaurante->schedules()->save($schedule);
        $restaurante->images()->save($restaurantImagen);


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
     * Remove in cascade the specified resource from storage 
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id){
       $restaurant = Restaurant::find($id);
       $restaurant->images()->delete();
       $restaurant->schedules()->delete();
       $restaurant->delete();

       return redirect()->route('restaurant.index');
    }

}
