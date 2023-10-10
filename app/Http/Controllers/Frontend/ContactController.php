<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Blog;
use App\Models\Messages;
use App\Models\Services;
use App\Models\Settings;
use App\Models\SocialMedia;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function HomeContact()
    {
        $settings = Settings::find(1);
        $about = About::find(1);
        $services = Services::where('status', 1) // status sütunu 1 olanları seç
            ->orderBy('desk', 'asc') // desk sütununa göre artan sıralama
            ->get();
        $socailmedia = SocialMedia::where('status', 1) // status sütunu 1 olanları seç
            ->orderBy('desk', 'asc') // desk sütununa göre artan sıralama
            ->get();
        $blogs = Blog::where('status', 1) // status sütunu 1 olanları seç
            ->orderBy('desk', 'asc') // desk sütununa göre artan sıralama
            ->get();
        return view('frontend.contact.contact', compact('settings', 'services', 'about', 'socailmedia', 'blogs'));
    }

    //Contact Page 
    public function StoreMesseage(Request $request)
    {
        Messages::insert([

            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
            'created_at' => Carbon::now(),

        ]);
        return redirect()->route('home.contact')->with('success', 'Mesaj Başarıyla Gönderildi.');
    }

  
}
