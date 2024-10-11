<?php

namespace App\Http\Controllers;

use App\Models\DeliveryPolicy;
use Illuminate\Http\Request;

class DeliveryPolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['policy'] = DeliveryPolicy::query()->first();
        return view('admin.policy.delivery-policy')->with($data);
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
        DeliveryPolicy::query()->create($request->all());
        return redirect()->route('delivery-policy.index')->with('success','Delivery Policy Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(DeliveryPolicy $deliveryPolicy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DeliveryPolicy $deliveryPolicy)
    {
        $data['policy'] = DeliveryPolicy::query()->first();
        return view('admin.policy.delivery-policy')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DeliveryPolicy $deliveryPolicy)
    {

        $deliveryPolicy->update($request->all());
        return redirect()->route('delivery-policy.index')->with('success','Delivery Policy Added');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DeliveryPolicy $deliveryPolicy)
    {
        //
    }
}
