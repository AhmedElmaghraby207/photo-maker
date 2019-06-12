<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PackagesController extends Controller
{
    public function index()
    {
        $packages = Package::all();
        return view('admin.orders.packages.index', compact('packages'));
    }


    public function create()
    {
        return view('admin.orders.packages.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name_ar' => 'required',
            'name_en' => 'required',
        ]);

        Package::create([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
        ]);

        Session::flash('success', 'تم إضافة المجموعة بنجاح');
        return redirect()->route('packages.index');


    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $package = Package::findOrFail($id);
        return view('admin.orders.packages.edit', compact('package'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name_ar' => 'required',
            'name_en' => 'required',
        ]);

        $package = Package::findOrFail($id);

        $package->name_ar = $request->name_ar;
        $package->name_en = $request->name_en;

        $package->save();
        Session::flash('info', 'تم تعديل المجموعة بنجاح');
        return redirect()->route('packages.index');
    }


    public function destroy($id)
    {
        $package = Package::findOrFail($id);

        $package->delete();

        Session::flash('error', 'تم حذف المجموعة بنجاح');
        return redirect()->back();
    }
}
