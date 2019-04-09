@extends('layout')


@section('content')
    <h1 class="title">Create a new Project</h1>
    <br/>
  
    <form method="POST" action="/projects">
    {{ csrf_field() }}
    
        <div class="field">
            <label class="label">Project Name</label>
            <div class="control">
                <input class="input" type="text" name="title" placeholder="Project Title" required value="{{old('title')}}">
            </div>
        </div>

        <div class="field">
            <label class="label">Project Description</label>
            <div class="control">
                <textarea class="textarea" name="description" placeholder="Project Description" required>{{old('description')}}</textarea>
            </div>
        </div>
            
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create Project</button>
            </div>
        </div>
    </form>
        
     
    @incude('errors')

    </div>
    
@endsection