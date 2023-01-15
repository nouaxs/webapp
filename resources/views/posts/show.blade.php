@extends('layouts.app')

@section('content')
    <div class="scroll">

        <div class="post">
            <h4><a href="{{ url('/users/'. $post->user->id) }}">{{ $post->user->name }}</a> posted:</h4>
            <div class="post_body">
                <h2>{{ $post->caption }}</h2>
            </div>
            @if ($post->user->id == auth()->user()->id)
                <a href="{{ route('posts.edit', $post->id) }}">Edit post</a>
            @endif
            <div class="post">
                <form method="POST" action="{{ route('comments.store', ['post_id' => $post->id]) }}">
                    @csrf
                    <div>
                        <label for='comment'>Write your comment here (max:80 characters)</label>
                    </div>
                    <textarea name="content" rows="4" cols="50" maxlength='80'></textarea>
                    <div>
                        <button class="btn_nav">Add comment</button>
                    </div>
                </form><br>
            </div>

            @foreach ($post->comments as $comment)
                <div class="post">
                    <div class="post_user">
                        <span><a href="users/{{ $comment->user_id }}">{{ $comment->user->name }}</a> commented</span>
                    </div>
                    <div class="post_body">
                        <h2>{{ $comment->content }}</h2>
                        <br>
                        @if ($post->user->id == auth()->user()->id)
                        <form action="{{ route('comments.delete', ['comment_id' => $comment->id]) }}" method="delete">
                            @csrf
                            <button class="btn_nav">Delete comment</button>
                        </form>
                        @endif
                    </div>
                </div>
            @endforeach
            @if ($post->user->id == auth()->user()->id)
                <br>
                <form action="{{ route('posts.delete', ['post_id' => $post->id]) }}" method="delete">
                    @csrf
                    <button class="btn_nav">Delete post</button>
                </form>
                <br>
            @endif
        </div>
    </div>
@endsection
