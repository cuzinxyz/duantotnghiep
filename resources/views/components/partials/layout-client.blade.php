<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('page_title', 'Drivco.shop: Mua bán ô tô đã qua sử dụng')</title>
    <meta name="description"
        content="Ô tô cũ xe hơi cũ giá rẻ đang được rao bán tại Drivco, bạn dễ dàng tìm mua cho mình được chiếc xe oto cũ hoặc mới giá tốt ưng ý nhất.">
    <meta name="keywords" content="oto cũ, mua bán ô tô, xe oto cũ, ô tô đã qua sử dụng, drivco.shop">
    <meta name="author" content="Drivco Việt Nam">
    <!-- ROBOTS -->
    <meta name="googlebot" content="noarchive" />
    <meta name="robots" content="noarchive" />

    <!-- Seo Meta -->
    <meta http-equiv="content-language" content="vi">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="language" content="Vietnamese">
    <meta name="revisit-after" content="1 days">
    <!-- Favicon -->
    <link rel="canonical" href="https://drivco.shop/">
    <link rel="next" href="https://drivco.shop/">
    <link rel="icon" href="{{ asset('images/favicon/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">

    <meta name="google-adsense-account" content="ca-pub-1932736467628395">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Social SEO meta -->
    <meta property="og:site_name" content="Drivco.shop">
    <meta property="og:locale" content="vi_VN">
    <meta property="og:type" content="article">
    <meta property="og:title" content="@yield('page_title', 'Drivco.shop: Mua bán ô tô đã qua sử dụng')">
    <meta property="og:description"
        content="Ô tô cũ xe hơi cũ giá rẻ đang được rao bán tại Drivco, bạn dễ dàng tìm mua cho mình được chiếc xe oto cũ hoặc mới giá tốt ưng ý nhất.">
    <meta property="og:url" content="https://drivco.shop/">
    <meta property="article:section" content="Auto, News">
    <meta property="article:tag" content="Ô tô, Xe hơi">
    <meta property="og:image" content="@yield('thumb_seo', 'https://i.imgur.com/UFbnyXU.png')">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="650">
    <meta property="og:image:height" content="350">
    <meta name="theme-color" content="#46D993">

    <meta name="google-adsense-account" content="ca-pub-1932736467628395">


    <!-- GENERAL GOOGLE SEARCH META -->
    <script type="application/ld+json">
        {
            "@context" : "http://schema.org",
            "@type" : "WebSite",
            "name" : "Drivco.shop: Mua bán ô tô đã qua sử dụng",
            "alternateName" : "Ô tô cũ xe hơi cũ giá rẻ đang được rao bán tại Drivco, bạn dễ dàng tìm mua cho mình được chiếc xe oto cũ hoặc mới giá tốt ưng ý nhất.",
            "dateModified": "",
            "url" : "https://drivco.shop"
        }
    </script>

    {{-- Stylesheets --}}
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
    {{-- <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/sell-car.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <!--<script src="//unpkg.com/alpinejs" defer></script>-->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-5B2YRXX4TD"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-5B2YRXX4TD');
    </script>
    

    @livewireStyles
    @stack('styles')
    <style>
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f3f3f3;
        }

        ::-webkit-scrollbar-thumb {
            background: #0000000d;
            border-radius: 5px
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1932736467628395"
     crossorigin="anonymous"></script>
    <script async src="https://fundingchoicesmessages.google.com/i/pub-1932736467628395?ers=1" nonce="FT5iMs8YGMyNJMe6Na5mDQ"></script>
    <script nonce="FT5iMs8YGMyNJMe6Na5mDQ">(function() {function signalGooglefcPresent() {if (!window.frames['googlefcPresent']) {if (document.body) {const iframe = document.createElement('iframe'); iframe.style = 'width: 0; height: 0; border: none; z-index: -1000; left: -1000px; top: -1000px;'; iframe.style.display = 'none'; iframe.name = 'googlefcPresent'; document.body.appendChild(iframe);} else {setTimeout(signalGooglefcPresent, 0);}}}signalGooglefcPresent();})();</script>
</head>

<body class="tt-magic-cursor home-5">

    <div class="pre-loader">
        <div class="loader">
            <svg class="car" width="102" height="40" xmlns="http://www.w3.org/2000/svg">
                <g transform="translate(2 1)" stroke="#002742" fill="none" fill-rule="evenodd"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path class="car__body"
                        d="M47.293 2.375C52.927.792 54.017.805 54.017.805c2.613-.445 6.838-.337 9.42.237l8.381 1.863c2.59.576 6.164 2.606 7.98 4.531l6.348 6.732 6.245 1.877c3.098.508 5.609 3.431 5.609 6.507v4.206c0 .29-2.536 4.189-5.687 4.189H36.808c-2.655 0-4.34-2.1-3.688-4.67 0 0 3.71-19.944 14.173-23.902zM36.5 15.5h54.01"
                        stroke-width="3" />
                    <ellipse class="car__wheel--left" stroke-width="3.2" fill="#FFF" cx="83.493"
                        cy="30.25" rx="6.922" ry="6.808" />
                    <ellipse class="car__wheel--right" stroke-width="3.2" fill="#FFF" cx="46.511"
                        cy="30.25" rx="6.922" ry="6.808" />
                    <path class="car__line car__line--top" d="M22.5 16.5H2.475" stroke-width="3" />
                    <path class="car__line car__line--middle" d="M20.5 23.5H.4755" stroke-width="3" />
                    <path class="car__line car__line--bottom" d="M25.5 9.5h-19" stroke-width="3" />
                </g>
            </svg>
        </div>

    </div>

    <div class="top-bar style-5">
        <div class="logo-and-menu">
            <div class="company-logo">
                <a href="/"><img src="{{ asset('images/green-logo.svg') }}" alt=""></a>
            </div>
        </div>
        <div class="search-area">
            <livewire:search />
        </div>
        <div class="topbar-right">
            <ul>
                <li>
                    @auth
                        <a href="{{ route('sellCar') }}">
                        @else
                            <a href="{{ route('login') }}">
                            @endauth
                            <button class="sell-btn" type="button" data-bs-toggle="modal"
                                data-bs-target="#sellUsModal01">
                                <svg width="16" height="16" viewBox="0 0 18 18"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.5588 0C17.447 0.00287726 17.3409 0.0492946 17.2629 0.129351L15.4245 1.97099L14.8707 1.4164C14.5627 1.10919 14.2078 0.938606 13.8585 0.928904C13.6483 0.923245 13.4543 0.953158 13.2231 0.985496L10.2237 1.40265C9.12021 1.55626 8.55995 2.02839 7.84852 2.69132L0.470643 9.56715C0.467641 9.5698 0.464677 9.5725 0.46175 9.57523C0.142414 9.89053 0.00416943 10.3206 0.000127199 10.7442C-0.00472348 11.1679 0.12867 11.6166 0.484386 11.9205L0.460133 11.8971L6.10309 17.5417L6.08045 17.5174C6.38443 17.8731 6.8323 18.0057 7.25674 18.0009C7.68036 17.9968 8.11127 17.8586 8.42575 17.54C8.42849 17.5368 8.43119 17.5336 8.43384 17.5303L8.94073 16.9863L10.9586 17.7381C11.1627 17.8161 11.3805 17.8522 11.5988 17.8442C11.8172 17.8361 12.0317 17.7841 12.2295 17.6912C12.6135 17.5109 12.9474 17.2062 13.101 16.7858L15.3161 10.1452C15.9758 9.4378 16.4455 8.87674 16.5983 7.77725L17.0155 4.77792C17.0478 4.5467 17.0777 4.35186 17.0721 4.14248C17.0624 3.79323 16.8926 3.43913 16.5846 3.1303L16.03 2.57652L17.87 0.736494C17.932 0.676327 17.9743 0.598838 17.9915 0.51419C18.0086 0.429542 17.9998 0.341686 17.9661 0.262143C17.9325 0.182601 17.8756 0.115085 17.8029 0.0684494C17.7302 0.0218141 17.6451 -0.00176348 17.5588 0.000808484V0ZM13.8351 1.78505C14.0032 1.78909 14.0372 1.79394 14.2643 2.02192L14.8189 2.57571L13.8351 3.5604C13.6631 3.47636 13.4743 3.43241 13.2829 3.43185C12.5779 3.43185 11.9967 4.01393 11.9967 4.71809C11.9967 5.42306 12.5779 6.00352 13.2821 6.00352C13.9871 6.00352 14.5683 5.42306 14.5683 4.71809C14.5683 4.52083 14.5214 4.33408 14.4406 4.16592L15.4245 3.18123L15.9783 3.73583C16.2062 3.963 16.2111 3.99696 16.2151 4.16431C16.2104 4.33015 16.1942 4.49547 16.1666 4.65907L15.7503 7.65841C15.6209 8.58812 15.342 8.85976 14.6831 9.56796L7.81537 16.9369C7.70462 17.0493 7.47583 17.1407 7.24704 17.1431C7.01825 17.1463 6.8226 17.0647 6.73286 16.9596C6.72537 16.9512 6.71755 16.9431 6.70942 16.9353L1.06647 11.2908C1.05869 11.2826 1.0506 11.2748 1.04221 11.2673C0.937116 11.1784 0.854655 10.9819 0.857888 10.7531C0.860314 10.5252 0.951668 10.2956 1.06404 10.1848L8.43303 3.31786C9.14123 2.65817 9.41286 2.38006 10.3426 2.25071L13.3419 1.83356C13.5731 1.80122 13.7348 1.78181 13.8351 1.78505ZM13.2829 4.28881C13.5246 4.28881 13.7114 4.47637 13.7114 4.71809C13.7114 4.95982 13.5246 5.14657 13.2829 5.14657C13.0404 5.14657 12.8544 4.95982 12.8544 4.71809C12.8544 4.47637 13.0404 4.28881 13.2829 4.28881ZM5.99314 8.99881C5.90784 8.99872 5.82446 9.0241 5.75367 9.07168C5.68288 9.11926 5.6279 9.18689 5.59578 9.2659C5.56365 9.34492 5.55584 9.43172 5.57334 9.5152C5.59084 9.59868 5.63286 9.67504 5.69401 9.7345L8.26568 12.3054C8.6699 12.7096 9.27624 12.1032 8.87201 11.699L6.30035 9.12816C6.26038 9.08717 6.2126 9.05461 6.15984 9.03239C6.10707 9.01017 6.05039 8.99876 5.99314 8.99881ZM4.70771 10.2834C4.62224 10.2832 4.53865 10.3085 4.46769 10.3561C4.39672 10.4037 4.34161 10.4715 4.30945 10.5507C4.27729 10.6299 4.26955 10.7168 4.28721 10.8005C4.30488 10.8841 4.34714 10.9605 4.40858 11.0199L6.98025 13.5908C7.38447 14.0217 8.01749 13.3879 7.58658 12.9845L5.01573 10.4144C4.9758 10.373 4.92795 10.3401 4.87503 10.3176C4.82212 10.2951 4.76521 10.2835 4.70771 10.2834ZM13.9094 11.6537L12.2958 16.4907C12.2408 16.6386 12.071 16.8181 11.8641 16.9151C11.6571 17.0121 11.4493 17.0097 11.32 16.9612L9.57213 16.3072L13.9094 11.6537Z">
                                    </path>
                                </svg>
                                Bán xe ngay
                            </button>
                        </a>
                </li>
                <li>
                    @auth
                        <a href="{{ route('wishlish') }}">
                        @else
                            <a href="{{ route('login') }}">
                            @endauth
                            <svg width="16" height="16" viewBox="0 0 14 14"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                                </path>
                            </svg>
                            Tin đã lưu
                        </a>
                </li>
            </ul>
        </div>
    </div>

    <header class="header-area style-5">
        <div class="header-logo d-lg-none d-flex">
            <a href="/"><img alt="image" class="img-fluid" src="{{ asset('images/green-logo.svg') }}"></a>
        </div>

        <div class="main-menu">
            <div class="mobile-logo-area d-lg-none d-flex justify-content-between align-items-center">
                <div class="mobile-logo-wrap">
                    <a href="{{ route('homepage') }}"><img alt="image"
                            src="{{ asset('images/green-logo.svg') }}"></a>
                </div>
            </div>
            <ul class="menu-list">
                <li @class(['active' => request()->routeIs('homepage')])>
                    <a href="{{ route('homepage') }}" class="drop-down">Trang Chủ</a>
                </li>
                <li class="position-inherit {{ request()->routeIs('car.list', 'brand.detail') ? 'active' : '' }}">
                    <a href="{{ route('car.list') }}" class="drop-down">Bạn Cần Mua Xe?</a>
                    <i class="bi bi-plus dropdown-icon d-lg-none d-block"></i>
                    <div class="mega-menu" style="min-width: fit-content">
                        <ul class="menu-row">
                            <li class="menu-single-item">
                                <h5>Thương hiệu</h5>
                                <ul>
                                    @php
                                        $popularBrands = \App\Models\Car::select('brand_id', \DB::raw('COUNT(*) as car_count'))
                                            ->groupBy('brand_id')
                                            ->orderByDesc('car_count')
                                            ->limit(8)
                                            ->get();
                                        $brandIds = $popularBrands->pluck('brand_id');
                                        $brandsInfo = \App\Models\Brand::whereIn('id', $brandIds)
                                            ->inRandomOrder()
                                            ->distinct()
                                            ->get();
                                    @endphp
                                    @foreach ($brandsInfo as $brand)
                                        <li><a
                                                href="{{ route('brand.detail', $brand->brand_name) }}">{{ $brand->brand_name }}</a>
                                        </li>
                                    @endforeach
                                    <li class="explore-more-btn">
                                        <a href="{{ route('car.list') }}">Tìm hiểu thêm <i
                                                class="bi bi-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </li>

                            <li class="menu-single-item" style="flex-basis: unset">
                                <h5>Salon</h5>
                                <ul>
                                    @php
                                        $salons = \App\Models\Salon::limit(8)
                                            ->where('status', 1)
                                            ->get();
                                    @endphp

                                    @foreach ($salons as $salon)
                                        <li>
                                            <a
                                                href="{{ route('salon.listCars', $salon->slug) }}">{{ $salon->salon_name }}</a>
                                        </li>
                                    @endforeach
                            </li>
                        </ul>
                </li>
            </ul>
        </div>
        </li>
        <li @class(['active' => request()->routeIs('buyCar')])>
            <a href="{{ route('buyCar') }}" class="drop-down">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-newspaper" viewBox="0 0 16 16">
                    <path
                        d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5z" />
                    <path
                        d="M2 3h10v2H2zm0 3h4v3H2zm0 4h4v1H2zm0 2h4v1H2zm5-6h2v1H7zm3 0h2v1h-2zM7 8h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2z" />
                </svg>
                Tin cần mua xe</a>
        </li>
        @if (!empty(auth()->user()->is_collaborator))
            <li>
                <a href="{{ route('collaborators.dashboard') }}" class="text-danger">CTV</a>
            </li>
        @endif
        {{-- <li @class(['active' => request()->routeIs('recharge')])>
                    <a href="{{ route('recharge') }}" class="drop-down">Nạp Tiền</a>
                </li> --}}
        </ul>
        <div class="topbar-right d-lg-none d-block pt-1">
            <div class="search-area">
                <form>
                    <div class="form-inner d-flex">
                        <input type="text" placeholder="Tìm kiếm xe" style="float: left;width:calc(100% - 50px)"
                            class="border border-dark border-1 rounded px-2 py-1">
                        <button class="btn btn-dark" type="submit"><i class="bi bi-search"></i></button>
                    </div>
                </form>
            </div>

            <div class="topbar-right">
                <ul>
                    <li>
                        <a href="{{ route('sellCar') }}">
                            <button class="sell-btn" type="button" data-bs-toggle="modal"
                                data-bs-target="#sellUsModal01">
                                <svg width="16" height="16" viewBox="0 0 18 18"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.5588 0C17.447 0.00287726 17.3409 0.0492946 17.2629 0.129351L15.4245 1.97099L14.8707 1.4164C14.5627 1.10919 14.2078 0.938606 13.8585 0.928904C13.6483 0.923245 13.4543 0.953158 13.2231 0.985496L10.2237 1.40265C9.12021 1.55626 8.55995 2.02839 7.84852 2.69132L0.470643 9.56715C0.467641 9.5698 0.464677 9.5725 0.46175 9.57523C0.142414 9.89053 0.00416943 10.3206 0.000127199 10.7442C-0.00472348 11.1679 0.12867 11.6166 0.484386 11.9205L0.460133 11.8971L6.10309 17.5417L6.08045 17.5174C6.38443 17.8731 6.8323 18.0057 7.25674 18.0009C7.68036 17.9968 8.11127 17.8586 8.42575 17.54C8.42849 17.5368 8.43119 17.5336 8.43384 17.5303L8.94073 16.9863L10.9586 17.7381C11.1627 17.8161 11.3805 17.8522 11.5988 17.8442C11.8172 17.8361 12.0317 17.7841 12.2295 17.6912C12.6135 17.5109 12.9474 17.2062 13.101 16.7858L15.3161 10.1452C15.9758 9.4378 16.4455 8.87674 16.5983 7.77725L17.0155 4.77792C17.0478 4.5467 17.0777 4.35186 17.0721 4.14248C17.0624 3.79323 16.8926 3.43913 16.5846 3.1303L16.03 2.57652L17.87 0.736494C17.932 0.676327 17.9743 0.598838 17.9915 0.51419C18.0086 0.429542 17.9998 0.341686 17.9661 0.262143C17.9325 0.182601 17.8756 0.115085 17.8029 0.0684494C17.7302 0.0218141 17.6451 -0.00176348 17.5588 0.000808484V0ZM13.8351 1.78505C14.0032 1.78909 14.0372 1.79394 14.2643 2.02192L14.8189 2.57571L13.8351 3.5604C13.6631 3.47636 13.4743 3.43241 13.2829 3.43185C12.5779 3.43185 11.9967 4.01393 11.9967 4.71809C11.9967 5.42306 12.5779 6.00352 13.2821 6.00352C13.9871 6.00352 14.5683 5.42306 14.5683 4.71809C14.5683 4.52083 14.5214 4.33408 14.4406 4.16592L15.4245 3.18123L15.9783 3.73583C16.2062 3.963 16.2111 3.99696 16.2151 4.16431C16.2104 4.33015 16.1942 4.49547 16.1666 4.65907L15.7503 7.65841C15.6209 8.58812 15.342 8.85976 14.6831 9.56796L7.81537 16.9369C7.70462 17.0493 7.47583 17.1407 7.24704 17.1431C7.01825 17.1463 6.8226 17.0647 6.73286 16.9596C6.72537 16.9512 6.71755 16.9431 6.70942 16.9353L1.06647 11.2908C1.05869 11.2826 1.0506 11.2748 1.04221 11.2673C0.937116 11.1784 0.854655 10.9819 0.857888 10.7531C0.860314 10.5252 0.951668 10.2956 1.06404 10.1848L8.43303 3.31786C9.14123 2.65817 9.41286 2.38006 10.3426 2.25071L13.3419 1.83356C13.5731 1.80122 13.7348 1.78181 13.8351 1.78505ZM13.2829 4.28881C13.5246 4.28881 13.7114 4.47637 13.7114 4.71809C13.7114 4.95982 13.5246 5.14657 13.2829 5.14657C13.0404 5.14657 12.8544 4.95982 12.8544 4.71809C12.8544 4.47637 13.0404 4.28881 13.2829 4.28881ZM5.99314 8.99881C5.90784 8.99872 5.82446 9.0241 5.75367 9.07168C5.68288 9.11926 5.6279 9.18689 5.59578 9.2659C5.56365 9.34492 5.55584 9.43172 5.57334 9.5152C5.59084 9.59868 5.63286 9.67504 5.69401 9.7345L8.26568 12.3054C8.6699 12.7096 9.27624 12.1032 8.87201 11.699L6.30035 9.12816C6.26038 9.08717 6.2126 9.05461 6.15984 9.03239C6.10707 9.01017 6.05039 8.99876 5.99314 8.99881ZM4.70771 10.2834C4.62224 10.2832 4.53865 10.3085 4.46769 10.3561C4.39672 10.4037 4.34161 10.4715 4.30945 10.5507C4.27729 10.6299 4.26955 10.7168 4.28721 10.8005C4.30488 10.8841 4.34714 10.9605 4.40858 11.0199L6.98025 13.5908C7.38447 14.0217 8.01749 13.3879 7.58658 12.9845L5.01573 10.4144C4.9758 10.373 4.92795 10.3401 4.87503 10.3176C4.82212 10.2951 4.76521 10.2835 4.70771 10.2834ZM13.9094 11.6537L12.2958 16.4907C12.2408 16.6386 12.071 16.8181 11.8641 16.9151C11.6571 17.0121 11.4493 17.0097 11.32 16.9612L9.57213 16.3072L13.9094 11.6537Z">
                                    </path>
                                </svg>
                                Bán Xe
                            </button>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('wishlish') }}">
                            <svg width="16" height="16" viewBox="0 0 14 14"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                                </path>
                            </svg>
                            Tin đã lưu
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        </div>

        <div class="nav-right d-flex jsutify-content-end align-items-center">
            @auth
                <div onclick="window.location.href='/chatify'" class="position-relative me-sm-3" style="cursor: pointer">
                    <i class="bi bi-chat"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        {{ \App\Models\ChMessage::where('to_id', auth()->id())->where('seen', 0)->count() }}
                        <span class="visually-hidden">unread messages</span>
                    </span>

                </div>
                <div class="dropdown">
                    <button class="modal-btn header-cart-btn" type="button">
                        <i class="bi bi-wallet2"></i> Ví của tôi
                    </button>
                    <div class="cart-menu" style="overflow-y: scroll;height: 500px;">
                        <div class="cart-body" style="padding-bottom: 20px !important">
                            <ul>
                                <li class="pd-cart">
                                    <div class="d-flex align-items-start gap-3">
                                        @if (strpos(auth()->user()->avatar, 'http') === 0)
                                            <img style="width: 50px;height:50px;object-fit:cover" class="rounded-circle"
                                                src="{{ auth()->user()->avatar }}" alt="">
                                        @elseif (Storage::url(auth()->user()->avatar))
                                            <img style="width: 50px;height:50px;object-fit:cover" class="rounded-circle"
                                                src="{{ asset('storage/' . auth()->user()->avatar) }}" alt="">
                                        @else
                                            <img style="width: 50px;height:50px;object-fit:cover" class="rounded-circle"
                                                src="{{ 'https://ui-avatars.com/api/?name=' . auth()->user()->name }}"
                                                alt="">
                                        @endif

                                        <div class="d-flex flex-column">
                                            <span class="header-username fw-bold">{{ auth()->user()->name }}</span>
                                            {{-- <div class="hr-custom my-2"></div>
                                            <div class="d-flex align-items-center gap-2">
                                                <p class="m-0"><strong>0</strong> tin đã đăng</p>
                                                <p class="m-0"><strong>0</strong> tin đã lưu</p>
                                            </div> --}}
                                        </div>
                                    </div>
                                </li>
                                <li class="pd-cart">
                                    <div class="d-flex gap-1 justify-content-center">
                                        <div class="w-50 cart-card px-2 py-1 d-flex flex-column gap-1">
                                            <span>Số dư</span>
                                            <div class="fw-bold">
                                                {{ number_format(auth()->user()->account_balence) }} <i
                                                    class="bi bi-cash"></i>
                                            </div>
                                        </div>

                                        <div class="w-50 cart-card px-2 py-1 d-flex flex-column gap-1">
                                            <span>Tin hoạt động</span>
                                            <div class="fw-bold">
                                                {{ \App\Models\Car::where('user_id', auth()->id())->where('status', 1)->count() }}
                                                <i class="bi bi-app-indicator"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <hr class="m-0 mt-2">
                                <li class="my-2">
                                    <div class="cart-block">
                                        <div class="cart-block-body_item"
                                            onclick="window.location.href='{{ route('profile') }}'">
                                            <i class="bi bi-person-circle"></i> Trang cá nhân
                                        </div>
                                    </div>

                                </li>
                                <li class="mb-2">
                                    <div class="cart-block">
                                        <div class="cart-block-header fw-bold">Salon</div>
                                        <div class="cart-block-body">
                                            <div class="cart-block-body_item d-flex align-items-center gap-2"
                                                onclick="window.location.href='{{ route('salon') }}'">
                                                <i class="bi bi-house"></i> Salon
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-2">
                                    <div class="cart-block">
                                        <div class="cart-block-header fw-bold">Tiện ích</div>
                                        <div class="cart-block-body">
                                            <div class="cart-block-body_item d-flex align-items-center gap-2"
                                                onclick="window.location.href='{{ route('sellCar') }}'">
                                                <i class="bi bi-megaphone"></i> Đăng tin bán xe
                                            </div>

                                            <div class="cart-block-body_item d-flex align-items-center gap-2"
                                                onclick="window.location.href='{{ route('buyCar') }}'">
                                                <i class="bi bi-megaphone"></i> Đăng tin mua xe
                                            </div>

                                            <div class="cart-block-body_item d-flex align-items-center gap-2"
                                                onclick="window.location.href='{{ route('wishlish') }}'">
                                                <i class="bi bi-heart"></i> Xe yêu thích
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <hr class="m-0">

                                <li class="mb-2">
                                    <div class="cart-block">
                                        <div class="cart-block-header fw-bold">Dành cho mgười bán</div>
                                        <div class="cart-block-body">
                                            <div class="cart-block-body_item d-flex align-items-center gap-2"
                                                onclick="window.location.href='{{ route('service.list') }}'">
                                                <i class="bi bi-megaphone"></i> Dịch vụ
                                            </div>

                                            <div class="cart-block-body_item d-flex align-items-center gap-2"
                                                onclick="window.location.href='{{ route('recharge') }}'">
                                                <i class="bi bi-cash-coin"></i> Nạp
                                                tiền
                                            </div>

                                            <div class="cart-block-body_item d-flex align-items-center gap-2"
                                                onclick="window.location.href='{{ route('withdraw') }}'">
                                                <i class="bi bi-cash-stack"></i> Rút tiền
                                            </div>

                                            <div class="cart-block-body_item d-flex align-items-center gap-2"
                                                onclick="window.location.href='{{ route('paymentHistory') }}'">
                                                <i class="bi bi-clock-history"></i> Lịch sử hoạt động
                                            </div>

                                            <div class="cart-block-body_item d-flex align-items-center gap-2">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#GuideModal">
                                                    <i class="bi bi-exclamation-octagon-fill"></i> Gửi yêu cầu hướng dẫn
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <hr class="m-0">

                                <li class="my-2">
                                    <div class="cart-block">
                                        <div class="account-footer" style="min-width: 230px">
                                            <div class="footer-button mx-3">
                                                <div class="d-flex justify-content-between align-items-center gap-3">
                                                    <a href="{{ route('settings') }}"
                                                        class="w-50 primary-btn1 d-block visible btn-dark1">
                                                        <i class="bi bi-gear"></i>
                                                        Cài đặt
                                                    </a>
                                                    <form class="w-50" action="{{ route('logout') }}" method="POST">
                                                        @csrf
                                                        <button class="w-100 primary-btn1 d-block visible"
                                                            type="submit"><i class="bi bi-box-arrow-right"></i>
                                                            Đăng xuất </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endauth
            @guest
                <div onclick="window.location.href='{{ route('account') }}'" class="fw-bold"
                    style="cursor:pointer;font-size:13px">
                    <i class="bi bi-person-rolodex"></i>
                    TÀI KHOẢN
                </div>
                <!--<div class="dropdown">-->
                <!--    <button class="modal-btn header-account-btn" onclick="" type="button">-->
                <!--        <i class="bi bi-file-person-fill"></i> Tài khoản-->
                <!--    </button>-->
                <!--<div class="account-menu">-->
                <!--    <div class="account-footer" style="min-width: 230px">-->
                <!--        <div class="footer-button">-->
                <!--            <div class="d-flex justify-content-between align-items-center gap-3">-->
                <!--                <a class="w-50 primary-btn1 visible d-block" href="/login">Đăng nhập</a>-->
                <!--                <span class="fs-6">|</span>-->
                <!--                <a class="w-50 primary-btn1 visible d-block btn-dark1" href="/register">Đăng ký</a>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--</div>-->
            @else
                @endif
                <div class="sidebar-button mobile-menu-btn" style="margin-left: 10px">
                    {{-- <span></span> --}}
                    <i class="bi bi-filter-right" style="font-size: 40px"></i>
                </div>
            </div>
        </header>

        {{ $slot }}
        @include('modals.guide-modal')

        <footer class="style-2">
            <div class="container-fluid">
                <div class="footer-top">
                    <div
                        class="row row-cols-xl-4 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 justify-content-center g-lg-4 gy-5 ">
                        <div class="col d-flex justify-content-sm-center">
                            <div class="footer-widget">
                                <div class="widget-title">
                                    <h5>Tìm kiếm và Khám phá</h5>
                                </div>
                                <div class="menu-container">
                                    <ul>
                                        <li><a href="{{ route('car.list') }}">Ô tô đã qua sử dụng
                                                <svg width="10" height="10" viewBox="0 0 10 10"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z">
                                                    </path>
                                                </svg>
                                            </a></li>
                                        <li><a href="{{ route('sellCar') }}">Bán xe của tôi
                                                <svg width="10" height="10" viewBox="0 0 10 10"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z">
                                                    </path>
                                                </svg>
                                            </a></li>
                                        <li><a href="{{ route('buyCar') }}">
                                                Đăng tin cần mua xe
                                                <svg width="10" height="10" viewBox="0 0 10 10"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z">
                                                    </path>
                                                </svg>
                                            </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-lg-center justify-content-sm-center">
                            <div class="footer-widget">
                                <div class="widget-title">
                                    <h5>
                                        Xe theo thương hiệu</h5>
                                </div>
                                <div class="menu-container">
                                    <ul>
                                        @foreach ($brandsInfo as $brand)
                                            <li><a href="{{ route('brand.detail', $brand->brand_name) }}">{{ $brand->brand_name }}
                                                    <svg width="10" height="10" viewBox="0 0 10 10"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z">
                                                        </path>
                                                    </svg>
                                                </a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-lg-center justify-content-sm-center">
                            <div class="footer-widget">
                                <div class="widget-title">
                                    <h5>
                                        Salon</h5>
                                </div>
                                <div class="menu-container">
                                    <ul>
                                        @foreach ($salons as $salon)
                                            <li><a href="{{ route('salon.listCars', $salon->slug) }}">{{ $salon->salon_name }}
                                                    <svg width="10" height="10" viewBox="0 0 10 10"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z">
                                                        </path>
                                                    </svg>
                                                </a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-lg-center justify-content-sm-center">
                            <div class="footer-widget">
                                <div class="widget-title">
                                    <h5>
                                        Địa chỉ văn phòng</h5>
                                </div>
                                <div>
                                    <iframe class="w-md-100"
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.863668701055!2d105.74467431150825!3d21.03814028053261!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455e940879933%3A0xcf10b34e9f1a03df!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1702046139244!5m2!1svi!2s"
                                        width="300" height="250" style="border:0;" allowfullscreen=""
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-center">
                    <div class="footer-logo">
                        <a href="/"><img src="{{ asset('') }}images/footer-logo.svg" alt=""></a>
                    </div>
                    <div class="contact-area">
                        <div class="hotline-area">
                            <div class="icon">
                                <svg width="32" height="32" viewBox="0 0 32 32"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M31.1603 24.6852L24.6834 20.3658C23.8615 19.8221 22.7597 20.001 22.152 20.7769L20.2654 23.2027C20.1481 23.3573 19.9789 23.4645 19.789 23.5045C19.599 23.5444 19.4011 23.5145 19.2314 23.4203L18.8725 23.2224C17.6828 22.574 16.2025 21.7667 13.22 18.7831C10.2375 15.7995 9.42859 14.3181 8.78012 13.1306L8.58334 12.7717C8.48781 12.6021 8.45678 12.4037 8.49597 12.213C8.53516 12.0223 8.64193 11.8522 8.79662 11.734L11.2208 9.84792C11.9964 9.2402 12.1756 8.13874 11.6324 7.31655L7.31309 0.83963C6.75648 0.00237835 5.63977 -0.24896 4.77809 0.269026L2.06967 1.89597C1.21867 2.39626 0.594346 3.20652 0.327557 4.15695C-0.647737 7.71055 0.0859667 13.8435 9.12038 22.879C16.3071 30.0651 21.6572 31.9976 25.3345 31.9976C26.1809 32.0013 27.0239 31.8912 27.8409 31.6703C28.7915 31.4038 29.6018 30.7794 30.1018 29.9281L31.7304 27.2214C32.2491 26.3595 31.9979 25.2421 31.1603 24.6852ZM30.8115 26.6742L29.1867 29.3826C28.8277 29.997 28.2449 30.4488 27.5603 30.6432C24.2797 31.5439 18.5483 30.7979 9.87489 22.1245C1.20149 13.4511 0.455538 7.72017 1.35622 4.4391C1.55097 3.75367 2.00324 3.17011 2.61841 2.81053L5.32682 1.1857C5.7007 0.960737 6.18538 1.06978 6.4269 1.4331L8.77324 4.95577L10.7426 7.90946C10.9784 8.26609 10.9009 8.74409 10.5645 9.00798L8.13978 10.8941C7.40188 11.4583 7.19117 12.4792 7.64547 13.2895L7.83801 13.6393C8.51953 14.8892 9.36684 16.4442 12.4603 19.5371C15.5537 22.63 17.1081 23.4773 18.3575 24.1588L18.7078 24.3518C19.518 24.8061 20.539 24.5954 21.1032 23.8575L22.9893 21.4328C23.2533 21.0966 23.7311 21.0191 24.0879 21.2547L30.5642 25.5741C30.9278 25.8154 31.0368 26.3004 30.8115 26.6742ZM18.1324 5.33496C23.1367 5.34053 27.1921 9.39599 27.1977 14.4003C27.1977 14.6948 27.4364 14.9335 27.7309 14.9335C28.0255 14.9335 28.2642 14.6948 28.2642 14.4003C28.258 8.8072 23.7255 4.27462 18.1324 4.2685C17.8378 4.2685 17.5991 4.50721 17.5991 4.80173C17.5991 5.09625 17.8378 5.33496 18.1324 5.33496Z">
                                    </path>
                                    <path
                                        d="M18.1324 8.53424C21.3704 8.53805 23.9944 11.162 23.9982 14.4001C23.9982 14.5415 24.0544 14.6771 24.1544 14.7771C24.2544 14.8771 24.39 14.9333 24.5314 14.9333C24.6728 14.9333 24.8085 14.8771 24.9085 14.7771C25.0085 14.6771 25.0646 14.5415 25.0646 14.4001C25.0602 10.5733 21.9591 7.47215 18.1324 7.46777C17.8378 7.46777 17.5991 7.70649 17.5991 8.00101C17.5991 8.29553 17.8378 8.53424 18.1324 8.53424Z">
                                    </path>
                                    <path
                                        d="M18.1324 11.7344C19.6041 11.7362 20.7968 12.9289 20.7986 14.4007C20.7986 14.5422 20.8548 14.6778 20.9548 14.7778C21.0548 14.8778 21.1905 14.934 21.3319 14.934C21.4733 14.934 21.6089 14.8778 21.7089 14.7778C21.8089 14.6778 21.8651 14.5422 21.8651 14.4007C21.8627 12.3402 20.1929 10.6703 18.1324 10.668C17.8378 10.668 17.5991 10.9067 17.5991 11.2012C17.5991 11.4957 17.8378 11.7344 18.1324 11.7344Z">
                                    </path>
                                </svg>
                            </div>
                            <div class="content">
                                <span>Để biết thêm thông tin</span>
                                <h6><a href="tel:0961472726">0961 472 726</a></h6>
                            </div>
                        </div>
                        <div class="hotline-area">
                            <div class="icon">
                                <svg width="32" height="33" viewBox="0 0 32 33"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.6608 18.13C15.4654 18.1243 14.2777 17.9369 13.1387 17.5742C12.2446 17.2751 11.446 16.7441 10.8242 16.0355C10.2024 15.3269 9.77978 14.466 9.59946 13.5406C9.19786 11.6068 9.93012 9.56195 11.6069 7.92995C11.7871 7.75461 11.9742 7.58665 12.168 7.42649C13.0138 6.71831 14.0193 6.22662 15.0976 5.99386C16.1759 5.7611 17.2947 5.79426 18.3573 6.09049C19.3764 6.4159 20.2699 7.04873 20.915 7.90213C21.5601 8.75553 21.9253 9.78766 21.9605 10.8569C22.0387 12.1181 21.6276 13.3609 20.8128 14.3268C20.5045 14.715 20.0953 15.0108 19.6299 15.1816C19.1646 15.3525 18.6612 15.3918 18.1749 15.2953C17.9743 15.2536 17.7841 15.172 17.6158 15.0551C17.4474 14.9383 17.3044 14.7887 17.1952 14.6153C17.0972 14.4468 17.0342 14.2603 17.01 14.067C16.9858 13.8736 17.0009 13.6774 17.0544 13.49C17.5211 11.7268 17.9952 9.04729 18 9.02062C18.0122 8.95163 18.0378 8.88572 18.0755 8.82665C18.1132 8.76757 18.1621 8.7165 18.2195 8.67633C18.2769 8.63617 18.3416 8.6077 18.41 8.59256C18.4784 8.57742 18.5491 8.5759 18.6181 8.58809C18.6871 8.60027 18.753 8.62593 18.8121 8.66359C18.8712 8.70125 18.9222 8.75017 18.9624 8.80757C19.0026 8.86497 19.031 8.92972 19.0462 8.99812C19.0613 9.06652 19.0628 9.13723 19.0507 9.20622C19.0309 9.31769 18.5637 11.9566 18.0859 13.7625C18.069 13.812 18.0625 13.8645 18.0666 13.9167C18.0707 13.9689 18.0854 14.0197 18.1099 14.066C18.1836 14.1679 18.2949 14.2364 18.4192 14.2564C18.7169 14.3061 19.0226 14.2735 19.3032 14.1621C19.5838 14.0507 19.8286 13.8648 20.0112 13.6244C20.644 12.8674 20.961 11.8958 20.8965 10.9113C20.8711 10.0601 20.5829 9.23771 20.0714 8.55687C19.56 7.87603 18.8504 7.37014 18.04 7.10862C17.1472 6.86304 16.2081 6.83838 15.3036 7.03675C14.3992 7.23513 13.5566 7.65059 12.8485 8.24729C12.6773 8.38969 12.5104 8.53849 12.3504 8.69422C11.5216 9.50062 10.1973 11.1742 10.6437 13.3236C10.7911 14.0615 11.1287 14.7481 11.6231 15.3153C12.1175 15.8826 12.7515 16.3109 13.4624 16.5577C15.9637 17.3556 19.5584 17.4521 21.4517 15.0974C21.5414 14.9907 21.6693 14.9234 21.808 14.9098C21.9467 14.8962 22.0852 14.9375 22.1939 15.0248C22.3026 15.1121 22.3728 15.2384 22.3895 15.3768C22.4061 15.5151 22.368 15.6546 22.2832 15.7652C20.8827 17.507 18.7515 18.13 16.6608 18.13Z">
                                    </path>
                                    <path
                                        d="M14.8353 15.3649C14.2714 15.3747 13.7214 15.1899 13.2779 14.8417C12.2545 14.0225 12.2262 12.599 12.5131 11.6299C12.6102 11.3073 12.7398 10.9953 12.9009 10.6993C13.301 9.89185 13.9409 9.22779 14.7329 8.79794C15.2132 8.54876 15.761 8.46069 16.2953 8.54674C16.8295 8.63279 17.322 8.8884 17.6998 9.27581C18.0847 9.69756 18.3746 10.197 18.5499 10.7403C18.594 10.8728 18.5844 11.0172 18.5232 11.1427C18.4621 11.2681 18.3541 11.3646 18.2226 11.4113C18.0911 11.4581 17.9465 11.4514 17.8198 11.3928C17.6932 11.3342 17.5946 11.2282 17.5451 11.0977C17.4187 10.6964 17.2085 10.3265 16.9286 10.0123C16.7085 9.78721 16.4209 9.6402 16.1095 9.59369C15.7981 9.54719 15.4801 9.60374 15.2038 9.75474C14.6098 10.0897 14.1325 10.5983 13.8358 11.2123C13.7112 11.4425 13.6106 11.6848 13.5355 11.9355C13.3281 12.6363 13.3739 13.5515 13.9457 14.0091C14.5707 14.5115 15.6257 14.2993 16.2193 13.7873C16.6614 13.389 17.0413 12.9266 17.3462 12.4155C17.3831 12.356 17.4314 12.3043 17.4884 12.2635C17.5453 12.2226 17.6097 12.1934 17.6779 12.1774C17.7461 12.1614 17.8168 12.159 17.886 12.1704C17.9551 12.1817 18.0213 12.2066 18.0809 12.2435C18.1404 12.2805 18.1921 12.3288 18.2329 12.3857C18.2738 12.4426 18.303 12.507 18.319 12.5753C18.335 12.6435 18.3374 12.7142 18.326 12.7833C18.3147 12.8524 18.2898 12.9187 18.2529 12.9782C17.8914 13.5802 17.4413 14.1245 16.9179 14.5926C16.3348 15.0847 15.5982 15.3578 14.8353 15.3649Z">
                                    </path>
                                    <path
                                        d="M30.4005 32.0023H1.60049C1.17627 32.0019 0.769552 31.8332 0.469585 31.5332C0.169619 31.2332 0.000911967 30.8265 0.000488386 30.4023V10.669C0.000424993 10.5676 0.0292616 10.4683 0.0836186 10.3827C0.137976 10.2971 0.215601 10.2288 0.307397 10.1858C0.399192 10.1427 0.501355 10.1267 0.601912 10.1397C0.702468 10.1526 0.797252 10.1939 0.875155 10.2588L13.961 21.1346C14.535 21.6089 15.2564 21.8683 16.001 21.8683C16.7456 21.8683 17.467 21.6089 18.041 21.1346L31.1258 10.2583C31.2038 10.1934 31.2986 10.152 31.3992 10.1391C31.4998 10.1262 31.602 10.1422 31.6938 10.1853C31.7856 10.2284 31.8633 10.2968 31.9176 10.3825C31.9719 10.4682 32.0007 10.5675 32.0005 10.669V30.4023C32.0001 30.8265 31.8314 31.2332 31.5314 31.5332C31.2314 31.8332 30.8247 32.0019 30.4005 32.0023ZM1.06716 11.8055V30.4023C1.06716 30.6967 1.30609 30.9356 1.60049 30.9356H30.4005C30.5419 30.9356 30.6776 30.8794 30.7776 30.7794C30.8776 30.6794 30.9338 30.5438 30.9338 30.4023V11.8055L18.7216 21.9548C17.956 22.5875 16.994 22.9337 16.0009 22.9339C15.0079 22.934 14.0457 22.5882 13.28 21.9559L1.06716 11.8055Z">
                                    </path>
                                    <path
                                        d="M0.534374 11.2024C0.42111 11.2026 0.310717 11.1668 0.219187 11.1C0.127657 11.0333 0.0597426 10.9392 0.0252829 10.8313C-0.00917678 10.7234 -0.00839247 10.6074 0.0275222 10.4999C0.063437 10.3925 0.132617 10.2993 0.22504 10.2339L5.02504 6.83119C5.14046 6.74936 5.28366 6.71673 5.42314 6.74049C5.56262 6.76424 5.68695 6.84243 5.76877 6.95785C5.8506 7.07327 5.88323 7.21648 5.85947 7.35595C5.83572 7.49543 5.75753 7.61976 5.64211 7.70159L0.842107 11.1043C0.752234 11.1682 0.644662 11.2025 0.534374 11.2024ZM31.4666 11.2024C31.3564 11.2025 31.2488 11.1682 31.1589 11.1043L26.3589 7.70159C26.2447 7.61935 26.1676 7.49531 26.1445 7.35649C26.1213 7.21768 26.154 7.07534 26.2353 6.9605C26.3167 6.84566 26.4401 6.76762 26.5788 6.7434C26.7174 6.71918 26.86 6.75073 26.9754 6.83119L31.7754 10.2339C31.8678 10.2993 31.9369 10.3924 31.9729 10.4997C32.0088 10.607 32.0097 10.723 31.9754 10.8308C31.941 10.9386 31.8733 11.0328 31.7819 11.0996C31.6906 11.1664 31.5798 11.2024 31.4666 11.2024ZM20.9285 3.73572C20.8181 3.73582 20.7103 3.70152 20.6202 3.63759L18.0709 1.82959C17.4975 1.34491 16.7721 1.07691 16.0213 1.07233C15.2705 1.06775 14.5419 1.32688 13.9626 1.80452L11.3813 3.63759C11.2659 3.71941 11.1227 3.75204 10.9832 3.72828C10.8437 3.70453 10.7194 3.62634 10.6376 3.51092C10.5557 3.3955 10.5231 3.2523 10.5469 3.11282C10.5706 2.97334 10.6488 2.84901 10.7642 2.76719L13.3136 0.959185C14.0773 0.33469 15.0346 -0.00443301 16.0212 4.37621e-05C17.0077 0.00452053 17.9619 0.352318 18.72 0.983718L21.2373 2.76719C21.3297 2.83266 21.3989 2.92585 21.4348 3.03327C21.4707 3.14069 21.4715 3.25675 21.4371 3.36465C21.4026 3.47254 21.3347 3.56667 21.2432 3.63338C21.1516 3.7001 21.0412 3.73594 20.928 3.73572H20.9285ZM0.880507 31.7144C0.770687 31.7146 0.663477 31.6809 0.573522 31.6179C0.483567 31.5549 0.415252 31.4657 0.377909 31.3624C0.340566 31.2591 0.336016 31.1468 0.364879 31.0409C0.393742 30.9349 0.454612 30.8405 0.539174 30.7704L12.7098 20.6584C12.7637 20.6136 12.8259 20.5799 12.8928 20.5592C12.9598 20.5385 13.0301 20.5311 13.0999 20.5376C13.1696 20.5441 13.2374 20.5642 13.2994 20.5969C13.3614 20.6295 13.4163 20.6741 13.461 20.728C13.5058 20.7819 13.5395 20.8441 13.5602 20.911C13.5809 20.9779 13.5883 21.0482 13.5818 21.118C13.5754 21.1878 13.5552 21.2556 13.5226 21.3175C13.4899 21.3795 13.4453 21.4344 13.3914 21.4792L1.22077 31.5912C1.12524 31.6708 1.00485 31.7144 0.880507 31.7144ZM31.12 31.7144C30.9956 31.7145 30.8752 31.6709 30.7797 31.5912L18.609 21.4792C18.5538 21.4349 18.5079 21.38 18.474 21.3178C18.4402 21.2556 18.4191 21.1872 18.4119 21.1167C18.4048 21.0463 18.4117 20.9751 18.4324 20.9073C18.4531 20.8396 18.4871 20.7766 18.5323 20.7221C18.5776 20.6676 18.6333 20.6227 18.6961 20.59C18.7589 20.5573 18.8276 20.5374 18.8982 20.5315C18.9688 20.5256 19.0399 20.5338 19.1073 20.5557C19.1746 20.5776 19.237 20.6127 19.2906 20.6589L31.4613 30.7709C31.5459 30.841 31.6067 30.9355 31.6356 31.0414C31.6645 31.1474 31.6599 31.2597 31.6226 31.3629C31.5852 31.4662 31.5169 31.5554 31.427 31.6184C31.337 31.6814 31.2298 31.7146 31.12 31.7144Z">
                                    </path>
                                    <path
                                        d="M26.6672 15.1919C26.5258 15.1919 26.3901 15.1358 26.2901 15.0357C26.1901 14.9357 26.1339 14.8001 26.1339 14.6586V3.74021C26.1323 3.75088 26.1109 3.73595 26.0752 3.73595H5.92587C5.91421 3.73524 5.90252 3.73691 5.89152 3.74085C5.88052 3.7448 5.87043 3.75093 5.86187 3.75888L5.8672 14.6586C5.8672 14.8001 5.81101 14.9357 5.71099 15.0357C5.61097 15.1358 5.47532 15.1919 5.33387 15.1919C5.19242 15.1919 5.05677 15.1358 4.95675 15.0357C4.85673 14.9357 4.80054 14.8001 4.80054 14.6586V3.73595C4.80891 3.44547 4.93203 3.17014 5.14294 2.97023C5.35384 2.77032 5.63536 2.66211 5.92587 2.66928H26.0752C26.3657 2.66211 26.6472 2.77032 26.8581 2.97023C27.069 3.17014 27.1922 3.44547 27.2005 3.73595V14.6586C27.2005 14.8001 27.1443 14.9357 27.0443 15.0357C26.9443 15.1358 26.8087 15.1919 26.6672 15.1919Z">
                                    </path>
                                </svg>
                            </div>
                            <div class="content">
                                <span>Gửi Mail qua</span>
                                <h6><a href="mailto:cuzin2k3@gmail.com">cuzin2k3@gmail.com</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="footer-btm-menu">
                        <ul>
                            <li><a href="mailto:cuzin2k3@gmail.com">Quảng cáo với chúng tôi</a></li>
                            <li><a href="/sitemap.xml">
                                    Sơ đồ trang web của chúng tôi</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-btm">
                    <div class="copyright-area">
                        <p>Copyright 2023 <a href="#">DRIVCO</a> | Design By <a href="#">Egens Lab</a></p>
                    </div>
                    <div class="social-area">
                        <h6>Follow Drivco:</h6>
                        <ul>
                            <li><a target="_blank" href="https://www.facebook.com/drivco/"><i
                                        class="bx bxl-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <button id="backToTopBtn" title="Go to top">
            <i class="fa fa-arrow-up"></i>
        </button>

        <!-- Messenger Plugin chat Code -->
        <div id="fb-root"></div>

        <!-- Your Plugin chat code -->
        <div id="fb-customer-chat" class="fb-customerchat">
        </div>

        <script>
            var chatbox = document.getElementById('fb-customer-chat');
            chatbox.setAttribute("page_id", "170265699509568");
            chatbox.setAttribute("attribution", "biz_inbox");
        </script>

        <!-- Your SDK code -->
        <script>
            window.fbAsyncInit = function() {
                FB.init({
                    xfbml: true,
                    version: 'v18.0'
                });
            };

            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

        @livewireScripts

        <script data-cfasync="false" src="{{ asset('js/email-decode.min.js') }}"></script>
        <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('js/jquery-ui.js') }}"></script>
        <!--<script src="{{ asset('js/jquery.validate.min.js') }}"></script>-->

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

        <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>

        {{-- <script src="{{asset('js/jquery.nice-select.min.js')}}"></script> --}}
        <script src="{{ asset('js/custom.js') }}"></script>


        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

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

        <script>
            Livewire.on('showSuccess', message => {
                toastr.success(message);
            });
            Livewire.on('showError', message => {
                toastr.error(message);
            });
            Livewire.on('showInfo', message => {
                toastr.info(message);
            });
        </script>

        <script>
            $(document).ready(function() {
                const button = $("#backToTopBtn");
                $(window).scroll(function() {
                    if ($(this).scrollTop() > 20) {
                        button.fadeIn();
                    } else {
                        button.fadeOut();
                    }
                });
                button.click(function() {
                    $("html, body").animate({
                        scrollTop: 0
                    }, 50);
                    return false;
                });
            });
        </script>

        @stack('scripts')


    </body>

    </html>
