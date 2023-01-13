<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
        body {
            background-color: rgb(240, 231, 231);
            color: #636b6f;
            font: sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: auto;
        }

        .dropdown-content {
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            display: none;
            right: 0;
        }


        .dropdown .dropbtn {
            background-color: transparent;
            color: #adb3b8;
            border: none;
            position: relative;
            cursor: pointer;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }


        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .center {
            display: flex;
            justify-content: center;
            padding: 50px 0;
        }
    </style>
</head>

<body>
    @include('includes.header')
    <div class="center">
    <div class="col-md-6">
        @yield('content')
    </div>
    </div>
</body>

</html>
