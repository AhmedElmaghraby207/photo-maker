<?php

namespace App\Http\Controllers;

use App\Info;
use App\Options;
use App\Package;
use Illuminate\Http\Request;

class FrontContactController extends Controller
{
    public function index()
    {

        return view('website.contact')
                                            ->with('packages', Package::all())
                                            ->with('options', Options::all())
                                            ->with('info', Info::first());


    }
}
