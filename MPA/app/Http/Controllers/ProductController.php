<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = \App\Models\Product::all();

        return view('product.index', ['products' => $products]);
    }

    public function show($id)
    {
        $products = Product::where('category_id', $id)->get();
        $category = Category::where('id', $id)->get();
        return view('categories.show', [
            'category' => $category,
            'products' => $products
            ]);        
    }
}
