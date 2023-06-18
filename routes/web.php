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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/create-blog', [App\Http\Controllers\Blogs\BlogsController::class, 'index'])->name('myblog');
Route::post('/add-blog-introduction',[App\Http\Controllers\Blogs\BlogsController::class, 'store'])->name('store_blog_introduction');
Route::get('/edit_blog',[App\Http\Controllers\Blogs\BlogsController::class, 'blogs'])->name('edit_blog');
Route::get('edit_intro/{id}',[App\Http\Controllers\Blogs\BlogsController::class, 'edit'])->name('edit_intro');
