<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    public function topic_notes() 
    {
        return $this->hasMany('App\Models\TopicNote');
    }
    public function user() 
    {
        return $this->belongsTo('App\Models\User');
    }
}
