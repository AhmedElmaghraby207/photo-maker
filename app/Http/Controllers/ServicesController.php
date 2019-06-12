<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'title_ar' => 'required',
            'description_ar' => 'required',
            'title_en' => 'required',
            'description_en' => 'required',
        ]);

        Service::create([
            'title_ar' => $request->title_ar,
            'description_ar' => $request->description_ar,
            'title_en' => $request->title_en,
            'description_en' => $request->description_en,
        ]);

        Session::flash('success', 'تم محتوى جديد بنجاح');
        return redirect()->route('services.index');


    }


    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.services.edit', compact('service'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title_ar' => 'required',
            'description_ar' => 'required',
            'title_en' => 'required',
            'description_en' => 'required',
        ]);

        $service = Service::findOrFail($id);

        $service->title_ar = $request->title_ar;
        $service->description_ar = $request->description_ar;
        $service->title_en = $request->title_en;
        $service->description_en = $request->description_en;

        $service->save();

        Session::flash('info', 'تم تعديل محتوى خدماتنا بنجاح');
        return redirect()->route('services.index');
    }


    public function destroy($id)
    {
        $service = Service::findOrFail($id);

        $service->delete();

        Session::flash('error', 'تم حذف المحتوى بنجاح');
        return redirect()->back();
    }

}
