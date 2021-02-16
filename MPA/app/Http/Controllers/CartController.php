<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;

class CartController extends Controller
{
    public function index()
    {
        if (Session::has('cart')) {
            $prevCart = Session::get('cart');
            $cart = new Cart($prevCart);
            return view('cart.index', 
        [
            'products' => $cart->items,
            'totalPrice' => $cart->totalPrice
        ]);
        } else {
            return view('cart.index');
        }
    }
    
    public function addToCart(Request $request, $id) 
    {
        $product = Product::find($id);
        $prevCart = Session::has('cart') ? Session::get('cart') : null; 
        $cart = new Cart($prevCart);
        $cart->add($product, $product->id);
        Session::put('cart', $cart);
        // dd(Session::get('cart'));
        return redirect()->route('category.show', $product->category_id);
    }

    public function deleteFromCart(Request $request, $id)
    {
        $prevCart = Session::get('cart');
        $cart = new Cart($prevCart);
        $cart->remove($id);
        // dd($cart);
        Session::put('cart', $cart);
        return redirect()->route('cart.index');
    }
}
