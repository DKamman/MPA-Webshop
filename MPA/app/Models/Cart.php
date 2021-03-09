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

    // public function add($item, $id) {
    //     $storedItem = ['qty' => 0, 'price' => $item->price, 'item' => $item];
    //     if ($this->items) {
    //         if (array_key_exists($id, $this->items)) {
    //             $storedItem = $this->items[$id];
    //         }
    //     }
    //     $storedItem['qty']++;
    //     $storedItem['price'] = $item->price * $storedItem['qty'];
    //     $this->items[$id] = $storedItem;
    //     $this->totalQty++;
    //     $this->totalPrice += $item->price;
    // }

    public function add($product, $amount) {
        $storedItem = ['qty' => 0, 'price' => $product->price, 'item' => $product];
        if ($this->items) {
            if (array_key_exists($product->id, $this->items)) {
                $storedItem = $this->items[$product->id];
                $storedItem['qty'] += $amount;
            } else {
                $storedItem['qty'] = $amount;
            }
        }
        $storedItem['price'] = $product->price * $storedItem['qty'];
        $this->items[$product->id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $product->price;
    }
    
    public function remove($id) {
        if (array_key_exists($id, $this->items)) {
            unset($this->items[$id]);
        }
    }
}
