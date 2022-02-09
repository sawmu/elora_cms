<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use app\Models\User;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\DbController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $users = User::latest()->get();
    return view('dashboard', compact('users'));
})->name('dashboard');




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













