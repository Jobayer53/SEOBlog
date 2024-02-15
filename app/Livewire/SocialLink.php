<?php

namespace App\Livewire;

use App\Models\SocialLink as ModelsSocialLink;
use Livewire\Component;

class SocialLink extends Component
{
    public $link,$icon,$name,$social_id,$delete_id,$error;


    public function render()
    {
        $socials = ModelsSocialLink::orderBy('id', 'desc')->get();
        return view('livewire.social_link.social-link',compact('socials'));
    }
    public function store(){
        $this->validate([
            'icon' =>'required',
            'link' => 'required',
        ]);

        $socials = new ModelsSocialLink();
        $socials->icon         = $this->icon;
        $socials->link         = $this->link;
        $socials->name         = $this->name;
        $socials->save();

        $this->reset();
        $this->dispatch('close-modal');
    }

    public function edit($id){
        $socials = ModelsSocialLink::find($id);

        $this->icon             = $socials->icon ;
        $this->name             = $socials->name ;
        $this->link             = $socials->link ;
        $this->social_id        = $socials->id ;
    }

    public function update(){

        $this->validate([
            'icon' =>'required',
            'link' => 'required',
        ]);

        $socials = ModelsSocialLink::find($this->social_id);


        $socials->icon         = $this->icon;
        $socials->link         = $this->link;
        $socials->name         = $this->name;
        $socials->save();
        $this->reset();

        $this->dispatch('close-modal');
    }

//delete
    public function delete_assing($id){
        $this->delete_id = $id;
    }
    public function delete(){
        if($this->delete_id){
            $socials = ModelsSocialLink::find($this->delete_id);
            $socials->delete();
        $this->dispatch('close-modal');
        }

    }

    public function close(){
        $this->reset();
       $this->resetValidation();
        $this->dispatch('close-modal');
    }

}


