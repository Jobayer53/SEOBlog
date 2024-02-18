<?php

namespace App\Http\Controllers;

use Photo;
use App\Models\Blog;
use App\Models\BlogContent;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BlogContentController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
       return view('backend.blog-content.blogList',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $blogs = Blog::all();
        return view('backend.blog-content.create',compact('blogs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'blog_id' => 'required|',
            'contentTitle' => 'required',
            'content' => 'required',
        ],[
            'blog_id' => 'Blog Title Required',
            'contentTitle' => 'Content Title Required',
        ]);

        Photo::upload($request->image,'upload/blog-content','BLOG_CONTENT');
        $videoName=null;
       if($request->file('video')){
        $video = $request->file('video');
        $extention = $video->getClientOriginalExtension();
        $videoName = 'VID_'.(rand(0,99999)).'_'.$request->contentTitle.'.'.$extention;
        $video->storeAs('upload/blog-content', $videoName, 'public');
       }


        $blogContent = new BlogContent();
        $blogContent->blog_id         =$request->blog_id;
        $blogContent->title           =$request->contentTitle;
        $blogContent->content         =$request->content;
        $blogContent->image           =Photo::$name;
        $blogContent->video           =$videoName;
        $blogContent->video_link      =$request->video_link;
        $blogContent->save();
        return redirect(route('blog_content.index'));




    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
        $blogContents = BlogContent::where('blog_id', $id)->get();
        return view('backend.blog-content.blogContent',compact('blogContents'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
