<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Blog;
use App\Models\Memberships;
use App\Models\Portfolio;
use App\Models\Promotion;
use App\Models\Services;
use App\Models\Settings;
use App\Models\Slider;
use App\Models\SocialMedia;
use App\Models\Testimonials;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function Index()
    {
        $services = Services::where('status', 1) // status sütunu 1 olanları seç
            ->orderBy('desk', 'asc') // desk sütununa göre artan sıralama
            ->get();
        $portfolios = Portfolio::where('status', 1) // status sütunu 1 olanları seç
            ->orderBy('desk', 'asc') // desk sütununa göre artan sıralama
            ->get();
        $blogs = Blog::where('status', 1) // status sütunu 1 olanları seç
            ->orderBy('desk', 'asc') // desk sütununa göre artan sıralama
            ->get();
        $socailmedia = SocialMedia::where('status', 1) // status sütunu 1 olanları seç
            ->orderBy('desk', 'asc') // desk sütununa göre artan sıralama
            ->get();
        $about = About::find(1);
        $settings = Settings::find(1);
        return view('frontend.index', compact('services', 'about', 'blogs', 'settings', 'socailmedia', 'portfolios'));
    }
}
