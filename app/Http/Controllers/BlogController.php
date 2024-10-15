<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['blogs'] = Blog::query()->latest()->get();
        return view('admin.blog.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['categories'] = BlogCategory::query()->latest()->pluck('name','id');
        return view('admin.blog.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            DB::beginTransaction();

            $info['image'] = $this->uploadImage($request->file('image'), 'blog/');
            $info['description'] = $request->description;
            $info['title'] = $request->title;
            $info['category_id'] = $request->category_id;
            Blog::query()->create($info);
            DB::commit();
            return redirect()->route('blogs.index')->with('successfully BLog Created');
        }catch(\Throwable $e){
            DB::rollBack();
            $this->ThrowError($e);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {

        $data['blog'] = $blog;
        $data['categories'] = BlogCategory::query()->latest()->pluck('name','id');
        return view('admin.blog.create')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        try{
            DB::beginTransaction();
            if ($request->file('image') != null) {
                $blog['image'] = $this->uploadImage($request->file('image'), 'blog/');
            }

            $blog['description'] = $request->description;
            $blog['title'] = $request->title;
            $blog['category_id'] = $request->category_id;
            $blog->update();
            DB::commit();
            return redirect()->route('blogs.index')->with('successfully BLog Update');
        }catch(\Throwable $e){
            DB::rollBack();
            $this->ThrowError($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
