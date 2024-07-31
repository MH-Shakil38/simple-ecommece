<?php

namespace App\Service;

use App\Models\Product;
use App\Models\Stock;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Nette\Utils\Random;

class ProductService
{
    public function store()
    {
        $data = request()->except(['size', 'price', 'offer', 'stock']);

        $request = request();
        $data['slug'] = Str::slug($request->name);
        $data['product_code'] = 'p-' . Random::generate(4);
        if ($image = $request->file('image')) {
            $logo = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move('product', $logo);
            $data['image'] = 'product/' . $logo;
        }
        $store = Product::query()->create($data);
        self::stockStore($store);
        return $store;
    }



    public function stockStore($store)
    {
        $data = request()->all();

        foreach ($data['size'] as $key => $info) {
            $price = $data['price'][$key];
            $offer = $data['offer'][$key];
            $stock = $data['stock'][$key];
            $stock = Stock::create([
                'product_id' => $store->id,
                'size' => $info,
                'price' => $price,
                'offer' => $offer,
                'in_stock' => $stock,
            ]);
            $name = substr($store->name,0,3);
            $stock->update(['product_code' => $name.'-'.$stock->id.'-'.$stock->size.'-'.$store->category->name]);
        }
        return true;
    }


    public function update($product)
    {
        $data = request()->except(['size', 'price', 'offer', 'stock']);
        $request = request();
        $data['slug'] = Str::slug($request->name);
        $data['product_code'] = 'p-' . Random::generate(4);
        if ($image = $request->file('image')) {
            $logo = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move('product', $logo);
            $data['image'] = 'product/' . $logo;
        }
        $update =  $product;
        $product->update($data);
        self::stockUpdate($update);
        return true;
    }

    public function stockUpdate($product)
    {
        $data = request()->all();
        foreach ($data['size'] as $key => $info) {
            if ($info != null) {
                $price = $data['price'][$key];
                $offer = $data['offer'][$key];
                $stock = $data['stock'][$key];
                // dd(isset($data['stock_id'][1]));
                if(isset($data['stock_id'][$key])){
                    $stockId = $data['stock_id'][$key];
                    $stock_id = Stock::query()->find($stockId);

                }else{
                    $stock_id = null;
                }
                if ($stock_id !=null) {
                    $stock_id->update([
                        'product_id' => $product->id,
                        'size' => $info,
                        'price' => $price,
                        'offer' => $offer,
                        'in_stock' => $stock,
                    ]);
                } else {
                    $stock_id = Stock::create([
                        'product_id' => $product->id,
                        'size' => $info,
                        'price' => $price,
                        'offer' => $offer,
                        'in_stock' => $stock,
                        'product_code' => $stock,
                    ]);
                }

            }
        }
        return true;
    }
}
