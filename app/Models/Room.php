<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function rents()
    {
        return $this->hasMany('App\Rent');
    }


}
