<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Access extends Model
{
    /**
     * Relation
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function color(){
        return $this->belongsTo('App\Color');
    }
}
