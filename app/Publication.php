<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{

    protected $table = "publication";

    protected $fillable = ['title', 'message'];

    public function author(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }

    public function rating(){
        return $this->belongsToMany('App\Publication_rate');
    }

    public function content_file(){
        return $this->belongsTo('App\Content_file');
    }
}
