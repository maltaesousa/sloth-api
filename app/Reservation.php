<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public function user()
    {
      return $this->belongsTo('App\User');
    }

    public function resource()
    {
      return $this->belongsTo('App\Resource');
    }
}
