@extends ('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title">{{$project->title}}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>{{$project->description}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a class="btn btn-primary" href="/projects/{{$project->id}}/edit">Edit</a>
            </div>
        </div>
    </div>
   
   
@endsection
