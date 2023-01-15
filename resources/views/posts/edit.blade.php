@extends('layouts.app')
@section('title', 'Edit Post')

@section('content')


    <h2>Post: {{ $post->caption }}</h2>
    <p> posted by: {{ $post->user->name }}</p>
    <br>
    <br>
    <form method="POST" action="{{ route('posts.update', ['id' => $post->id]) }}">
        @csrf
        @method('PUT')
        <div>
            <label for='content'>Change post to:</label>
        </div>
        <p><input name="content" type="text"></p>
        <div>
            <button type="submit" name="update">{{ $post->caption }}</button>
        </div>
        <a href="{{ route('posts.index') }}">Cancel</a>
    </form>

@endsection
