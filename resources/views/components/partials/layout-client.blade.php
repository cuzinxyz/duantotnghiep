<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="application-name" content="{{ config('app.name') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/favicon/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet">

    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">

    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/jquery.fancybox.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/fontawesome.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">

    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <link href="{{ asset('css/boxicons.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/nice-select.css') }}" rel="stylesheet">

    

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    
    
    
    @stack('styles')
    
    
    
</head>

<body class="tt-magic-cursor home-5">

    @include('components.partials.header')

    {{ $slot }}

    @include('components.partials.footer')
    

    <script data-cfasync="false" src="{{ asset('js/email-decode.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>

    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/slick.js') }}"></script>

    <script src="{{ asset('js/waypoints.min.js') }}"></script>

    <script src="{{ asset('js/wow.min.js') }}"></script>

    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>

    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>


    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>

    <script src="{{ asset('js/gsap.min.js') }}"></script>
    <script src="{{ asset('js/simpleParallax.min.js') }}"></script>
    <script src="{{ asset('js/TweenMax.min.js') }}"></script>

    <script src="{{ asset('js/jquery.marquee.min.js') }}"></script>

    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>





    <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>

    <script src="{{ asset('js/custom.js') }}"></script>

    <script>
        //list grid view
        jQuery(document).ready(function($) {
            $('.lists').click(function(event) {
                event.preventDefault();
                $('.list-grid-product-wrap').addClass('list-group-wrapper').removeClass(
                    'grid-group-wrapper');
            });
            $('.grid').click(function(event) {
                event.preventDefault();
                $('.list-grid-product-wrap').removeClass('list-group-wrapper').addClass(
                    'grid-group-wrapper');
            });
        });
        $('.list-grid-btn-group li').on('click', function() {
            $(this).addClass('active').siblings().removeClass('active');
        })
    </script>


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

    @stack('scripts')

</body>

</html>
