<?php

use App\Http\Controllers\Backend\Category;
use App\Http\Controllers\BlogContentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ConfigController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SocialLinkController;
use App\Livewire\Blog;

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
Route::get('/news/show',[FrontendController::class, 'newsShow'])->name('news_show');
Route::get('/news/readnews/{id}',[FrontendController::class, 'readnews'])->name('readNews');
Route::get('/blog',[FrontendController::class, 'blog'])->name('blog');
Route::get('/about',[FrontendController::class, 'about'])->name('about');
Route::get('/contact',[FrontendController::class, 'contact'])->name('contact');
Route::get('/privacypolicy',[FrontendController::class, 'privacypolicy'])->name('privacypolicy');
Route::get('/readblog/{id}',[FrontendController::class, 'readblog'])->name('readblog');

// Dashboard View
// Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
Route::get('/admin', [HomeController::class, 'index'])->name('home');

//category
// Route::resource('/category', Category::class);
Route::get('/category', [CategoryController::class,'index'])->name('category');

//config
Route::get('/config',[ConfigController::class, 'index'])->name('config');
//news
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
Route::post('/news/store', [NewsController::class, 'store'])->name('news.store');
Route::get('/news/edit/{id}', [NewsController::class, 'edit'])->name('news.edit');
Route::post('/news/update', [NewsController::class, 'update'])->name('news.update');

//social link
Route::get('/social/link', [SocialLinkController::class, 'index'])->name('social.link');
//blogs

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
//blog content
Route::resource('/blog_content', BlogContentController::class, );

Route::get('/blog/contents/{id}',[BlogContentController::class, 'index'])->name('blog.content');
Route::get('/blog/contents/create/{id}',[BlogContentController::class, 'create'])->name('blog.content.create');
Route::post('/blog/contents/update',[BlogContentController::class, 'update'])->name('blog.content.update');
Route::post('/blog/contents/delete',[BlogContentController::class, 'delete'])->name('blog.content.delete');
Route::get('/blog/contents/status/{id}',[BlogContentController::class, 'status'])->name('blog.content.status');
