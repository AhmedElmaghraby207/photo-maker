<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CustomersController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('admin.customers.index', compact('customers'));
    }


    public function create()
    {
        return view('admin.customers.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'logo' => 'required|image',
            'url' => 'required|url'
        ]);

        $logo = $request->logo;
        $logo_new_name = time() . $logo->getClientOriginalName();
        $logo->move('public/uploads/customers', $logo_new_name);

        Customer::create([
            'logo' => $logo_new_name,
            'url' => $request->url
        ]);

        Session::flash('success', 'تم إضافة العميل بنجاح');
        return redirect()->route('customers.index');


    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('admin.customers.edit', compact('customer'));
    }


    public function update(Request $request, $id)
    {

        $customer = Customer::findOrFail($id);

        if($request->hasFile('logo'))
        {
            $this->validate($request, [
                'logo' => 'image',
                'url' => 'required|url'
            ]);

            $logo = $request->logo;
            $logo_new_name = time() . $logo->getClientOriginalName();
            $logo->move('public/uploads/customers', $logo_new_name);
            $customer->logo = $logo_new_name;
        }

        $customer->url = $request->url;
        $customer->save();
        Session::flash('info', 'تم تعديل العميل بنجاح');
        return redirect()->route('customers.index');


    }


    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);

        $customer->delete();

        Session::flash('error', 'تم حذف العميل بنجاح');
        return redirect()->back();
    }
}
