<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    public function reservations()
    {
      return $this->hasMany('App\Reservation');
    }

    public function location()
    {
      return $this->belongsTo('App\Location');
    }
}
