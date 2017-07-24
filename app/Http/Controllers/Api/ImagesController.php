<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Restaurant;

use App\RestaurantImage;

use Illuminate\Database\Eloquent\ModelNotFoundException;


class ImagesController extends ApiController {
    /**
     * Muestra todas las imagenes de un restaurante
     * Imagenes
     * GET - api/images/{id}
     * @return Json
     */
    public function show($id){
      try {
        $users = RestaurantImage::where('id_restaurant_id', $id)->firstOrFail();
        return response()->json([
            'images' => $users,
        ]);
      }catch(ModelNotFoundException $e) {
       return response()->json([
            'error' => "Images with this restaurant id doesn't exists"
        ]);
      }
    }
}
