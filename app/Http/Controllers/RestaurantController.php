<?php

namespace App\Http\Controllers;

use App\Restaurant;
use App\RestaurantSchedule;
use App\User as User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Log;



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
    public function store(Request $request){
        $this->validate($request, [
            'name_restaurant'    => 'required|unique:restaurant',
            'hour1'    => 'required|unique:restaurant_schedule',
            /*'address_restaurant' => 'required',
            'city_restaurant' => 'required',
            'postalcode_restaurant' => 'required',
            'country_restaurant' => 'required',
            'state_restaurant' => 'required',
            'description' => 'required',
            'email_restaurant' => 'required',
            'picture_url' => 'required',*/
        ]);
        // Log::info("yoquese".$request->days);

        $schedule = new RestaurantSchedule;
        $schedule->hour1=$request->hour1;
        // $schedule->save()

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
        $restaurante->schedules()->save($schedule);


        if($restaurante){
            error_log($request->days);
            return redirect()->route('restaurant.index');
            // echo($request->days);
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
       $restarant = Restaurant::find($id)->delete();
       return redirect()->route('restaurant.index');
    }

}
