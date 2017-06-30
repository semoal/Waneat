<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuProduct extends Model{
   protected $fillable = [
	'id_menu_id',
	'id_product_id',
    ];

    protected $hidden = [

    ];

	protected $table = 'menu_product';

  public function menu(){
    return $this->belongsTo('App\RestaurantMenu');
  }
}
