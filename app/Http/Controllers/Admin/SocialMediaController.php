<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SocialMedia;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    public function AllSocialMedia()
    {
        $socialmedia = SocialMedia::latest()->get();
        return view('admin.socialmedia.all_socialmedia', compact('socialmedia'));
    }

    public function AddSocialMedia()
    {
        return view('admin.socialmedia.add_socialmedia');
    }

    public function StoreSocialMedia(Request $request)
    {

        SocialMedia::insert([
            'icon' => $request->icon,
            'link' => $request->link,
            'title' => $request->title,
            'desk' => $request->desk,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Sosyal Medya Eklendi',
            'alert-type' => 'success'
        );

        return redirect()->route('all.social.media')->with($notification);
    }

    public function EditSocialMedia($id)
    {
        $socialmedia = SocialMedia::findOrFail($id);
        return view('admin.socialmedia.edit_socialmedia', compact('socialmedia'));
    }

    public function UpdateSocialMedia(Request $request)
    {
        $socialmedia_id = $request->id;

        SocialMedia::findOrFail($socialmedia_id)->update([
            'icon' => $request->icon,
            'link' => $request->link,
            'title' => $request->title,
            'desk' => $request->desk,
        ]);

        $notification = array(
            'message' => 'Sosyal Medya Güncellendi',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function DeleteSocialMedia($id)
    {

        SocialMedia::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Sosyal Medya Başarıyla Silindi',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }

    public function SocialMediaInactive($id)
    {
        SocialMedia::findOrFail($id)->update(['status' => 0]);
        $notification = array(
            'message' => 'Sosyal Medya Yayından Kaldırıldı',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }

    public function SocialMediaActive($id)
    {
        SocialMedia::findOrFail($id)->update(['status' => 1]);
        $notification = array(
            'message' => 'Sosyal Medya Yayına Alındı',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }
}
