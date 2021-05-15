<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderItems;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function doCheckout (Request $request) {

        // make The Order

        if($request->hasAny('grand_total')){
            return redirect()->back();
        }

      $order =  Order::create([
           'grand_total' => $request->total,
           'item_count' => $request->quantity,
           'is_paid' => 0,
           'user_id' => Auth::user()->id,
           'order_number' => Auth::user()->id,

        ]);

        /*dd($order->id,
           $request->product_id,
           $request->quantity,
           $request->price,
        );*/

        OrderItems::create([

            'order_id'   => $order->id,
          //  'product_id' => $request->product_id,
            'quantity'   => $request->quantity,
            'price'      => $request->price,
        ]);



        return redirect()->route('paypal.checkout', $order->id);
    }
}
