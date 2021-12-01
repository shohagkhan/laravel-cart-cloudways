<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    // cart index
    public function cart()
    {
        // dd(session('cartItems'));
        return view('cart.cart');
    }
    // add to cart with session
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);

        $cartItems = session()->get('cartItems', []);

        if (isset($cartItems[$id])) {
            $cartItems[$id]['quantity']++;
        } else {
            $cartItems[$id] = [
                "image_path" => $product->image_path,
                "name" => $product->name,
                "brand" =>  $product->brand,
                "details" => $product->details,
                "price" => $product->price,
                "quantity" => 1
            ];
        }

        session()->put('cartItems', $cartItems);
        return redirect()->back()->with('success', 'Product added to cart!');
    }
    // remove cart
    public function removeFromCart(Request $request)
    {
        $id = $request->id;
        if ($id) {
            $cartItems = session()->get('cartItems');
            if (isset($cartItems[$id])) {
                unset($cartItems[$id]);
                session()->put('cartItems', $cartItems);
            }
            return redirect()->back()->with('success', 'Product removed from cart!');
        }
    }
}
