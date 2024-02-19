<?php

namespace App\Http\Controllers;

use Photo;
use App\Models\Blog;
use App\Models\BlogContent;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class BlogContentController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $blogs =  Blog::find($id);
        $blogContents = BlogContent::where('blog_id',$id)->orderBy('id','desc')->get();
        return view('backend.blog-content.blogContent',compact('blogContents','blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
         $blogs = Blog::find($id);
        return view('backend.blog-content.create',compact('blogs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'contentTitle' => 'required',
            'content' => 'required',
        ],[

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
        $blogContent->video_link      =$request->videoLink;
        $blogContent->save();
        return redirect(route('blog.content',$request->blog_id))->with('added', 'Added Successfully');




    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blogContents = BlogContent::find($id);
        return view('backend.blog-content.edit',compact('blogContents'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([

            'contentTitle' => 'required',
            'content' => 'required',
        ],[

            'contentTitle' => 'Content Title Required',
        ]);

        $blogContent = BlogContent::find($request->content_id);
        if ($request->image) {
            if($blogContent->image == null){
                Photo::upload($request->image,'upload/blog-content','BLOG_CONTENT');
                $blogContent->image = Photo::$name;
            }else{
                Photo::delete('upload/blog-content',$blogContent->image);
                Photo::upload($request->image,'upload/blog-content','BLOG_CONTENT');
                $blogContent->image = Photo::$name;
            }
        }
        $videoName=null;
        if ($request->file('video')) {
            if($blogContent->video == null){

                $video = $request->file('video');
                $extention = $video->getClientOriginalExtension();
                $videoName = 'VID_'.(rand(0,99999)).'_'.$request->contentTitle.'.'.$extention;
                $video->storeAs('upload/blog-content', $videoName, 'public');
            }else{
                $file_path = public_path('upload/blog-content'.$blogContent->video);
                unlink($file_path);
                $video = $request->file('video');
                $extention = $video->getClientOriginalExtension();
                $videoName = 'VID_'.(rand(0,99999)).'_'.$request->contentTitle.'.'.$extention;
                $video->storeAs('upload/blog-content', $videoName, 'public');

            }
        }







        $blogContent->title           =$request->contentTitle;
        $blogContent->content         =$request->content;
        $blogContent->video           =$videoName;
        $blogContent->video_link      =$request->video_link;
        $blogContent->save();
      return redirect(route('blog.content',$request->blog_id))->with('updated' ,'Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function delete(Request $request)
    {
        $blogContent =  BlogContent::find($request->delete_id);
        if($blogContent->video){
            $file_path = public_path('upload/blog-content/'.$blogContent->video);
            unlink($file_path);
        }
        if($blogContent->image){
            Photo::delete('upload/blog-content',$blogContent->image);
        }
        $blogContent->delete();
        return back();
    }
}
