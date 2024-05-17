<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;


class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->paginate(10);
        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required', 'min:4']
        ]);

        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1
        ]);
        return redirect('/jobs');
    }

    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Job $job)
    {
    //validate
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required', 'min:4']
        ]);
        //authorize (on hold...)

        //update
        $job->title = request('title');
        $job->salary = request('salary');
        $job->save();
        //persist

        //redirect
        return redirect('/jobs/' . $job->id);
    }

    public function destroy(Job $job)
    {
        //authorize (on hold...)
        //delete the job
            $job->delete();
        //redirect
        return redirect('/jobs');
    }
}
