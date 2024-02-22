<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogContent;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

//index
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
        $newsAll = News::all();
        if($newsAll->last()){
            $newsData = News::where('status','=','1')
            ->where('id','!=',($newsAll->last()->id))
            ->orderBy('id', 'desc')
            ->take(7)
            ->get();
        }
        else{
            $newsData= null;
        }

        return view('frontend.index',compact('categories','newsData','newsAll'));//
    }
    //blog
    public function blog(){
        $blogs = Blog::where('status','=','1')->orderBy('id','desc')->get();
        return view('frontend.blog',compact('blogs'));
    }
    //read blogs
    public function readblog($id){
        $check = BlogContent::find($id);
        if($check && $check->status == 1){
            $blogContents = BlogContent::where('blog_id', $id)->where('status','=','1')->get();
            $blogs = Blog::where('status','=','1')
            ->orderBy('id','desc')
            ->take(6)
            ->get();

        }
        else{
            $blogContents  =null;
            $blogs =null;
        }
        // $blogContents = BlogContent::where('blog_id', $id)->get();
        // $blogs = Blog::orderBy('id','desc')->take(6)->get();
        return view('frontend.readblog',compact('blogContents','blogs'));
    }
    //news
    public function newsShow(){
        $news = News::where('status','=','1')->orderBy('id', 'desc')->get();
        return view('frontend.news', compact('news'));
    }
    //read news
    public function readnews($id){
        $check = News::find($id);
        if($check && $check->status == 1){
            $news = News::find($id);
            $news10 = News::where('status','=','1')
            ->where('id','!=',($news->id))
            ->orderBy('id', 'desc')
            ->take(10)
            ->get();
        }
        else{
            $news= null;
            $news10 = null;
        }



        // $news10 = News::where('id','!=',$news->id)->orderBy('id','desc')->take(10)->get();
        return view('frontend.readnews',compact('news','news10'));
    }
    //about
    public function about(){
        return view('frontend.about');
    }
    //contact
    public function contact(){
        return view('frontend.contact');
    }
    //privacy policy
    public function privacypolicy(){
        return view('frontend.privacypolicy');
    }

}
