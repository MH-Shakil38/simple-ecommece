<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class WebsiteController extends Controller
{
    public function category_ways_product($id){
        $data['products'] = Product::query()->where('status',1)->where('category_id',$id)->paginate(35);
        $data['category'] = Category::query()->findOrFail($id);

        return view('website.pages.category')->with($data);
    }

    public function all_hot_deal(){
        $data['products'] = Product::query()->where('status',1)->where('show_hot_deal',1)->paginate(35);
        $data['hotDeal'] = 'All Hot Deal';

        return view('website.pages.category')->with($data);
    }

    public function single_product($id){
        $data['product'] = Product::query()->findOrFail($id);
        return view('website.pages.single-product')->with($data);
    }
 public function about(){

        return view('website.pages.about-us');
    }
 public function return_policy(){
        return view('website.pages.return-policy');
    }
 public function delivery_policy(){
        return view('website.pages.delivery-policy');
    }



}
