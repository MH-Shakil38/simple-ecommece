<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class BlogCategoryController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = BlogCategory::query()->orderBy('id','DESC')->get();
        return view('admin.blog.category',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $data = $request->all();
            $data['slug'] = Str::slug($request->name.Str::random( 16));
            BlogCategory::query()->create($data);
            DB::commit();
            return redirect()->route('blog-categories.index')->with(['success'=>'successfully Category added']);

        }catch (\Throwable $e){
            DB::rollBack();
            dd(
                $e->getPrevious(),
                $e->getMessage(),
                $e->getCode(),
                $e->getLine(),
                $e->getFile(),
            );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(BlogCategory $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogCategory $category)
    {
        $data['category'] = $category;
        $data['categories'] = BlogCategory::query()->orderBy('id','DESC')->get();
        return view('admin.blog.category')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogCategory $category)
    {

        try {
            DB::beginTransaction();
            $data = $request->all();
            $data['slug'] = Str::slug($request->name.Str::random( 16));
            $category->update($data);
            DB::commit();
            return redirect()->route('categories.index')->with(['success'=>'successfully Category Updated']);

        }catch (\Throwable $e){
            DB::rollBack();
            dd(
                $e->getPrevious(),
                $e->getMessage(),
                $e->getCode(),
                $e->getLine(),
                $e->getFile(),
            );
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogCategory $id)
    {
        if ($id) {
            File::delete($id->image);
            $id->delete();
            Session::flash('status','Data Successfully Deleted');
            return redirect()->back();

        }
    }
}
