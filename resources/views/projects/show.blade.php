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
                        <div>
                            <form method="POST" action="/tasks/{{$task->id}}">
                                @method('PATCH')
                                {{ csrf_field() }}
                                <input class="form-check-input" type="checkbox" name="completed" onChange="this.form.submit()" 
                                 {{$task->completed ? 'checked': '' }}>
                                <label for="completed" class="form-check-label {{$task->completed ? 'is-complete': '' }}">{{$task->description}}</label>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
   
   
@endsection
