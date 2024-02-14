<?php

namespace App\Livewire;

use App\Models\Config as ModelsConfig;
use Livewire\Component;

class Config extends Component
{
    public $name, $seo_title, $seo_description, $seo_tags, $config_id, $delete_id, $error = false;



    public function render()
    {   $configs = ModelsConfig::orderBy('id','desc')->get();   
        return view('livewire.config.config',compact('configs'));
    }

    public function store(){
     
        $this->validate([
            'name'=> 'required',
        ]);

        if(!ModelsConfig::where('name',$this->name)->exists()){
            $config = new ModelsConfig();
            $config->name             = $this->name;
            $config->seo_title        = $this->seo_title;
            $config->seo_description  = $this->seo_description;
            $config->seo_tags         = $this->seo_tags;
            $config->save();
            $this->error = false;
            $this->reset();
            $this->dispatch('close-modal');
        }else{
            $this->error = true;

        }
    }

    public function edit($id){
        $config = ModelsConfig::find($id);

        $this->name             = $config->name ;
        $this->seo_title        = $config->seo_title ;
        $this->seo_description  = $config->seo_description;
        $this->seo_tags         = $config->seo_tags ;
        $this->config_id        = $config->id ;
        
    }
    public function update(){
        $this->validate([
            'name'=> 'required',
        ]);
        $config = ModelsConfig::find($this->config_id);
        if($this->name == $config->name){
            $config->name             = $this->name;
            $config->seo_title        = $this->seo_title;
            $config->seo_description  = $this->seo_description;
            $config->seo_tags         = $this->seo_tags;
            $config->save();
            $this->dispatch('close-modal');
        }else{
            
            if(!ModelsConfig::where('name',$this->name)->exists()){
                $config->name             = $this->name;
                $config->seo_title        = $this->seo_title;
                $config->seo_description  = $this->seo_description;
                $config->seo_tags         = $this->seo_tags;
                $config->save();
                $this->reset();
                $this->dispatch('close-modal');
            }else{
                $this->error = true;
            } 
        }
        
    }   



    public function delete_assing($id){
        $this->delete_id = $id;
    }
    public function delete(){

        if($this->delete_id){
            $category = ModelsConfig::find($this->delete_id);
            $category->delete();
            
            $this->dispatch('close-modal');
        }
    }




    public function close(){
        $this->reset();
        $this->dispatch('close-modal');
    }



}
