<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderUserRestaurant extends Model{
   protected $fillable = [
	'total_price',
	'iva',
	'payment_method',
  'status',
	'id_table_id',

    ];

    protected $hidden = [

    ];

	protected $table = 'order_user_restaurant';

  public function productos(){
    return $this->hasMany('App\OrderProduct', 'id_order_id');
  }

  public function menus(){
    return $this->hasMany('App\OrderMenu', 'id_order_id');
  }

  public function table(){
    return $this->belongsTo('App\RestaurantTable');
  }
}
