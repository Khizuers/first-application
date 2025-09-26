<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

// Homepage
Route::get('/', function () {
    return view('home');
});

// All Jobs (with eager loading + pagination)
Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::with('employer')->paginate(10) // show 10 jobs per page
    ]);
});

// Single Job (with eager loading)
Route::get('/jobs/{id}', function ($id) {
    return view('job', [
        'job' => Job::with('employer')->findOrFail($id) // fail if job not found
    ]);
});
