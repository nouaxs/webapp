@extends('layouts.app')

@section('title')
    Posts
@endsection

@section('content')

    <p>The posts on this platform</p>
    <a href="{{route('posts.create')}}">Create Post</a>
    <ul style="list-style: none;">
        @foreach ($posts as $post)
            <li><a href="{{ route('posts.show', ['id' => $post->id]) }}">{{ $post->caption }}</a></li>
        @endforeach
    </ul>
    <div>
        {{ $posts->links('pagination::bootstrap-4') }}
        
    </div>
@endsection