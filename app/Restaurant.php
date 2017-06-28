<?php

/**
* Modelo de Restaurante 
* Fecha: 28/06/2017
* Contiene todos los campos que tiene un restaraurante
*/

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model{

	//Tabla de la base de datos que referencia
	protected $table = 'restaurant';
}
