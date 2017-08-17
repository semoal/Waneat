<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\RestaurantTable as Table;

class TableController extends ApiController {
    /**
     * Show Information to table of restaurant
     *
     * @return Json
     */
    public function getTables($restaurant) {
      $table = Table::where('id_restaurant_id', $restaurant)->get();
      return response()->json([
            'table' => $table->toJson()
        ]);
    }

    public function destroyTables(Request $request){
      Table::destroy($request->id);
      error_log($request->id);
      return response()->json([
          'success' => 'Mesa eliminada',
      ]);
    }

    public function putTables(Request $request){
        for ($i=1; $i <= $request->quantity; $i++) {
            $data[] = [
            'title' => "Mesa-".$i,
            'captcha_url' => '',
            'id_restaurant_id' => $request->id,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
          ];
        }
        Table::insert($data);
        return redirect()->route('table.index'); 
    }

}
