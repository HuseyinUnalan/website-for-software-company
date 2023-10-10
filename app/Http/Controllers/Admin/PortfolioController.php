<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function AllPortfolios()
    {
        $portfolios = Portfolio::latest()->get();
        return view('admin.portfolios.all_portfolios', compact('portfolios'));
    }

    public function AddPortfolio()
    {
        return view('admin.portfolios.add_portfolio');
    }

    public function StorePortfolio(Request $request)
    {
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/portfolio'), $filename);
            $save_url = $data['photo'] = 'upload/portfolio/' . $filename;
        }

        $search = array('Ç', 'ç', 'Ğ', 'ğ', 'ı', 'İ', 'Ö', 'ö', 'Ş', 'ş', 'Ü', 'ü', ' ', '/');
        $replace = array('c', 'c', 'g', 'g', 'i', 'i', 'o', 'o', 's', 's', 'u', 'u', '-', '-');


        Portfolio::insert([
            'title' => $request->title,
            'title_slug' => strtolower(str_replace($search, $replace, $request->title)),
            'description' => $request->description,
            'link' => $request->link,
            'desk' => $request->desk,
            'photo' => $save_url,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Referans Eklendi',
            'alert-type' => 'success'
        );

        return redirect()->route('all.portfolios')->with($notification);
    }

    public function EditPortfolio($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('admin.portfolios.edit_portfolio', compact('portfolio'));
    }

    public function UpdatePortfolio(Request $request)
    {
        $portfolio_id = $request->id;
        $old_img = $request->old_image;

        $search = array('Ç', 'ç', 'Ğ', 'ğ', 'ı', 'İ', 'Ö', 'ö', 'Ş', 'ş', 'Ü', 'ü', ' ', '/');
        $replace = array('c', 'c', 'g', 'g', 'i', 'i', 'o', 'o', 's', 's', 'u', 'u', '-', '-');

        $save_url = $request->old_image;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink($old_img);
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/portfolio'), $filename);
            $save_url = $data['photo'] = 'upload/portfolio/' . $filename;
        }
        Portfolio::findOrFail($portfolio_id)->update([
            'title' => $request->title,
            'title_slug' => strtolower(str_replace($search, $replace, $request->title)),
            'description' => $request->description,
            'link' => $request->link,
            'desk' => $request->desk,
            'photo' =>  $save_url,
        ]);

        $notification = array(
            'message' => 'Referans Güncellendi',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function DeletePortfolio($id)
    {
        $portfolios = Portfolio::findorFail($id);
        $img = $portfolios->photo;
        if (isset($img)) {
            unlink($img);
        }
        Portfolio::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Referans Başarıyla Silindi',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }

    public function PortfolioInactive($id)
    {
        Portfolio::findOrFail($id)->update(['status' => 0]);
        $notification = array(
            'message' => 'Referans Yayından Kaldırıldı',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }

    public function PortfolioActive($id)
    {
        Portfolio::findOrFail($id)->update(['status' => 1]);
        $notification = array(
            'message' => 'Referans Yayına Alındı',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }
}
