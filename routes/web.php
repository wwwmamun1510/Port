<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\FactController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IntroductionController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/home', [HomeController::class,'index'])->name('home');
Route::get('/', [FrontendController::class,'welcome']);
Route::get('/about', [FrontendController::class,'about']);
Route::get('/contact', [FrontendController::class,'contact']);
Route::post('/add/users', [HomeController::class,'add_users'])->name('add.users');
Route::get('/admin', [FrontendController::class, 'admin']);

//Message
Route::get('/message', [MessageController::class,'index']);
Route::post('add-message',[MessageController::class,'store']);
Route::get('edit-message/{id}',[MessageController::class,'edit']);
Route::put('update-message/{id}', [MessageController::class,'update']);
Route::delete('delete-message/{id}', [MessageController::class,'delete']);



//Testimonial
Route::get('/testimonial', [TestimonialController::class,'index']);
Route::post('add-testimonial',[TestimonialController::class,'store']);
Route::get('edit-testimonial/{id}',[TestimonialController::class,'edit']);
Route::put('update-testimonial/{id}', [TestimonialController::class,'update']);
Route::delete('delete-testimonial/{id}', [TestimonialController::class,'delete']);

//Introduction
Route::get('/introduction', [IntroductionController::class,'index']);
Route::post('add-introduction',[IntroductionController::class,'store']);
Route::get('edit-introduction/{id}',[IntroductionController::class,'edit']);
Route::put('update-introduction/{id}', [IntroductionController::class,'update']);
Route::delete('delete-introduction/{id}', [IntroductionController::class,'delete']);

//Area
Route::get('/area', [AreaController::class,'index']);
Route::post('add-area',[AreaController::class,'store']);
Route::get('/edit-area/{id}',[AreaController::class,'edit']);
Route::put('update-area/{id}', [AreaController::class,'update']);
Route::delete('delete-area/{id}', [AreaController::class,'delete']);


//Service
Route::get('/service', [ServiceController::class,'index']);
Route::post('add-service',[ServiceController::class,'store']);
Route::get('edit-service/{id}',[ServiceController::class,'edit']);
Route::put('update-service/{id}', [ServiceController::class,'update']);
Route::delete('delete-service/{id}', [ServiceController::class,'delete']);


//Blog
Route::get('/blog', [BlogController::class,'index']);
Route::post('add-blog',[BlogController::class,'store']);
Route::get('edit-blog/{id}',[BlogController::class,'edit']);
Route::get('/edit/blog',[BlogController::class,'edit_blog']);
Route::put('update-blog/{id}', [BlogController::class,'update']);
Route::delete('delete-blog/{id}', [BlogController::class,'delete']);

//Blog
Route::get('/logo', [LogoController::class,'index']);
Route::post('add-logo',[LogoController::class,'store']);
Route::get('/edit-logo/{id}',[LogoController::class,'edit']);
Route::put('update-logo/{id}', [LogoController::class,'update']);
Route::delete('delete-logo/{id}', [LogoController::class,'delete']);

//Banner
Route::get('/banner', [BannerController::class,'index']);
Route::post('add-banner',[BannerController::class,'store']);
Route::get('/edit-banner/{id}',[BannerController::class,'edit']);
Route::put('update-banner/{id}', [BannerController::class,'update']);
Route::delete('delete-banner/{id}', [BannerController::class,'delete']);

//Banner
Route::get('/contact', [ContactController::class,'index']);
Route::post('add-contact',[ContactController::class,'store']);
Route::get('/edit-contact/{id}',[ContactController::class,'edit']);
Route::put('update-contact/{id}', [ContactController::class,'update']);
Route::delete('delete-contact/{id}', [ContactController::class,'delete']);

//Sponsor
Route::get('/sponsor', [SponsorController::class,'index']);
Route::post('add-sponsor',[SponsorController::class,'store']);
Route::get('edit-sponsor/{id}',[SponsorController::class,'edit']);
Route::put('update-sponsor/{id}', [SponsorController::class,'update']);
Route::delete('delete-sponsor/{id}', [SponsorController::class,'delete']);

//Education
Route::get('/education',[EducationController::class,'index']);
Route::post('add-education',[EducationController::class,'store']);
Route::get('edit-education/{id}',[EducationController::class,'edit']);
Route::put('update-education/{id}', [EducationController::class,'update']);
Route::delete('delete-education/{id}', [EducationController::class,'delete']);

//Social
Route::get('/social',[SocialController::class,'index']);
Route::post('add-social',[SocialController::class,'store']);
Route::get('edit-social/{id}',[SocialController::class,'edit']);
Route::put('update-social/{id}', [SocialController::class,'update']);
Route::delete('delete-social/{id}', [SocialController::class,'delete']);

//profile
Route::get('/profile/edit', [ProfileController::class, 'profile']);
Route::post('/profile/update', [ProfileController::class, 'update']);
Route::post('/password/update', [ProfileController::class, 'pass_update']);
Route::post('/photo/change', [ProfileController::class, 'photo_edit']);