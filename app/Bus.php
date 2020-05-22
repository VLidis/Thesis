<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    public function house()
    {
    return $this->hasMany('App\House');
    }
}
