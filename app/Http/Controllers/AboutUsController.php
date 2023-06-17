<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['about'] = AboutUs::query()->first();
        return view('admin.about.about-us')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        AboutUs::query()->create($request->all());
        return redirect()->route('about-us.index')->with('successfully About Saved');
    }

    /**
     * Display the specified resource.
     */
    public function show(AboutUs $aboutUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AboutUs $aboutUs)
    {
        $data['about'] = $aboutUs;
        return view('admin.about.about-us')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AboutUs $id)
    {
        AboutUs::query()->findOrFail($request->id)->update($request->all());
        return redirect()->route('about-us.index')->with('successfully About Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutUs $aboutUs)
    {
        //
    }
}
