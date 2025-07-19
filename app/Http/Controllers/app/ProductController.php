<?php

namespace App\Http\Controllers\app;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function products()
    {
        $products = Product::where('stock', true)->with('category')->get();

        return view('app.product', compact('products'));
    }

    public function show($id)
    {
        $products = Product::where('stock', true)->findOrFail($id);
        return view('app.product', compact('products'));
    }
}
