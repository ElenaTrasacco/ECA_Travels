<?php

namespace App\Livewire;

use App\Models\Travel;
use Livewire\Component;
use App\Models\Category;

class SearchBar extends Component
{
    public $search = "";
    

    public function render()
    {
        $results = [];
        $category = Category::where('name', 'like', '%' .$this->search. '%')->get();
        $travel_accepted = Travel::where('is_accepted', true);

        if($this->search){
            if(count($category)){
                $results = $travel_accepted->where('title','like', '%' .$this->search. '%')->orWhere('description', 'like', '%' .$this->search. '%')->orWhereBelongsTo($category)->limit(7)->get();
            }
            else
            {
                $results = $travel_accepted->where('title','like', '%' .$this->search. '%')->orWhere('description', 'like', '%' .$this->search. '%')->limit(7)->get();
            }
        }
        return view('livewire.search-bar', [
            'travels' => $results
        ]);
    }
}
