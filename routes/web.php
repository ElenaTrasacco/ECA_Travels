<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\TravelController;

Route::get('/', [PublicController::class, 'home'])->name('homepage');

Route::get('/travel/create',[TravelController::class,'create'])->name('travel.create');
Route::get('/travel/index',[TravelController::class,'index'])->name('travel.index');
Route::get('/travel/show/{travel}',[TravelController::class,'show'])->name('travel.show');

