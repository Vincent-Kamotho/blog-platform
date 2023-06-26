<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('website', [App\Http\Controllers\HomeController::class, 'website'])->name('website')->middleware('auth');



Route::group(['prefix' => 'blogs' , 'middleware' => 'auth'], function (){
    Route::get('/create-blog', [App\Http\Controllers\Blogs\BlogsController::class, 'index'])->name('myblog');
    Route::post('/add-blog-introduction',[App\Http\Controllers\Blogs\BlogsController::class, 'store'])->name('store_blog_introduction');
    Route::get('/edit_blog',[App\Http\Controllers\Blogs\BlogsController::class, 'blogs'])->name('edit_blog');
    Route::get('edit_intro/{id}',[App\Http\Controllers\Blogs\BlogsController::class, 'edit'])->name('edit_intro');
});

Route::group(['prefix' => 'bio' , 'middleware' => 'auth'], function(){
    Route::get('/bio', [App\Http\Controllers\Bio\BioController::class, 'index'])->name('mybio');
    Route::get('/create', [App\Http\Controllers\Bio\BioController::class, 'create'])->name('create_bio');
    Route::post('save_bio', [App\Http\Controllers\Bio\BioController::class, 'store'])->name('save_blog');
});
