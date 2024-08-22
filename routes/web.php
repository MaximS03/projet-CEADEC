<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PublicationController;

Route::get('/', function () {
    return view('index');
});



Route::middleware(['auth'])->group(function () {
    Route::resource('admin/formations', FormationController::class);
    Route::resource('admin/services', ServiceController::class);
    Route::resource('admin/publications', PublicationController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
