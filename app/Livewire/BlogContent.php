<?php

namespace App\Livewire;

use App\Models\Blog;
use App\Models\BlogContent as ModelsBlogContent;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Photo;

class BlogContent extends Component
{
    use WithFileUploads;
    public $blog_id, $contentTitle, $image,$video,$content;
    public function render()
    {
        $blogs = Blog::all();
        $blogContents = ModelsBlogContent::orderBy('id', 'desc')->get();
        return view('livewire.blog-content.blogContent',compact('blogs','blogContents'));
    }


    public function store(){

        $this->validate([
            'blog_id' => 'required',
            'contentTitle' => 'required',
            'content' => 'required',
        ],[
            'blog_id' => 'Blog Title Required',
            'contentTitle' => 'Content Title Required',
        ]);

        Photo::upload($this->image,'upload/blog-content','BLOG_CONTENT');


        $blogContent = new ModelsBlogContent();
        $blogContent->blog_id         =$this->blog_id;
        $blogContent->title           =$this->contentTitle;
        $blogContent->content         =$this->content;
        $blogContent->image           =Photo::$name;
        $blogContent->video           =$this->video;
        $blogContent->save();




    }



    public function close(){
        $this->reset();
        $this->resetValidation();
        $this->dispatch('close-modal');
    }
}
