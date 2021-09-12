@extends('master')
@section('content')

<h1>All Post</h1>
@foreach($posts as $post)
<div class="card mt-2">
    <div class="card-border mt-2 pl-2">
        <h2>
            <a href="{{route('posts.show', $post -> id)}}">{{$post -> title}}</a>
            <a href="{{route('posts.edit', $post -> id)}}" class="btn btn-primary">Edit</a>
            <form action="{{route('posts.destroy', $post -> id)}}" method="post" class="d-inline-block">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </h2>
    </div>
</div>
@endforeach
@endsection