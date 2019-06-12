<?php

namespace App\Http\Controllers;

use App\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class InfoController extends Controller
{
    public function index()
    {
        $info = Info::all();
        return view('admin.info.index', compact('info'));
    }


    public function edit($id)
    {
        $info = Info::findOrFail($id);
        return view('admin.info.edit', compact('info'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'phone' => 'required'
        ]);

        $info = Info::findOrFail($id);
        $info->email = $request->email;
        $info->phone = $request->phone;
        $info->save();

        Session::flash('info', 'تم تعديل معلومات الاتصال بنجاح');
        return redirect()->route('info.index');
    }
}
