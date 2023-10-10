<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function SettingsEdit()
    {
        $settings = Settings::find(1);
        return view('admin.settings.edit_settings', compact('settings'));
    }

    public function SettingsStore(Request $request)
    {

        $settings = Settings::find(1);
        $settings->site_title = $request->site_title;
        $settings->site_description = $request->site_description;
        $settings->site_keywords = $request->site_keywords;
        $settings->phone = $request->phone;
        $settings->email = $request->email;
        $settings->address = $request->address;
        $settings->whatsapp = $request->whatsapp;
        $settings->map = $request->map;


        if ($request->file('logo')) {
            $file = $request->file('logo');
            @unlink(public_path($settings->logo));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/logos'), $filename);
            $settings['logo'] = 'upload/logos/' . $filename;
        }

        if ($request->file('favicon')) {
            $file = $request->file('favicon');
            @unlink(public_path($settings->favicon));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/logos'), $filename);
            $settings['favicon'] = 'upload/logos/' .  $filename;
        }
       

        $settings->save();

        $notification = array(
            'message' => 'Genel Ayarlar Güncellendi',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
