<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout(){
        session()->put('shipping_cost',70);
        return view('website.version1.checkout');
        return view('website.pages.checkout');
    }
}
