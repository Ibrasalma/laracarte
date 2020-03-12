<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    public function tag() 
    {
        return $this->belongsToMany('App\Models\Tag');
    }
    public function topic() 
    {
        return $this->belongsTo('App\Models\Topic');
    }
}
