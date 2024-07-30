<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home(){
        $travels = Travel::orderBy('created_at','desc')->take(3)->get();
        return view('welcome',compact('travels'));
        
    }
}
