<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="author" content="pelk.io">
    {!! SEO::generate() !!}

    <meta name="csrf-token" value="{{ csrf_token() }}">

    <link rel="icon" type="image/png" href="images/fav.png">

    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href='/vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">
    <link href="/css/night-mode.css" rel="stylesheet">

    @stack('link')

    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="/vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="/vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/vendor/semantic/semantic.min.css">
    </head>

<body>

@yield('modal')

<x-categories-modal/>
<x-search-modal/>
<x-cart/>

@yield('components')

<x-main-header/>
<!-- wrapper -->
<div class="wrapper">
    @yield('wrapper')
</div>
<!-- footer -->

<x-footer/>

    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/OwlCarousel/owl.carousel.js"></script>
    <script src="/vendor/semantic/semantic.min.js"></script>
    <script src="/js/jquery.countdown.min.js"></script>
    <script src="/js/custom.js"></script>
    @stack('js')
    <script src="/js/offset_overlay.js"></script>
    <script src="/js/night-mode.js"></script>
</body>
</html>
