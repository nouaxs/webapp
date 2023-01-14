@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3>Sign Up</h3>
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="email">Your E-Mail</label>
                    <input type="text" name="email" value="{{ old('email') }}">
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
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
        <div class="col-md-6">
            <h3>Sign In</h3>
            <form action="{{ route('login') }}" method="post">
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}" value="{{ old('caption') }}">
                    <label for="email">Your E-Mail</label>
                    <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}">
                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label for="password">Your Password</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>
@endsection