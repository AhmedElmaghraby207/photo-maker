<?php

namespace App\Http\Controllers;

use App\Options;
use App\Order;
use App\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        $options = Options::all();
        $packages = Package::all();

        return view('admin.orders.index', compact('orders', 'options', 'packages'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'activity' => 'required',
            'phone' => 'required',
            'email' => 'required',

        ]);



        if($request->file('file'))
        {
            $file = $request->file;
            $file_new_name = time() . $file->getClientOriginalName();
            $file->move('public/uploads/files', $file_new_name);

            $orders = Order::create([
                'name' => $request->name,
                'activity' => $request->activity,
                'phone' => $request->phone,
                'email' => $request->email,
                'file' => 'uploads/files/' . $file_new_name,
            ]);

            $orders->options()->attach($request->options);



            if (App::isLocale('ar'))
                {Session::flash('success', 'تم إرسال الطلب بنجاح');}
            else
                {Session::flash('success', 'Your order sent successfully');}

            Mail::send('emails.reply', ['name' => $orders->name], function ($message)
            {
                $message->to(Order::orderBy('created_at', 'decs')->first()->email, 'Photo Maker')->from('photo.maker@example.com')->subject('Welcome');
            });

            return redirect()->back();

        }
        else
        {
            $orders = Order::create([
                'name' => $request->name,
                'activity' => $request->activity,
                'phone' => $request->phone,
                'email' => $request->email,
            ]);

            $orders->options()->attach($request->options);

            if (App::isLocale('ar'))
                {Session::flash('success', 'تم إرسال الطلب بنجاح');}
            else
                {Session::flash('success', 'Your order sent successfully');}

            Mail::send('emails.reply', ['name' => $orders->name], function ($message)
            {
                $message->to(Order::orderBy('created_at', 'decs')->first()->email, 'Photo Maker')->from('photo.maker@example.com')->subject('Welcome');
            });
            return redirect()->back();
        }


    }

    public function show($id)
    {
        $order = Order::findOrFail($id);
        $packages = Package::all();
        $options = Options::all();

        return view('admin.orders.show', compact('order', 'packages', 'options'));
    }


    public function destroy($id)
    {
        $order = Order::findOrFail($id);

        $order->delete();

        Session::flash('error', 'تم حذف الطلب بنجاح');
        return redirect()->back();
    }


    public function send($id)
    {
        $order = Order::findOrFail($id);

        $data = array( 'email' => $order->email, 'name' => $order->name,
            'from' => 'photo.maker@example.com');

        Mail::send( 'emails.reply', $data, function( $message ) use ($data)
        {
            $message->to( $data['email'] )->from( $data['from'],
                $data['name'] )->subject( 'Welcome!' );
        });


        Session::flash('success', 'تم إرسال الرسالة للعميل بنجاح');
        return redirect()->route('orders.index');
    }
}
