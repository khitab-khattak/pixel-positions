<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use App\Http\Requests\UpdateJobRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Arr;

class JobController extends Controller
{
   
    public function index()
    {
        $jobs = Job::latest()->get()->groupBy('featured');


        return view('jobs.index', [
            'jobs' => $jobs->get(0, []),
            'featuredJobs' => $jobs->get(1, []), 
            'tags' => Tag::select('id', 'name')->get()
        ]);
    }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Ensure tags are split into an array
        $tags = is_array($request->tags) ? explode(',', $request->tags[0]) : [];
    
        $attributes = $request->validate([
            'title'     => ['required'],
            'salary'    => ['required'],
            'location'  => ['required'],
            'schedule'  => ['required', Rule::in(['Part Time', 'Full Time'])],
            'url'       => ['required', 'active_url'],
            
            'tags'      => ['nullable', 'array'],
        ]);
    
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public'); // Stores in storage/app/public/logos
            $attributes['logo'] = $logoPath;
        }
        $attributes['featured'] = $request->has('featured');
    
        // Save job details (excluding tags)
        $job = Auth::user()->employer->jobs()->create(Arr::except($attributes, 'tags'));
    
        // Attach tags separately
        foreach ($tags as $tagName) {
            $tag = Tag::firstOrCreate(['name' => trim($tagName)]);
            $job->tags()->attach($tag->id);
        }
    
        return redirect('/')->with('success', 'Job created successfully!');
    }
    
    
    

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
