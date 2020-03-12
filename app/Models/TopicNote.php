<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TopicNote extends Model
{
    public function topic() 
    {
        return $this->belongsTo('App\Models\Topic');
    }
    public function user() 
    {
        return $this->belongsTo('App\Models\User');
    }
}
