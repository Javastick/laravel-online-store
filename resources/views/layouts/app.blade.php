<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <title>@yield('title', 'Online Store')</title>
    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Pacifico&display=swap"
        rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
        <div class="container">
            <a href="{{ route('home.index') }}" class="navbar-brand title">Online Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a href="{{ route('home.index') }}" class="nav-link active">Beranda</a>
                    <a href="{{ route('product.index') }}" class="nav-link active">Produk</a>

                    <a href="{{ route('home.about') }}" class="nav-link active">Tentang</a>
                    <div class="vr bg-white mx-2 d-none d-lg-block"></div>
                    @guest
                        <a href="{{ route('login') }}" class="nav-link active">Login</a>
                        <a href="{{ route('register') }}" class="nav-link active">Register</a>
                    @else
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="bi bi-gear text-white"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('myaccount.index') }}">Profil</a></li>
                                <a href="{{ route('cart.index') }}" class="dropdown-item">Keranjang</a>
                                <form action="{{ route('logout') }}" id="logout" method="POST">
                                    <a role="button" class="dropdown-item"
                                        onclick="document.getElementById('logout').submit();">Logout</a>
                                    @csrf
                                </form>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <header class="masthead bg-primary text-white text-center py-3">
        <div class="container d-flex align-items-center flex-column">
            <h2 class="title">@yield('subtitle', 'Online Store')</h2>
        </div>
    </header>

    <div class="content container my-4">
        @yield('content')
    </div>


    {{-- footer --}}
    <div class="bg-secondary py-4 text-center text-white">
        <div class="container">
            <small>
                Copyright -
                <a href="http://twitter.com/danielgarax" target="blank"
                    class="text-reset fw-bold text-decoration-none">Daniel Correa</a>
                &
                <a href="https://www.instagram.com/ziamulumam" target="blank"
                    class="text-reset fw-bold text-decoration-none">Ziamul Umam</a>
            </small>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
