@extends('layout')


@section('content')
    <h1>Create a new Project</h1>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10">
                <form method="POST" action="/projects">
                    {{ csrf_field() }}
                    <div style="margin-bottom:10px;">
                        <input type="text" name="title" placeholder="Project Title">
                    </div>

                    <div style="margin-bottom:10px;">
                        <textarea name="description" placeholder="Project Description"></textarea>
                    </div>

                    <div style="margin-bottom:10px;">
                        <button type="submit" class="btn btn-primary">Create Project</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection