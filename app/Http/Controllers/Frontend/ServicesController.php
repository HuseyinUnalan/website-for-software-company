<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Blog;
use App\Models\Services;
use App\Models\Settings;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function HomeServices()
    {
        $services = Services::where('status', 1) // status sütunu 1 olanları seç
            ->orderBy('desk', 'asc') // desk sütununa göre artan sıralama
            ->get();
        $socailmedia = SocialMedia::where('status', 1) // status sütunu 1 olanları seç
            ->orderBy('desk', 'asc') // desk sütununa göre artan sıralama
            ->get();
        $settings = Settings::find(1);
        $about = About::find(1);
        $blogs = Blog::where('status', 1) // status sütunu 1 olanları seç
            ->orderBy('desk', 'asc') // desk sütununa göre artan sıralama
            ->get();
        return view('frontend.service.all_service', compact('services', 'settings', 'about', 'socailmedia', 'blogs'));
    }

    public function ServiceDetail($slug)
    {
        $services = Services::where('status', 1) // status sütunu 1 olanları seç
            ->orderBy('desk', 'asc') // desk sütununa göre artan sıralama
            ->get();
        $socailmedia = SocialMedia::where('status', 1) // status sütunu 1 olanları seç
            ->orderBy('desk', 'asc') // desk sütununa göre artan sıralama
            ->get();
        $service = Services::wheretitle_slug($slug)->firstOrFail();
        $settings = Settings::find(1);
        $about = About::find(1);
        $blogs = Blog::where('status', 1) // status sütunu 1 olanları seç
            ->orderBy('desk', 'asc') // desk sütununa göre artan sıralama
            ->get();
        return view('frontend.service.service_details', compact('service', 'services', 'settings', 'about', 'socailmedia', 'blogs'));
    }
}
