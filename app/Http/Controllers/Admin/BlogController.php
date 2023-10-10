<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function AllBlogs()
    {
        $blogs = Blog::latest()->get();
        return view('admin.blogs.all_blogs', compact('blogs'));
    }

    public function AddBlog()
    {
        return view('admin.blogs.add_blog');
    }

    public function StoreBlog(Request $request)
    {
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/blog'), $filename);
            $save_url = $data['photo'] = 'upload/blog/' . $filename;
        }

        $search = array('Ç', 'ç', 'Ğ', 'ğ', 'ı', 'İ', 'Ö', 'ö', 'Ş', 'ş', 'Ü', 'ü', ' ', '/');
        $replace = array('c', 'c', 'g', 'g', 'i', 'i', 'o', 'o', 's', 's', 'u', 'u', '-', '-');


        Blog::insert([
            'title' => $request->title,
            'title_slug' => strtolower(str_replace($search, $replace, $request->title)),
            'description' => $request->description,
            'desk' => $request->desk,
            'photo' => $save_url,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Blog Eklendi',
            'alert-type' => 'success'
        );

        return redirect()->route('all.blogs')->with($notification);
    }

    public function EditBlog($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blogs.edit_blog', compact('blog'));
    }

    public function UpdateBlog(Request $request)
    {
        $blog_id = $request->id;
        $old_img = $request->old_image;

        $search = array('Ç', 'ç', 'Ğ', 'ğ', 'ı', 'İ', 'Ö', 'ö', 'Ş', 'ş', 'Ü', 'ü', ' ', '/', '?');
        $replace = array('c', 'c', 'g', 'g', 'i', 'i', 'o', 'o', 's', 's', 'u', 'u', '-', '-', '-');

        $save_url = $request->old_image;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink($old_img);
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/blog'), $filename);
            $save_url = $data['photo'] = 'upload/blog/' . $filename;
        }
        Blog::findOrFail($blog_id)->update([
            'title' => $request->title,
            'title_slug' => strtolower(str_replace($search, $replace, $request->title)),
            'description' => $request->description,
            'desk' => $request->desk,
            'photo' =>  $save_url,
        ]);

        $notification = array(
            'message' => 'Blog Güncellendi',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function DeleteBlog($id)
    {
        $blogs = Blog::findorFail($id);
        $img = $blogs->photo;
        if (isset($img)) {
            unlink($img);
        }
        Blog::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Blog Başarıyla Silindi',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }

    public function BlogInactive($id)
    {
        Blog::findOrFail($id)->update(['status' => 0]);
        $notification = array(
            'message' => 'Blog Yayından Kaldırıldı',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }

    public function BlogActive($id)
    {
        Blog::findOrFail($id)->update(['status' => 1]);
        $notification = array(
            'message' => 'Blog Yayına Alındı',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }
}
