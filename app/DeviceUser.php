<?php
/**
* Modelo del dispositivo del usuario 
* Fecha: 28/06/2017
* Contiene todos los campos debemos tener del usuario (móvil)
*/

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeviceUser extends Model{
   protected $fillable = [
	'phone', 
	'token', 
	'latitud', 
	'longitud', 
	'id_user_id', 
    ];

    protected $hidden = [
        
    ];
    
	protected $table = 'device_user';
}

