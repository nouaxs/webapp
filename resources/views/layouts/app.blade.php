<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <link rel="stylesheet" href="{{ asset('postcontainer.css') }}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

    @livewireStyles
</head>

<body>
    @include('includes.header')
    @livewireScripts

    @if ($errors->any())
        <div>
            Errors:
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('message'))
        <p><b>{{ session('message') }}</b></p>
    @endif

    <div class="center">
        <div class="col-md-10">
            <h1>@yield('title')</h1>
            @yield('content')
        </div>
    </div>
</body>

</html>
