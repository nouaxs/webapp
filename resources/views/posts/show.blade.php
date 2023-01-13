@extends('layouts.app')

@section('title', 'This post')

@section('content')
    <p>{{$post->caption}}</p>
@endsection