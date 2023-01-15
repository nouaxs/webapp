@extends('layouts.app')

@section('title')
    Posts
@endsection



@section('content')
    <div class="scroll">

        <p>The posts on this platform</p>
        <div class="post">
            <form method="POST" action="{{ route('posts.store') }}">
                @csrf
                <div>
                    <label for='post'>Write your post here (max:800 characters)</label>
                </div>
                <textarea name="caption" rows="4" cols="50" maxlength='800'></textarea>
                <div>
                    <button class="btn_nav">Add post</button>
                </div>
        </div>
        </form>
        @if ($posts->count() > 0)
            @foreach ($posts as $post)
                <div class="post">
                    <div class="post_user">
                        <span><a href="users/{{ $post->user_id }}">{{ $post->user->name }}</a> posted</span>
                    </div>
                    <div class="post_body">
                        <h3>{{ $post->caption }}</h3>
                    </div>
                    <div>
                        <a href="posts/{{ $post->id }}">see full post</a>
                    </div>
                    <div class="post">
                        Comments:
                        <div class="post_body">
                            @if ($post->comments->count() > 0)
                                <div class="post_user">
                                    <span><a
                                            href="users/{{ $post->user_id }}">{{ $post->comments->first()->user->name }}</a>
                                        commented</span>
                                </div>
                                {{ $post->comments->first()->content }}
                            @else
                                There are no comments on this post yet
                            @endif
                        </div>
                        <a href="posts/{{ $post->id }}">add new comment</a>
                    </div>
                </div>
            @endforeach
        @else
            There are no posts on this platform yet.
        @endif
        <div>
            {{ $posts->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection
