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
        if ($request->session()->get('cart')) {
            $orderId;
            $cart = Cart::getCart()->items;

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