<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;
use App\Models\Slider;
use Auth;
use Illuminate\Support\Carbon;
use Image;

use Helper;


class HomeController extends Controller
{
  

    public function HomeSlider()
    {
        $sliders = Slider::latest()->get();
       
        return view('admin.slider.index', compact('sliders'));
    }

    public function AddSlider()
    {
        return view('admin.slider.create');
    }

    public function StoreSlider(Request $request)
    {
        $slider_image = $request->file('image'); 

        $name_gen = hexdec(uniqid()).'.'.$slider_image->getClientOriginalExtension();

        Image::make($slider_image)->resize(665, 949)->save('images/slider/'.$name_gen);

        $last_img = 'images/slider/'.$name_gen;

        // To add data
        Slider::insert([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'shape_mark' => $request->shape_mark,
            'image' => $last_img,
            'btn_name' => $request->btn_name,
            'btn_link' => $request->btn_link,
            'youtube_name' => $request->youtube_name,
            'youtube_link' => $request->youtube_link,

            'created_at' => Carbon::now(),
            
        ]);

        return Redirect()->route('home.slider')->with('success', 'Slider Inserted Successfull');
    }

    public function Edit($id){
            
        $slider = Slider::find($id);

        return view('admin.slider.edit', compact('slider'));
    }

    public function Update(Request $request, $id){
        // To add image
        $slider_image = $request->file('image'); //Need to Get the image from file field form FE
        $old_image = $request->old_image; //Need to Get the image from file field form FE
        if ($slider_image) {
           $name_gen = hexdec(uniqid()); //Need to generate the image name to number using hexdec
           $img_ext = strtolower($slider_image->getClientOriginalExtension()); //Need to get the image extension
           $img_name = $name_gen.'.'.$img_ext; // Image file name 123.jpg
           $upload_path = 'images/slider/'; // Image file path
           $last_img = $upload_path.$img_name; // define the image path
           $slider_image->move($upload_path, $img_name); // Move the image to the path
           
        //   unlink($old_image); // Delete the old image
  
          $slider = Slider::find($id)->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'image' => $last_img,
            'shape_mark' => $request->shape_mark,
            'btn_name' => $request->btn_name,
            'btn_link' => $request->btn_link,
            'youtube_name' => $request->youtube_name,
            'youtube_link' => $request->youtube_link,
            'created_at' => Carbon::now(),
          ]);
          
  
          return Redirect()->back()->with('success', 'Slider Updated Successfull');
        } else {
           $slider = Slider::find($id)->update([
               'title' => $request->title,
               'subtitle' => $request->subtitle,
               'description' => $request->description,
               'shape_mark' => $request->shape_mark,
               'btn_name' => $request->btn_name,
               'btn_link' => $request->btn_link,
               'youtube_name' => $request->youtube_name,
               'youtube_link' => $request->youtube_link,
               'updated_at' => Carbon::now(),
           ]);
          return Redirect()->route('home.slider')->with('success', 'Slider Updated Successfull');

        }

         
   }

   public function Delete($id){

    $image = Slider::find($id);
    $old_image = $image->image;
    unlink($old_image);


    $slider = Slider::find($id)->delete();

    return Redirect()->back()->with('success', 'Slider Deleted Successfull');
} 
}
