<?php

namespace App;

class Location extends Model
{
    public function locatable()
    {
      return $this->morphTo();
    }
}
