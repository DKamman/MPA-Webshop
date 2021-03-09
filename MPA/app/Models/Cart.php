<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($prevCart)
    {
        if ($prevCart) {
            $this->items = $prevCart->items;            
            $this->totalQty = $prevCart->totalQty;
            $this->totalPrice = $prevCart->totalPrice;
        }
    }

    public function add($product, $amount) {
        $storedItem = ['qty' => 0, 'price' => $product->price, 'item' => $product];
        if ($this->items) {
            if (array_key_exists($product->id, $this->items)) {
                $storedItem = $this->items[$product->id];
            }
        }
        $storedItem['qty'] += $amount;
        $storedItem['price'] = $product->price * $storedItem['qty'];
        $this->items[$product->id] = $storedItem;
        $this->totalQty += $amount;
        $this->totalPrice += $product->price;
    }
    
    public function remove($id) {
        if (array_key_exists($id, $this->items)) {
            $item = $this->items[$id];
            $item;
            $this->totalQty -= $item['qty'];
            $this->totalPrice -= $item['price'];
            unset($this->items[$id]);
            // if ($this->totalQty == 0) {          // If all shopping cart items are removed, the cart session should be set to null
            //     Session::forget('cart');
            // } 
        }
    }
}
