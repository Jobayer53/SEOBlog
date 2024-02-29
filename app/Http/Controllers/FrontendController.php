<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogContent;
use App\Models\Category;
use App\Models\Config;
use App\Models\News;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\OpenGraph;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

//index
    public function index(){
        $configs = Config::where('name','=','home')->first();
        if($configs){
        SEOMeta::setTitle($configs->seo_title); //web title
       // SEOMeta::addMeta('title','rg;eishdyzug');
        SEOTools::setDescription($configs->seo_description);
        SEOMeta::addKeyword($configs->seo_tags);
        OpenGraph::setTitle($configs->seo_title);
        }
        SEOMeta::setCanonical('https://planetandpower.com' . request()->getPathInfo());
        //category data
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
        //seo
        SEOMeta::setTitle('Blogs'); //web title
        SEOMeta::addMeta('title','Blogs');
        SEOMeta::setCanonical('https://planetandpower.com' . request()->getPathInfo());
        //seo ends here
        $blogs = Blog::where('status','=','1')->orderBy('id','desc')->get();
        return view('frontend.blog',compact('blogs'));
    }
    //read blogs
    public function readblog($slugs){
        
        $shareComponent = \Share::page(
            'https://planetandpower.com/readblog/'.$slugs,
          

        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()
        ->whatsapp()
        ->reddit();

        $id = Blog::where('slugs','=',$slugs)->get()->first()->id;
        $blog = Blog::find($id);
        $blogContents = null;
        $blogs = Blog::where('status','=','1')
                ->orderBy('id','desc')
                ->take(6)
                ->get();

        if($blog->blogContentData()){
            if(BlogContent::where('blog_id', $id)->where('status',1)->count() == !0){
                $blogContents = $blog->blogContentData()->where('blog_id', $id)->where('status',1)->orderBy('id','asc')->get();

                //seo
                SEOMeta::setTitle($blog->title); //web title
                // SEOMeta::addMeta('title','rg;eishdyzug');
                SEOTools::setDescription($blog->seo_description);
                SEOMeta::addKeyword($blog->seo_tags);
                OpenGraph::setTitle($blog->seo_title);
                SEOMeta::setCanonical('https://planetandpower.com' . request()->getPathInfo());
                //seo end here
            }
        }
        return view('frontend.readblog',[
            'blogs' => $blogs,
            'blogContents' => $blogContents,
            'shareComponent' => $shareComponent,
            
        ]);
    }
    //category blogs
    public function categoryBlogs($category, $slug){
        $category = null;
        $check = Category::where('slugs',$slug)->get()->first();
        if($check->status == 1){
            $category = $check;
        }
        return view('frontend.categoryblog', compact('category'));
    }
    //news
    public function newsShow(){
        //seo
        SEOMeta::setTitle('News'); //web title
        SEOMeta::addMeta('title','News');
        SEOMeta::setCanonical('https://planetandpower.com' . request()->getPathInfo());
        //seo ends here
        $news = News::where('status','=','1')->orderBy('id', 'desc')->get();
        return view('frontend.news', compact('news'));
    }
    //read news
    public function readnews($slugs){
        $shareComponent = \Share::page(
            'https://planetandpower.com/news/readnews/'.$slugs,
          

        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()
        ->whatsapp()
        ->reddit();

        $id = News::where('slugs','=',$slugs)->get()->first()->id;
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
            //seo
            SEOMeta::setTitle($news->title); //web title
            // SEOMeta::addMeta('title','rg;eishdyzug');
            SEOTools::setDescription($news->seo_description);
            SEOMeta::addKeyword($news->seo_tags);
            OpenGraph::setTitle($news->seo_title);
            SEOMeta::setCanonical('https://planetandpower.com' . request()->getPathInfo());
            //seo end here
        }
        return view('frontend.readnews',compact('news','news10','shareComponent'));
    }
    //about
    public function about(){
        //seo
        $configs = Config::where('name','=','about')->first();
        if($configs){
        SEOMeta::setTitle($configs->seo_title); //web title
        // SEOMeta::addMeta('title','rg;eishdyzug');
        SEOTools::setDescription($configs->seo_description);
        SEOMeta::addKeyword($configs->seo_tags);
        OpenGraph::setTitle($configs->seo_title);
        }
        SEOMeta::setCanonical('https://planetandpower.com' . request()->getPathInfo());
        //seo end here

        return view('frontend.about');
    }
    //contact
    public function contact(){
        //seo
        $configs = Config::where('name','=','contact')->first();
        if($configs){
        SEOMeta::setTitle($configs->seo_title); //web title
        // SEOMeta::addMeta('title','rg;eishdyzug');
        SEOTools::setDescription($configs->seo_description);
        SEOMeta::addKeyword($configs->seo_tags);
        OpenGraph::setTitle($configs->seo_title);
        }
        SEOMeta::setCanonical('https://planetandpower.com' . request()->getPathInfo());
        //seo end here

        return view('frontend.contact');
    }
    //contact thanks page
    public function thanks(){

        SEOMeta::setTitle('Contact'); //web title
        SEOMeta::addMeta('title','contact');
        SEOMeta::setCanonical('https://planetandpower.com' . request()->getPathInfo());
        return view('frontend.thankyou');
    }

    //privacy policy
    public function privacypolicy(){
        //seo
        $configs = Config::where('name','=','privacy')->first();
        if($configs){
        SEOMeta::setTitle($configs->seo_title); //web title
        // SEOMeta::addMeta('title','rg;eishdyzug');
        SEOTools::setDescription($configs->seo_description);
        SEOMeta::addKeyword($configs->seo_tags);
        OpenGraph::setTitle($configs->seo_title);
        }
        SEOMeta::setCanonical('https://planetandpower.com' . request()->getPathInfo());
        //seo end here

        return view('frontend.privacypolicy');
    }


}
