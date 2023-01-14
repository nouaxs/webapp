<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

    <style>
        body {
            background-color: rgb(240, 231, 231);
            color: #636b6f;
            font: sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: auto;
        }
    </style>
</head>

<body>
    @include('includes.header')

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
