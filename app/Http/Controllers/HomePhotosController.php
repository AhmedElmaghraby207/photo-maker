<?php

namespace App\Http\Controllers;

use App\HomePhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomePhotosController extends Controller
{
    public function index()
    {
        $photos = HomePhoto::all();
        return view('admin.home_photos.index', compact('photos'));
    }


    public function create()
    {
        return view('admin.home_photos.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'photo' => 'required|image',
        ]);

        $photo = $request->photo;
        $photo_new_name = time() . $photo->getClientOriginalName();
        $photo->move('public/uploads/homePhotos', $photo_new_name);

        HomePhoto::create([
            'photo' => $photo_new_name,
        ]);

        Session::flash('success', 'تم إضافة الصورة بنجاح');
        return redirect()->route('homePhotos.index');


    }


    public function destroy($id)
    {
        $photo = HomePhoto::findOrFail($id);
        $photo->delete();

        Session::flash('error', 'تم حذف الصورة بنجاح');
        return redirect()->back();
    }
}
