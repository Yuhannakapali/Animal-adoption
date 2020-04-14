<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    public $table ="images";

    protected $fillable = [
        'name',
        'location'
    ];

    public function pet(){
        return $this->belongsto('App\pet');
    }
    public function post(){
        return $this->belongsto('App\post');
    }
}
