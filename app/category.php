<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public $table = "categorys";

    protected $fillable= [
        'name'
    ];

    public function pet(){
        return $this->belongsTo('App\pet');
    }
    public function post(){
        return $this->belongsTo('App\post');
    }
    
}
