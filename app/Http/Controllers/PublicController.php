<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home(){
        $travels = Travel::where('is_accepted', true)->orderBy('created_at','desc')->take(3)->get();
        return view('welcome',compact('travels')); 
    }
    public function searchTravel(Request $request)
    {
        $query= $request->input('query');
        $travels= Travel::search($query)->where('is_accepted', true)->paginate(10);
        return view('travel.searched', ['travels'=> $travels,'query'=>$query]);
    }
}
