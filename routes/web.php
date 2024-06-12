<?php

use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Lahbari Routes 
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->middleware('auth', 'artisan')->name('home');
Route::get('/artisan', [ArtisanController::class, 'index'])->name('artisan.index')->middleware('auth');

// Ghafir Routes
Route::get('/',function() {
    return view('Ghafir.home');
})->name('landingpage');

// Kablaoui Routes


// Zarria Routes
Route::get('/artisan', [ArtisanController::class, 'index'])->name('artisan.index');


// Moukhtari Routes




