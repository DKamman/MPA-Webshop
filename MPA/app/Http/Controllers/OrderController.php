<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Cart;
use Illuminate\Http\Request;

class OrderController extends Controller
{

   public function placeOrder(Request $request)
   { 
 
    if (Auth::user() != NULL) {
        if ($request->session()->get('cart')) {
            $orderId;
            // $cart = $request->session()->get('cart')->items;
            $cart = Cart::getCart()->items;

            //Creates Order, saves ID
            $newOrder = Order::create([
                'user_id' => auth()->id(),
            ]);
            $orderId = $newOrder->id;

            foreach ($cart as $item) {
                OrderProduct::create([
                    'order_id' => $orderId,
                    'product_id' => $item['item']['id'],
                    'quantity' => $item['qty'],
                    'price' => $item['price']
                ]);
            }
        }
        Cart::forgetCart();
        return redirect()->route('cart.index');
    } else {
       return redirect()->route('register');
    }
   }

   public function showOrders()
   {
        if (Auth::user() != NULL) {
            $orders = Auth::user()->orders;
            $orderNum = 1;
            return view('order.index', [
                'orders' => $orders,
                'orderNum' => $orderNum
            ]);
        } else {
            return redirect()->route('home.index');
        }
    }
}