<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\DeliveryPolicy;
use App\Models\Product;
use App\Models\Stock;
use App\Service\CartService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CardController extends Controller
{
    public function add_card(Request $request,CartService $cartService)
    {
        $cart = $cartService->addProductToCart();
        $carts = session()->get('cart');
        $html_cart = view('website.version1.componant.ajax-cart',compact('carts'))->render();
        $view = view('website.version1.componant.quick-view',compact('carts'))->render();
        $name =  Product::findOrFail($request->product_id)->name;
        if($request->ajax()){
            return response()->json(['success' => 'Product Added into Cart','cart'=>$cart,'html_cart'=>$html_cart,'view'=>$view,'name'=>$name]);
        }else{
            return redirect()->route('cart')->with('success', 'Product added to cart successfully!');
        }
    }

    public function quickView(Request $request) {
        $type = 1;
        $id = $request->product_id;
        $product = Product::find($id);
        $quickView = view('website.version1.componant.quick-view',compact('type','product'))->render();
        return response()->json(['success' => 'Product quick view','view'=>$quickView]);
    }

    public function sizePrice(Request $request)
    {
        $sizePrice = Stock::query()->findOrFail($request->sizeId);
        $price = discount_calculate($sizePrice->price,$sizePrice->offer);
        if($request->ajax()){
            return response()->json(['success' => 'Product Added into Cart','size'=>$sizePrice,'price'=>$price]);
        }
    }

    public function minus_card(Request $request)
    {

        if ($request->ajax()){
            if ($request->has('delivery_cost')){

                $cost = DeliveryPolicy::query()->first();
                if(Session::get('shipping_cost') == 70){
                    Session::forget('shipping_cost');
                    $delivery_cost = $cost->outside_dhaka;
                    Session::put('shipping_cost',$cost->outside_dhaka);
                }else{
                    Session::forget('shipping_cost');
                    $delivery_cost = $cost->inside_dhaka;
                    Session::put('shipping_cost',$cost->inside_dhaka);
                }
                session()->put('shipping_cost',$delivery_cost);
                return response()->json(['data'=>$delivery_cost]);
            }
        }
        // $id = $request->id;
        // $product = Product::findOrFail($id);

        // $cart = session()->get('cart', []);

        // if(isset($cart[$id]) && $cart[$id]['qty'] >= 1 ) {
        //     $cart[$id]['qty']--;
        // } else {
        //     $cart[$id] = [
        //         "name" => $product->name,
        //         "qty" => 1,
        //         "price" => $product->selling_price,
        //         "image" => $product->image,
        //         "id"    => $product->id
        //     ];
        // }

        // session()->put('cart', $cart);
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

    public function remove($id,$stock_id)
    {

        if(isset($id) && isset($stock_id)) {
            $cart = session()->get('cart');
            if(isset($cart[$id.'stock'.$stock_id])) {
                unset($cart[$id.'stock'.$stock_id]);
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
