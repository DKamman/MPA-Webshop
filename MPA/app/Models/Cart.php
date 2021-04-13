<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct()
    {
        $prevCart = Session::has('cart') ? Session::get('cart') : null; 

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
        $newTotalPrice = $product->price * $amount;
        $this->items[$product->id] = $storedItem;
        $this->totalQty += $amount;
        $this->totalPrice += $newTotalPrice;
    }
    
    public function remove($id) {
        if (array_key_exists($id, $this->items)) {
            $item = $this->items[$id];
            $item;
            $this->totalQty -= $item['qty'];
            $this->totalPrice -= $item['price'];
            unset($this->items[$id]);
        }
    }

    public function update($id, $amount) {
        if (array_key_exists($id, $this->items)) {
            $item = $this->items[$id];
            if ($amount == 0) {
                $this->remove($id);
                return;
            } 
            if ($amount > $item['qty']) {
                $previousPrice = $item['price'];
                $previousQty = $item['qty'];
                $newPrice = $item['item']['price'] * $amount;
                
                $item['price'] = $newPrice;
                $item['qty'] = $amount;

                $newTotalQty = $amount - $previousQty;
                $newTotalPrice = $newPrice - $previousPrice;
                $this->totalPrice += $newTotalPrice;
                $this->totalQty += $newTotalQty;
                $this->items[$id] = $item;
            }
            if ($amount < $item['qty']) {
                
                $previousPrice = $item['price'];
                $previousQty = $item['qty'];
                $newTotalQty = $previousQty - $amount;

                $newPrice = $item['item']['price'] * $amount; 
                $item['price'] = $newPrice;

                $newTotalPrice = $previousPrice - $newPrice;

                $item['qty'] = $amount;

                $this->totalPrice -= $newTotalPrice;
                $this->totalQty -= $newTotalQty;
                $this->items[$id] = $item;
            }
        }
    }

    public function getItems() {
      return $this->items;  
    }

    public function forgetCart() {
        $items = null;
        Session::forget('cart');
    }

}
