<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BrandInquiry;
use App\Models\Messages;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function AllMessage()
    {
        $messages = Messages::latest()->get();
        return view('admin.message.all_message', compact('messages'));
    }

    public function DetailMessage(Request $request, $id)
    {

        Messages::findOrFail($id)->update(['status' => 1]);

        $messages = Messages::findOrFail($id);
        return view('admin.message.detail_message', compact('messages'));

    }

    public function DeleteMessage($id)
    {

        Messages::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Mesaj Başarıyla Silindi',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function AllBrandInquiry()
    {
        $brandinquiry = BrandInquiry::latest()->get();
        return view('admin.brandinquiry.all_brandinquiry', compact('brandinquiry'));
    }

    public function DetailBrandInquiry(Request $request, $id)
    {

        BrandInquiry::findOrFail($id)->update(['status' => 1]);

        $brandinquiry = BrandInquiry::findOrFail($id);
        return view('admin.brandinquiry.detail_brandinquiry', compact('brandinquiry'));

    }

    public function DeleteBrandInquiry($id)
    {

        BrandInquiry::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Marka Sorgulama Talebi Başarıyla Silindi',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
