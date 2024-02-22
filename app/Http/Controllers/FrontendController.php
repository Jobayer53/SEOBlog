<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogContent;
use App\Models\Category;
use App\Models\News;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;

class FrontendController extends Controller
{

//index
    public function index(){
        //category data
        SEOMeta::setTitle('Home');
        SEOMeta::addMeta('title','rg;eishdyzug');
        SEOTools::setDescription('We are the Synex Digital Team and are Highly Motivated to Give You The Best and effective on-time Results for Your Online Presence and Traffic Growth.');
        SEOMeta::addKeyword(['business it solutions', 'service business definition', 'business communication solution']);
        SEOMeta::setCanonical('https://famillybazar.com' . request()->getPathInfo());

        $categories = null;
        $categoryCount = Category::all()->count();
        if($categoryCount < 6 ){
            $categories = Category::where('status','=','1')->take(3)->get();
        }elseif($categoryCount >= 6 && $categoryCount < 9 ){
             $categories = Category::where('status','=','1')->take(6)->get();
        }elseif($categoryCount >= 9 ){
            $categories = Category::where('status','=','1')->take(9)->get();
        }

        // category data end here

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
        // $blog = Blog::where('id',$id);
        // SEOMeta::setTitle($blog->seo_title);
        // SEOTools::setDescription($blog->seo_description);
        // SEOMeta::addKeyword($blog->seo_tags);
        // SEOMeta::setCanonical('https://planetandpower.com' . request()->getPathInfo());

        $blog = Blog::find($id);
        $blogContents = null;
        $blogs = Blog::where('status','=','1')
                ->orderBy('id','desc')
                ->take(6)
                ->get();

        if($blog->blogContentData()->exists()){
            if(BlogContent::where('blog_id', $id)->where('status','=','1')->count() == !0){
                $blogContents = $blog->blogContentData()->where('blog_id', $id)->where('status','=','1')->get();
            }
        }
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
        $news= null;
        $news10 = null;
        if($check && $check->status == 1){
            $news = News::find($id);
            $news10 = News::where('status','=','1')
            ->where('id','!=',($news->id))
            ->orderBy('id', 'desc')
            ->take(10)
            ->get();
        }
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
