<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Blog;
use App\Models\Portfolio;
use App\Models\Services;
use App\Models\Settings;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function HomePortfolios()
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
        return view('frontend.portfolio.all_portfolios', compact('services', 'about', 'blogs', 'settings', 'socailmedia', 'portfolios'));
    }

    public function PortfolioDetail($slug)
    {
        $services = Services::where('status', 1) // status sütunu 1 olanları seç
            ->orderBy('desk', 'asc') // desk sütununa göre artan sıralama
            ->get();
        $socailmedia = SocialMedia::where('status', 1) // status sütunu 1 olanları seç
            ->orderBy('desk', 'asc') // desk sütununa göre artan sıralama
            ->get();
        $portfolio = Portfolio::wheretitle_slug($slug)->firstOrFail();
        $settings = Settings::find(1);
        $about = About::find(1);
        $blogs = Blog::where('status', 1) // status sütunu 1 olanları seç
            ->orderBy('desk', 'asc') // desk sütununa göre artan sıralama
            ->get();
        return view('frontend.portfolio.portfolio_details', compact('portfolio', 'services', 'settings', 'about', 'socailmedia', 'blogs'));
    }
}
