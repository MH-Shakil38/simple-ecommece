<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['offers'] = Offer::query()->latest()->get();
        return view('admin.offer.index')->with($data);
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
        $request->validate([
            'min_price' => 'required',
            'status' => 'nullable',
            'offer_type' => 'nullable',
            'total_discount' => 'nullable|integer',
        ]);
        if($request->status == 1){
            Offer::query()->update(['status' => 0]);
        }
        Offer::query()->create($request->all());

        return redirect()->route('offers.index')->with('success', 'Offer updated successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Offer $offer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Offer $offer)
    {
        $data['offers'] = Offer::query()->latest()->get();
        $data['offer'] = $offer;
        return view('admin.offer.index')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Offer $offer)
    {
        $request->validate([
            'min_price' => 'nullable',
            'status' => 'nullable',
            'offer_type' => 'nullable',
            'total_discount' => 'nullable|integer',
        ]);
        if($request->status == 1){
            Offer::query()->update(['status' => 0]);
        }
        $offer->update($request->all());

        return redirect()->route('offers.index')->with('success', 'Offer updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Offer $offer)
    {
        $offer->delete();
        return redirect()->route('offers.index')->with('success', 'Offer deleted successfully.');
    }
}
