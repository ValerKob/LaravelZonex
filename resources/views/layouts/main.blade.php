<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="assets/css/Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/final.css">

    <!-- Useful meta tags -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="index, follow">
    <meta name="google" content="notranslate">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">

    <title>@yield('title', 'Zonex')</title>
</head>

<body>

    <div class="page d-flex flex-column justify-content-between min-vh-100">
        <!-- Header -->
        @include('includes.main.header')

        <!-- Main -->
        <div class="container_wrapper container flex-grow-1">
            @yield('content')
        </div>

        <!-- Fooret -->
        @include('includes.main.footer')
    </div>
    
    <!-- JS -->
    <script src="assets/js/app.js"></script>
    <script src="assets/css/Bootstrap/js/bootstrap.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>