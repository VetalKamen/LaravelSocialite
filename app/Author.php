<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['name', 'username'];

    public function book(){
        return $this->hasMany('App\Book');
    }
}
