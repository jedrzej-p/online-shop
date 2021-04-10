<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderPosition;
use App\Models\OrderAddress;
use App\Models\Transport;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $order = new Order;
        $order->doc_number      = 'test';
        $order->value           = session()->get('cart.total');
        $order->is_paid         = '0';
        $order->user_id         = Auth::check() ? Auth::id() : null;
        $order->transport_id    = $request->transport;
        $order->save();
        
        $order_id = $order->id;

        $order_address = new OrderAddress;
        $order_address->order_id = $order_id;
        $order_address->name = $request->input('name');
        $order_address->surname = $request->surname;
        $order_address->phone = $request->phone;
        $order_address->email = $request->email;
        $order_address->address = $request->address;
        $order_address->town = $request->town;
        $order_address->postal_code = $request->postal_code;
        $order_address->post = $request->post;
        $order_address->save();

        $positions = session()->get('cart.items');

        // zapis pozycji zamówienia do bazy danych
        foreach( $positions as $position ) {
            $order_position = new OrderPosition;
            $order_position->order_id = $order_id;
            $order_position->product_id = $position->product_id;
            $order_position->amount = $position->amount;
            $order_position->unit_price = $position->unit_price;
            $order_position->save();
        }
    }
    public function index()
    {
        $transports = Transport::get();
        return view('order.data')->with(['transports' => $transports]);
    }
}
