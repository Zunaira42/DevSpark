<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Surfsidemedia\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function index()
    {
        $items = Cart::instance('cart')->content();
        return view('app.cart', compact('items'));
    }
    public function add_to_cart(Request $request)
    {
        $product = Product::findOrFail($request->product_id);

        Cart::instance('cart')->add(
            $product->id,
            $product->name,
            1,
            $product->price
        )->associate(\App\Models\Product::class);

        return response()->json(['message' => 'Product added to cart']);
    }
}
