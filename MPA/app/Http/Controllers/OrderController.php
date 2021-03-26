<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

   public function order(Request $request)
   {

    $user = Auth::user(); 
 
    if ($user != NULL) {
        if ($request->session()->get('cart')) {
            $order = new Order($request);
            $order->getKeys();        
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