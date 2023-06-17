<?php

namespace App\Http\Controllers;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Session;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::query()->orderBy('id','DESC')->get();
        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        try {
            DB::beginTransaction();
            $data = $request->all();
            $data['slug'] = Str::slug($request->name.Str::random( 16));
            Category::query()->create($data);
            DB::commit();
            return redirect()->route('categories.index')->with(['success'=>'successfully Category added']);

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
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $data['category'] = $category;
        $data['categories'] = Category::query()->orderBy('id','DESC')->get();
        return view('admin.category.index')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
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
    public function destroy(Category $id)
    {
        if ($id) {
            File::delete($id->image);
            $id->delete();
            Session::flash('status','Data Successfully Deleted');
            return redirect()->back();

        }
    }
}
