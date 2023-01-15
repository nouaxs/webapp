@extends('layouts.app')

@section('title')
    Posts
@endsection

<head>
    <link rel="stylesheet" href="{{ asset('postcontainer.css') }}" />
</head>

@section('content')
<div class="scroll">
    <p>The posts on this platform</p>
    <div class="post">
        <form method="POST" action="{{ route('posts.store') }}">
            @csrf
            <div>
                <label for='post'>Write your post here (max:400 characters)</label>
            </div>
            <input type="text" name="caption" value="{{ old('caption') }}">
            <div>
                <button>Add post</button>
            </div>
    </div>
    </form>
    @foreach ($posts as $post)
        <div class="post">
            <div class="post_user">
                <span><a href="users/{{ $post->user_id }}">{{ $post->user->name }}</a> posted</span>
            </div>
            <div class="post_body">
                {{ $post->caption }}...
            </div>
            <div>
                <a href="posts/{{ $post->id }}">see full post</a>
            </div>
            <div class="post">
                Comments:
                <div class="post_user">
                    <span><a href="users/{{ $post->user_id }}">{{ $post->user->name }}</a> posted</span>
                </div>
                <div class="post_body">
                    @if ($post->comments->count() != 0)
                        {{ $post->comments->first()->content }}
                    @endif
                </div>
            </div>
        </div>
    @endforeach
    <div>
        {{ $posts->links('pagination::bootstrap-4') }}
    </div>
</div>
@endsection
