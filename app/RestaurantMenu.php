<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestaurantMenu extends Model{
   protected $fillable = [
	'menu_name', 
	'menu_price', 
	'id_restaurant_id', 
    ];

    protected $hidden = [
        
    ];
    
	protected $table = 'restaurant_menu';
}