<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'nif','email', 'password', 'address', 'contact_phone', 'id_table_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the restaurants de users
     */
    public function restaurants(){
        return $this->hasMany('App\Restaurant', 'id_user_id');
    }
    /**
     * Get device user de un usuario
     */
    public function deviceUser(){
        return $this->hasMany('App\DeviceUser', 'id_user_id');
    }

    public function ratings(){
      return $this->hasMany('App\RestaurantRating', 'id_user_id');
    }

    public function comments(){
      return $this->hasMany('App\RestaurantComment', 'id_user_id');
    }

    public function table(){
      return $this->belongsTo('App\RestaurantTable')
    }




}
