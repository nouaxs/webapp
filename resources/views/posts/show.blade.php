@extends('layouts.app')

@section('content')
    <div class="scroll">
        
        <div class="post">
            <a href="users/{{ $post->user_id }}">{{ $post->user->name }}</a> posted:
            <div class="post_body">
                {{ $post->caption }}
            </div>
            <div class="post">
                <form method="POST" action="{{ route('comments.store', ['post_id' => $post->id]) }}">
                    @csrf
                    <div>
                        <label for='comment'>Write your comment here (max:80 characters)</label>
                    </div>
                    <textarea name="content" rows="4" cols="50" maxlength='80'></textarea>
                    <div>
                        <button>Add comment</button>
                    </div>
                </form>
            </div>
            @foreach ($post->comments as $comment)
                <div class="post">
                    <div class="post_user">
                        <span><a href="users/{{ $comment->user_id }}">{{ $comment->user->name }}</a> commented</span>
                    </div>
                    <div class="post_body">
                        {{ $comment->content }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
