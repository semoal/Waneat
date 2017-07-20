<?php

/**
* Modelo de Restaurante
* Fecha: 28/06/2017
* Contiene todos los campos que tiene un restaraurante
*/

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model{

	protected $fillable = [
    	'name_restaurant',
		'address_restaurant',
		'city_restaurant',
		'postalcode_restaurant',
		'country_restaurant',
		'state_restaurant',
		'description',
		'email_restaurant',
		'specialty',
		'restaurant_url',
    	'id_user_id',
    	'created_at',
    	'updated_at',
    ];

    protected $hidden = [

    ];
	//Tabla de la base de datos que referencia
	protected $table = 'restaurant';

	public function user(){
        return $this->belongsTo('App\User');
  }

	public function menus(){
		return $this->hasMany('App\RestaurantMenu','id_restaurant_id');
	}

	public function products(){
		return $this->hasMany('App\RestaurantProduct', 'id_restaurant_id');
	}

	public function ratings(){
		return $this->hasMany('App\RestaurantRating', 'id_restaurant_id');
	}

	public function comments(){
		return $this->hasMany('App\RestaurantComment', 'id_restaurant_id');
	}

	public function images(){
		return $this->hasMany('App\RestaurantImage', 'id_restaurant_id');
	}

	public function payments(){
		return $this->hasMany('App\RestaurantPayment', 'id_restaurant_id');
	}

	public function schedules(){
		return $this->hasMany('App\RestaurantSchedule', 'id_restaurant_id');
	}
	public function tables(){
		return $this->hasMany('App\RestaurantTable', 'id_restaurant_id');
	}
}
