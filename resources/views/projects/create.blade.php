@extends('layout')


@section('content')
    <h1>Create a new Project</h1>
    <br/>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10">
                <form method="POST" action="/projects">
                    {{ csrf_field() }}
                    <div class="input-group input-group-lg" style="margin-bottom:10px;">
                        <input type="text" class="form-control input-lg" name="title" placeholder="Project Title" required value="{{old('title')}}">
                    </div>
                    <div class="input-group input-group-lg" style="margin-bottom:10px;">
                        <textarea class="form-control input-lg" name="description" placeholder="Project Description" required>{{old('description')}}</textarea>
                    </div>
                    <div class="input-group input-group-lg" style="margin-bottom:10px;">
                        <button type="submit" class="btn btn-primary">Create Project</button>
                    </div>
                </form>
            </div>
        </div>
    
     
        @if ($errors->any())
            <div class="row" style="margin: 10px;">
                <div class="alert alert-danger col-12 col-sm-10" role="alert">
                    @foreach ($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                </div>
            </div>
        @endif

    </div>
    
@endsection