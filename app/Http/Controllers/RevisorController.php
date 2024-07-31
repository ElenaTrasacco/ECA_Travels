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
        return view('revisor.index', compact('article_to_check'));  
    }
}
