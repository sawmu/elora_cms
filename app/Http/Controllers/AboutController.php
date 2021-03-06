<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeAbout;
use Illuminate\Support\Carbon;

class AboutController extends Controller
{
    public function HomeAbout()
    {
        $homeabout = HomeAbout::latest()->get();
        return view('admin.about.index', compact('homeabout'));
    }

    public function AddAbout()
    {
        return view('admin.about.add');
    }

    public function StoreAbout(Request $request)
    {
        HomeAbout::insert([
            'title' => $request->title,
            'short_dis' => $request->short_dis,
            'long_dis' => $request->long_dis,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        return Redirect()->route('home.about')->with('success', 'About Inserted Successfull');
    }
}
