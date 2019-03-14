<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function rooms()
    {
        return $this->belongsTo('App\Models\Room');
    }

}
