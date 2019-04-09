@extends ('layout')

@section('content')
    
    <h1 class="title">{{$project->title}}</h1>
     
    <p>{{$project->description}}</p>
    
    <a href="/projects/{{$project->id}}/edit">Edit</a>
      
    @if ($project->tasks->count())
        <div class="box" style="margin-top:20px;">
            @foreach ($project->tasks as $task)
                <div>
                    <form method="POST" action="/completed-tasks/{{$task->id}}">
                        @if ($task->completed)
                            @method('DELETE')
                        @endif
                        {{ csrf_field() }}
                        <label for="completed" class="form-check-label {{$task->completed ? 'is-complete': '' }}">
                            <input class="form-check-input" type="checkbox" name="completed" onChange="this.form.submit()" {{$task->completed ? 'checked': '' }}>
                            {{$task->description}}
                        </label>
                    </form>
                </div>
            @endforeach
        </div>
    @endif
    
    <div class="box" >
        <form method="POST" action="/projects/{{$project->id}}/tasks">
            {{ csrf_field() }}
            <div class="field">
                <label class="label" for="description">New Task</label>
                <div class="control">
                    <input type="text" class="input" name="description" placeholder="Description" required>
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-link">Add Task</button>
                </div>
            </div>
            @include ('errors')
        </form>
    </div>

    
    
   
@endsection
