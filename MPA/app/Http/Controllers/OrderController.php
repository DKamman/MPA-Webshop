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
        $cart = new Cart();
        $items = $cart->items;

        if ($items != null && $items.count() > 0) {
            $newOrder = Order::create([
                'user_id' => auth()->id(),
            ]);

            if ($newOrder->id != null) {
                foreach ($items as $item) {
                    OrderProduct::create([
                        'order_id' => $newOrder->id,
                        'product_id' => $item['item']['id'],
                        'quantity' => $item['qty'],
                        'price' => $item['price']
                    ]);
                }
            }
            $cart->forgetCart();
        }
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