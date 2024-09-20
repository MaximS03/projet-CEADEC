<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('index');
});

Route::get('/presentation', function () {
    return view('presentation');
});
Route::get('/publication', function () {
    return view('publication');
});
Route::get('/formation' , function () {
    return view('formation');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/realisation', function () {
    return view('realisation');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::post('/submit-form', [ContactController::class, 'sendContactForm']);




Route::middleware(['auth'])->group(function () {
    Route::resource('admin/formations', FormationController::class);
    Route::resource('admin/services', ServiceController::class);
    Route::resource('admin/publications', PublicationController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
