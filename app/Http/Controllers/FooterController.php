<?php

namespace App\Http\Controllers;

use App\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use function Sodium\compare;

class FooterController extends Controller
{
    public function index()
    {
        $footer = Footer::first();
        return view('admin.footer.index', compact('footer'));
    }

    public function edit($id)
    {
        $footer = Footer::findOrFail($id);
        return view('admin.footer.edit', compact('footer'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'rights_ar' => 'nullable|required',
            'rights_en' => 'nullable|required',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'google_plus' => 'nullable|url',
            'instagram' => 'nullable|url',
            'youtube' => 'nullable|url',
            'pinterest' => 'nullable|url',
            'google_drive' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'google_play' => 'nullable|url',
            'app_store' => 'nullable|url',
            'behance' => 'nullable|url',
            'vimeo' => 'nullable|url',
        ]);

        $footer = Footer::findOrFail($id);
        $footer->update($request->all());
        Session::flash('success', 'تم تعديل بيانات الفوتر بنجاح');
        return redirect()->route('footer.index');


    }
}
