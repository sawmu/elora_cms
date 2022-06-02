<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use app\Models\User;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\DbController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\AboutController;

use App\Http\Controllers\MenuItemController;
use App\Providers\MenuItem;
use App\Providers\MenuSocial;
use App\Http\Controllers\MenuSocialController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Star_countController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\PortfolioController;





use Artesaos\SEOTools\Facades\SEOTools;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/', function () {
    

    $brands = DB::table('brands')->get();
    $stars = DB::table('star_counts')->get();

    return view('home', compact('brands'));
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // $users = User::latest()->get();
    return view('admin.index');
})->name('dashboard');



// User Management All Route
Route::prefix('home')->group(function(){

Route::get('/category/all',[CategoryController::class, 'AllCat'])->name('all.category');
Route::Post('/category/add',[CategoryController::class, 'AddCat'])->name('store.category');
Route::get('/category/edit/{id}',[CategoryController::class, 'Edit']);
Route::post('/category/update/{id}',[CategoryController::class, 'Update']);
Route::get('/category/delete/{id}',[CategoryController::class, 'Delete']);

// Brand Route

Route::get('/brand/all',[BrandController::class, 'AllBrand'])->name('all.brand');
Route::post('/brand/add',[BrandController::class, 'StoreBrand'])->name('store.brand');
Route::get('/brand/edit/{id}',[BrandController::class, 'Edit']);
Route::post('/brand/update/{id}',[BrandController::class, 'Update']);
Route::get('/brand/delete/{id}',[BrandController::class, 'Delete']);

Route::get('/multi/image',[BrandController::class, 'Multipic'])->name('multi.image');
Route::post('/multi/add',[BrandController::class, 'StoreImage'])->name('store.image');

// Database Setting

Route::get('/database/setting',[DbController::class, 'DbSetting'])->name('database.setting');
Route::get('database/delete/allCate',[DbController::class, 'DbAllCateDelete']);
Route::get('database/delete/brand',[DbController::class, 'DbBrandDelete']);
Route::get('database/delete/multi',[DbController::class, 'DbMultiDelete']);

Route::get('/user/logout',[BrandController::class, 'Logout'])->name('user.logout');

// Admin All Route
Route::get('/slider',[HomeController::class, 'HomeSlider'])->name('home.slider');
Route::get('/add/slider',[HomeController::class, 'AddSlider'])->name('add.slider');
Route::post('/store/slider',[HomeController::class, 'StoreSlider'])->name('store.slider');
Route::get('/slider/edit/{id}',[HomeController::class, 'Edit']);
Route::post('/slider/update/{id}',[HomeController::class, 'Update']);
Route::get('/slider/delete/{id}',[HomeController::class, 'Delete']);

// Home Star Count

Route::get('/star_count',[Star_countController::class, 'HomeStar'])->name('home.star');
Route::get('/add/star_count',[Star_countController::class, 'AddStar'])->name('add.star');
Route::post('/store/star_count',[Star_countController::class, 'StoreStar'])->name('store.star');
Route::get('/star/edit',[Star_countController::class, 'Edit'])->name('update.star');
Route::post('/star/update',[Star_countController::class, 'Update']);
Route::get('/star/delete/{id}',[Star_countController::class, 'Delete']);

// Home Project
Route::get('/project',[ProjectController::class, 'index'])->name('home.project');
Route::get('/add/project',[ProjectController::class, 'create'])->name('add.project');
Route::post('/store/project',[ProjectController::class, 'store'])->name('store.project');
Route::get('/project/edit/{id}',[ProjectController::class, 'edit']);
Route::post('/project/update/{id}',[ProjectController::class, 'update']);
Route::get('/project/delete/{id}',[ProjectController::class, 'destroy']);


// Home About

Route::get('/about',[AboutController::class, 'HomeAbout'])->name('home.about');
Route::get('/add/about',[AboutController::class, 'AddAbout'])->name('add.about');
Route::post('/store/about',[AboutController::class, 'StoreAbout'])->name('store.about');

});

// Menu Create
Route::prefix('menu')->group(function(){

Route::get('all',[MenuItemController::class, 'AllMenu'])->name('all.menu');
Route::get('create',[MenuItemController::class, 'CreateMenu'])->name('create.menu');
Route::post('store',[MenuItemController::class, 'StoreMenu'])->name('store.menu');
Route::get('edit/{id}',[MenuItemController::class, 'Edit']);
Route::post('update/{id}',[MenuItemController::class, 'Update']);
Route::get('delete/{id}',[MenuItemController::class, 'destroy']);



// Menu Social

Route::get('/social/create',[MenuSocialController::class, 'Create'])->name('create.social');
Route::post('/social/store',[MenuSocialController::class, 'store'])->name('store.social');
Route::get('/social/edit/{id}',[MenuSocialController::class, 'Edit']);
Route::post('/social/update/{id}',[MenuSocialController::class, 'Update']);
Route::get('/social/delete/{id}',[MenuSocialController::class, 'destroy']);

});


// Contact Form

Route::get('/contact_us/all',[ContactController::class, 'ContactAll'])->name('contact.all');
Route::get('/contact_us',[ContactController::class, 'ContactForm'])->name('contact.form');
Route::post('/contact_us/store',[ContactController::class, 'StoreContactForm'])->name('contact.store');

Route::get('/contact/edit/{id}',[ContactController::class, 'Edit']);
Route::post('/contact/update/{id}',[ContactController::class, 'Update']);
Route::get('/contact/delete/{id}',[ContactController::class, 'destroy']);

// About Us 
Route::get('/about',[AboutUsController::class, 'AboutUs'])->name('about.us');
Route::get('/portfolio',[PortfolioController::class, 'Portfolio'])->name('portfolio.saw');


