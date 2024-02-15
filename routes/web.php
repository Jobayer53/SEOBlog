<?php

use App\Http\Controllers\Backend\Category;
use App\Http\Controllers\BlogContentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ConfigController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SocialLinkController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Frontend View
Route::get('/',[FrontendController::class, 'index'])->name('index');
Route::get('/blog',[FrontendController::class, 'blog'])->name('blog');
Route::get('/about',[FrontendController::class, 'about'])->name('about');
Route::get('/contact',[FrontendController::class, 'contact'])->name('contact');
Route::get('/privacypolicy',[FrontendController::class, 'privacypolicy'])->name('privacypolicy');
Route::get('/readblog',[FrontendController::class, 'readblog'])->name('readblog');

// Dashboard View
// Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
Route::get('/home', [HomeController::class, 'index'])->name('home');

//category
// Route::resource('/category', Category::class);
Route::get('/category', [CategoryController::class,'index'])->name('category');

//config
Route::get('/config',[ConfigController::class, 'index'])->name('config');
//news
Route::get('/news', [NewsController::class, 'index'])->name('news');
//social link
Route::get('/social/link', [SocialLinkController::class, 'index'])->name('social.link');
//blogs
Route::get('/blogs', [BlogContentController::class, 'index'])->name('blogs');
