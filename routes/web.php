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
    Route::post('/save_bio', [App\Http\Controllers\Bio\BioController::class, 'store'])->name('save_blog');
    Route::get('/skills', [App\Http\Controllers\Bio\BioController::class, 'createskill'])->name('skills');
    Route::get('/add_skill', [App\Http\Controllers\Bio\BioController::class, 'addskill'])->name('add_skill');
    Route::post('/save_skill',[App\Http\Controllers\Bio\BioController::class, 'saveskill'])->name('save_skill');
    Route::get('/skills/edit/{id}',[App\Http\Controllers\Bio\BioController::class, 'editskill'])->name('edit_skill');
    Route::post('/skills/update/{id}',[App\Http\Controllers\Bio\BioController::class, 'updateskill']);
    Route::get('/skills/delete/{id}',[App\Http\Controllers\Bio\BioController::class, 'deleteskill']);
});

Route::group(['prefix'=>'portfolio' , 'middleware' => 'auth'], function(){
    Route::get('/portfolio', [App\Http\Controllers\Portfolio\PortfolioController::class, 'index'])->name('myportfolio');
    Route::get('/create',[App\Http\controllers\Portfolio\PortfolioController::class, 'create'])->name('create_portfolio');
    Route::post('save_portfolio', [App\Http\Controllers\Portfolio\PortfolioController::class, 'store'])->name('save_portfolio');
    Route::get('/edit_portfolio/{id}', [App\Http\Controllers\Portfolio\PortfolioController::class, 'edit']);
    Route::post('/update_profile/{id}', [App\Http\Controllers\Portfolio\PortfolioController::class, 'update']);
    Route::get('/delete_portfolio/{id}', [App\Http\Controllers\Portfolio\PortfolioController::class, 'destroy']);
});

Route::group(['prefix' => 'services' , 'middleware' => 'auth'], function (){
    Route::get('/services', [App\Http\Controllers\Services\ServiceController::class, 'index'])->name('myservices');
    Route::get('/create_service',[App\Http\Controllers\Services\ServiceController::class, 'create'])->name('create_services');
    Route::post('/add_service', [App\Http\Controllers\Services\ServiceController::class, 'store'])->name('add_service');
    Route::get('/edit_service/{id}', [App\Http\Controllers\Services\ServiceController::class, 'edit']);
    Route::post('/update_service/{id}', [App\Http\Controllers\Services\ServiceController::class , 'update']);
});

Route::group(['prefix' => 'resume' , 'middleware' => 'auth'], function(){
    Route::get('resume', [App\Http\Controllers\Resume\ResumeController::class, 'index'])->name('my_resume');
    Route::get('create_resume', [App\Http\Controllers\Resume\ResumeController::class, 'create'])->name('create_resume');
    Route::post('save_experience', [App\Http\Controllers\Resume\WorkController::class, 'store'])->name('save_experience');
    Route::get('experience/edit/{id}',[App\Http\Controllers\Resume\WorkController::class, 'edit']);
    Route::post('experience/update/{id}',[App\Http\Controllers\Resume\WorkController::class, 'update']);
    Route::get('experience/delete/{id}',[App\Http\Controllers\Resume\WorkController::class, 'destroy']);
    Route::post('save_education', [App\Http\Controllers\Resume\EducationController::class, 'store'])->name('save_education');
    Route::get('education/edit/{id}', [App\Http\Controllers\Resume\EducationController::class, 'edit']);
    Route::post('education/update/{id}',[App\Http\Controllers\Resume\EducationController::class, 'update']);
    Route::get('education/delete/{id}', [App\Http\Controllers\Resume\EducationController::class, 'destroy']);
});

Route::group(['prefix' => 'testimonials' , 'middleware' => 'auth'], function(){
    Route::get('testimonial', [App\Http\Controllers\Testimonials\TestimonialController::class, 'index'])->name('testimonials');
    Route::get('create_testimonial', [App\Http\Controllers\Testimonials\TestimonialController::class, 'create'])->name('create_testimonials');
    Route::post('save_testimonial', [App\Http\Controllers\Testimonials\TestimonialController::class, 'store'])->name('save_testimonial');
    Route::get('edit_testimonial/{id}', [App\Http\Controllers\Testimonials\TestimonialController::class,'edit']);
    Route::post('update_testimonial/{id}', [App\Http\Controllers\Testimonials\TestimonialController::class, 'update']);
    Route::get('delete_testimonial/{id}', [App\Http\Controllers\Testimonials\TestimonialController::class, 'destroy']);
});