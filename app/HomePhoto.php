<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomePhoto extends Model
{
    protected $fillable = ['photo'];

    protected $uploads = 'public/uploads/homePhotos/';

    public function getPhotoAttribute($photo)
    {
        return $this->uploads . $photo;
    }
}
