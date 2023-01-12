@extends('layouts.app')

@section('title')
    Users
@endsection

@section('content')

    <p>The users on this platform</p>
    <ul>
        @foreach ($users as $user)
            <li><a href="{{ route('users.show', ['id' => $user->id]) }}">{{ $user->name }}</a></li>
        @endforeach
    </ul>
@endsection