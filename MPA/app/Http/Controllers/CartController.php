<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart($id) 
    {
        var_dump('Toegevoegd aan Winkelwagen');
        var_dump($id);
    }
}
