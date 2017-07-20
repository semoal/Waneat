<?php

namespace App\Http\Controllers;

use App\Restaurant;
use App\User as User;
use App\RestaurantTable as Table;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class TableController extends Controller {
  /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $tables = Table::where('id_restaurant_id', Auth::user()->restaurants[0]->id)->get();
        return view('tables/index', ['tables' => $tables]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request) {
         $this->validate($request, [
            'valuetables'    => 'required',
        ]);

        $cantidadMesas = $request->valuetables;
        $mesaId = Table::get();
        error_log(json_encode($mesaId));
        for ($i=1; $i <= $cantidadMesas; $i++) { 
            $data[] = [
            'title' => "Mesa-".$i,
            'captcha_url' => 'http://mqr.kr/static/images/main/qr.plain.png',
            'id_restaurant_id' => Auth::user()->restaurants[0]->id,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
          ];
        }
        Table::insert($data); 
        return redirect()->route('table.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        Table::destroy($id);
        return redirect()->back();
    }

}
