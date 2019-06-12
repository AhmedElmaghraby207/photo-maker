<?php

namespace App\Http\Controllers;

use App\Category;
use App\Photo;
use Faker\Provider\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class PhotosController extends Controller
{
    public function index()
    {
        $photos = Photo::all();

        return view('admin.photos.index', compact('photos'));
    }


    public function create()
    {
        $categories = Category::all();

        return view('admin.photos.create', compact('categories'));
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'url' => 'required',
            'category_id' => 'required',
        ]);

        $url = $request->url;
        $url_new_name = time() . $url->getClientOriginalName();
        $url->move('public/uploads/images', $url_new_name);

        Photo::create([
            'url' => $url_new_name,
            'category_id' => $request->category_id,
        ]);
        Session::flash('success', 'تم إضافة الصورة بنجاح');
        return redirect()->route('photos.index');
    }


    public function edit($id)
    {
        //
        $photo = Photo::findOrFail($id);
        $categories = Category::all();
        return view('admin.photos.edit', compact('photo', 'categories'));
    }


    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $the_photo = Photo::findOrFail($id)->first();

        if($request->hasFile('url'))
        {
//            $this->validate($request, [
//                'url' => 'image|mimes:jpg,png'
//            ]);

            $photo = $request->url;
            //Storage::disk('publicPath')->put($phot,$phot->getClientOriginalName());
            $photo_new_name = time() . $photo->getClientOriginalName();
            $photo->move('public/uploads/images', $photo_new_name);
//            dd( $photo->move('public/uploads/photos', $photo_new_name));
            $the_photo->url = $photo_new_name;

        }


        $the_photo->category_id = $request->category_id;
        $the_photo->save();

        Session::flash('info', 'تم تعديل الصورة بنجاح');
        return redirect()->route('photos.index');
    }



    public function destroy($id)
    {
        $photo = Photo::findOrfail($id);


        $photo->delete();
        Session::flash('error', 'تم حذف الصورة بنجاح');
        return redirect()->route('photos.index');
    }


}
