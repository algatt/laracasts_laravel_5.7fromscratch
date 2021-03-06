<?php

namespace App\Http\Controllers;

use App\Events\ProjectCreated;
use Illuminate\Http\Request;
use \App\Mail\ProjectCreated as ProjectCreatedMail;
use \App\Project;

class ProjectController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        
        return view ('projects.index', [
            'projects' => auth()->user()->projects
        ]);
    }

    public function create(){
        return view ('projects.create');
    }

    // to change key item look for Route Key Binding
    public function show(Project $project){
        $this->authorize('update',$project);
        return view ('projects.show', compact('project'));
    }


    public function store(){
        
        // if it does not validate, it returns back
        // validation rules
        $attributes = $this->validateProject();

        $attributes['owner_id'] = auth()->id();

        $project = Project::create($attributes);

        //event(new ProjectCreated($project));   

        session()->flash('message','Your project has been created.');

        return redirect('/projects');
    }

    public function edit(Project $project){
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project){

        
        $this->authorize('update',$project);
        
        $project->update($this->validateProject());
        
        return redirect('/projects');
    }

    public function destroy(Project $project){
        $this->authorize('update',$project);
        $project->delete();
        return redirect('/projects');   
    }

    protected function validateProject()
    {
        return request()->validate([
            'title' => ['required','min:3', 'max:255'],
            'description' => ['required','min:3']
        ]);    
    }

}
