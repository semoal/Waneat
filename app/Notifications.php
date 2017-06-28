<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notifications extends Model{
   protected $fillable = [
	'notification_type', 
	'msg', 
    ];

    protected $hidden = [
        
    ];
    
	protected $table = 'notification';
}
