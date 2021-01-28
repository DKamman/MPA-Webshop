<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    public function index() 
    {
        if ($_GET) {
            $products = Product::where('category_id', $_GET['category'])->get();
            $category = Category::where('id', $_GET['category'])->get();
            return view('categories.show', [
                'category' => $category,
                'products' => $products
                ]);
        } else {
            $categories = Category::all();
            return view('categories.index', ['categories' => $categories]);
        }
    }

    public function show($id)
    {
        //
    }
}