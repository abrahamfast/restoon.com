<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>{{ $title?? 'restoon stage development'}}</title>

    <link rel="icon" type="image/png" href="images/fav.png">

    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href='/vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">
    <link href="/css/night-mode.css" rel="stylesheet">
    <link href="/css/step-wizard.css" rel="stylesheet">

    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="/vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="/vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/vendor/semantic/semantic.min.css">
</head>
<body>

    <header class="header clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="top-header-group">
                        <div class="top-header">
                            <div class="res_main_logo">
                                <a href="index.html"><img src="/images/dark-logo-1.png" alt=""></a>
                            </div>
                            <div class="main_logo ml-0" id="logo">
                                <a href="index.html"><img src="/images/logo.png" alt=""></a>
                                <a href="index.html"><img class="logo-inverse" src="/images/dark-logo.png" alt=""></a>
                            </div>
                            <div class="header_right">
                                <a href="#" class="report-btn hover-btn"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('wrapper')

    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/OwlCarousel/owl.carousel.js"></script>
    <script src="/vendor/semantic/semantic.min.js"></script>
    <script src="/js/jquery.countdown.min.js"></script>
    <script src="/js/custom.js"></script>
    <script src="/js/product.thumbnail.slider.js"></script>
    <script src="/js/offset_overlay.js"></script>
    <script src="/js/night-mode.js"></script>
</body>

</html>
