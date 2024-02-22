<?php

namespace App\Livewire;

use App\Models\Blog;
use Photo;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Category as ModelsCategory;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Category extends Component
{
    use WithFileUploads;
    public $name, $seo_title, $seo_description, $seo_tags, $parent_category,$image, $category_id, $delete_id,$select;

    public function render()
    {
        $categories = ModelsCategory::orderBy('id','desc')->get();
        return view('livewire.category.category',compact('categories'));;
    }
    public function store(){
        $this->validate([
            'name'=> 'required',
        ]);
        Photo::upload($this->image,'upload/category','CAT');

        $category = new ModelsCategory();
        $category->parent_category  = $this->parent_category?$this->parent_category:null;
        $category->name             = $this->name;
        $category->image            = Photo::$name;
        $category->slugs            = Str::slug($this->name);
        $category->seo_title        = $this->seo_title;
        $category->seo_description  = $this->seo_description;
        $category->seo_tags         = $this->seo_tags;
        $category->status         = '1';
        $category->save();
        $this->select = false;
        $this->reset();
        $this->dispatch('close-modal');

    }

    public function edit($id){
        $category = ModelsCategory::find($id);
        $this->select = $category->parent_category;

        $this->parent_category  = $category->parent_category ;
        $this->name             = $category->name ;
        $this->seo_title        = $category->seo_title ;
        $this->seo_description  = $category->seo_description;
        $this->seo_tags         = $category->seo_tags ;
        $this->category_id      = $category->id ;

    }
    public function update(){

        $this->validate([
            'name'=> 'required',

        ]);
        $category = ModelsCategory::find($this->category_id);

        if ($this->image) {
            if($category->image == null){
                Photo::upload($this->image,'upload/category','CAT');
                $category->image = Photo::$name;
            }else{
                Photo::delete('upload/category',$category->image);
                Photo::upload($this->image,'upload/category','CAT');
                $category->image = Photo::$name;
            }
        }
        $category->parent_category  = $this->parent_category?$this->parent_category:null;
        $category->name             = $this->name;
        $category->slugs            = Str::slug($this->name);
        $category->seo_title        = $this->seo_title;
        $category->seo_description  = $this->seo_description;
        $category->seo_tags         = $this->seo_tags;
        $category->save();
        $this->reset();
        $this->select = false;
        $this->dispatch('close-modal');
    }
//status
    public function status($id){
        $category = ModelsCategory::find($id);
        if($category->status == 1){
            if($category->cat_to_blog->count() != 0){
                // $blogs = Blog::where('category_id',$category->id)->update(['status' => '0', ]);
                $blogs = Blog::where('category_id',$category->id)->get();
            foreach($blogs as $blog){
                dd($blog->blogContentData->id);
            }


            }
            else{
                dd('nai');
            }
        }




    }
//delete
    public function delete_assing($id){
        $this->delete_id = $id;
    }
    public function delete(){

if($this->delete_id){
    $category = ModelsCategory::find($this->delete_id);
    if($category->image == null){
        $category->delete();
    }else{
        Photo::delete('upload/category',$category->image);
        $category->delete();
    }
  $this->dispatch('close-modal');
}

    }

    public function close(){
        $this->reset();
        $this->resetValidation();
        $this->dispatch('close-modal');
    }
}
