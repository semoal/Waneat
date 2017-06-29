<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderUserRestaurant extends Model{
   protected $fillable = [
	'total_price', 
	'iva', 
	'payment_method', 
	//'id_user_id', 
    ];

    protected $hidden = [
        
    ];
    
	protected $table = 'order_user_restaurant';
}