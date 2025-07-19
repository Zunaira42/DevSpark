<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('admin/order.index', compact('orders'));
    }

    public function show($id)
    {
        $orders = Order::findorfail($id);
        return view('admin/order.edit', compact('orders'));
    }
}
