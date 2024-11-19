<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Service\ProductService;
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
        // Product::query()->update(['show_hot_deal'=>0]);
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
    public function store(Request $request,ProductService $productService)
    {
        try {
            DB::beginTransaction();
            $product = $productService->store();
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
    public function update(Request $request, Product $product,ProductService $productService)
    {
        try {
            DB::beginTransaction();
            $product = $productService->update($product);
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
        $product->delete();
        return redirect()->route('products.index')->with('success','Product successfully deleted');
    }
}
