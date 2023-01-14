<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <link href="./header.css" rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
        <a class="navbar-brand" href="/">TravelGram</a>
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
                    <a class="nav-link" href="{{ route('posts.index') }}">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('users.index')}}">Authors</a>
                </li>
            </ul>
        </div>
        @if (Route::has('login'))
            @auth
                <ul class="nav justify-content-end">
                    <li class="nav-item dropdown">
                        <div class="dropbtn" id="navbarDropdown" role="button" data-bs-toggle="dropdown-content"
                            aria-expanded="false">▼ More </div>
                        <div class="dropdown-content" aria-labelledby="navbarDropdown">
                            <a href="users/{{ $id = Auth::user()->id }}">My Profile</a>
                            <a>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Logout</button>
                                </form>
                            </a>
                        </div>
                    </li>
                </ul>
            @else
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                </ul>
            @endauth
        @endif
    </nav>
</body>

</html>
