@extends('layouts/main')


@section('content')

    <h1>Create a New:</h1>

    <form action="/posts" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" required  placeholder="Enter Post title">

        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <input type="textarea" name="body" class="form-control" required placeholder="Enter Post body">
        </div>
        <button type="submit" class="btn btn-primary">Post</button>
    </form>

@endsection
