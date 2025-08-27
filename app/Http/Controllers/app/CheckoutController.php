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

        $total = 0;
        $validItems = [];

        // Loop through the cart array
        foreach ($cart as $cartCollection) {
            // Check if it's a Collection with cart items
            if ($cartCollection instanceof \Illuminate\Support\Collection) {
                // Loop through each CartItem in the collection
                foreach ($cartCollection as $cartItem) {
                    $productId = $cartItem->id;
                    $price = floatval($cartItem->price);
                    $quantity = intval($cartItem->qty);

                    if (!$productId || $price <= 0 || $quantity <= 0) {
                        Log::info('Skipping invalid item:', [
                            'productId' => $productId,
                            'price' => $price,
                            'quantity' => $quantity
                        ]);
                        continue;
                    }

                    $validItems[] = [
                        'product_id' => $productId,
                        'price' => $price,
                        'quantity' => $quantity,
                        'total' => $price * $quantity,
                    ];

                    $total += $price * $quantity;
                }
            }
        }

        if (empty($validItems)) {
            Log::error('No valid items found in cart', ['cart' => $cart]);
            return redirect()->back()->with('error', 'No valid items found in cart.');
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
