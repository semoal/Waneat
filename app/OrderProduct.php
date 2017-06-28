<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model{
   protected $fillable = [
	'id_product_id', 
	'id_user_id', 
    ];

    protected $hidden = [
        
    ];
    
	protected $table = 'order_product';
}