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

    public function Edit()
    {
        $star = star_count::first();
        return view('admin.starCount.edit', compact('star'));
    }

    public function Update(Request $request){
        // To add image
        $star_image1 = $request->file('icon1'); 

        $name_gen = hexdec(uniqid()).'.'.$star_image1->getClientOriginalExtension();

        Image::make($star_image1)->resize(25, 26)->save('images/star/'.$name_gen);

        $last_img1 = 'images/star/'.$name_gen;

        $star_image2 = $request->file('icon2'); 

        $name_gen = hexdec(uniqid()).'.'.$star_image2->getClientOriginalExtension();

        Image::make($star_image2)->resize(25, 26)->save('images/star/'.$name_gen);

        $last_img2 = 'images/star/'.$name_gen;

        $star_image3 = $request->file('icon3'); 

        $name_gen = hexdec(uniqid()).'.'.$star_image3->getClientOriginalExtension();

        Image::make($star_image3)->resize(25, 26)->save('images/star/'.$name_gen);

        $last_img3 = 'images/star/'.$name_gen;
  
          $star = star_count::first()->update([
            'icon1' => $last_img1,
            'number1' => $request->number1,
            'text1' => $request->text1,

            'icon2' => $last_img2,
            'number2' => $request->number2,
            'text2' => $request->text2,

            'icon3' => $last_img3,
            'number3' => $request->number3,
            'text3' => $request->text3,
      
            'created_at' => Carbon::now(),
          ]);
          
  
          return Redirect()->back()->with('success', 'Slider Updated Successfull');
       
  

         
   }
}
