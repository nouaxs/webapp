@extends('layouts.app')

<!DOCTYPE html>

@section('content')
    <div class="container">
        <div>Forgot your password? No problem. Just let us know your email address and we will email you a password reset
            link that will allow you to choose a new one.</div>

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}" value="{{ old('caption') }}">
                <input class="form-control" type="text" name="email" id="email" value="{{ old('email') }}">
            </div>

            <button type="submit" class="btn_nav">Email Reset Link</button>
        </form>
    </div>
@endsection

</html>
