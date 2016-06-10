<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;


    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }

    public function isAdmin()
    {
        return in_array(1, $this->roles()->pluck('role_id')->all());
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carousel ()
    {
        return $this->hasMany('App\Carousel');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function post ()
    {
        return $this->hasMany('App\Post' );
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function access ()
    {
        return $this->hasMany('App\Access' );
    }

    public function link ()
    {
        return $this->hasMany('App\Link' );
    }

    public function menu ()
    {
        return $this->hasMany('App\Menu' );
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function faicon ()
    {
        return $this->hasMany('App\Faicon');
    }

    /**
     * Relation
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function timeline ()
    {
        return $this->morphMany('App\Timeline', 'user');
    }
}
