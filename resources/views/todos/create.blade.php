@extends('layouts.app')

@section('content')
    <h1>Create Todo</h1>
    <form action="/todo" method="post">
        @csrf
        <div class="">
            <div class="form-group">Todo Text: <input class="form-control" type="text" name="text"></div>
            <div class="form-group">Due Date: <input class="form-control" type="text" name="due"></div>
            <div class="form-group">Todo Body: <textarea class="form-control" name="body"></textarea></div>
            <div class="form-group"><input class="btn btn-primary" type="submit" value="Create Todo"></div>
        </div>
    </form>
@endsection