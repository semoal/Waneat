<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestaurantSchedule extends Model{
   protected $fillable = [
    	'id',
    	'id_restaurant_id',
    	'mon',
      'tue',
      'wed',
      'thr',
      'fri',
      'sat',
      'sun',
      '24h',
      'hour1',
      'hour2',
      'created_at',
      'updated_at'
    ];

    protected $hidden = [

    ];

	protected $table = 'restaurant_schedule';

  public function restaurant(){
    return $this->belongsTo('App\Restaurant');
  }

}
