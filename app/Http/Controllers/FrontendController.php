<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogContent;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        //category data
        $categories = null;
        $categoryCount = Category::all()->count();
        if($categoryCount < 6 ){
            $categories = Category::take(3)->get();
        }elseif($categoryCount >= 6 && $categoryCount < 9 ){
             $categories = Category::take(6)->get();
        }elseif($categoryCount >= 9 ){
            $categories = Category::take(9)->get();
        }

        // category data end here

        // $news = News::orderBy('id', 'desc')->get()->first()->id;
        $newsAll = News::orderBy('id', 'desc')->get();
        $newsData = News::where('id', '!=',($newsAll->first()->id))
        ->orderBy('id', 'desc')
        ->take(7)
        ->get();

        return view('frontend.index',compact('categories','newsData','newsAll'));//
    }
    public function blog(){
        $blogs = Blog::orderBy('id','desc')->get();
        return view('frontend.blog',compact('blogs'));
    }
    public function newsShow(){
        $news = News::orderBy('id', 'desc')->get();
        return view('frontend.news', compact('news'));
    }
    public function readnews($id){
        $news = News::where('id' , $id)->get()->first();

        $newsData = News::where('id', '!=',$news->id)->inRandomOrder()->limit(6)->get();
        $news10 = News::where('id','!=',$news->id)->orderBy('id','desc')->take(10)->get();
        return view('frontend.readnews',compact('news','newsData','news10'));
    }
    public function about(){
        return view('frontend.about');
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function privacypolicy(){
        return view('frontend.privacypolicy');
    }
    public function readblog($id){
        $blogContents = BlogContent::where('blog_id', $id)->get();
        $blogs = Blog::orderBy('id','desc')->take(6)->get();
        return view('frontend.readblog',compact('blogContents','blogs'));
    }
}
