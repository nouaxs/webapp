@extends('layouts.app')

@section('title')
    Posts
@endsection

<head>
    <link rel="stylesheet" href="{{ asset('postcontainer.css') }}" />
</head>

@section('content')
    <p>The posts on this platform</p>
    <a href="{{ route('posts.create') }}">Create Post</a>
    @foreach ($posts as $post)
        <div class="post">
            <div class="post_user">
                <span>{{ $post->user->name }}</span>
            </div>
            <div class="post_body">
                {{ $post->caption }}...
            </div>
        </div>
    @endforeach
@endsection
