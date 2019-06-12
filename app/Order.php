<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['name', 'activity', 'phone', 'email', 'file'];


//    protected $uploads = 'public/uploads/files/';
//
//    public function getFileAttribute($file)
//    {
//        return $this->uploads . $file;
//    }


    public function options()
    {
        return $this->belongsToMany('App\Options');
    }

}
