@extends('layouts.app')

@section('content')
    <div class="scroll">

        <div class="post">
            <h2>{{ $user->name }}'s Profile</h2>

            @if ($user->posts->count() > 0)
                @foreach ($user->posts as $post)
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
                    </div>
                @endforeach
            @else
                This user has not posted anything yet.
            @endif
        </div>
        
    </div>
@endsection
