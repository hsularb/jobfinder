<?php

namespace App\Http\Controllers;

use App\JobType;
use Illuminate\Http\Request;

class JobTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = JobType::all();
        // dd($data);
        return view('backend.jobtype.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.jobtype.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validatedData = $request->validate([
            'name' => 'required|max:255'
        ]);
        
        JobType::create($validatedData);

        return redirect('type')->withStatus(__('JobType successfully created.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JobType  $jobType
     * @return \Illuminate\Http\Response
     */
    public function show(JobType $jobType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JobType  $jobType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = JobType::find($id);
        return view('backend.jobtype.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JobType  $jobType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255'
        ]);

        JobType::whereId($id)->update($validatedData);

        return redirect('type')->withStatus(__('JobType successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JobType  $jobType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = JobType::find($id);
        $data->delete();

        return redirect('type')->withStatus(__('JobType successfully deleted.'));
    }
}
