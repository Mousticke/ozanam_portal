<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * Relation
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Relation
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function timeline()
    {
        return $this->hasMany('App\Timeline');
    }

    public function color(){
        return $this->belongsTo('App\Color');
    }

    public function file_post(){
        return $this->hasMany('App\File');
    }

    public function link_post(){
        return $this->hasMany('App\Link');
    }
}
