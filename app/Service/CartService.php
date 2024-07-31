<?php

namespace App\Service;

use App\Models\Product;
use App\Models\Stock;
use Illuminate\Support\Str;
use Nette\Utils\Random;

class CartService
{
    public function addProductToCart(){
        $request = request();
        $id = $request->product_id;
        $stock_id = $request->stock_id;
        $qty = $request->qty;
        $product = Product::findOrFail($id);
        $size = Stock::findOrFail($stock_id);
        $cart = session()->get('cart', []);
        if(isset($cart[$id.'stock'.$stock_id])) {
            $cart[$id.'stock'.$stock_id]['qty'] = $qty;
            session()->put('cart', $cart);
            return true;
        } else {
            $cart[$id.'stock'.$stock_id] = [
                "name"  => $product->name,
                "qty"   => $qty,
                "price" => discount_calculate($size->price,$size->offer),
                "stock_id" => $stock_id,
                "size" => $size->size,
                "image" => $product->image,
                "id"    => $product->id
            ];
        }
        session()->put('cart', $cart);
        return false;
    }
}
