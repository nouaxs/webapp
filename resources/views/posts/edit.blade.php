@extends('layouts.app')

@section('content')

    <div class="post">
        <div class="post_body">
            The post you want to edit:
            {{ $post->caption }}
            <form method="POST" action="{{ route('posts.update', ['id' => $post->id]) }}">
                @csrf
                @method('PUT')
                <div>
                    <label for='caption'>Type your changed post (max:800 characters)</label>
                </div>
                <textarea name="caption" rows="4" cols="50" maxlength='800'></textarea><br>
                <div>
                    <button class="btn_nav">Update post</button>
                </div><br>
                <a href="{{ route('posts.show', ['id' => $post->id]) }}">Cancel</a>
            </form>
        </div>
    </div>
@endsection


