<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\newController;

use App\Http\Controllers\Auth\LoginController;
Route::get('/', function () {
    return view('home_page');
});

Route::get('/',[SliderController::class,'slider']);

Auth::routes();

//website routes
  Route::view('home','home_page');
  Route::view('about','about_us');

  Route::view('services','service');
  Route::view('product','product_page');

  Route::view('detail','product_detail_page');
  Route::view('contact','contact_us');

Route::get('send',[newController::class,'sender'])->name('send');


//admin route
Route::group(['prefix'=>'admin'],function(){

Route::group(['middleware'=>'admin.guest'],function(){

    Route::view('login','admin.admin_login')->name('admin.login');
    Route::post('login',[AdminController::class,'adminlogin'])->name('admin.login');

});

Route::group(['middleware'=>'admin.auth'],function(){

Route::view('dashboard','welcome')->name('admin.dashboard');
Route::post('logout',[AdminController::class,'logout'])->name('admin.logout');

Route::view('dashboard',"Dashboard.admin_dashboard")->name('admin.dashboard');
Route::view('new',"Dashboard.new")->name('admin.new');
 Route::view('new2',"Dashboard.slider_data")->name('admin.new2');
 Route::post('slider',[AdminController::class,'slide'])->name('admin.slider');
});
});