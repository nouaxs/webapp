<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'RecipeBook')</title>

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
        }


        .dropbtn {
            background-color: transparent;
            color: #adb3b8;
            border: none;
            position: relative;
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
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
        <a class="navbar-brand" href="">RecipeBook</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/products">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact Us</a>
                </li>


            </ul>
            <div class="dropdown" end-0>
                <button class="dropbtn">More</button>
                <div class="dropdown-content">
                    <a href="#">My Profile</a>
                    <a href="#">Logout</a>
                </div>
            </div>
        </div>
    </nav>
    </div>
    <h1>RecipeBook - @yield('title')</h1>
    <div>
        @yield('content')
    </div>
</body>

</html>
