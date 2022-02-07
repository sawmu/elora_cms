<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Multipic;

use Auth;
use Illuminate\Support\Carbon;
use Image;

class BrandController extends Controller
{
   

    public function AllBrand(){

        $brands = Brand::latest()->paginate(5);

        return view('admin.brand.index', compact('brands'));
    }

    public function StoreBrand(Request $request){

        $validated = $request->validate([
            'brand_name' => 'required|unique:brands|max:255',
            

           
        ],
        [
            'brand_name.required' => 'Please Input Brand Name',
            'brand_image.max' => 'Brand Less Then 255Chars'
        ]);

        // To add image
        // $brand_image = $request->file('brand_image'); //Need to Get the image from file field form FE
        // $name_gen = hexdec(uniqid()); //Need to generate the image name to number using hexdec
        // $img_ext = strtolower($brand_image->getClientOriginalExtension()); //Need to get the image extension
        // $img_name = $name_gen.'.'.$img_ext; // Image file name 123.jpg
        // $upload_path = 'images/brand/'; // Image file path
        // $last_img = $upload_path.$img_name; // define the image path
        // $brand_image->move($upload_path, $img_name); // Move the image to the path


        $brand_image = $request->file('brand_image'); 

        $name_gen = hexdec(uniqid()).'.'.$brand_image->getClientOriginalExtension();

        Image::make($brand_image)->resize(300, 200)->save('images/brand/'.$name_gen);

        $last_img = 'images/brand/'.$name_gen;

        // To add data
        Brand::insert([
            'brand_name' => $request->brand_name,
            'brand_image' => $last_img,
            'created_at' => Carbon::now(),
            
        ]);

        return Redirect()->back()->with('success', 'Brand Inserted Successfull');
    }

    public function Edit($id){
            
            $brand = Brand::find($id);
    
            return view('admin.brand.edit', compact('brand'));
    }

    public function Update(Request $request, $id){
         // To add image
         $brand_image = $request->file('brand_image'); //Need to Get the image from file field form FE
         $old_image = $request->old_image; //Need to Get the image from file field form FE
         if ($brand_image) {
            $name_gen = hexdec(uniqid()); //Need to generate the image name to number using hexdec
            $img_ext = strtolower($brand_image->getClientOriginalExtension()); //Need to get the image extension
            $img_name = $name_gen.'.'.$img_ext; // Image file name 123.jpg
            $upload_path = 'images/brand/'; // Image file path
            $last_img = $upload_path.$img_name; // define the image path
            $brand_image->move($upload_path, $img_name); // Move the image to the path
            
           unlink($old_image); // Delete the old image
   
           $brand = Brand::find($id)->update([
               'brand_name' => $request->brand_name,
               'brand_image' => $last_img,
               'updated_at' => Carbon::now(),
           ]);
           
   
           return Redirect()->back()->with('success', 'Brand Updated Successfull');
         } else {
            $brand = Brand::find($id)->update([
                'brand_name' => $request->brand_name,
                'updated_at' => Carbon::now(),
            ]);
           return Redirect()->back()->with('success', 'Brand Updated Successfull');

         }
         
        
    }

    public function Delete($id){

        $image = Brand::find($id);
        $old_image = $image->brand_image;
        unlink($old_image);


        $brand = Brand::find($id)->delete();

        return Redirect()->back()->with('success', 'Brand Deleted Successfull');
    }

    public function Multipic(){
            $images = Multipic::all();
            return view('admin.multipic.index', compact('images'));
    }

    public function StoreImage(Request $request){
        $image = $request->file('image'); 

        foreach($image as $multi_img){
            $name_gen = hexdec(uniqid()).'.'.$multi_img->getClientOriginalExtension();

            Image::make($multi_img)->resize(300, 300)->save('images/multi/'.$name_gen);
    
            $last_img = 'images/multi/'.$name_gen;
    
            // To add data
            Multipic::insert([
               
                'image' => $last_img,
                'created_at' => Carbon::now(),
                
            ]);
        } // End Foreach

        

        return Redirect()->back()->with('success', 'Image Inserted Successfull');
    }
}
