@extends('layouts/main')


@section('content')

<h1>All Posts:</h1>
<ul class="list-group">

        @foreach($posts as $post)
        <li class="list-group-item">
            <h3>{{$post->title}}</h3>
            <a href="/posts/{{$post->id}}">Read more...</a>
            <hr>
            <small>Created on: {{$post->created_at}}</small>
        </li>
        @endforeach
    {{$posts->links()}}

</ul>
@endsection
