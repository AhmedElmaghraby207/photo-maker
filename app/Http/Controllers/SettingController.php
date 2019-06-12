<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::first();
        return view('admin.settings.index', compact('settings'));
    }

    public function edit($id)
    {
        $setting = Setting::findOrFail($id);
        return view('admin.settings.edit', compact('setting'));
    }

    public function update(Request $request, $id)
    {

        $setting = Setting::findOrFail($id);

        if($request->hasFile('logo'))
        {
            $this->validate($request, [
                'logo' => 'image|mimes:jpg,png',
            ]);

            $logo = $request->logo;
            $logo_new_name = time() . $logo->getClientOriginalName();
            $logo->move('public/uploads/logo_icon', $logo_new_name);
            $setting->logo = $logo_new_name;
        }

        if($request->hasFile('icon'))
        {
            $this->validate($request, [
                'icon' => 'image|mimes:jpg,png',
            ]);

            $icon = $request->icon;
            $icon_new_name = time() . $icon->getClientOriginalName();
            $icon->move('public/uploads/logo_icon', $icon_new_name);
            $setting->icon = $icon_new_name;
        }

        $setting->save();
        Session::flash('info', 'تم التعديل بنجاح');
        return redirect()->route('settings.index');


    }
}
