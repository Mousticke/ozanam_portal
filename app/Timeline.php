<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function post(){
        return $this->belongsTo('App\Post');
    }

    public function menu(){
        return $this->belongsTo('App\Menu');
    }

    public function carousel(){
        return $this->belongsTo('App\Carousel');
    }

    public function faicon(){
        return $this->belongsTo('App\Faicon');
    }
}
