<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    public function commentaire_notes() 
    {
        return $this->hasMany('App\Models\CommentaireNote');
    }
    public function user() 
    {
        return $this->belongsTo('App\Models\User');
    }
}
