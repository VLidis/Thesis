<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    public function house()
    {
        return $this->hasMany('App\House');
    }
}
