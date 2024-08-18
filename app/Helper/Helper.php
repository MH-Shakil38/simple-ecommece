<?php

use App\Models\Setting;

if (!function_exists('siteInfo')){
    function siteInfo(){
        return \App\Models\Setting::query()->latest()->first();
    }
}

if (!function_exists('menu_categoris')){
    function menu_categoris(){
        return \App\Models\Category::query()->where('show_menu',1)->get();
    }
}

if (!function_exists('categories')){
    function categories(){
        return \App\Models\Category::query()->where('status',1)->latest()->get();
    }
}

if (!function_exists('slider')){
    function slider(){
        return \App\Models\SliderImage::query()->where('status',1)->latest()->get();
    }
}

if (!function_exists('hot_deal')){
    function hot_deal(){
        return \App\Models\Product::query()->where('status',1)->where('show_hot_deal',1)->latest()->get();
    }
}

if (!function_exists('products')){
    function products(){
        return \App\Models\Product::query()->where('status',1)->latest()->paginate(28);
    }
}

if (!function_exists('discount_calculate')){
    function discount_calculate($price,$offer){
        $result =  $offer / 100 * $price;
        return round($price - $result);
    }
}

if (!function_exists('return_policy')){
    function return_policy(){
        return \App\Models\ReturnPolicy::query()->first();

    }
}

if (!function_exists('delivery_policy')){
    function delivery_policy(){
        return \App\Models\DeliveryPolicy::query()->first();

    }
}


if (!function_exists('related_product')){
    function related_product($id){
        return \App\Models\Product::query()->where('category_id',$id)->latest()->paginate(28);

    }
}

if (!function_exists('about_us')){
    function about_us(){
        return \App\Models\AboutUs::query()->first();

    }
}

if (!function_exists('thumbnail')){
    function thumbnail($image){
        $placeholder = asset('thumbnail.webp');
        if ($image == "" || $image == null){
            return $placeholder;
        }

        $headers = @get_headers($placeholder);
        $isImageAvailable = $headers && strpos($headers[0], '200');
        return $isImageAvailable ? $image : $placeholder;

    }
}

if (!function_exists('setting')){
    function setting(){
       return Setting::query()->first();
    }
}


if (!function_exists('cartCheck')){
    function cartCheck($product_id,$stock_id){
        $key = $product_id . 'stock' . $stock_id;
        if (isset(session()->get('cart')[$key])) {
            return true;
        }
        return false;
    }
}



?>
