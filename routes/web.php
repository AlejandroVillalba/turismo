<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlojamientoController;


Route::get('/home', HomeController::class );

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('admin.index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::resource('/alojamiento', AlojamientoController::class)->middleware('auth');
