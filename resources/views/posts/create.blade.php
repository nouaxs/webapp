@extends('layouts.app')

@section('title')
    Create new Post
@endsection

@section('content')
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <div>
            <label for='post'>Write your post here (max:400 characters)</label>
        </div>
        <p>Post: <input type="text" name="caption" value="{{ old('caption') }}"> </p>
        <div>
            <button>Add post</button>
        </div>
        <a href="{{ route('posts.index') }}">Cancel</a>
    </form>
@endsection
