<?php

namespace App\Livewire;

use App\Models\Travel;
use Livewire\Component;

class SearchBar extends Component
{
    public $search = "";

    public function render()
    {
        $results = [];
        if($this->search){
            $results = Travel::where('title', 'like', '%' .$this->search. '%')->limit(5)->get();
            $results = Travel::where('description', 'like', '%' .$this->search. '%')->limit(5)->get();
            $results = Travel::where('category_id', 'like', '%' .$this->search. '%')->limit(5)->get();
        }
        return view('livewire.search-bar', [
            'travels' => $results
        ]);
    }
}
