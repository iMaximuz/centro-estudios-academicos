<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = "users";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function avatar() {
        return $this->belongsTo('App\Avatar');
    }

    public function posts() {
        return $this->hasMany('App\Publication');
    }

    public function comments() {
        return $this->hasMany('App\Comment');
    }

    public function save(array $options = array())
    {
        if(empty($this->id)) {
            $this->avatar_id = rand(1, 15);
        }
        return parent::save($options);
    }
}
