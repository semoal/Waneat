<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestaurantImage extends Model{
   protected $fillable = [
	'image_url',
	'id_restaurant_id',
    ];

    protected $hidden = [

    ];

	protected $table = 'restaurant_image';

  public function restaurant(){
    return $this->belongsTo('App\Restaurant');
  }
}
