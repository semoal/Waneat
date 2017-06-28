<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;



class RestaurantController extends Controller {
    /**
     * Crea un restaurante nuevo
     *
     * @param  Request  $request
     * @return Response
     */
    public function setRestaurant(Request $request) {
        // Validamos el request
        $this->validate($request, [
            'campo1'    => 'required',
        ]);
        $restaurant = new Restaurant;
        $restaurant->campox = $request->campodelform;
        $restaurant->save();
    }
    /**
     * Coge los restaurantes
     */
    public function getRestaurant(Request $request) {
        if (Auth::check()){
            $id = Auth::user()->getId();
            $restaurant = Restaurant::where('id_user', $id);
            return view('restaurant')->with('restaurant', $restaurant);
        }
    }
}