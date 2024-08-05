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
            $results = Travel::where('title','like', '%' .$this->search. '%')->orWhere('description', 'like', '%' .$this->search. '%')->orWhereIn('category_id', [1, 2, 3,  4, 5, 6, 7, 8, 9, 10])->limit(5)->get();
            // ->orBelongsTo()->limit(5)->get();
        }
        return view('livewire.search-bar', [
            'travels' => $results
        ]);
    }
}
