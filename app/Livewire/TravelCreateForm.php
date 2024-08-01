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


protected $rules = [
    'title' => 'required|min:3|max:20',
    'price' => 'required|numeric',
    'description' => 'required|min:5|max:2000',
    'time' => 'required|numeric',
    'category' => 'required'

];

protected $messages = [
            'title.required' => 'Il titolo è richiesto',
            'description.required' => 'La descrizione è richiesta',
            'price.required' => 'Il prezzo è richiesto',
            'category.required' => 'La categoria è richiesta',
            'time.required' => 'Il numero di giorni consigliati è richiesto',
            'title.min' => 'Il titolo deve avere almeno 3 caratteri',
            'title.max' => 'Il titolo deve avere al massimo 20 caratteri',
            'description.min' => 'La descrizione deve avere almeno 5 caratteri',
            'description.max' => 'La descrizione deve avere al massimo 2000 caratteri',
            'price.numeric' => 'Il dato deve essere un numero',
            'time.numeric' => 'Il dato deve essere un numero',
            
];



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
