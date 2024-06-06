<?php

use App\Http\Controllers\adminArtisan;
use App\Http\Controllers\adminclient;
use App\Http\Controllers\adminController;
use App\Http\Middleware\admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Lahbari Routes 
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->middleware('auth', 'artisan')->name('home');
Route::get('/artisan', [ArtisanController::class, 'index'])->name('artisan.index')->middleware('auth');

// Ghafir Routes
Route::get('/',function() {
    if(Auth::check()) {
        $user_type = Auth::user()->usertype;
        return view('Ghafir.home',['user_type'=>$user_type]);
    }
    return view('Ghafir.home');
})->name('page_home');
Route::middleware(admin::class)->prefix('admin')->name('admin.')->group(function() {
    Route::get('/home',[adminController::class,'index'])->name('overview');
    Route::resources([
        'artisan' =>adminArtisan::class,
        'client' => adminclient::class
    ]);
});

// Kablaoui Routes


// Zarria Routes


// Moukhtari Routes




