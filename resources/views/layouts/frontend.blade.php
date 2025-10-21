<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="@shahedkarim">
    <meta name="image" content="{{ asset('assets/img/logo/logo.png') }}">
    <meta property="og:image" content="{{ asset('assets/img/logo/logo.png') }}">
    <meta property="og:image:alt" content="get no. 1 software solution now">
    <meta name="og:title" content="shahedkarim - bangladeshi young software engineer">
    <meta name="og:description" content="Get your business solutions ready today! E-commerce, ERP, LMS, POS and more">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="{{ asset('assets/img/logo/logo.png') }}">
    @yield('canonical')

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo/favicon.png') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-animation.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/hover-reveal.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>

<body id="body" class="tp-magic-cursor">
    <div id="smooth-wrapper" class="black-bg-3">
        <div id="smooth-content">
            <x-frontend.preload />
            <x-frontend.cursor />
            <x-frontend.gotop />
            <x-frontend.offcanvas />

            {{-- Header should be inside body and appear once --}}
            <x-frontend.header />

            @yield('content')

            <x-frontend.footer />
            <x-frontend.script />
        </div>
    </div>
</body>

</html>
