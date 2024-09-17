<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use App\Models\Favourite;
use Illuminate\Http\Request;

class FavouriteController extends Controller
{

    public function like(Favourite $favourite){

    }
    //o è travel?
    public function unlike(Favourite $favourite){
        
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $travel = Travel::all();
        // $favourites = Favourite::all();
        // return view('favourite.index', compact('favourites'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $travel = Travel::all();
        //lo vede nella create il checkbox mentre a me serve nella lista
        // return view('favourite.create', compact('travel'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Favourite $favourite)
    {
        //dovrei fare qualcosa mi sa
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Favourite $favourite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Favourite $favourite)
    {
        $favourite->users()->attach(Auth::user()->id);
        // return redirect()->back()->with('message', "L'articolo $favourites->title è tra i tuoi preferiti");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Favourite $favourite)
    {
        //devo fare qualcosa?
    }
}
