<?php

namespace App\Http\Controllers;

use App\Join;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class JoinsController extends Controller
{
    public function index()
    {
        $joins = Join::all();

        return view('admin.joins.index', compact('joins'));
    }




    public function create()
    {
        return view('website.contact');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email'
        ]);

        Join::create([
            'email' => $request->email
        ]);

        if (App::isLocale('ar'))
            {Session::flash('success' , 'تم اشتراكك معنا بنجاح');}
        else
            {Session::flash('success', 'You joined us successfully');}

        return redirect()->route('photo-maker-contact.index');
    }

    public function destroy($id)
    {
        $join = Join::findOrFail($id);

        $join->delete();

        Session::flash('error', 'تم حذف المشارك بنجاح');

        return redirect()->back();
    }
}
