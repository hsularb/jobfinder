<?php

namespace App\Http\Controllers;

use App\Job;
use App\JobType;
use App\Category;
use App\Company;
use App\Location;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Job::all();
        return view('backend.job.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $company = Company::all();
        $location = Location::all();
        $type = JobType::all();
        return view('backend.job.create',compact('category','company','location','type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'title' => 'required',
            'short_description' => 'required',
            'full_description' => 'required',
            'requirements' => 'required',
            'address' => 'required',
            'salary' => 'required',
            'top_rated' => 'required',
            'type_id' => 'required',
            'company_id' => 'required',
            'location_id' => 'required',
        ]);
        
        $job =  Job::create($validatedData);

        $job->category()->sync($request->states);

        return redirect('job')->withStatus(__('Job successfully created.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Job::find($id);
        $category = Category::all();
        $company = Company::all();
        $location = Location::all();
        $type = JobType::all();
        return view('backend.job.create',compact('data','category','company','location','type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'short_description' => 'required',
            'full_description' => 'required',
            'requirements' => 'required',
            'address' => 'required',
            'salary' => 'required',
            'top_rated' => 'required',
            'type_id' => 'required',
            'company_id' => 'required',
            'location_id' => 'required',
        ]);

        $job = Job::whereId($id)->update($validatedData);

        $job->category()->sync($request->states);

        return redirect('job')->withStatus(__('Job successfully updated.'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::find($id);
        $job->delete();

        return redirect('job')->withStatus(__('Job successfully deleted.'));
    }
}
