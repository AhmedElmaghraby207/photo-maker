<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['url', 'category_id'];


    protected $uploads = 'public/uploads/images/';

    public function getUrlAttribute($url)
    {
        return $this->uploads . $url;
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
