<?php

namespace App\Http\Controllers;

use App\About;
use App\Customer;
use Illuminate\Http\Request;

class FrontAboutController extends Controller
{
    public function index()
    {
        return view('website.about')
                                        ->with('about', About::all())
                                        ->with('customers', Customer::all());
    }
}
