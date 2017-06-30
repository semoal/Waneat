<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bills extends Model{
   protected $fillable = [
      'id_user_id',
      'id_order_id',
      'total_price',
      'iva',
      'restaurant_name',
      'bill_url'
    ];

    protected $hidden = [

    ];

	protected $table = 'restaurant_bills';

  public function user(){
    return $this->belongsTo('App\User');
  }

  public function order(){
    return $this->belongsTo('App\OrderUserRestaurant');
  }

  }
}
