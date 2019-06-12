<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }


    public function create()
    {
        return view('admin.categories.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name_ar' => 'required',
            'name_en' => 'required',
            'cover' => 'required|image'
        ]);

        $cover = $request->cover;
        $cover_new_name = time() . $cover->getClientOriginalName();
        $cover->move('public/uploads/categories', $cover_new_name);

        Category::create([
            'cover' => $cover_new_name,
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
        ]);

        Session::flash('success', 'تم إضافة الالبوم بنجاح');
        return redirect()->route('categories.index');


    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name_ar' => 'required',
            'name_en' => 'required',
        ]);

        $category = Category::findOrFail($id);

        if($request->hasFile('cover'))
        {
            $this->validate($request, [
                'cover' => 'required|image'
            ]);

            $cover = $request->cover;
            $cover_new_name = time() . $cover->getClientOriginalName();
            $cover->move('public/uploads/categories', $cover_new_name);

            $category->cover = $cover_new_name;

        }
        $category->name_ar = $request->name_ar;
        $category->name_en = $request->name_en;

        $category->save();
        Session::flash('info', 'تم تعديل الالبوم بنجاح');
        return redirect()->route('categories.index');
    }


    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        $category->delete();

        Session::flash('error', 'تم حذف الالبوم بنجاح');
        return redirect()->back();
    }
}
