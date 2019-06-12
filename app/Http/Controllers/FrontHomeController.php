<?php

namespace App\Http\Controllers;

use App\HomePhoto;
use Illuminate\Http\Request;

class FrontHomeController extends Controller
{
    public function index()
    {
        return view('website.home')->with('photos', HomePhoto::all());
    }


}
