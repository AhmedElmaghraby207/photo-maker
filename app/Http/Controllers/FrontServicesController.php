<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class FrontServicesController extends Controller
{
    public function index()
    {
        return view('website.services')->with('services', Service::all());
    }
}
