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
        if(strlen($this->search) >= 1){
            $results = Travel::where('title', 'like', '%' .$this->search. '%')->limit(5)->get();
            
        }
        return view('livewire.search-bar', [
            'travels' => $results
        ]);
    }
}
