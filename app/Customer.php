<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['logo', 'url'];


    protected $uploads = 'public/uploads/customers/';

    public function getLogoAttribute($logo)
    {
        return $this->uploads . $logo;
    }
}
