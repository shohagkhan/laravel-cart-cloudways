<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // shop index
    public function index()
    {

        $products = Product::all();
        // dd($products);
        return view('shop.index', ['products' => $products]);
    }

    // shop show
    public function show($id)
    {
        $product = Product::FindOrFail($id);
        return view('shop.show', compact('product'));
    }
}
