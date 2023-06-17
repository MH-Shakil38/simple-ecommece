<?php

namespace App\Http\Controllers;

use App\Models\ReturnPolicy;
use Illuminate\Http\Request;

class ReturnPolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['policy'] = ReturnPolicy::query()->first();
        return view('admin.policy.return-policy')->with($data);
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
        ReturnPolicy::query()->create($request->all());
        return redirect()->route('return-policy.index')->with('success','Return Policy Saved');
    }

    /**
     * Display the specified resource.
     */
    public function show(ReturnPolicy $returnPolicy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ReturnPolicy $returnPolicy)
    {
        $data['policy'] = $returnPolicy;
        return view('admin.policy.return-policy')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ReturnPolicy $returnPolicy)
    {
        $returnPolicy->update($request->all());
        return redirect()->route('return-policy.index')->with('success','Return Policy Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ReturnPolicy $returnPolicy)
    {
        //
    }
}
