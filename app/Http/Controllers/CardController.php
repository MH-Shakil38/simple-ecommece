<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CardController extends Controller
{
    public function add_card(Request $request)
    {
        $id = $request->id;
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['qty']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "qty" => 1,
                "price" => $product->selling_price,
                "image" => $product->image,
                "id"    => $product->id
            ];
        }

        session()->put('cart', $cart);
        return redirect()->route('checkout')->with('success', 'Product added to cart successfully!');

    }

    public function minus_card(Request $request)
    {

        if ($request->ajax()){
            if ($request->has('delivery_cost')){
                Session::forget('shipping_cost');
                session()->put('shipping_cost',$request->delivery_cost);
                return response()->json(['data'=>$request->delivery_cost]);
            }
        }
        $id = $request->id;
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id]) && $cart[$id]['qty'] >= 1 ) {
            $cart[$id]['qty']--;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "qty" => 1,
                "price" => $product->selling_price,
                "image" => $product->image,
                "id"    => $product->id
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');

    }

    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["qty"] = $request->qty;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
            return redirect()->back();
        }
    }

    public function card_clear()
    {
        Session::flush();
        return redirect()->route('/')->with('success','Successfully Card Clear');
    }

}
