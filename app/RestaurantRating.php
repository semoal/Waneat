<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestaurantRating extends Model{
   protected $fillable = [
	'rate',
	'id_restaurant_id',
	'id_user_id',
    ];

    protected $hidden = [

    ];

	protected $table = 'restaurant_rating';

  public function restaurant(){
    return $this->belongsTo('App\Restaurant');
  }

  public function user(){
    return $this->belongsTo('App\User');
  }
}
