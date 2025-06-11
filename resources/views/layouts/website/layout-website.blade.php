<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Responsive Portfolio Website</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('template/assets/fonts/unicons/css/line.css') }}">

    <!-- CSS -->
    <!-- SWIPER CSS -->
    <link rel="stylesheet" href="{{ asset('template/assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/styles.css') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    
      
    @endif
</head>

<body>
    <!--==================== HEADER ====================-->
    @include('layouts.website.header-website')
    <!--==================== MAIN ====================-->
@yield('content')

<!--==================== FOOTER ====================-->
 
   @include('layouts.website.footer-website')

   

    <!--==================== SCROLL TOP ====================-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scrollup_icon"></i>
    </a>

    <!--==================== SWIPER JS ====================-->
    <script src="{{ asset('template/assets/js/swiper-bundle.min.js') }}"></script>

    <!--==================== MAIN JS ====================-->
    <script src="{{ asset('template/assets/js/main.js') }}"></script>
</body>


</html>
