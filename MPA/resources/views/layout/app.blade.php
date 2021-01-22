<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body class="bg-light">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <span href="" class="navbar-brand">{{ config('app.name') }}</span>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse mt-lg-0 mt-2" id="navbarMenu">
                    <ul class="navbar-nav">
                        <li class="nav-item ml-auto">
                            <a href="{{ route('home') }}" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item ml-auto">
                            <a href="{{ route('categories') }}" class="nav-link">Categories</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        @auth
                            <li class="nav-item ml-auto">
                                <a class="nav-link" href="">John Doe</a>
                            </li>
                            <li class="nav-item ml-auto pr-4">
                                <a class="nav-link" href="">
                                    Cart<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-transparent">+99 </span>
                                </a>
                            </li>
                            <li class="nav-item ml-auto">
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button class="btn nav-link" type="submit">Logout</button>
                                </form>
                            </li>
                        @endauth

                        @guest
                        <li class="nav-item ml-auto">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item ml-auto">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>                            
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>