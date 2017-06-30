<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderMenu extends Model{
   protected $fillable = [
	'id_menu_id',
	'id_order_id',
  'id_user_id'
    ];

    protected $hidden = [

    ];

	protected $table = 'order_menu';

  public function order(){
    return $this->belongsTo('App\OrderUserRestaurant');

  public function user(){
    return $this->belongsTo('App\User');
  }
}
