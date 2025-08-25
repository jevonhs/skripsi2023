<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

</head>
<body background="{{ asset('img/FTemplate.png') }}">

    <nav class="navbar navbar-expand-lg navbar-dark bg-warning" >
        <div class="container">
            <a class="navbar-brand" href="#">{{ config('app.name', 'Laravel') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="col-lg-1 col-md-12" id="navbarNav" >
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="/">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="/registrasi">Register</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-8">
        <main class="py-4">
            @yield('isi')
        </main>
    </div>
        @include('layouts.footer')
    <!-- Tambahkan Bootstrap JS Offline -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
