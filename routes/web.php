<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvenementController;

// 1. Map the root '/' to the index method AND give it the name 'evenements.index'
Route::get('/', [EvenementController::class, 'index'])->name('evenements.index');

// 2. Define the other resource routes
Route::resource('evenements', EvenementController::class)->except(['index']);