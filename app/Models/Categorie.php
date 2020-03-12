<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function user() 
    {
        return $this->belongsTo('App\Models\User');
    }
}
