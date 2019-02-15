<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    //
    public function person()
    {
        return $this->belongsTo('App\Person');
    }
    public function rooms()
    {
        return $this->belongsTo('App\Room');
    }

}
