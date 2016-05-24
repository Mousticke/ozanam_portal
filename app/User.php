<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carousels ()
    {
        return $this->hasMany('App\Carousel');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts ()
    {
        return $this->hasMany('App\Post');
    }

    public function menus ()
    {
        return $this->hasMany('App\Menu');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function faicons ()
    {
        return $this->hasMany('App\Faicon');
    }
}
