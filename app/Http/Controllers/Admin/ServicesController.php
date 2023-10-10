<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function AllService()
    {
        $service = Services::latest()->get();
        return view('admin.service.all_service', compact('service'));
    }

    public function AddService()
    {
        return view('admin.service.add_service');
    }

    public function StoreService(Request $request)
    {
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/services'), $filename);
            $save_url = $data['photo'] = 'upload/services/' . $filename;
        }

        $search = array('Ç', 'ç', 'Ğ', 'ğ', 'ı', 'İ', 'Ö', 'ö', 'Ş', 'ş', 'Ü', 'ü', ' ', '/');
        $replace = array('c', 'c', 'g', 'g', 'i', 'i', 'o', 'o', 's', 's', 'u', 'u', '-', '-');


        Services::insert([
            'title' => $request->title,
            'title_slug' => strtolower(str_replace($search, $replace, $request->title)),
            'description' => $request->description,
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
            'meta_title' => $request->meta_title,
            'desk' => $request->desk,
            'photo' => $save_url,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Hizmet Eklendi',
            'alert-type' => 'success'
        );

        return redirect()->route('all.service')->with($notification);
    }

    public function EditService($id)
    {
        $service = Services::findOrFail($id);
        return view('admin.service.edit_service', compact('service'));
    }

    public function UpdateService(Request $request)
    {
        $service_id = $request->id;
        $old_img = $request->old_image;

        $search = array('Ç', 'ç', 'Ğ', 'ğ', 'ı', 'İ', 'Ö', 'ö', 'Ş', 'ş', 'Ü', 'ü', ' ', '/');
        $replace = array('c', 'c', 'g', 'g', 'i', 'i', 'o', 'o', 's', 's', 'u', 'u', '-', '-');

        $save_url = $request->old_image;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink($old_img);
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/services'), $filename);
            $save_url = $data['photo'] = 'upload/services/' . $filename;
        }
        Services::findOrFail($service_id)->update([
            'title' => $request->title,
            'title_slug' => strtolower(str_replace($search, $replace, $request->title)),
            'description' => $request->description,
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
            'meta_title' => $request->meta_title,
            'desk' => $request->desk,
            'photo' =>  $save_url,
        ]);

        $notification = array(
            'message' => 'Hizmet Güncellendi',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function DeleteService($id)
    {
        $services = Services::findorFail($id);
        $img = $services->photo;
        if (isset($img)) {
            unlink($img);
        }
        Services::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Hizmet Başarıyla Silindi',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }

    public function ServiceInactive($id)
    {
        Services::findOrFail($id)->update(['status' => 0]);
        $notification = array(
            'message' => 'Hizmet Yayından Kaldırıldı',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }

    public function ServiceActive($id)
    {
        Services::findOrFail($id)->update(['status' => 1]);
        $notification = array(
            'message' => 'Hizmet Yayına Alındı',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }
}
