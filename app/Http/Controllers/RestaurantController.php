<?php

namespace App\Http\Controllers;

use App\Restaurant;
use App\User as User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;



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
            /*'address_restaurant' => 'required',
            'city_restaurant' => 'required',
            'postalcode_restaurant' => 'required',
            'country_restaurant' => 'required',
            'state_restaurant' => 'required',
            'description' => 'required',
            'email_restaurant' => 'required',*/
            'picture_url' => 'required',
        ]);

        $restaurante = Restaurant::create([
            'name_restaurant' => $request->name_restaurant,
            /*'address_restaurant' => $request->address_restaurant,
            'city_restaurant' => $request->city_restaurant,
            'postalcode_restaurant' => $request->postalcode_restaurant,
            'country_restaurant' => $request->country_restaurant,
            'state_restaurant' => $request->state_restaurant,
            'description' => $request->description,
            'email_restaurant' => $request->email_restaurant,*/
            'id_user_id' => Auth::User()->id,
        ]);

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
      echo('Destroy: '.$id);
        // Retrieve user object from database with passed parameter or give error.
       $restarant = Restaurant::find($id)->delete();



       return Redirect::route('restaurant.index');
    }

}
