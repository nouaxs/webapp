@extends('layouts.app')

@section('title')
    Posts
@endsection

@section('content')

    <p>The posts on this platform</p>
    <ul>
        @foreach ($posts as $post)
            <li><a href="{{ route('posts.show', ['id' => $post->id]) }}">{{ $post->caption }}</a></li>
        @endforeach
    </ul>
    <a href="{{route('posts.create')}}">Create Post</a>
@endsection