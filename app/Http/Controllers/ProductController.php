<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Nette\Utils\Random;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['products'] = Product::query()->with('category')->latest()->get();
        return view('admin.product.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['categories'] = Category::query()->where('status','=','1')->latest()->pluck('name','id');
        return view('admin.product.form')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $data = $request->all();
            $data['slug'] = Str::slug($request->name);
            $data['product_code'] = 'p-'.Random::generate(4);
            if ($image = $request->file('image')) {
                $logo = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move('product', $logo);
                $data['image'] = 'product/' . $logo;
            }

            $store = Product::query()->create($data);

            DB::commit();
            return redirect()->back()->with('success','Product successfully inserted');
        }catch (\Throwable $e) {
            DB::rollBack();
            dd(
                $e->getFile(),
                $e->getMessage(),
                $e->getCode(),
                $e->getPrevious(),
            );
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::query()->where('status',1)->latest()->pluck('name','id');
        return view('admin.product.form',compact(['product','categories']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        try {
            DB::beginTransaction();
            $data = $request->all();
            $data['slug'] = Str::slug($request->name);
            $data['product_code'] = 'p-'.Random::generate(4);
            if ($image = $request->file('image')) {
                $logo = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move('product', $logo);
                $data['image'] = 'product/' . $logo;
            }

            $product->update($data);

            DB::commit();
            return redirect()->route('products.index')->with('success','Product successfully Updated');
        }catch (\Throwable $e) {
            DB::rollBack();
            dd(
                $e->getFile(),
                $e->getMessage(),
                $e->getCode(),
                $e->getPrevious(),
            );
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
