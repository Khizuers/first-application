<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

// Homepage
Route::get('/', function () {
    return view('home');
})->name('home');

// ------------------------
// JOB ROUTES (Resourceful)
// ------------------------

Route::resource('jobs', JobController::class);
