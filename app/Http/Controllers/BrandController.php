<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use Auth;
use Illuminate\Support\Carbon;

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
        $brand_image = $request->file('brand_image'); //Need to Get the image from file field form FE
        $name_gen = hexdec(uniqid()); //Need to generate the image name to number using hexdec
        $img_ext = strtolower($brand_image->getClientOriginalExtension()); //Need to get the image extension
        $img_name = $name_gen.'.'.$img_ext; // Image file name 123.jpg
        $upload_path = 'images/brand/'; // Image file path
        $last_img = $upload_path.$img_name; // define the image path
        $brand_image->move($upload_path, $img_name); // Move the image to the path

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
        $brand = Brand::find($id)->delete();

        return Redirect()->route('all.brand')->with('success', 'Brand Deleted Successfull');
    }
}
