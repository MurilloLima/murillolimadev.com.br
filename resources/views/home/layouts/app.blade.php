<!DOCTYPE html>
<html lang="en">

<head>
    <!--<< Required meta tags >>-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Murillo Lima - @yield('title')</title>
    <!-- Favicon -->
    <link href="{{ asset('home/img/logo/favicon.ico') }}" rel="shortcut icon" type="image/x-icon" />
    <link rel="icon" href="{{ asset('home/img/logo/favicon.png') }}" sizes="any">
    <link rel="icon" type="image/png" href="{{ asset('home/img/logo/favicon.png') }}" rel="icon">
    <link rel="icon" type="image/png" href="{{ asset('home/img/logo/favicon.png') }}" />

    {{-- matas tags wt --}}
    <meta property="og:site_name" content="Murillo Lima">
    <meta property="og:title" content="">
    <meta property="og:description" content="Programador Full Stack Senior">
    <meta property="og:image" itemprop="image" content="{{ asset('home/img/logo/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('home/css/bootstrap.min.css') }}">
    <!--<< Aos animation css >>-->
    <link rel="stylesheet" href="{{ asset('home/css/aos.css') }}">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="{{ asset('home/css/main.css') }}">
    {{-- icons --}}
    <link rel="icon" href="{{ asset('home/img/logo/favicon.ico') }}" sizes="any">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">


</head>

<body>
    <!--<< Preloader >>-->
    <div class="preloader__matias">
        <div class="box text-center">
            <div class="matias mb-10">
                <img src="{{ asset('home/img/banner/banner-man.png') }}" alt="img">
            </div>
            <span class="fz-30 mati fw-600 text-uppercase">
                Murillo Lima
            </span>
        </div>
    </div>
    <!--<< Preloader >>-->

    @include('home.layouts.nav')
    @yield('content')
    @include('home.layouts.footer')

    <!--<< Scroll To Top >>-->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path fill="#c9f31d" d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
        <i class="bi bi-arrow-90deg-up title topping"></i>
    </div>
    <!--<< Scroll To Top >>-->

    <!--<< Jquery Latest >>-->
    <script data-cfasync="false" src="{{ asset('home/email-decode.min.js') }}"></script>
    <script src="{{ asset('home/js/jquery-3.7.0.min.js') }}"></script>
    <!--<< Viewport Js >>-->
    <script src="{{ asset('home/js/viewport.jquery.js') }}"></script>
    <!--<< Bootstrap Js >>-->
    <script src="{{ asset('home/js/bootstrap.min.js') }}"></script>
    <!--<< Aos animation loading Js >>-->
    <script src="{{ asset('home/js/aos.js') }}"></script>
    <!--<< Nice Select Js >>-->
    <script src="{{ asset('home/js/jquery.nice-select.min.js') }}"></script>
    <!--<< Swiper Slide Js >>-->
    <script src="{{ asset('home/js/swiper-bundle.min.js') }}"></script>
    <!--<< Swiper Bundle Js >>-->
    <script src="{{ asset('home/js/jquery.magnific-popup.min.js') }}"></script>
    <!--<< magnific popup Js >>-->
    <script src="{{ asset('home/js/odometer.min.js') }}"></script>
    <!--<< Odometer js Js >>-->
    <script src="{{ asset('home/js/wow.min.js') }}"></script>
    <!--<< Wow Animation js >>-->
    <script src="{{ asset('home/js/main.js') }}"></script>
    <!--<< Main.js >>-->
</body>

</html>
