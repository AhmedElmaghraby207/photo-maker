<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    public function index()
    {
        $admin = User::first();
        return view('admin.profile.index', compact('admin'));
    }


    public function edit($id)
    {
        $admin = User::findOrFail($id);
        return view('admin.profile.edit', compact('admin'));
    }


    public function update(Request $request, $id)
    {


        $admin = User::findOrFail($id);

        if($request->hasFile('image'))
        {
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
                'image' => 'image',
            ]);

            $image = $request->image;
            $image_new_name = time() . $image->getClientOriginalName();
            $image->move('public/uploads/admin', $image_new_name);
            $admin->image = $image_new_name;
        }

        if ($request->input('password'))
        {
            $admin->password = bcrypt($request->password);
        }

        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->save();

        Session::flash('info', 'تم تعديل الصفحة الشخصية بنجاح');
        return redirect()->route('profile.index');
    }
}
