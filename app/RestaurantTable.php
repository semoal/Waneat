<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestaurantTable extends Model{
   protected $fillable = [
    	'title',
    	'captcha_url',
    	'id_restaurant_id',
    ];

    protected $hidden = [

    ];

	protected $table = 'restaurant_table';

  public function restaurant(){
    return $this->belongsTo('App\Restaurant')
  }

}
