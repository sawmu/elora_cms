<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\star_count;
use Auth;
use Illuminate\Support\Carbon;
use Image;

class Star_countController extends Controller
{
    public function HomeStar()
    {
        $stars = star_count::all();
        return view('admin.starCount.index', compact('stars'));
    }

    public function AddStar()
    {
        return view('admin.starCount.create');
    }

    public function StoreStar(Request $request)
    {
        $star_image = $request->file('icon'); 

        $name_gen = hexdec(uniqid()).'.'.$star_image->getClientOriginalExtension();

        Image::make($star_image)->resize(25, 26)->save('images/star/'.$name_gen);

        $last_img = 'images/star/'.$name_gen;

         // To add data
         star_count::insert([
            'icon' => $last_img,
            'number' => $request->number,
            'text' => $request->text,
            // 'created_at' => Carbon::now(),
            
        ]);

        return Redirect()->route('home.star')->with('success', 'Star Count Inserted Successfull');
    }
}
