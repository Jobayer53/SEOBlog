<?php

namespace App\Livewire;

use Photo;
use Livewire\Component;
use App\Models\News as ModelsNews;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class News extends Component
{
    use WithFileUploads;
    public $title,$content,$seo_title, $seo_description, $seo_tags, $image, $news_id, $delete_id;
    public function render()
    {
        $news = ModelsNews::orderBy('id', 'desc')->get();
        return view('livewire.news.news',compact('news'));
    }

    // public function store(){

    //     $this->validate([
    //         'title' => 'required',
    //         'content' => 'required',
    //     ]);

    //     Photo::upload($this->image,'upload/news','NEWS');
    //     $news = new ModelsNews();

    //     $news->title            = $this->title;
    //     $news->content          = $this->content;
    //     $news->image            = Photo::$name;
    //     $news->seo_title        = $this->seo_title;
    //     $news->seo_description  = $this->seo_description;
    //     $news->seo_tags         = $this->seo_tags;
    //     $news->save();

    //     $this->reset();
    //     $this->dispatch('close-modal');


    // }

    // public function edit($id){
    //     $news = ModelsNews::find($id);

    //     $this->title            = $news->title ;
    //     $this->content          = $news->content;
    //     $this->seo_title        = $news->seo_title;
    //     $this->seo_description  = $news->seo_description;
    //     $this->seo_tags         = $news->seo_tags;
    //     $this->news_id          = $news->id;
    // }
    // public function update(){



    //     $this->validate([
    //         'title' => 'required',
    //         'content' => 'required',
    //     ]);
    //     $news = ModelsNews::find($this->news_id);

    //     if ($this->image) {
    //         if($news->image == null){
    //             Photo::upload($this->image,'upload/news','NEWS');
    //             $news->image = Photo::$name;
    //         }else{
    //             Photo::delete('upload/news',$news->image);
    //             Photo::upload($this->image,'upload/news','CAT');
    //             $news->image = Photo::$name;
    //         }
    //     }
    //     $news->title            = $this->title;
    //     $news->content          = $this->content;
    //     $news->seo_title        = $this->seo_title;
    //     $news->seo_description  = $this->seo_description;
    //     $news->seo_tags         = $this->seo_tags;
    //     $news->save();
    //     $this->content="";

    //     $this->dispatch('close-modal');
    // }
//delete
    public function delete_assing($id){
        $this->delete_id = $id;
    }
    public function delete(){
        if($this->delete_id){
            $news = ModelsNews::find($this->delete_id);
            if($news->image == null){
                $news->delete();
            }else{
                Photo::delete('upload/news',$news->image);
                $news->delete();
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
