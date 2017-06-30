<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestaurantPayment extends Model{
   protected $fillable = [
	'payment_name',
	'id_restaurant_id',
    ];

    protected $hidden = [

    ];

	protected $table = 'restaurant_payment';

  public function restaurant(){
    return $this->belongsTo('App\Restaurant');
  }
}
