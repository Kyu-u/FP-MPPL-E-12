<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;


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

Route::get('/', function () {
    return view('landing');
});



Route::get('/signup',[UserController::class,'signuppage'])->name('signup');
Route::post('/signup/post',[UserController::class,'signup'])->name('signup.post');

Route::get('/signin',[UserController::class,'signinpage'])->name('signin');
Route::post('/signin/post',[UserController::class,'signin'])->name('signin.post');

Route::post('/signout/post',[UserController::class,'signout'])->name('signout.post');


Route::get('/admin',[UserController::class,'adminpage'])->name('admin');

Route::get('/editprofile',[UserController::class,'editprofilepage'])->name('editprofile');
Route::post('/editprofile/post',[UserController::class,'editprofile'])->name('editprofile.post');

Route::get('/additem',[ProductController::class,'addpage'])->name('additem');
Route::post('/additem/post',[ProductController::class,'store'])->name('additem.post');

Route::resource('products', 'App\Http\Controllers\ProductController'); 








