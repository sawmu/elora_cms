<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use App\Models\Multipic;


use Auth;
use Illuminate\Support\Carbon;
use Image;

use Illuminate\Http\Request;

class DatabaseController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function DbSetting(){

        $brands = Brand::latest()->paginate(5);

        return view('admin.databaseSetting.index', compact('brands'));
    }
}
