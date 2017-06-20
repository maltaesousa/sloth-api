<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
