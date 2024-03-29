<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SEOController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Backend\Category;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SocialLinkController;
use App\Http\Controllers\BlogContentController;
use App\Http\Controllers\SocialShareController;



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
//sitemap
Route::get('/sitemap',[SEOController::class, 'sitemap'])->name('sitemap');

// Frontend View
Route::get('/',[FrontendController::class, 'index'])->name('index');
Route::get('/news',[FrontendController::class, 'newsShow'])->name('news_show');
Route::get('/news/readnews/{id}',[FrontendController::class, 'readnews'])->name('readNews');
Route::get('/category/{slug}/blogs/',[FrontendController::class, 'categoryBlogs'])->name('category.blog');
Route::get('/blogs',[FrontendController::class, 'blog'])->name('blog');
Route::get('/about',[FrontendController::class, 'about'])->name('about');
Route::get('/contact',[FrontendController::class, 'contact'])->name('contact');
Route::get('/privacypolicy',[FrontendController::class, 'privacypolicy'])->name('privacypolicy');
Route::get('/readblog/{id}',[FrontendController::class, 'readblog'])->name('readblog');
Route::get('/contact/thanks',[FrontendController::class, 'thanks'])->name('thanks');
Route::post('/contact/message/store',[ContactController::class, 'contact_store'])->name('contact.store');

// Dashboard View
// Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

Route::middleware('auth')->prefix('sd_admin')->group(function (){
    Route::get('/admin', [HomeController::class, 'index'])->name('home');
    Route::get('/category', [CategoryController::class,'index'])->name('category');
    Route::get('/config',[ConfigController::class, 'index'])->name('config');
    Route::get('/news', [NewsController::class, 'index'])->name('news');
    Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('/news/store', [NewsController::class, 'store'])->name('news.store');
    Route::get('/news/edit/{id}', [NewsController::class, 'edit'])->name('news.edit');
    Route::post('/news/update', [NewsController::class, 'update'])->name('news.update');
    Route::get('/social/link', [SocialLinkController::class, 'index'])->name('social.link');
    Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
    // Route::resource('/blog_content', BlogContentController::class, );
    Route::get('/blog/contents/{slugs}',[BlogContentController::class, 'index'])->name('blog.content');
    Route::get('/blog/contents/edit/{id}',[BlogContentController::class, 'edit'])->name('blog.content.edit');
    Route::get('/blog/contents/create/{slugs}',[BlogContentController::class, 'create'])->name('blog.content.create');
    Route::post('/blog/contents/store',[BlogContentController::class, 'store'])->name('blog.content.store');
    Route::post('/blog/contents/update',[BlogContentController::class, 'update'])->name('blog.content.update');
    Route::post('/blog/contents/delete',[BlogContentController::class, 'delete'])->name('blog.content.delete');
    Route::get('/blog/contents/status/{id}',[BlogContentController::class, 'status'])->name('blog.content.status');
    Route::get('/contact/message',[ContactController::class, 'index'])->name('contact.message');
    Route::get('/profile',[DashboardController::class, 'index'])->name('profile');
    Route::post('/profile/update',[DashboardController::class, 'profile_update'])->name('profile_update');
});


