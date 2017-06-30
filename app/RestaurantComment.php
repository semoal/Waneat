<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestaurantComment extends Model{
   protected $fillable = [
	'comment',
	'longitud',
	'id_restaurant_id',
	'id_user_id',
    ];

    protected $hidden = [

    ];

	protected $table = 'restaurant_comment';

  public function restaurant(){
    return $this->belongsTo('App\Restaurant');
  }

  public function user(){
    return $this->belongsTo('App\User');
  }
}
