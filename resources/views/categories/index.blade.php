@extends('layouts.app')

@section('title')
    Categories
@endsection

@section('content')

    <p>The categories on this platform</p>
    <ul>
        @foreach ($categories as $category)
            <li><a href="{{ route('category.show', ['id' => $category->id]) }}">{{ $category->categoryname }}</a></li>
        @endforeach
    </ul>
@endsection