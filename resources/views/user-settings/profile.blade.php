<x-partials.layout-client>
    @include('components.nofication')

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

                                        <img src="
                                        {{ auth()->user()->avatar ? asset('storage/' . auth()->user()->avatar) : 'https://ui-avatars.com/api/?name=' . auth()->user()->name }}"
                                            class="rounded-circle object-fit-cover shadow"
                                            style="width: 50px;height:50px" alt="avatar">

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
                            aria-selected="false">Đang Hiển Thị (1)</button>
                        <button class="nav-link" id="v-pills-2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2"
                            type="button" role="tab" aria-controls="v-pills-2" aria-selected="true">Hết hạn
                            (0)</button>
                        <button class="nav-link" id="v-pills-3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-3"
                            type="button" role="tab" aria-controls="v-pills-3" aria-selected="true">Bị Từ Chối
                            (0)</button>
                        <button class="nav-link" id="v-pills-4-tab" data-bs-toggle="pill" data-bs-target="#v-pills-4"
                            type="button" role="tab" aria-controls="v-pills-4" aria-selected="true">Cần Thanh Toán
                            (0)</button>
                        <button class="nav-link" id="v-pills-5-tab" data-bs-toggle="pill" data-bs-target="#v-pills-5"
                            type="button" role="tab" aria-controls="v-pills-5" aria-selected="true">Tin Nháp
                            (0)</button>
                        <button class="nav-link" id="v-pills-6-tab" data-bs-toggle="pill" data-bs-target="#v-pills-6"
                            type="button" role="tab" aria-controls="v-pills-6" aria-selected="true">Chờ duyệt
                            (0)</button>
                        <button class="nav-link" id="v-pills-7-tab" data-bs-toggle="pill" data-bs-target="#v-pills-7"
                            type="button" role="tab" aria-controls="v-pills-7" aria-selected="true">Đã ẩn
                            (0)</button>
                        <a href="{{ route('paymentHistory') }}">
                            <button class="nav-link" type="button">Lịch sử nạp tiền</button>
                        </a>
                    </div>
                    <div class="tab-content tab-content2" id="v-pills-tabContent2">
                        <div class="tab-pane fade active show" id="v-pills-1" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">
                            <div class="reviews-area">
                                <div class="row g-lg-4 gy-5">
                                    <div class="col-lg-7">

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
                                                        <a href="#" class="fav">
                                                            <svg width="14" height="13" viewBox="0 0 14 14"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                                                                </path>
                                                            </svg>
                                                        </a>
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
                                                                {{ $car->car_info['fuel'] }}
                                                            </li>
                                                            <li>
                                                                <img src="{{ asset('images/electric.svg') }}"
                                                                    alt="">
                                                                {{ $car->car_info['mileage_traveled'] }}
                                                            </li>
                                                            @php
                                                                $purchased_service = DB::table('purchased_service')
                                                                    ->where('user_id', auth()->id())
                                                                    ->where('expired_date', '>=', \Carbon\Carbon::now())
                                                                    ->orderBy('expired_date', 'desc')
                                                                    ->first();
                                                                if ($purchased_service) {
                                                                    if (str_contains($purchased_service->car_id, $car->id)) {
                                                                        $isPush = true;
                                                                    } else {
                                                                        $isPush = false;
                                                                    }
                                                                }
                                                            @endphp
                                                            @if (isset($isPush) && $isPush)
                                                                <li class="text-success">
                                                                    <i class="text-success bi bi-check2-circle"></i>
                                                                    {{ $isPush ? 'Tin này đã được đẩy!' : '' }}
                                                                </li>
                                                            @endif
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
                                                                    <button>
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
                                                                    <button>
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
                                                {{-- <div class="profile-car-item">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-5 col-sm-6">
                                                            <img class="rounded"
                                                                src="{{ asset('storage/' . $car->verhicle_image_library[0]) }}"
                                                                alt="{{ $car->title }}">
                                                        </div>
                                                        <div class="col-lg-8 col-md-7 col-sm-6">
                                                            <div class="author-and-review">
                                                                <div class="author-name-deg">
                                                                    <h6>{{ $car->title }}</h6>
                                                                </div>
                                                                <div>
                                                                    <p class="fw-bolder text-danger">
                                                                        {{ number_format($car->price) }} đ</p>
                                                                </div>
                                                            </div>
                                                            <p class="text-primary fs-6 font-weight-light">
                                                                {{ $car->brand->brand_name }} -
                                                                {{ $car->brand->models->model_name }}
                                                            </p>
                                                            <div class="replay-btn">
                                                                <span class="text-secondary">Ngày đăng: </span>
                                                                <span>{{ $car->created_at->diffForHumans() }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="d-flex justify-content-between align-items-center my-3">
                                                        <div>
                                                            <input type="checkbox" name="" id="">
                                                            <label for="">Chọn tin</label>
                                                        </div>
                                                        <div>
                                                            <a href="{{ route('day-tin', $car->id) }}"
                                                                class="btn border fw-bolder"><i
                                                                    class="bi bi-arrow-counterclockwise"></i> Đẩy
                                                                tin</a>
                                                            <a href="" class="btn border fw-bolder"><i
                                                                    class="bi bi-pencil"></i> Sửa
                                                                tin</a>
                                                            <a href="" class="btn border fw-bolder"><i
                                                                    class="bi bi-eye-slash"></i>
                                                                Ẩn tin</a>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                            @endforeach
                                        @endif

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="v-pills-2" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab">
                            <p>1</p>
                        </div>
                        <div class="tab-pane fade" id="v-pills-3" role="tabpanel"
                            aria-labelledby="v-pills-common-tab">
                            <div class="addithonal-information">
                                <p>2</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-1-tab">
                            <p>3</p>
                        </div>
                        <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-2-tab">
                            <p>4</p>
                        </div>
                        <div class="tab-pane fade" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-2-tab">
                            <p>5</p>
                        </div>
                        <div class="tab-pane fade" id="v-pills-7" role="tabpanel" aria-labelledby="v-pills-2-tab">
                            <p>6</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-partials.layout-client>
