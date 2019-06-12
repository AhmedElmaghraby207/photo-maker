<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name_ar', 'name_en', 'cover'];


    protected $uploads = 'public/uploads/categories/';

    public function getCoverAttribute($cover)
    {
        return $this->uploads . $cover;
    }


    public function photos()
    {
        return $this->hasMany('App\Photo');
    }
}
