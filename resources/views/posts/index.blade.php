@extends('master')
@section('content')

<h1>All Post</h1>
@foreach($posts as $post)
<div class="card mt-2">
    <div class="card-border">
        <h2><a href="{{route('posts.show', $post -> id)}}">{{$post -> title}}</a></h2>
    </div>
</div>
@endforeach
@endsection