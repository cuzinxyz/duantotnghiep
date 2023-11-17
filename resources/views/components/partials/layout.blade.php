<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />

    <meta name="application-name" content="{{ config('app.name') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/jquery-ui.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/all.min.css" rel="stylesheet">

    <link href="css/animate.min.css" rel="stylesheet">

    <link href="css/jquery.fancybox.min.css" rel="stylesheet">

    <link href="css/fontawesome.min.css" rel="stylesheet">

    {{-- <link rel="stylesheet" href="css/swiper-bundle.min.css"> --}}

    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">

    <link rel="stylesheet" href="css/magnific-popup.css">

    <link href="css/boxicons.min.css" rel="stylesheet">

    {{-- <link href="css/nice-select.css" rel="stylesheet"> --}}

    <link rel="stylesheet" href="css/style.css">
    <title>{{ $title ?? 'Page Title' }}</title>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    @filamentStyles
    @vite('resources/css/app.css')
</head>

<body class="antialiase tt-magic-cursord">

    @include('components.partials.header')

    {{ $slot }}

    @include('components.partials.footer')

    @livewire('notifications')



    {{-- <script data-cfasync="false" src="js/email-decode.min.js"></script> --}}
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery-ui.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>

    {{-- <script src="js/swiper-bundle.min.js"></script> --}}
    {{-- <script src="js/slick.js"></script> --}}

    <script src="js/waypoints.min.js"></script>

    <script src="js/wow.min.js"></script>

    {{-- <script src="js/jquery.counterup.min.js"></script> --}}

    <script src="js/isotope.pkgd.min.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>

    <script src="js/gsap.min.js"></script>
    <script src="js/simpleParallax.min.js"></script>
    <script src="js/TweenMax.min.js"></script>

    <script src="js/jquery.marquee.min.js"></script>

    <script src="js/jquery.nice-select.min.js"></script>

    <script src="js/jquery.fancybox.min.js"></script>

    <script src="js/custom.js"></script>
    <script>
        $(".marquee_text").marquee({
            direction: "left",
            duration: 25000,
            gap: 50,
            delayBeforeStart: 0,
            duplicated: true,
            startVisible: true,
        });
        $(".marquee_text2").marquee({
            direction: "left",
            duration: 25000,
            gap: 50,
            delayBeforeStart: 0,
            duplicated: true,
            startVisible: true,
        });
    </script>

    @filamentScripts
    @vite('resources/js/app.js')
</body>

</html>
