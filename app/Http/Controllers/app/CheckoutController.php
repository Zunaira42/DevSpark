<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('app.checkout');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone_num' => 'required|string|max:20',
            'address' => 'required|string|max:500',
            'payment_method' => 'required',
            'city' => 'required|string',
            'state' => 'required|string|max:100',
            'zip' => 'required|string|max:10',
        ]);

        $cart = session('cart');
        if (!$cart || count($cart) === 0) {
            return redirect()->back()->with('error', 'Your cart is empty.');
        }

        if ($cart instanceof \Illuminate\Support\Collection) {
            $cart = $cart->toArray();
        }

        $total = 0;
        $validItems = [];

        foreach ($cart as $item) {
            $productId = $item['id'] ?? $item['product_id'] ?? null;
            $price = floatval(preg_replace('/[^\d.]/', '', $item['price'] ?? 0));
            $quantity = intval($item['quantity'] ?? 1);

            if (!$productId || $price <= 0 || $quantity <= 0) continue;

            $validItems[] = [
                'product_id' => $productId,
                'price' => $price,
                'quantity' => $quantity,
                'total' => $price * $quantity,
            ];

            $total += $price * $quantity;
        }


        $order = Order::create([
            'user_id' => Auth::id(),
            'total_price' => $total,
            'status' => 'pending',
        ]);

        foreach ($validItems as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item['product_id'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);
        }

        Checkout::create([
            'order_id' => $order->id,
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone_num' => $validated['phone_num'],
            'address' => $validated['address'],
            'payment_method' => $validated['payment_method'],
            'city' => $validated['city'],
            'state' => $validated['state'],
            'zip' => $validated['zip'],
        ]);
        session()->forget('cart');
        return redirect()->route('thank-you')->with('success', 'Order placed successfully!');
    }
}
