<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $carts = Cart::where('user_id', Auth::user()->id)->get();
        $item = Cart::where('user_id', Auth::user()->id)->count();
        
        return view('cart.index', compact('carts', 'item'));
    }

    public function store(Request $request)
    {
        $carts = Cart::where('user_id', Auth::user()->id)->get();
        $c = [];
        foreach($carts as $cart ){
            array_push($c, $cart->produk_id);
        }
        if (in_array($request->produk_id, $c)) {
            $a = Cart::where('user_id', Auth::user()->id)->where('produk_id', $request->produk_id)->get();
            if ($a->isNotEmpty()) {
                foreach ($a as $b) {
                    $cr = Cart::find($b->id);
                    $cr->qty = $cr->qty + 1;
                    $cr->save();
                }
            }
        }
        else{
        Cart::create([
            'user_id'=> Auth::user()->id,
            'produk_id'=>$request->produk_id,
            'qty' => 1,
        ]);
        }
        return redirect('/cart');
        }
    public function update(Request $request, $id)
    {
        $carts = Cart::find($id);
        $carts->qty = $request->qty;
        $carts->save();

        return redirect()->route('cart.index')->with('success', 'Cart updated successfully.');
    }
    public function removeCart($produk_id)
    {
        $item = Session::get('cart', []);

        if (array_key_exists($produk_id, $item)) {
            unset($item[$produk_id]);
            Session::put('cart', $item);
        }

        return redirect()->route('cart.index');
    }

    public function clearAllCart()
    {
        Cart::clear();

        session()->flash( 'success' , 'All Item Cart Clear Successfully!' );

        return redirect()->route( 'cart.list' );
    }
    
}