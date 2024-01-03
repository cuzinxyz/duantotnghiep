@section('page_title')
    {{ auth()->check() ? auth()->user()->name . ' - Drivco' : 'Drivco' }}
@endsection

<x-partials.layout-client>
    @include('components.nofication')
    <style>
        .product-st-card1 {
            min-height: 200px
        }

        .bg-drivco {
            background-color: #46D993
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 1rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .feature-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 4rem;
            height: 4rem;
            margin-bottom: 1rem;
            font-size: 2rem;
            color: #fff;
            border-radius: .75rem;
        }

        .icon-link {
            display: inline-flex;
            align-items: center;
        }

        .icon-link>.bi {
            margin-top: .125rem;
            margin-left: .125rem;
            transition: transform .25s ease-in-out;
            fill: currentColor;
        }

        .icon-link:hover>.bi {
            transform: translate(.25rem);
        }

        .icon-square {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 3rem;
            height: 3rem;
            font-size: 1.5rem;
            border-radius: .75rem;
        }

        .rounded-4 {
            border-radius: .5rem;
        }

        .rounded-5 {
            border-radius: 1rem;
        }

        .text-shadow-1 {
            text-shadow: 0 .125rem .25rem rgba(0, 0, 0, .25);
        }

        .text-shadow-2 {
            text-shadow: 0 .25rem .5rem rgba(0, 0, 0, .25);
        }

        .text-shadow-3 {
            text-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .25);
        }

        .card-cover {
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            z-index: 1;
        }
    </style>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="collection" viewBox="0 0 16 16">
            <path
                d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z">
            </path>
        </symbol>
        <symbol id="eye" viewBox="0 0 16 16">
            <path
                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
        </symbol>
        <symbol id="chat-quote-fill" viewBox="0 0 16 16">
            <path
                d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM7.194 6.766a1.688 1.688 0 0 0-.227-.272 1.467 1.467 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 5.734 6C4.776 6 4 6.746 4 7.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.461 2.461 0 0 0-.227-.4zM11 9.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.466 2.466 0 0 0-.228-.4 1.686 1.686 0 0 0-.227-.273 1.466 1.466 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 10.07 6c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z">
            </path>
        </symbol>
        <symbol id="chevron-up" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707z" />
        </symbol>
        <symbol id="heart" viewBox="0 0 16 16">
            <path
                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
        </symbol>
    </svg>
    <div class="product-details-page">
        <div class="container shadow">
            <div class="inner-page-banner ">
                <div class="banner-wrapper p-0">
                    <div class="container-fluid">
                        <ul class="breadcrumb-list d-flex justify-content-between">
                            <li><a href="/">Trang chủ</a></li>
                            <li>
                                <div class="d-flex align-items-center p-1 rounded-pill"
                                    style="background-color: #f4f4f4;">
                                    <img src="/images/goi-pro.svg" alt="Có gì mới" style="width: 1rem; height: 1rem;">
                                    @php
                                        $expired_date = \Carbon\Carbon::parse(auth()->user()->expired_date);
                                        $current_date = \Carbon\Carbon::now();

                                        $days_left = $current_date->diffInDays($expired_date) . ' ngày';
                                    @endphp
                                    <span
                                        class="ms-2">{{ auth()->user()->service_id != 0 && auth()->user()->expired_date >= \Carbon\Carbon::now() ? auth()->user()->service->service_name . ' còn ' . $days_left : 'Bạn chưa đăng ký dịch vụ' }}</span>
                                </div>
                            </li>
                        </ul>
                        <div class="row mt-5">
                            <div
                                class="col-lg-12 d-flex align-items-center justify-content-between flex-wrap gap-4 mb-4">
                                <div class="section-title-2 d-flex align-items-center gap-2">
                                    <div class="d-flex align-items-center">

                                        @if (strpos(auth()->user()->avatar, 'http') === 0)
                                            <img style="width: 50px;height:50px;object-fit:cover" class="rounded-circle"
                                                src="{{ auth()->user()->avatar }}" alt="">
                                        @elseif (Storage::url(auth()->user()->avatar))
                                            <img style="width: 50px;height:50px;object-fit:cover" class="rounded-circle"
                                                src="{{ 'storage/' . auth()->user()->avatar }}" alt="">
                                        @else
                                            <img style="width: 50px;height:50px;object-fit:cover" class="rounded-circle"
                                                src="{{ 'https://ui-avatars.com/api/?name=' . auth()->user()->name }}"
                                                alt="">
                                        @endif

                                        <p class="fw-bolder ms-2 text-capitalize">{{ auth()->user()->name }}</p>

                                        <i class="text-success ms-1 bi bi-check-circle-fill"></i>

                                    </div>
                                </div>
                                <div class="d-flex align-items-center p-1 rounded" style="background-color: #f4f4f4;">
                                    <img src="/images/dongTot.svg" alt="Đồng Tốt" style="width: 1rem; height: 1rem;">
                                    <span class="fw-bolder mx-2">Số dư:
                                        {{ number_format(auth()->user()->account_balence) }}</span>
                                    <a href="{{ route('recharge') }}"><i class="bi bi-plus-square-fill"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-90">
                <div class="col-lg-12">
                    <div class="nav nav2 nav  nav-pills" id="v-pills-tab2" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-1-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-1" type="button" role="tab" aria-controls="v-pills-1"
                            aria-selected="false">Đang Hiển Thị ({{ $cars->count() }})</button>
                        @if (!empty($billHistories))
                            <button class="nav-link" id="v-pills-2-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-2" type="button" role="tab" aria-controls="v-pills-2"
                                aria-selected="true">Thống kê</button>
                        @endif
                        <button class="nav-link" id="v-pills-3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-3"
                            type="button" role="tab" aria-controls="v-pills-3" aria-selected="true">Bị Từ Chối
                            ({{ $deniedCars->count() }})</button>
                        <button class="nav-link" id="v-pills-6-tab" data-bs-toggle="pill" data-bs-target="#v-pills-6"
                            type="button" role="tab" aria-controls="v-pills-6" aria-selected="true">Chờ duyệt
                            ({{ $pendingCars->count() }})</button>
                        <button class="nav-link" id="v-pills-7-tab" data-bs-toggle="pill" data-bs-target="#v-pills-7"
                            type="button" role="tab" aria-controls="v-pills-7" aria-selected="true">Đã ẩn
                            ({{ $hiddenCars->count() }})</button>
                        <a href="{{ route('paymentHistory') }}">
                            <button class="nav-link" type="button">Lịch sử hoạt động</button>
                        </a>
                        @if (\App\Models\Salon::where('user_id', auth()->id())->first())
                            <a href="{{ route('salon') }}">Salon của tôi</a>
                        @endif
                    </div>
                    <div class="tab-content tab-content2" id="v-pills-tabContent2">
                        {{-- DISPLAY CAR --}}
                        <div class="tab-pane fade active show" id="v-pills-1" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">
                            <div class="reviews-area">
                                <div class="row g-lg-4 gy-5">
                                    <div class="col-md-6 col-sm-12">

                                        @if ($cars->isEmpty())
                                            <p class="text-secondary text-uppercase">
                                                <i class="bi bi-recycle"></i> Bạn chưa đăng tin nào cả!
                                            </p>
                                        @else
                                            @foreach ($cars as $car)
                                                <div class="product-st-card1 two mb-30" style="position: relative">
                                                    <div class="product-img">
                                                        <div class="product-price">
                                                            <span>{{ number_format($car->price) }}</span>
                                                        </div>
                                                        <div class="car-img">
                                                            <img class="img-fluid w-100"
                                                                style="object-fit:cover;max-height: 121px"
                                                                src="{{ asset('storage/' . $car->verhicle_image_library[0]) }}"
                                                                alt="image">
                                                        </div>
                                                    </div>
                                                    <div class="product-content" style="flex: 1 1 auto">
                                                        <h6><a
                                                                href="{{ route('car-detail', $car->slug) }}">{{ $car->title }}</a>
                                                        </h6>
                                                        <ul class="features">
                                                            <li>
                                                                {{-- @dd($car) --}}
                                                                <img src="{{ asset('images/menual.svg') }}"
                                                                    alt="">
                                                                {{ $car->car_info['transmission'] }}
                                                            </li>
                                                            <li>
                                                                <img src="{{ asset('images/fuel.svg') }}"
                                                                    alt="">
                                                                {{ $car->car_info['fuelType'] }}
                                                            </li>
                                                            <li>
                                                                <img src="{{ asset('images/electric.svg') }}"
                                                                    alt="">
                                                                {{ $car->car_info['mileage'] }}
                                                            </li>
                                                            @php
                                                                $purchased_services = DB::table('purchased_service')
                                                                    ->where('user_id', auth()->id())
                                                                    ->where('expired_date', '>=', \Carbon\Carbon::now())
                                                                    ->get();

                                                                $carIds = $purchased_services->pluck('car_id')->filter();
                                                                $carIdArray = explode(',', $carIds->implode(','));
                                                                $uniqueCarIds = implode(',', array_unique($carIdArray));

                                                                $pushed_cars = explode(',', $uniqueCarIds);

                                                                foreach ($pushed_cars as $pushed_car) {
                                                                    if ($pushed_car == $car->id) {
                                                                        echo '<li class="text-success"><i class="text-success bi bi-check2-circle"></i>Tin này đã được đẩy!</li>';
                                                                    }
                                                                }
                                                            @endphp
                                                        </ul>
                                                    </div>
                                                    <label class="popup">
                                                        <input type="checkbox">
                                                        <div class="burger" tabindex="0">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </div>
                                                        <nav class="popup-window">
                                                            <legend>Hành động</legend>
                                                            <ul>
                                                                <hr>
                                                                <li
                                                                    onclick="window.location='{{ route('day-tin', $car->id) }}'">
                                                                    <button>
                                                                        <svg stroke-linejoin="round"
                                                                            stroke-linecap="round" stroke-width="2"
                                                                            stroke="currentColor" fill="none"
                                                                            viewBox="0 0 24 24" height="14"
                                                                            width="14"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <rect ry="2" rx="2"
                                                                                height="13" width="13" y="9"
                                                                                x="9"></rect>
                                                                            <path
                                                                                d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1">
                                                                            </path>
                                                                        </svg>
                                                                        <span>Đẩy tin</span>
                                                                    </button>
                                                                </li>
                                                                <li>
                                                                    <button
                                                                        onclick="window.location='{{ route('editSellCar', $car->id) }}'">
                                                                        <svg stroke-linejoin="round"
                                                                            stroke-linecap="round" stroke-width="2"
                                                                            stroke="currentColor" fill="none"
                                                                            viewBox="0 0 24 24" height="14"
                                                                            width="14"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <polygon
                                                                                points="16 3 21 8 8 21 3 21 3 16 16 3">
                                                                            </polygon>
                                                                        </svg>
                                                                        <span>Sửa tin</span>
                                                                    </button>
                                                                </li>
                                                                <hr>
                                                                <li>
                                                                    <button
                                                                        onclick="window.location.href='{{ route('hiddenCar', $car->id) }}'">
                                                                        <svg stroke-linejoin="round"
                                                                            stroke-linecap="round" stroke-width="2"
                                                                            stroke="currentColor" fill="none"
                                                                            viewBox="0 0 24 24" height="14"
                                                                            width="14"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <line y2="18" x2="6"
                                                                                y1="6" x1="18"></line>
                                                                            <line y2="18" x2="18"
                                                                                y1="6" x1="6"></line>
                                                                        </svg>
                                                                        <span>Ẩn tin</span>
                                                                    </button>
                                                                </li>
                                                            </ul>
                                                        </nav>
                                                    </label>
                                                </div>
                                            @endforeach
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- DASHBOARD --}}
                        @if (!empty($billHistories))
                            <div class="tab-pane fade" id="v-pills-2" role="tabpanel"
                                aria-labelledby="v-pills-common-tab">
                                <div class="reviews-area">
                                    <div class="container px-4 py-2" id="featured-3">
                                        <div class="row g-4 row-cols-1 row-cols-lg-3">
                                            <div class="feature col d-flex" style="column-gap:20px">
                                                <div class="feature-icon bg-drivco bg-gradient">
                                                    <svg class="bi" width="1em" height="1em">
                                                        <use xlink:href="#collection"></use>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h6>{{ $billHistories->service_name }}</h6>
                                                    <p class="text-success">
                                                        <i class="bi bi-check2-circle"></i>
                                                        @php
                                                            $string = $billHistories->description;
                                                            $newString = str_replace(' \n', ', ', $string);
                                                            echo $newString;
                                                        @endphp
                                                    </p>
                                                    <p class="text-small">
                                                        Bạn còn {{ $purchased_service->remaining_push }} lượt đẩy tin
                                                    </p>
                                                </div>
                                                <div>
                                                    <a href="{{route('deleteService', $purchased_service->service_id)}}" onclick="return confirm('Bạn có chắc muốn hủy gói tin này ?')" class="btn btn-danger">Hủy gói tin</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <hr>

                                    @if (!empty($purchased_service))
                                        <div class="container px-4 py-1" id="custom-cards">
                                            @if (Carbon\Carbon::now()->between(
                                                    \Carbon\Carbon::parse($purchased_service->expired_date)->subDays(2),
                                                    \Carbon\Carbon::parse($purchased_service->expired_date)))
                                                <div class="alert alert-warning">
                                                    Tin này của bạn sẽ hết hạn vào ngày
                                                    {{ \Carbon\Carbon::parse($purchased_service->expired_date)->format('d-m-Y') }}
                                                    .Vui lòng
                                                    <button class="btn btn-sm btn-warning"
                                                        onclick="window.location.href='{{ route('service.expired_date', $purchased_service->service_id) }}'">
                                                        Gia hạn
                                                    </button>
                                                    để tiếp tục duy trì tin gói tin.
                                                </div>
                                            @endif
                                            @foreach (App\Models\Car::with('services')->where('id', $purchased_service->car_id)->get() as $item)
                                                <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                                                    <div class="col">
                                                        <div class="overlay-product card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                                                            style="background-image: url('/storage/{{ $item->verhicle_image_library[0] }}');">
                                                            <div
                                                                class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                                                <h2
                                                                    class="pt-5 mt-5 mb-4 fs-6 lh-1 fw-bold text-white">
                                                                    {{ $item->title }}</h2>
                                                                <ul class="d-flex list-unstyled mt-auto">
                                                                    <li class="me-auto">
                                                                        {{ $item->countComments($item->id) }}
                                                                        <svg class="bi me-2" width="1em"
                                                                            height="1em">
                                                                            <use xlink:href="#chat-quote-fill">
                                                                            </use>
                                                                        </svg>
                                                                        {{-- <img src="2918581" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white"> --}}
                                                                    </li>
                                                                    <li class="d-flex align-items-center me-3">
                                                                        <svg class="bi me-2" width="1em"
                                                                            height="1em">
                                                                            <use xlink:href="#heart"></use>
                                                                        </svg>
                                                                        <small>{{ $item->countWishlish($item->id) }}</small>
                                                                    </li>
                                                                    <li class="d-flex align-items-center">
                                                                        <svg class="bi me-2" width="1em"
                                                                            height="1em">
                                                                            <use xlink:href="#eye"></use>
                                                                        </svg>
                                                                        <small>{{ views($item)->count() }}</small>
                                                                    </li>
                                                                </ul>
                                                                <span>Ngày hết hạn:
                                                                    {{ \Carbon\Carbon::parse($purchased_service->expired_date)->format('d-m-Y') }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endif
                        {{-- DENIED CAR --}}
                        <div class="tab-pane fade" id="v-pills-3" role="tabpanel"
                            aria-labelledby="v-pills-common-tab">
                            <div class="reviews-area">
                                <div class="row g-lg-4 gy-5">
                                    <div class="col-lg-7">

                                        @if ($deniedCars->isEmpty())
                                            <p class="text-secondary text-uppercase">
                                                <i class="bi bi-recycle"></i> Bạn không có tin nào bị từ chối!
                                            </p>
                                        @else
                                            @foreach ($deniedCars as $car)
                                                <div class="product-st-card1 two mb-30" style="position: relative">
                                                    <div class="product-img">
                                                        <div class="product-price">
                                                            <span>{{ number_format($car->price) }}</span>
                                                        </div>
                                                        <div class="car-img">
                                                            <img class="img-fluid w-100"
                                                                style="object-fit:cover;max-height: 121px"
                                                                src="{{ asset('storage/' . $car->verhicle_image_library[0]) }}"
                                                                alt="image">
                                                        </div>
                                                    </div>
                                                    <div class="product-content" style="flex: 1 1 auto">
                                                        <h6><a href="#">{{ $car->title }}</a></h6>
                                                        <ul class="features">
                                                            <li>
                                                                Lý do: <span class="text-warning fw-bold">
                                                                    {{ $car->reason ? $car->reason : 'Vi phạm nội quy.' }}
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-2-tab">
                            <p>4</p>
                        </div>
                        {{-- PENDING CAR --}}
                        <div class="tab-pane fade" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-2-tab">
                            <div class="reviews-area">
                                <div class="row g-lg-4 gy-5">
                                    <div class="col-lg-7">
                                        @if ($pendingCars->isEmpty())
                                            <p class="text-secondary text-uppercase">
                                                <i class="bi bi-recycle"></i> Bạn chưa đăng tin nào cả!
                                            </p>
                                        @else
                                            @foreach ($pendingCars as $car)
                                                <div class="product-st-card1 two mb-30" style="position: relative">
                                                    <div class="product-img">
                                                        <div class="product-price">
                                                            <span>{{ number_format($car->price) }}</span>
                                                        </div>
                                                        <div class="car-img">
                                                            <img class="img-fluid w-100"
                                                                style="object-fit:cover;max-height: 121px"
                                                                src="{{ asset('storage/' . $car->verhicle_image_library[0]) }}"
                                                                alt="image">
                                                        </div>
                                                    </div>
                                                    <div class="product-content" style="flex: 1 1 auto">
                                                        <h6><a href="#">{{ $car->title }}</a></h6>
                                                        <ul class="features">
                                                            <li>
                                                                {{-- @dd($car) --}}
                                                                <img src="{{ asset('images/menual.svg') }}"
                                                                    alt="">
                                                                {{ $car->car_info['transmission'] }}
                                                            </li>
                                                            <li>
                                                                <img src="{{ asset('images/fuel.svg') }}"
                                                                    alt="">
                                                                {{ $car->car_info['fuelType'] }}
                                                            </li>
                                                            <li>
                                                                <img src="{{ asset('images/electric.svg') }}"
                                                                    alt="">
                                                                {{ $car->car_info['mileage'] }}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-7" role="tabpanel" aria-labelledby="v-pills-2-tab">
                            <div class="reviews-area">
                                <div class="row g-lg-4 gy-5">
                                    <div class="col-lg-7">
                                        @if ($hiddenCars->isEmpty())
                                            <p class="text-secondary text-uppercase">
                                                <i class="bi bi-recycle"></i> Bạn không có tin nào ẩn cả!
                                            </p>
                                        @else
                                            @foreach ($hiddenCars as $car)
                                                <div class="product-st-card1 two mb-30" style="position: relative">
                                                    <div class="product-img">
                                                        <div class="product-price">
                                                            <span>{{ number_format($car->price) }}</span>
                                                        </div>
                                                        <div class="car-img">
                                                            <img class="img-fluid w-100"
                                                                style="object-fit:cover;max-height: 121px"
                                                                src="{{ asset('storage/' . $car->verhicle_image_library[0]) }}"
                                                                alt="image">
                                                        </div>
                                                    </div>
                                                    <div class="product-content" style="flex: 1 1 auto">
                                                        <h6><a href="#">{{ $car->title }}</a></h6>
                                                        <ul class="features">
                                                            <li>
                                                                {{-- @dd($car) --}}
                                                                <img src="{{ asset('images/menual.svg') }}"
                                                                    alt="">
                                                                {{ $car->car_info['transmission'] }}
                                                            </li>
                                                            <li>
                                                                <img src="{{ asset('images/fuel.svg') }}"
                                                                    alt="">
                                                                {{ $car->car_info['fuelType'] }}
                                                            </li>
                                                            <li>
                                                                <img src="{{ asset('images/electric.svg') }}"
                                                                    alt="">
                                                                {{ $car->car_info['mileage'] }}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-partials.layout-client>
