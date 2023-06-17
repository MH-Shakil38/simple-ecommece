<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout(){
        session()->get('shipping_cost',70);
        return view('website.pages.checkout');
    }
}
