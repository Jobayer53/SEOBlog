<?php

namespace App\Livewire;

use Photo;
use Livewire\Component;
use App\Models\Category;
use App\Models\BlogContent;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use App\Models\Blog as ModelsBlog;
use Livewire\WithoutUrlPagination;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Blog extends Component
{
    use WithFileUploads;
    use WithPagination, WithoutUrlPagination;
    public $title, $seo_title, $seo_description, $seo_tags,$features_image, $category_id,$blog_id, $delete_id;

    public $query;
    public function search(){
        $this->resetPage();
    }


    public function render()
    {

        $categories = Category::all();
        // $blogs = ModelsBlog::orderBy('id','desc')->paginate(10);
        $blogs = ModelsBlog::where('title', 'like', '%'.$this->query.'%')

        ->paginate(10);



        return view('livewire.blog.blog',[
            'categories' => $categories,
            'blogs' => $blogs,
        ]);
    }

//store
public function store(){
    $this->validate([
        'title'=> 'required',
        'features_image'=> 'required',
        'category_id'=> 'required',
    ]);
    Photo::upload($this->features_image,'upload/blog','BLOG');

    $blogs = new ModelsBlog();
    $blogs->category_id      = $this->category_id;
    $blogs->title            = $this->title;
    $blogs->features_image   = Photo::$name;
    $blogs->slugs            = Str::slug($this->title);
    $blogs->seo_title        = $this->seo_title;
    $blogs->seo_description  = $this->seo_description;
    $blogs->seo_tags         = $this->seo_tags;
    $blogs->save();

    $this->reset();
    $this->dispatch('close-modal');

}
//edit
public function edit($id){
    $category = ModelsBlog::find($id);
    $this->category_id      = $category->category_id ;
    $this->title            = $category->title ;
    $this->seo_title        = $category->seo_title ;
    $this->seo_description  = $category->seo_description;
    $this->seo_tags         = $category->seo_tags ;
    $this->blog_id          = $category->id ;

}
//update
public function update(){

    $this->validate([
        'title'=> 'required',

        'category_id'=> 'required',
    ]);

    $blogs = ModelsBlog::find($this->blog_id);

    if($this->features_image){
        Photo::delete('upload/blog',$blogs->features_image);
        Photo::upload($this->features_image,'upload/blog','BLOG');
        $blogs->features_image = Photo::$name;
    }


    $blogs->category_id      = $this->category_id;
    $blogs->title            = $this->title;
    $blogs->slugs            = Str::slug($this->title);
    $blogs->seo_title        = $this->seo_title;
    $blogs->seo_description  = $this->seo_description;
    $blogs->seo_tags         = $this->seo_tags;
    $blogs->save();
    $this->reset();
    $this->dispatch('close-modal');
}

//delete
public function delete_assing($id){
    $this->delete_id = $id;
}
public function delete(){
    if($this->delete_id){

        $blogs = ModelsBlog::find($this->delete_id);

        foreach($blogs->blogContentData as $data){
            if($data->video){
                $file_path = public_path('upload/blog-content/'.$data->video);
                unlink($file_path);
            }
            if($data->image){
                Photo::delete('upload/blog-content',$data->image);
            }
            $data->delete();
        }
            Photo::delete('upload/blog',$blogs->features_image);
            $blogs->delete();
            $this->dispatch('close-modal');
    }

}
//close modal
public function close(){
    $this->reset();
    $this->resetValidation();
    $this->dispatch('close-modal');
}
}
