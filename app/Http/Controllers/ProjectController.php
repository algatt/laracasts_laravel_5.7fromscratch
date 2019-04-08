<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Project;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::all();
        
        return view ('projects.index', compact('projects'));
    }

    public function create(){
        return view ('projects.create');
    }

    public function show(Project $project){

    }

    public function store(){
        $project = new Project();
        $project->title = request('title');
        $project->description = request('description');
        $project->save();

        return redirect('/projects');
    }

    public function edit(Project $project){

    }

    public function update(Project $project){

    }

    public function destroy(Project $project){

    }

}