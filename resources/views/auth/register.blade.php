@extends('layouts.app')

<!DOCTYPE html>

<head>
   
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
                    <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                </div>
                <div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
                    <label for="username">Your Username Name</label>
                    <input class="form-control" type="text" name="username" value="{{ old('username') }}">
                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label for="password">Your Password</label>
                    <input class="form-control" type="password" name="password">
                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label for="password_confirmation">Confirm your Password</label>
                    <input class="form-control" type="password" name="password_confirmation">
                </div>
                <button type="submit" class="btn_nav">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already have an account?') }}
                </a>
        </div>
        </div>
    </div>
@endsection

</html>