@extends('layouts.app')

@section('content')
    <a href = "/posts" class = "btn btn-default">Go Back to All Posts</a>
    <h1>{{$post->title}}</h1>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <p>{{$post->body}}</p>

@endsection