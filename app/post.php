<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    public $table = "posts";

    public function user(){
        return $this->belongsTo('App\user'); 
    }
    public function category(){
        return $this->hasone('App\category'); 
    }
    public function pet(){
        return $this->hasone('App\pet'); 
    }
    public function image(){
        return $this->hasone('App\image'); 
    }

}
