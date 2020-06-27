@extends('layouts/main')



@section('content')

    <div class="row">
        <div class="col-sm-8"><h3>{{$post->title}}</h3></div>
        <div class="col-sm-2"><a href="/posts/{{$post->id}}/edit" style="color:white;" class="btn btn-warning">Edit</a></div>
        <div class="col-sm-2">
            {{--{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}--}}
            <form method="POST" action="/posts/{{$post->id}}">
                @csrf
                @method('DELETE')
                {{--<input type="hidden" name="_method" value="Delete">--}}
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>
        </div>
    </div>

    <hr>
    <p>{{$post->body}}</p>
@endsection
