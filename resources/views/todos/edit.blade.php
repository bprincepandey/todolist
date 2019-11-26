@extends('layouts.app')
    
@section('content')
    <a href="/todo/{{$todo->id}}" class="btn btn-secondary">Go Back</a>
    <h1>Edit Todo</h1>
    <form action="/todo/{{$todo->id}}" method="post">
        @csrf

        @method('put')

        <div class="">
            <div class="form-group">Todo Text: <input class="form-control" type="text" name="text" value="{{$todo->text}}"></div>
            <div class="form-group">Due Date: <input class="form-control" type="text" name="due" value="{{$todo->due}}"></div>
            <div class="form-group">Todo Body: <textarea class="form-control" name="body">{{$todo->body}}</textarea></div>
            <div class="form-group"><input class="btn btn-primary" type="submit" value="Update Todo"></div>
        </div>
    </form>
@endsection