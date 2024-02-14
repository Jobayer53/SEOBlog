<?php

namespace App\Livewire;

use Photo;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Category as ModelsCategory;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Category extends Component
{
    use WithFileUploads;
    public $name, $seo_title, $seo_description, $seo_tags, $parent_category,$image, $category_id, $delete_id;
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
        $category->parent_category  = $this->parent_category;
        $category->name             = $this->name;
        $category->image            = Photo::$name;
        $category->slugs            = Str::slug($this->name);
        $category->seo_title        = $this->seo_title;
        $category->seo_description  = $this->seo_description;
        $category->seo_tags         = $this->seo_tags;
        $category->save();

        $this->reset();
        $this->dispatch('close-modal');

    }

    public function edit($id){
        $category = ModelsCategory::find($id);
        $this->parent_category  = $category->parent_category ;
        $this->name             =  $category->name ;
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
        $category->parent_category  = $this->parent_category;
        $category->name             = $this->name;
        $category->slugs            = Str::slug($this->name);
        $category->seo_title        = $this->seo_title;
        $category->seo_description  = $this->seo_description;
        $category->seo_tags         = $this->seo_tags;
        $category->save();
        $this->dispatch('close-modal');
    }
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
        $this->dispatch('close-modal');
    }
}
