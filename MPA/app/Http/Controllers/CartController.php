<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function addToCart(Product $product) 
    {
        //find product
        dd($product);

        //add product to cart
        // $product = Product::find($id);

    }
}
