<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faicon extends Model
{
    public function user ()
    {
        return $this->belongsTo('App\User');
    }

    public function timeline()
    {
        return $this->hasMany('App\Timeline');
    }
}
