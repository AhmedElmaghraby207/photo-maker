<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Options extends Model
{
    protected $fillable = ['name_ar', 'name_en', 'package_id'];

    public function package()
    {
        return $this->belongsTo('App\Package');
    }


    public function orders()
    {
        return $this->belongsToMany('App\Order');
    }


}
