<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Restaurant;

use App\RestaurantImage;

use Illuminate\Database\Eloquent\ModelNotFoundException;


class RestaurantController extends ApiController {
    /**
     * Muestra información de un restaurante
     * Imagenes, horarios, comentarios, puntuación y mesas incorporadas
     * GET - api/restaurant/{id}
     * @return Json
     */
    public function show($id){
      try {
        $restaurant =  Restaurant::findOrFail($id);
        $restaurant->images;
        $restaurant->comments;
        $restaurant->ratings;
        $restaurant->tables;
        $restaurant->schedules;
        return response()->json([
            'restaurant' => $restaurant,
        ]);
      }catch(ModelNotFoundException $e) {
       return response()->json([
            'error' => "Restaurant with this id doesn't exists"
        ]);
      }
    }
    /**
     * Muestra todos los restaurantes
     * Imagenes, horarios, comentarios, puntuación y mesas incorporadas
     * GET - api/restaurant
     * @return Json
     */
    public function showAll(){
      $restaurant = Restaurant::all();
      foreach ($restaurant as $res) {
        $res->images;
        $res->comments;
        $res->ratings;
        $res->tables;
        $res->schedules;
      }
      return response()->json([
            'restaurants' => $restaurant,
        ]);
    }
    
}
