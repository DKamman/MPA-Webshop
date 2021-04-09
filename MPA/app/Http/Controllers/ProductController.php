<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $numbers = [21.99, 14];

        return view('product.index', 
        [
            'products' => $products,
            'numbers' => $numbers
        ]);
    }

    public function getDetail(Product $id)
    {

        $product = $id;
        return view('product.detail', 
        [ 
            'product' => $product
        ]);
    }
}
