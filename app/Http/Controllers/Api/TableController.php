<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\RestaurantTable;
class TableController extends ApiController {
    /**
     * Show Information to table of restaurant
     *
     * @return Json
     */
    public function show($table, $restaurant)
    {
      //falta un middleware para auth con el token de la api.
      $table = RestaurantTable::where('id', $table)->where('restaurant_id', $restaurant)->last();

      return response()->json([
            'table' => $table->toJson()
        ]);
    }
}
