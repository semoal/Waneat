<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestaurantSchedule extends Model{
   protected $fillable = [
    	'id',
    	'id_restaurant_id',
    	'open',
      'hour1',
      'hour2',
      'hour3',
      'hour4',
    ];

    protected $hidden = [

    ];

	protected $table = 'restaurant_schedule';

  public function restaurant(){
    return $this->belongsTo('App\Restaurant')
  }

}
