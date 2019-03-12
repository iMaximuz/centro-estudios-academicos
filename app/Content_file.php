<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content_file extends Model
{
    public $table = "content_file";
    // MASS ASSIGNMENT -------------------------------------------------------
    // define which attributes are mass assignable (for security)
    // we only want these 3 attributes able to be filled
    protected $fillable = array('url');

    public function post() {
        return $this->hasOne('App\Post');
    }
}
