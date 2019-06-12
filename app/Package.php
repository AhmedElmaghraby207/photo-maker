<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = ['name_ar', 'name_en'];

    public function options()
    {
        return $this->hasMany('App\Options');
    }
}
