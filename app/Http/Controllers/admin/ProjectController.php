<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    private $project;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.projects.index', [
            'projects' => Project::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projects.create', [
            'categories' => ProjectCategory::orderBy('id', 'DESC')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Project::projectUpdateOrCreate($request);
        return redirect()->back()->with('success', 'Project Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.projects.edit', [
            'project' => Project::where('id', $id)->first(),
            'categories' => ProjectCategory::orderBy('id', 'DESC')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Project::projectUpdateOrCreate($request, $id);
        return redirect()->route('projects.index')->with('success', 'Project Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->project = Project::find($id);
        if($this->project->image){
            if(file_exists($this->project->image)){
                unlink($this->project->image);
            }
        }
        $this->project->delete();
        return redirect()->back()->with('success', 'Project Deleted Successfully');
    }

    public function changeStatus($id){
        $project = Project::find($id);
        if($project->status == 1){
            $project->status = 0;
        }else{
            $project->status = 1;
        }
        $project->save();
        return redirect()->back()->with('success', 'Project Status Successfully');
    }











}
