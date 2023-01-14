@extends('layouts.app')

<!DOCTYPE html>

<head>
    <style>
        .btn_nav {
            font: sans-serif;
            padding: 0;
            border: none;
            opacity: 0.7;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
            border-radius: 45px;
            width: 140px;
            height: 45px;
        }
    </style>
</head>

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3>Sign Up</h3>
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}" value="{{ old('caption') }}">
                    <label for="email">Your E-Mail</label>
                    <input class="form-control" type="text" name="email" id="email" value="{{ old('email') }}">
                </div>
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label for="name">Your Display Name</label>
                    <input class="form-control" type="text" name="name" value="{{ old('first_name') }}">
                </div>
                <div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
                    <label for="username">Your Username Name</label>
                    <input class="form-control" type="text" name="username" value="{{ old('first_name') }}">
                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label for="password">Your Password</label>
                    <input class="form-control" type="password" name="password" value="{{ old('password') }}">
                </div>
                <button type="submit" class="btn_nav">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
        <div class="col-md-6">
            <h3>Sign In</h3>
            @csrf
            <form action="{{ route('login') }}" method="post">
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}" value="{{ old('caption') }}">
                    <label for="email">Your E-Mail</label>
                    <input class="form-control" type="text" name="email" id="email" value="{{ old('email') }}">
                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label for="password">Your Password</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <button type="submit" class="btn_nav">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>
@endsection

</html>