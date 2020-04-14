<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pet extends Model
{
    public $table="pets";

    protected $fillable= [
        'name' => 'unknown',
        'location' => 'unknown'
    ];

    public function category(){
        return $this->hasMany('App\category');
    }
    public function image(){
        return $this->hasMany('App\image');
    }
    public function post(){
        return $this->belongsTo('App\post');
    }
}

