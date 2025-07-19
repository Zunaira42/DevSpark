<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image,
                "description" => $product->description
            ];
        }

        session()->put('cart', $cart);

         if (request()->ajax()) {
        return response()->json(['status' => 'success', 'message' => 'Added to cart']);
    }



        return redirect()->route('cart.index')->with('success', 'Added to cart!');
    }

    public function index()
    {
        return view('app.cart');
    }
    public function updateQuantity(Request $request)
{
    $itemKey = $request->item_key;
    $quantity = $request->quantity;

    $cart = session()->get('cart', []);

    if (isset($cart[$itemKey])) {
        $cart[$itemKey]['quantity'] = $quantity;
        session()->put('cart', $cart);

        return response()->json(['success' => true, 'message' => 'Quantity updated']);
    }

    return response()->json(['success' => false, 'message' => 'Item not found']);
}

}
