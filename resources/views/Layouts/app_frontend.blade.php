<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('Frontend/assets/img/favicon.ico')}}">
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/progressbar_barfiller.css')}}">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/animated-headline.css')}}">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/style.css')}}">
</head>
<body class="full-wrapper">
<!-- ? Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="{{ asset('Frontend/assets/img/logo/loder.png')}}" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start-->
    @include('Frontend.elements.header')
<!-- header end -->
<main>
{{--    @include('Frontend.elements.slider')--}}
    @yield('content')
</main>
    @include('Frontend.elements.footer')
<!--? Search model Begin -->
<div class="search-model-box">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-btn">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Searching key.....">
        </form>
    </div>
</div>
<!-- Search model end -->
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>
<!-- JS here -->
<!-- Jquery, Popper, Bootstrap -->
<script src="{{ asset('Frontend/./assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<script src="{{ asset('Frontend/./assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{ asset('Frontend/./assets/js/popper.min.js')}}"></script>
<script src="{{ asset('Frontend/./assets/js/bootstrap.min.js')}}"></script>
<!-- Slick-slider , Owl-Carousel ,slick-nav -->
<script src="{{ asset('Frontend/./assets/js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('Frontend/./assets/js/slick.min.js')}}"></script>
<script src="{{ asset('Frontend/./assets/js/jquery.slicknav.min.js')}}"></script>
<!-- One Page, Animated-HeadLin, Date Picker -->
<script src="{{ asset('Frontend/./assets/js/wow.min.js')}}"></script>
<script src="{{ asset('Frontend/./assets/js/animated.headline.js')}}"></script>
<script src="{{ asset('Frontend/./assets/js/jquery.magnific-popup.j')}}s"></script>
<script src="{{ asset('Frontend/./assets/js/gijgo.min.j')}}s"></script>
<!-- Nice-select, sticky,Progress -->
<script src="{{ asset('Frontend/./assets/js/jquery.nice-select.min.j')}}s"></script>
<script src="{{ asset('Frontend/./assets/js/jquery.sticky.js')}}"></script>
<script src="{{ asset('Frontend/./assets/js/jquery.barfiller.js')}}"></script>
<!-- counter , waypoint,Hover Direction -->
<script src="{{ asset('Frontend/./assets/js/jquery.counterup.min.j')}}s"></script>
<script src="{{ asset('Frontend/./assets/js/waypoints.min.js')}}"></script>
<script src="{{ asset('Frontend/./assets/js/jquery.countdown.min.js')}}"></script>
<script src="{{ asset('Frontend/./assets/js/hover-direction-snake.min.js')}}"></script>
<!-- contact js -->
<script src="{{ asset('Frontend/./assets/js/contact.js')}}"></script>
<script src="{{ asset('Frontend/./assets/js/jquery.form.js')}}"></script>
<script src="{{ asset('Frontend/./assets/js/jquery.validate.min.js')}}"></script>
<script src="{{ asset('Frontend/./assets/js/mail-script.js')}}"></script>
<script src="{{ asset('Frontend/./assets/js/jquery.ajaxchimp.min.j')}}s"></script>
<!-- Jquery Plugins, main Jquery -->
<script src="{{ asset('Frontend/./assets/js/plugins.js')}}"></script>
<script src="{{ asset('Frontend/./assets/js/main.js')}}"></script>
</body>
</html>
