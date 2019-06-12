<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


class LanguagesController extends Controller
{
    public function getChangeLanguage($lang){
        if ($lang =='en' || $lang =='ar')
        {
            if (!\Session::has('language'))
            {
                \Session::put('language',$lang);
            }
            else
            {
                \Session::put('language',$lang);
            }
            return redirect()->back();
        }
        else
        {
            return redirect()->route('Dashboard');
        }
    }
}
