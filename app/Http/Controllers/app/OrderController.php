<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $orders = Order::where('user_id', auth()->id())->with('items.product')->latest()->get();
        return view('app.order', compact('orders'));
    }

    public function store(Request $request)
    {
        $userId = auth()->id();
        Log::info('Current user ID: ' . $userId);

        if (!$userId) {
            return redirect()->back()->with('error', 'User not authenticated.');
        }

        $cart = session('cart');

        Log::info('Cart contents: ', ['cart' => $cart]);

        if (!$cart || count($cart) === 0) {
            return redirect()->back()->with('error', 'Cart is empty.');
        }

        $total = 0;
        $validItems = [];

        foreach ($cart as $index => $item) {
            Log::info("Processing cart item {$index}: ", ['item' => $item]);

            $productId = $item['id'] ?? $item['product_id'] ?? null;
            $price = $item['price'] ?? $item['product_price'] ?? 0;
            $quantity = $item['quantity'] ?? $item['qty'] ?? 1;

            if (!$productId) {
                Log::warning("Skipping item {$index}: No product ID found");
                continue;
            }

            if (is_string($price)) {
                $price = preg_replace('/[^\d.]/', '', $price);
            }
            $price = floatval($price);
            $quantity = intval($quantity);

            if ($price <= 0 || $quantity <= 0) {
                Log::warning("Skipping item {$index}: Invalid price ({$price}) or quantity ({$quantity})");
                continue;
            }

            $itemTotal = $price * $quantity;
            $total += $itemTotal;

            $validItems[] = [
                'product_id' => $productId,
                'price' => $price,
                'quantity' => $quantity,
                'total' => $itemTotal
            ];

            Log::info("Item {$index} processed: Price={$price}, Quantity={$quantity}, Total={$itemTotal}");
        }

        Log::info("Final total calculated: {$total}");
        Log::info("Valid items count: " . count($validItems));

        if (count($validItems) === 0) {
            return redirect()->back()->with('error', 'No valid items in cart.');
        }

        if ($total <= 0) {
            return redirect()->back()->with('error', 'Invalid cart total.');
        }

        $order = Order::create([
            'user_id' => $userId,
            'total_price' => $total,
            'status' => 'pending',
        ]);

        Log::info('Order created with ID: ' . $order->id);

        foreach ($validItems as $item) {
            $orderItem = OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item['product_id'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);

            Log::info('OrderItem created with ID: ' . $orderItem->id);
        }

        session()->forget('cart');
        return redirect()->route('order')->with('success', 'Order placed successfully.');
    }
}
