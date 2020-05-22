<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Metro extends Model
{
    public function house()
    {
        return $this->hasMany('App\House');
    }
}
