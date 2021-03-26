<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'cart',
        'user_id'
    ];

    //Order ID
    public $orderId;
    public $orderItems = [];
    public $productKeys;

    public function __construct($request) {

        $cart = $request->session()->get('cart')->items;
        $productKeys = array_keys($cart);

        // Creates Order, saves ID
        // $order = Order::create([
        //     'user_id' => $user->id,
        // ]);
        // $orderId = $order->id;
    }

    public function getCartItems() {

        // ID's
        foreach ($productKeys as $item) {
            echo $item;
        }

        //Amount and Price
        foreach ($cart as $item) {
            echo $item['qty'];
            echo $item['price'];
        } 

        // Possible solution for getting Item
        // foreach($this->productKeys as $item) {
        //     if (array_key_exists($item, $this->productKeys)) {
        //         echo $item['qty'] . ', ' . $item['price'] . '</br>';
        //     }
        // }
    }

    public function getKeys() {
        foreach ($this->productKeys as $id) {
            echo $id . ", ";
        }
    }
}
