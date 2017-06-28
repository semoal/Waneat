<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestaurantProduct extends Model{
   protected $fillable = [
	'price_product', 
	'name_product', 
	'id_restaurant_id', 
    ];

    protected $hidden = [
        
    ];
    
	protected $table = 'restaurant_product';
}