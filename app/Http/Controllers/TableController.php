<?php

namespace App\Http\Controllers;

use App\Restaurant;
use App\User as User;
use App\RestaurantTable as Table;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use SimpleSoftwareIO\QrCode\BaconQrCodeGenerator;
Use App\Traits\Uploader as Uploader;



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
    use Uploader;
    public function store(Request $request) {
         $this->validate($request, [
            'valuetables'    => 'required',
        ]);

        $cantidadMesas = $request->valuetables;
        for ($i=1; $i <= $cantidadMesas; $i++) {
            $data[] = [
            'title' => "Mesa-".$i,
            'captcha_url' => '',
            'id_restaurant_id' => $request->restaurantId,
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
        $tables = Table::where('id_restaurant_id', $id)->get();
        return view('tables/show', ['tables' => $tables]);
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
