@extends('layouts.app')

@section('title')
    Posts
@endsection

<head>
    <link rel="stylesheet" href="{{ asset('postcontainer.css') }}" />
    @@livewireStyles
</head>

@section('content')
    @livewireScripts
    <p>The posts on this platform</p>
    <div class="post">
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <div>
            <label for='post'>Write your post here (max:400 characters)</label>
        </div>
        <p>Post: <input type="text" name="caption" value="{{ old('caption') }}"> </p>
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
            <livewire:livewire-comments/>
        </div>
    @endforeach
    <div>
        {{ $posts->links('pagination::bootstrap-4') }}
    </div>
@endsection
