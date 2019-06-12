<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class FrontGalleryController extends Controller
{
    public function index()
    {
        return view('website.gallery')->with('categories', Category::all());
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('website.category', compact('category'));
    }
}
