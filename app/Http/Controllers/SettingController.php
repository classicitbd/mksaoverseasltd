<?php

namespace App\Http\Controllers;

use Image;
use Session;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;



class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Setting::find(1);
        return view('pages.backend.setting.setting_update', compact('settings'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if ($request->types != null && count($request->types) > 0) {
            foreach ($request->types as $type) {
                Setting::updateOrCreate(
                    ['name' => $type], // Search criteria
                    ['value' => $request->input($type)] // Data to update or create
                );
            }
        }

        // Setting Logo Update
        if ($request->file('site_logo')) {
            $logo = $request->file('site_logo');
            $logo_save = time() . $logo->getClientOriginalName();
            $logo->move('upload/setting/logo/', $logo_save);
            $save_url_logo = 'upload/setting/logo/' . $logo_save;
            $setting = Setting::where('name', 'site_logo')->first();
            if ($setting && file_exists($setting->value)) {
                unlink($setting->value);
            }
            Setting::updateOrCreate(
                ['name' => 'site_logo'],
                ['value' => $save_url_logo]
            );
        }

        // Setting Footer Logo Update
        if ($request->file('site_footer_logo')) {
            $logo = $request->file('site_footer_logo');
            $logo_save = time() . $logo->getClientOriginalName();
            $logo->move('upload/setting/logo/', $logo_save);
            $save_url_footer_logo = 'upload/setting/logo/' . $logo_save;
            $setting = Setting::where('name', 'site_footer_logo')->first();
            if ($setting && file_exists($setting->value)) {
                unlink($setting->value);
            }
            Setting::updateOrCreate(
                ['name' => 'site_footer_logo'],
                ['value' => $save_url_footer_logo]
            );
        }

        //Setting Favicon Update
        if ($request->file('site_favicon')) {
            $favicon = $request->file('site_favicon');
            $favicon_save = time() . $favicon->getClientOriginalName();
            $favicon->move('upload/setting/favicon/', $favicon_save);
            $save_url_favicon = 'upload/setting/favicon/' . $favicon_save;
            $setting = Setting::where('name', 'site_favicon')->first();
            if ($setting && file_exists($setting->value)) {
                unlink($setting->value);
            }
            Setting::updateOrCreate(
                ['name' => 'site_favicon'],
                ['value' => $save_url_favicon]
            );
        }

        Session::flash('success','Setting Updated Successfully');
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
