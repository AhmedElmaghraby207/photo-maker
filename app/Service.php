<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['title_ar', 'description_ar', 'title_en', 'description_en',];
}
