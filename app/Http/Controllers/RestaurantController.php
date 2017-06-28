<?php

namespace App\Http\Controllers;

use App\Restaurant;
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
        //if (Auth::check()){
            $id = Auth::user()->getId();
            $restaurant = Restaurant::all();
            return view('restaurant')->with('restaurant', $restaurant);
        //}
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
            'name_restaurant'    => 'required',
        ]);

        $restaurante = Restaurant::create([
            'name_restaurant' => $request->name_restaurant,
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
        //
    }

}