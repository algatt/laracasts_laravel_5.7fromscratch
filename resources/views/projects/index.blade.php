@extends('layout')


@section('content')
    <h1>Projects</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Project</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <td><a href="/projects/{{$project->id}}">{{$project->title}}</td></a>
                <td>{{$project->description}}</td>
                <td><a class="btn btn-link" href="/projects/{{$project->id}}/edit">Edit</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection