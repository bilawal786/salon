<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::orderby('created_at', 'DESC')->where('status', '0')->get();
        return view('admin.order.index', compact('orders'));
    }
    public function complete(){
        $orders = Order::orderby('created_at', 'DESC')->where('status', '2')->get();
        return view('admin.order.index', compact('orders'));
    }
    public function view($id){
        $order = Order::find($id);
        return view('admin.order.view', compact('order'));
    }
    public function status($id){
        $order = Order::find($id);
        $order->status = '2';
        $order->update();
        $notification = array(
            'messege' => 'Ajouté avec succès!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
