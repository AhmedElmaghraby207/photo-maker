<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Join extends Model
{
    protected $fillable = ['email'];

    protected $table = 'joins';
}
