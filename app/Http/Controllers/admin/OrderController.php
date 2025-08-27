<?php

namespace App\Http\Controllers\admin;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::orderby('created_at', 'DESC')->paginate(10);
        return view('admin/order.index', compact('orders'));
    }
    public function create()
    {
        return view('admin.order.create');
    }
    public function show($id)
    {
        $orders = Order::findorfail($id);
        return view('admin/order.index', compact('orders'));
    }

    // public function store(Request $request)
    // {


    //     $order = Order::create([
    //         'user_id' => Auth::id(),
    //         'total_price' => $request->total_price,
    //         'status' => 'pending', // ya jo default status chahiye
    //     ]);

    //     return redirect()->route('orders.index')->with('success', 'Order created successfully.');
    // }
}
