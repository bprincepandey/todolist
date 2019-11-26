@extends('layouts.app')

@section('content')
    <a href="/" class="btn btn-secondary">Go Back</a>
    <h1><a href="/todo/{{$todo->id}}">{{$todo->text}}</a></h1>
    <div class="btn btn-danger">{{$todo->due}}</div>
    <hr>
    <p>{{$todo->body}}</p>
    <br><br>
    <a href="/todo/{{$todo->id}}/edit" class="btn btn-info">Edit</a>
    <form action="/todo/{{$todo->id}}" method="post" class="float-right">
        @csrf

        @method('delete')

        <input class="btn btn-danger" type="submit" value="Delete">
    </form>
@endsection