<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class TravelCreateForm extends Component

{
 use WithFileUploads;
 #[Validate('required|min:3|max:150')]
 public $title;
 #[Validate('required|integer')]
 public $price;
 #[Validate('required|min:3')]
 public $description;
 #[Validate('required|integer')]
 public $time;
 public $category;

 public function store(){
     $this->validate();
     Auth::user()->travels()->create([
   
        'title'=>$this->title,
        'price'=>$this->price,
        'description'=>$this->description,
        'time'=>$this->time,
        'category_id' =>$this->category

     ]);
     $this->reset();
     session()->flash('success','Viaggio inserito con successo');
 }












    public function render()
    {
        return view('livewire.travel-create-form');
    }
}
