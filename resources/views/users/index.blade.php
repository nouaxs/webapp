@extends('layouts.app')

@section('title')
    Users
@endsection

@section('content')

    <p>The users on this platform</p>
    <ul>
        @foreach ($users as $user)
            <li>{{$user->name}}</li>
        @endforeach
    </ul>
@endsection