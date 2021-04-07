<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;

class OrderController extends Controller
{

   public function order(Request $request)
   { 
 
    if (Auth::user() != NULL) {
        if ($request->session()->get('cart')) {
            $orderId;
            $cart = $request->session()->get('cart')->items;

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
    } else {
       return redirect()->route('register');
    }

    //    $request->session()->forget('cart');
    //    return redirect()->route('shop.index');
   }

   public function showOrder($id)
   {
       $order = Order::find($id);

       if ($order !== null && Auth::user()->id == $order->user_id || Auth::user()->is_admin){
           return view('admin.order.show',[
               'order'=>$order,
               'cart'=>unserialize($order->cart),
               ]);
       }

       return redirect()->route('main.index');
   }

}