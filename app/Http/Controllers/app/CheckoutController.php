<?php
namespace App\Http\Controllers\app;

use App\Models\Product;
use App\Models\Checkout;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    public function index($id)
    {
        $product = Product::findOrFail($id);
        return view('app.checkout', compact('product'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('app.checkout', compact('product'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:checkouts,email',
            'phone_num' => 'required|string|max:20',
            'address' => 'required|string|max:500',
            'payment_method' => 'required|in:card,paypal',
            'city' => 'required|string',
            'state' => 'required|string|max:100',
            'zip' => 'required|string|max:10',
        ]);

        Checkout::create($validated);

        return redirect()->route('thank-you')->with('success', 'Order placed successfully!');
    }
}
