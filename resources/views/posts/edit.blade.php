@extends('layouts/main')


@section('content')

    <h1>Create a New:</h1>

    <form action="/posts/{{$post->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" value="{{$post->title}}" name="title" class="form-control" required  placeholder="Enter Post title">

        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <input type="textarea" value="{{$post->body}}" name="body" class="form-control" required placeholder="Enter Post body">
        </div>
        <button type="submit" class="btn btn-primary">Post</button>
    </form>

@endsection
