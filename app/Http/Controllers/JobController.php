<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    // Show all jobs
    public function index()
    {
        $jobs = Job::with('employer')->paginate(10);
        return view('jobs.index', ['jobs' => $jobs]);
    }

    // Show form to create a new job
    public function create()
    {
        return view('jobs.create');
    }

    // Store new job in database
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'salary' => 'required',
        ]);

        // Keep only numbers for DB storage
        $formFields['salary'] = preg_replace('/[^0-9.]/', '', $formFields['salary']);

        // Hard-coded employer for now
        $formFields['employer_id'] = 1;

        Job::create($formFields);

        return redirect('/jobs')->with('success', 'Job created successfully!');
    }

    // Show a single job
    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    // Show form to edit a job
    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    // Update a job
    public function update(Request $request, Job $job)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'salary' => 'required',
        ]);

        // Keep only numbers for DB storage
        $formFields['salary'] = preg_replace('/[^0-9.]/', '', $formFields['salary']);

        $formFields['employer_id'] = $job->employer_id ?? 1;

        $job->update($formFields);

        return redirect('/jobs/' . $job->id)
            ->with('success', 'Job updated successfully!');
    }

    // Delete a job
    public function destroy(Job $job)
    {
        $job->delete();
        return redirect('/jobs')->with('success', 'Job deleted successfully!');
    }
}
