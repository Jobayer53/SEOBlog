<?php

namespace App\Http\Controllers;

use App\Models\News;
use Photo;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index(){
        return view('backend.news.news');
    }
    public function create(){
        return view('backend.news.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Photo::upload($request->image,'upload/news','NEWS');
        $news = new News();

        $news->title            = $request->title;
        $news->content          = $request->content;
        $news->image            = Photo::$name;
        $news->seo_title        = $request->seo_title;
        $news->seo_description  = $request->seo_description;
        $news->seo_tags         = $request->seo_tags;
        $news->status         = '1';
        $news->save();

        return redirect(route('news'))->with('added','Added successfully');
    }

    public function edit($id){
        $news = News::find($id);
        return view('backend.news.edit',compact('news'));
    }
    public function update(Request $request){
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        $news = News::find($request->news_id);
        if ($request->image) {
            if($news->image == null){
                Photo::upload($request->image,'upload/news','NEWS');
                $news->image = Photo::$name;
            }else{
                Photo::delete('upload/news',$news->image);
                Photo::upload($request->image,'upload/news','NEWS');
                $news->image = Photo::$name;
            }
        }
        $news->title            = $request->title;
        $news->content          = $request->content;
        $news->seo_title        = $request->seo_title;
        $news->seo_description  = $request->seo_description;
        $news->seo_tags         = $request->seo_tags;
        $news->save();
        return redirect(route('news'))->with('updated','Updated Successfully');

    }



}
