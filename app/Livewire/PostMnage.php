<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostMnage extends Component
{
  public $title,$body;
  public $showfrom=false;
  public $search;
  use WithPagination;

    public function render()
    {

        return view('livewire.post-mnage',['posts'=>Post::where('title','LIKE','%' . $this->search . '%')
        ->orWhere('body','LIKE','%' . $this->search . '%')
        ->paginate(10)]);
    }



    public function createdata(){
        $this->resetform();
    $this->showfrom=true;
    $this->shoreditform=false;
    }


    public function resetform(){
        $this->title='';
        $this->body='';
    }

    public function cancel(){
 $this->showfrom=false;
 $this->shoreditform=false;
    }



    public function insertData(){
        $this->validate([
            'title'=>'required',
            'body'=>'required'
        ]);

        Post::create([
            'title'=>$this->title,
            'body'=>$this->body
        ]);
         $this->showfrom=false;

        session()->flash('success',"post create successfully");
    }

    public $shoreditform=false,$PostId;

    public function edit($id){
        $post=Post::find($id);
        $this->title=$post->title;
        $this->body=$post->body;
        $this->PostId=$post->id;
        $this->shoreditform=true;
         $this->showfrom=false;
    }

    public function updateData(){

     $this->validate([
            'title'=>'required',
            'body'=>'required'
        ]);
        $post=Post::find($this->PostId);

        $post->update([
            'title'=>$this->title,
            'body'=>$this->body
        ]);
         $this->showfrom=false;
          $this->shoreditform=false;

        session()->flash('success',"post Updated  successfully");

    }

    public function delete($id){
        Post::find($id)->delete();
         session()->flash('success',"post deleted  successfully");

    }

}
