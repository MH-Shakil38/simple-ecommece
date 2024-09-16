<?php

namespace App\Http\Controllers;

use App\Models\SliderImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SliderImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['sliders'] = SliderImage::query()->latest()->get();
        return view('admin.slider-image.index')->with($data);
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
        $slider = $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg'
        ]);
        try {
            DB::beginTransaction();
            $data = SliderImage::query()->create($slider);

            if($image= $request->file('image')){
                $logo = time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
                $image->move('slider',$logo);
                $data->image  = 'slider/'.$logo;
            }

            if ($mobile = $request->file('mobile_slider')) {
                $m_slider = time() . '-' . uniqid() . '.' . $mobile->getClientOriginalExtension();
                $mobile->move('slider', $m_slider);
                $data->mobile_slider = 'slider/' . $m_slider;
            }
            $data->update();
            DB::commit();
            return redirect()->back()->with('success','Slider Successfully added');


        }catch (\Throwable $e){
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
    public function show(SliderImage $sliderImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SliderImage $sliderImage)
    {
        $data['sliders'] = SliderImage::query()->latest()->get();
        $data['slider'] = $sliderImage;
        return view('admin.slider-image.index')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SliderImage $sliderImage)
    {
        try {
            DB::beginTransaction();
            if ($image = $request->file('image')) {
                $logo = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move('slider', $logo);
                $sliderImage['image'] = 'slider/' . $logo;
            }

            if ($mobile= $request->file('mobile_slider')) {
                $logo = time() . '-' . uniqid() . '.' . $mobile->getClientOriginalExtension();
                $mobile->move('slider', $logo);
                $sliderImage['mobile_slider'] = 'slider/' . $logo;
            }
            $sliderImage['status'] = $request->status;
            $sliderImage->update();

            DB::commit();
            return redirect()->route('slider-image.index')->with('success', 'Slider Successfully added');


        } catch (\Throwable $e) {
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
    public function destroy(SliderImage $sliderImage)
    {
       $sliderImage->delete();
       return redirect()->back()->with('success','Slider image successfully deleted');
    }
}
