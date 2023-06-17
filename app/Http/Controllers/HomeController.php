<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\TmpOrder;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['orders'] = TmpOrder::query()->with('customer')->latest()->get()->unique('customer_id');
        return view('admin.dashboard')->with($data);
    }
}
