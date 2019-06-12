<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::all();
        return view('admin.about.index', compact('about'));
    }


    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('admin.about.edit', compact('about'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'details_ar' => 'required',
            'details_en' => 'required'
        ]);

        $about = About::findOrFail($id);
        $about->details_ar = $request->details_ar;
        $about->details_en = $request->details_en;
        $about->save();

        Session::flash('info', 'تم تعديل من نحن بنجاح');
        return redirect()->route('about.index');
    }
}
