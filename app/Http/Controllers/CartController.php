<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\OrderPosition;
use Illuminate\Support\Str;

class CartController extends Controller
{
    public function index()
    {                
        $total = 0;
        $cartItems = array();

        // iteracja po elementach koszyka 
        // wyliczenie sumy
        if ( session()->exists('cart') ) {
            $cartItems = session('cart.items');
            foreach ( session('cart.items') as $orderPosition ) 
            {
                $total += $orderPosition->amount * $orderPosition->unit_price;
            }
            session()->put('cart.total', $total);
        }
        return view('cart.index')->with(['cartItems' => $cartItems, 'total' => $total]);
    }
    public function store(Request $request)
    {
        if ( !session()->exists('cart') ) {
            session(['cart' => array( 'items' => array(), 'total' => 0 )]);
        }
        // dodanie towaru do koszyka
        // zapisanie go w sesji
        // zapisanie tylko ID produktu, bo podczas zapisu pozycji do bazy jest błąd
        $product_id = $request->input('product_id');
        $product = Product::where( ['is_active' => true, 'id' => $product_id] )->first();
        $id = $product->id;
        $order = session()->get("cart.items.$id");
        if ($order) {
            if ( $product->amount < $request->input('amount') + $order->amount ) {
                return redirect()->route('cart.index')->with( 'message', 'Podano większą ilość niż stan magazynowy produktu.' );
            }
            else {
                $order->amount = $request->input('amount') + $order->amount;
            }
        }
        else {
            if ( $product->amount < $request->input('amount')) {
                return redirect()->route('cart.index')->with( 'message', 'Podano większą ilość niż stan magazynowy produktu' );
            }
            $orderPosition              = new OrderPosition;
            $orderPosition->product_id  = $product->id;
            $orderPosition->amount      = $request->input('amount');
            $orderPosition->unit_price  = $product->price;
            $orderPosition->product   = $product;
            session()->put("cart.items.$id", $orderPosition);
        } 
        return redirect()->back()->with([ "message" => "Produkt dodany do koszyka" ]);
    }
    public function update(Request $request, $id)
    {
        if ( !session()->exists('cart') ) 
        {
            return redirect()->route('cart.index');
        } else {
            $orderPosition = session()->get("cart.items.$id");
            $quantity = $request->input('amount') >= 1 ? $request->input('amount') : $orderPosition->amount;
            if ( $orderPosition->product->amount < $quantity ) 
            {
                return redirect()->route('cart.index')->with( 'message', 'Podano większą ilość niż stan magazynowy produktu' );
            }
            $orderPosition->amount = $request->input('amount') >= 1 ? $request->input('amount') : $orderPosition->amount;
            return redirect()->route('cart.index');
        }

    }
    public function destroy($id)
    {
        session()->forget("cart.items.$id");
        if ( count( session()->get('cart.items') ) === 0 ) {
            session()->forget('cart');
        }
        return redirect()->route('cart.index')->with( 'message', 'Usunięto produkt z koszyka' );
    }
}
