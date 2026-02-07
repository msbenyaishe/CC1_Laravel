<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvenementController;

Route::resource('evenements', EvenementController::class)->except(['index']);
