<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Multipic;

use Illuminate\Http\Request;

class DbController extends Controller
{
    public function DbSetting(){

        $brands = Brand::latest()->paginate(5);

        return view('admin.databaseSetting.index', compact('brands'));
    }

    public function DbAllCateDelete(){
        Category::truncate();

        return Redirect()->back()->with('success', 'Database Deleted Successfull');
    }

    public function DbBrandDelete(){
        Brand::truncate();

        return Redirect()->back()->with('success', 'Database Deleted Successfull');
    }

    public function DbMultiDelete(){
        Multipic::truncate();

        return Redirect()->back()->with('success', 'Database Deleted Successfull');
    }

    public function Delete(){
        $brands = Brand::delete();

    }
}
