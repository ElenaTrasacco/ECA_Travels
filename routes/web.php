<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\RevisorController;

Route::get('/', [PublicController::class, 'home'])->name('homepage');

Route::get('/travel/create',[TravelController::class,'create'])->name('travel.create');
Route::get('/travel/index',[TravelController::class,'index'])->name('travel.index');
Route::get('/travel/show/{travel}',[TravelController::class,'show'])->name('travel.show');
Route::get('/travel/category/{category}',[TravelController::class,'byCategory'])->name('travel.category');

Route::get('/revisor/index', [RevisorController::class, 'index'])->name('revisor.index');
Route::patch('/accept/{travel}',[RevisorController::class,'accept'])->name('accept');
Route::patch('/reject/{travel}',[RevisorController::class,'reject'])->name('reject');




