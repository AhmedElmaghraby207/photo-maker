<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['logo', 'icon'];


    protected $uploads = 'public/uploads/logo_icon/';

    public function getLogoAttribute($logo)
    {
        return $this->uploads . $logo;
    }

    public function getIconAttribute($icon)
    {
        return $this->uploads . $icon;
    }
}
