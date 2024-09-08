<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PublicationController;

Route::get('/', function () {
    return view('index');
});

Route::get('/presentation', function () {
    return view('presentation');
});
Route::get('/formations' , function () {
    return view('formations');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/realisations', function () {
    return view('realisations');
});
Route::get('/contact', function () {
    return view('contact');
});



Route::middleware(['auth'])->group(function () {
    Route::resource('admin/formations', FormationController::class);
    Route::resource('admin/services', ServiceController::class);
    Route::resource('admin/publications', PublicationController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
