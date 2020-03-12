<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Check admin role
     *
     * @return bool
     */
    public function isAdmin()
    {
        return $this->role->id_droit=="admin";
    }

    /**
     * Check not user role
     *
     * @return bool
     */
    public function isNotUser()
    {
        return $this->role->slug != 'user';
    }

    /**
     * One to Many relation
     *
     * @return Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function topics() 
    {
        return $this->hasMany('App\Models\Topic');
    }
    public function droits() 
    {
        return $this->hasMany('App\Models\Droit');
    }
    public function topic_notes() 
    {
        return $this->hasMany('App\Models\TopicNote');
    }
    public function tags() 
    {
        return $this->hasMany('App\Models\Tag');
    }
    public function categories() 
    {
        return $this->hasMany('App\Models\categorie');
    }
    public function commentaire_notes() 
    {
        return $this->hasMany('App\Models\CommentaireNote');
    }
    public function commentaires() 
    {
        return $this->hasMany('App\Models\Commentaire');
    }
    public function droits() 
    {
        return $this->belongsTo('App\Models\Droit');
    }
}
