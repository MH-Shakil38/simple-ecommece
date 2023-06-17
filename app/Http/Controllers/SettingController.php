<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['settings'] = Setting::query()->latest()->first();
        return view('admin.setting.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.setting.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $data = $request->all();
            if ($image = $request->file('logo')) {
                $logo = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move('site_logo', $logo);
                $data['logo'] = 'site_logo/' . $logo;
            }
            Setting::query()->create($data);

            DB::commit();
            return redirect()->route('settings.index')->with('success','successfully setting inserted');
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
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {
        $data['setting'] = $setting;
        return view('admin.setting.form')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Setting $setting)
    {
        try {
            DB::beginTransaction();
            $data = $request->all();
            if ($image = $request->file('logo')) {
                $logo = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move('site_logo', $logo);
                $data['logo'] = 'site_logo/' . $logo;
            }
            $setting->update($data);

            DB::commit();
            return redirect()->route('settings.index')->with('success','successfully setting inserted');
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
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
