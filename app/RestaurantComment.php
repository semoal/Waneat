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
}