<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    public function index() 
    {
            $categories = Category::all();
            return view('categories.index', ['categories' => $categories]);
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