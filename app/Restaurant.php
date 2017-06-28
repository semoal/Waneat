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
        'id_user_id',
    ];

    protected $hidden = [
        
    ];
	//Tabla de la base de datos que referencia
	protected $table = 'restaurant';
}

