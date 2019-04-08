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
                <a class="btn-link" href="/projects/{{$project->id}}/edit">Edit</a>
            </div>
        </div>

        @if ($project->tasks->count())
            <h4 style="margin-top:20px;"> Tasks </h4>
            <div class="row" style="margin:0px 0px 10px 20px;">
                <div class="col-12">
                    @foreach ($project->tasks as $task)
                        <li>{{$task->description}}</li>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
   
   
@endsection
