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
    public function getTables($restaurant)
    {
      //falta un middleware para auth con el token de la api.
      $table = RestaurantTable::where('id_restaurant_id', $restaurant)->get();

      return response()->json([
            'table' => $table->toJson()
        ]);
    }
    public function get($table){
      $tables = RestaurantTable::all();

      return response()->json([
          'tables' => $table->toJson()
      ]);
    }
}
