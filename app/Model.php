<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    // TODO: rajouter user_id quand l'auth est en place
    protected $guarded = [];
}
