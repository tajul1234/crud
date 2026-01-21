<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class Productt extends Component
{

public $products,$updateProduct=false;
    public function render()
    {

    $this->products=Product::latest()->get();

        return view('livewire.productt');
    }

    public $createaData=false,$title,$body;

    public function resetForm(){
        $this->title='';
        $this->body='';

    }

    public function addCretae(){
       $this->resetForm();
       $this->createaData = true;
       $this->updateProduct=false;
    }

     public function cancel(){
         $this->createaData = false;
         $this->updateProduct=false;
    }
    public function SubmitData(){
        $this->validate([
            'title'=>'required',
            'body'=>'required'
        ]);
        Product::create([
            'title'=>$this->title,
            'body'=>$this->body
        ]);
         $this->createaData = false;
        session()->flash('success','Product create successfull');
    }
    public $postId;

    public function editData($id){
        $post=Product::find($id);
        $this->title=$post->title;
        $this->body=$post->body;
        $this->postId=$post->id;
        $this->updateProduct=true;
         $this->createaData = false;
    }

    public function UpdateDataa(){
        $post=Product::find($this->postId);

        $this->validate([
            'title'=>'required',
            'body'=>'required'
        ]);
        $post->update([
            'title'=>$this->title,
            'body'=>$this->body
        ]);
         $this->createaData = false;
        session()->flash('success','Product Update successfull');


    }
}
