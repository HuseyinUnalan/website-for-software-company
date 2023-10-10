<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Blog;
use App\Models\Services;
use App\Models\Settings;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function HomeBlogs()
    {
        $blogs = Blog::where('status', 1) // status sütunu 1 olanları seç
            ->orderBy('desk', 'asc') // desk sütununa göre artan sıralama
            ->get();
        $services = Services::where('status', 1) // status sütunu 1 olanları seç
            ->orderBy('desk', 'asc') // desk sütununa göre artan sıralama
            ->get();
        $socailmedia = SocialMedia::where('status', 1) // status sütunu 1 olanları seç
            ->orderBy('desk', 'asc') // desk sütununa göre artan sıralama
            ->get();
        $settings = Settings::find(1);
        $about = About::find(1);
        return view('frontend.blogs.all_blogs', compact('services', 'settings', 'about', 'socailmedia', 'blogs'));
    }

    public function BlogDetail($slug)
    {
        $blogs = Blog::where('status', 1) // status sütunu 1 olanları seç
            ->orderBy('desk', 'asc') // desk sütununa göre artan sıralama
            ->get();
        $services = Services::where('status', 1) // status sütunu 1 olanları seç
            ->orderBy('desk', 'asc') // desk sütununa göre artan sıralama
            ->get();
        $socailmedia = SocialMedia::where('status', 1) // status sütunu 1 olanları seç
            ->orderBy('desk', 'asc') // desk sütununa göre artan sıralama
            ->get();
        $blog = Blog::wheretitle_slug($slug)->firstOrFail();
        $settings = Settings::find(1);
        $about = About::find(1);
        return view('frontend.blogs.blog_details', compact('blog', 'services', 'settings', 'about', 'socailmedia', 'blogs'));
    }
}
