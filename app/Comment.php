<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $table = "comment";

    protected $fillable = ['message'];

    public function author(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function publication(){
        return $this->belongsTo('App\Publication');
    }

    public function rating(){
        return $this->hasMany('App\Comment_rate');
    }
}
