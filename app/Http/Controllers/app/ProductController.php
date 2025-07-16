<?php

namespace App\Http\Controllers\app;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::where('stock', true)->with('category')->get();
         $categories = Category::all();

        return view('app.index', compact('products','categories'));
    }

    public function show($id)
    {
        $product = Product::where('stock', true)->findOrFail($id);
        return view('app.index.show', compact('product'));
    }
}
