<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('/css/admin.css') }}">
    <title>@yield('title', 'Admin - Online Store')</title>
</head>

<body>
    <div class="row g-0">
        <div class="p-3 col fixed text-white bg-dark">
            <a href="{{ route('admin.home.index') }}" class="text-white text-decoration-none">
                <span class="fs-4">Admin Panel</span>
            </a>
            <hr>
            <ul class="nav flex-column">
                <li>
                    <a href="{{ route('admin.home.index') }}" class="nav-link text-white">Admin - Beranda</a>
                </li>
                <li>
                    <a href="{{ route('admin.product.index') }}" class="nav-link text-white">Admin - Produk</a>
                </li>
                <li>
                    <a href="{{ route('home.index') }}" class="nav-link text-white">Kembali ke toko</a>
                </li>
            </ul>
        </div>


        <div class="col content-grey">
            <nav class="p-3 shadow text-end">
                <span class="profile-font">Admin</span>
                <img src="{{ asset('/img/undraw_profile.svg') }}" alt="" class="img-profile rounded-circle">
            </nav>

            <div class="g-0 m-5">
                @yield('content')
            </div>
        </div>
    </div>



    {{-- footer --}}
    <div class="copyright py-4 text-center text-white">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
