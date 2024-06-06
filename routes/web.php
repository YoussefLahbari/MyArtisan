<?php

use App\Http\Controllers\adminArtisan;
use App\Http\Controllers\adminclient;
use App\Http\Controllers\adminController;
use App\Http\Middleware\admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Lahbari Routes 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Middleware pour artisan
Route::get('dashboard', function(){
    return view('Kablaoui.example');
})->middleware('auth', 'artisan');

// Ghafir Routes
Route::get('/',function() {
    return view('Ghafir.home');
})->name('home');
Route::middleware(admin::class)->prefix('admin')->group(function() {
    Route::get('/home',[adminController::class,'index'])->name('overview');
    Route::resources([
        'artisan' =>adminArtisan::class,
        'client' => adminclient::class
    ]);
});

// Kablaoui Routes


// Zarria Routes


// Moukhtari Routes




