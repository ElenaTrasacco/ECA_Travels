<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RevisorController extends Controller 
{
    public function index()
    {
        $travel_to_check = Travel::where('is_accepted', null)->first();
        return view('revisor.index', compact('travel_to_check'));  
    }

    public function accept(Travel $travel)
    {
        $travel->setAccepted(true);
        return redirect()->back()->with('message',"Hai accettato l'articolo $travel->title");
    }

    public function reject(Travel $travel)
    {
        $travel->setAccepted(false);
        return redirect()->back()->with('message',"Hai rifiutato l'articolo $travel->title");
    }
}
