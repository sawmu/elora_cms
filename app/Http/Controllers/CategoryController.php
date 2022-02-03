<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function AllCat()
    {
        $categories = Category::latest()->paginate(7);
        return view('admin.category.index', compact('categories'));
    }

    public function AddCat(Request $request)
    {
        $validated = $request->validate([
            'category_name' => 'required|unique:categories|max:255',
           
        ],
        [
            'category_name.required' => 'Please Input Category Name',
            'category_name.max' => 'Category Less Then 255Chars'
        ]);

        Category::insert([
            'category_name' => $request->category_name,
            'user_id' => Auth::user()->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        return redirect()->back()->with('success', 'Category Inserted Successfull');

    }

    public function Edit($id){
        $categories = Category::find($id);
        return view('admin.category.edit', compact('categories'));
        
    }

    public function Update(Request $request, $id){
        $update = Category::find($id)->update([
           
           'category_name' => $request->category_name,
            'user_id' => Auth::user()->id
        ]);

        return Redirect()->route('all.category')->with('success', 'Category Updated Successfull');
    }

    public function Delete($id){
        $delete = Category::find($id)->delete();
        return Redirect()->route('all.category')->with('success', 'Category Deleted Successfull');
    }
}
