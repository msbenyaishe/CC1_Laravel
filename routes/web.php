<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvenementController;

/*
|--------------------------------------------------------------------------
| Home page = Event list
|--------------------------------------------------------------------------
*/
Route::get('/', [EvenementController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| Resource routes
|--------------------------------------------------------------------------
*/
Route::resource('evenements', EvenementController::class)->except(['index']);
