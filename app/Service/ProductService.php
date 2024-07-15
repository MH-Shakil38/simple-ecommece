<?php

namespace App\Service;

use App\Models\Product;
use App\Models\Stock;
use Illuminate\Support\Str;
use Nette\Utils\Random;

class ProductService
{
    public function store(){
        $data = request()->all();
        $request = request();
        $data['slug'] = Str::slug($request->name);
        $data['product_code'] = 'p-'.Random::generate(4);
        if ($image = $request->file('image')) {
            $logo = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move('product', $logo);
            $data['image'] = 'product/' . $logo;
        }
        $store = Product::query()->create($data);
        self::stockStore($store);
        return $store;
    }

    public function stockStore($store){
        $data = request()->all();
        foreach ($data['size'] as $key => $info) {
            $price = $data['price'][$key];
            $stock = Stock::create([
                'product_id' => $store->id,
                'size' => $info,
                'price' => $price,
            ]);
        }
        return true;
    }
}
