<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

// Homepage
Route::get('/', function () {
    return view('home');
})->name('home');

// ------------------------
// JOB ROUTES
// ------------------------

// All Jobs (Index)
Route::get('/jobs', function () {
    return view('jobs.index', [
        'jobs' => Job::with('employer')->paginate(10)
    ]);
})->name('jobs.index');

// Show Create Job Form
Route::get('/jobs/create', function () {
    return view('jobs.create');
})->name('jobs.create');

// Store a New Job
Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1, // Hard-coded for now
    ]);

    return redirect()->route('jobs.index')->with('success', 'Job created successfully!');
})->name('jobs.store');

// Show Single Job
Route::get('/jobs/{job}', function (Job $job) {
    return view('jobs.show', [
        'job' => $job->load('employer')
    ]);
})->name('jobs.show');

// Show Edit Job Form
Route::get('/jobs/{job}/edit', function (Job $job) {
    return view('jobs.edit', ['job' => $job]);
})->name('jobs.edit');

// Update Job (PATCH)
Route::patch('/jobs/{job}', function (Job $job) {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);

    return redirect('/jobs/' . $job->id)->with('success', 'Job updated successfully!');
})->name('jobs.update');

// Delete Job
Route::delete('/jobs/{job}', function (Job $job) {
    $job->delete();

    return redirect()->route('jobs.index')->with('success', 'Job deleted successfully!');
})->name('jobs.destroy');
