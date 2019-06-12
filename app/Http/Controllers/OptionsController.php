<?php

namespace App\Http\Controllers;

use App\Options;
use App\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OptionsController extends Controller
{
    public function index()
    {
        $options = Options::all();

        return view('admin.orders.options.index', compact('options'));
    }


    public function create()
    {
        $options = Options::all();
        $packages = Package::all();

        return view('admin.orders.options.create', compact('options', 'packages'));
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'name_ar' => 'required',
            'name_en' => 'required',
            'package_id' => 'required'
        ]);

        Options::create([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'package_id' => $request->package_id
        ]);
        Session::flash('success', 'تم الاضافة بنجاح');
        return redirect()->route('options.index');
    }


    public function edit($id)
    {
        //
        $option = Options::findOrFail($id);
        $packages = Package::all();
        return view('admin.orders.options.edit', compact('option', 'packages'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name_ar' => 'required',
            'name_en' => 'required',
            'package_id' => 'required'
        ]);

        $option = Options::findOrFail($id);

        $option->name_ar = $request->name_ar;
        $option->name_en = $request->name_en;
        $option->package_id = $request->package_id;
        $option->save();

        Session::flash('info', 'تم التعديل بنجاح');
        return redirect()->route('options.index');
    }



    public function destroy($id)
    {
        $option = Options::findOrfail($id);

        $option->delete();
        Session::flash('error', 'تم الحذف بنجاح');
        return redirect()->route('options.index');
    }


}
