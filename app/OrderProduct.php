<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model{
   protected $fillable = [
	'id_product_id',
	'id_order_id',
  'id_user_id'
    ];

    protected $hidden = [

    ];

	protected $table = 'order_product';

  public function order(){
    return $this->belongsTo('App\OrderUserRestaurant');
  }

  public function user(){
    return $this->belongsTo('App\User');
  }
}
