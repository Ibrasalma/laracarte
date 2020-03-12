<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Droit extends Model
{
    public function users() 
    {
        return $this->hasMany('App\Models\User');
    }
}
