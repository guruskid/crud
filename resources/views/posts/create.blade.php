@extends('master')
@section('content')
<h2>Add a Post</h2>
@if($errors -> all())
<div class="alert alert-danger">
    @foreach($errors -> all() as $error)
    <li>{{$error}}</li>
    @endforeach
</div>
@endif
<form action="{{route('posts.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control">
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-info">Add Post</button>
    </div>
</form>
@endsection