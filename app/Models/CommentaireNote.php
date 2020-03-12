<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommentaireNote extends Model
{
    public function commentaire() 
    {
        return $this->belongsTo('App\Models\Commentaire');
    }
    public function user() 
    {
        return $this->belongsTo('App\Models\User');
    }
}
