<?php

namespace App;

class Location extends Model
{
    public function resources()
    {
        return $this->hasMany('App\Resource');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
