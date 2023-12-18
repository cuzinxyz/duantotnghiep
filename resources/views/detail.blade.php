@section('page_title')
    {{ $carDetail->title ? $carDetail->title . ' - Drivco' : 'Drivco' }}
@endsection
@section('title_seo')
    {{ $carDetail->title ? $carDetail->title . ' - Drivco' : 'Drivco' }}
@endsection
@section('thumb_seo')
    {{ $carDetail->verhicle_image_library ? asset('storage/' . $carDetail->verhicle_image_library[0]) : '' }}
@endsection
@push('styles')
    <style>
        @media only screen and (max-width: 988px) {
            .contact-fixed {
                left: 0;
                padding: 10px 0 !important;
                width: 100%;
                position: fixed !important;
                bottom: 0;
                background: #fff;
                z-index: 123;
                margin: 0;
                border-top: 6px solid !important;
                border-image-slice: 1 !important;
                border-image-source: linear-gradient(to right bottom, #6a5af9, #f62682) !important;
            }
        }
    </style>
@endpush
<x-partials.layout-client>
    <x-detailpage.banner :$carDetail />

    <div class="car-details-area pt-50 mb-50">
        <div class="container">
            <div class="row">
                <x-detailpage.info-car :$carDetail />

                <div class="col-lg-4">
                    <div class="car-details-sidebar">
                        <div class="contact-info mb-50 px-3 py-4 contact-fixed">
                            <div class="d-flex align-items-center gap-2">
                                @if (strpos($carDetail->user->avatar, "http") === 0)
                                    <img style="width: 50px;height:50px;object-fit:cover" class="img-fluid profile-image rounded-circle border-danger border-2" style="width: 60px;height:60px;object-fit:cover"
                                        src="{{$carDetail->user->avatar}}"
                                        alt="">
                                @elseif (Storage::url($carDetail->user->avatar))
                                    <img style="width: 50px;height:50px;object-fit:cover" class="img-fluid profile-image rounded-circle border-danger border-2" style="width: 60px;height:60px;object-fit:cover"
                                        src="{{asset('storage/'. $carDetail->user->avatar)}}"
                                        alt="">
                                @else
                                    <img style="width: 50px;height:50px;object-fit:cover" class="img-fluid profile-image rounded-circle border-danger border-2" style="width: 60px;height:60px;object-fit:cover"
                                        src="{{'https://ui-avatars.com/api/?name=' . $carDetail->user->name }}"
                                        alt="">
                                @endif
                                <div class="ml-3">
                                    <h6 class="name">{{ $carDetail->user->name }}</h6>
                                    <small>Tham gia vào {{ $carDetail->created_at->diffForHumans() }}</small>
                                </div>
                            </div>

                            <div class="px-2 pt-3 d-flex align-items-center flex-wrap overflow-hidden" style="row-gap:10px;column-gap:10px">
                                <!--<form action="/chatify/{{ $carDetail->user_id }}?fromID={{$carDetail->id}}">-->
                                    <div class="form-inner d-flex align-items-center gap-1">
                                        <button class="btn py-2 px-2 fw-bold" type="button" onclick="window.location.href='/chatify/{{ $carDetail->user_id }}?fromID={{$carDetail->id}}'" style="font-size:12px;background:#f1f1f1;border-radius:24px">
                                            @if (strpos($carDetail->user->avatar, "http") === 0)
                                                <img style="width: 30px;height:30px;border-radius:12px" style="width: 60px;height:60px;object-fit:cover"
                                                    src="{{$carDetail->user->avatar}}"
                                                    alt="">
                                                    Nhắn tin
                                            @elseif (Storage::url($carDetail->user->avatar))
                                                <img style="width: 30px;height:30px;border-radius:12px" style="width: 60px;height:60px;object-fit:cover"
                                                    src="{{asset('storage/'. $carDetail->user->avatar)}}"
                                                    alt="">
                                                    Nhắn tin
                                            @else
                                                <img style="width: 30px;height:30px;border-radius:12px" style="width: 60px;height:60px;object-fit:cover"
                                                    src="{{'https://ui-avatars.com/api/?name=' . $carDetail->user->name }}"
                                                    alt="">
                                                    Nhắn tin
                                            @endif
                                        </button>
                                    </div>
                                <!--</form>-->
                                <a href="mailto:{{ $carDetail->user->email }}">
                                    <button class="btn py-2 px-2 d-flex align-items-center gap-1 fw-bold"
                                        style="font-size:12px;background:#f1f1f1;border-radius:24px">
                                        <i class="bx bx-at"></i> {{ $carDetail->user->email }}
                                    </button>
                                </a>
                                <a href="tel:{{ $carDetail->user->phone_number }}">
                                    <button class="btn py-2 px-2 d-flex align-items-center gap-1 fw-bold"
                                        style="font-size:12px;background:#f1f1f1;border-radius:24px">
                                        <i class="bx bx-phone-call"></i> {{ $carDetail->user->phone_number }}
                                    </button>
                                </a>

                                @if (!empty($carDetail->salon_id))
                                    <a href="{{ route('salon.listCars', $carDetail->salon->slug) }}">
                                        <button class="btn p-2 d-flex align-items-center gap-1 fw-bold"
                                            style="font-size:12px;background:#f1f1f1;border-radius:24px">
                                            <i class="bi bi-shop"></i>
                                            Xem salon
                                        </button>
                                    </a>
                                @endif
                            </div>
                        </div>
                        @if ($ads->count() > 0)
                            <div class="recent-car-area">
                                <div class="title mb-30">
                                    <h5>Ads</h5>
                                </div>
                                <div class="tab-content mb-30">

                                    <div class="product-st-card1 two mb-30">
                                        @if ($ads->count() == 0)
                                            <a href="https://secure-ds.serving-sys.com/resources/PROD/asset/1073745238/IMAGE/20230113/Carmudi%20Banner%20[300x600]_76522578997430414.jpg"
                                                target="_blank">
                                                <img src="https://secure-ds.serving-sys.com/resources/PROD/asset/1073745238/IMAGE/20230113/Carmudi%20Banner%20[300x600]_76522578997430414.jpg"
                                                    alt=""></a>
                                        @else
                                            @foreach ($ads as $value)
                                                <a href="{{ $value->target_url }}" target="_blank"
                                                    rel="noopener noreferrer">
                                                    <img src="{{ asset('storage/' . $value->image_url) }}"
                                                        alt="">
                                                </a>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="recent-car-area">
                            <div class="title mb-30">
                                <h5>Xe gần đây</h5>
                            </div>
                            <div class="tab-content mb-30">
                                @foreach ($recentCars as $car)
                                    <div class="product-st-card1 two mb-30">
                                        <div class="product-img">
                                            <div class="product-price">
                                                <span>{{ number_format($car->price) }}</span>
                                            </div>
                                            <livewire:add-to-wish-list carID="{{ $car->id }}" />
                                            <div class="car-img">
                                                <img class="img-fluid recent-car-thumb"
                                                    src="{{ asset('storage/' . $car->verhicle_image_library[0]) }}"
                                                    alt="image">
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h6><a class="line-clamp-1"
                                                    href="{{ route('car-detail', $car->slug) }}">{{ $car->title }}</a>
                                            </h6>
                                            <ul class="features">
                                                <li>
                                                    <img src="{{ asset('images/menual.svg') }}" alt="">
                                                    {{ $car ? ($car->car_info['transmission'] == 'sotudong' ? 'Số tự động' : 'Số tay') : '' }}
                                                </li>
                                                <li>
                                                    <img width="13" height="13"
                                                        src="{{ asset('images/fuel.svg') }}" alt="">
                                                    {{ $car ? $car->car_info['fuelType'] : '' }}
                                                </li>
                                                <li>
                                                    <img src="{{ asset('images/miles.svg') }}" alt="">
                                                    {{ $car ? number_format($car->car_info['mileage']) : '' }}
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="view-all-btn">
                                    <a style="margin-right: -10px;margin-left:-10px;"
                                        class="btn btn-sm primary-btn3 two" href="{{ route('car.list') }}">
                                        <svg width="35" height="21" viewBox="0 0 35 21"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11 20C5.47715 20 1 15.7467 1 10.5C1 5.25329 5.47715 1 11 1"
                                                stroke-linecap="round"></path>
                                            <path
                                                d="M14.2597 3C14.1569 3 14.0583 3.04166 13.9856 3.11582C13.9129 3.18997 13.8721 3.29055 13.8721 3.39542C13.8721 3.50029 13.9129 3.60086 13.9856 3.67502C14.0583 3.74917 14.1569 3.79083 14.2597 3.79083H15.8104C15.9132 3.79083 16.0118 3.74917 16.0845 3.67502C16.1572 3.60086 16.198 3.50029 16.198 3.39542C16.198 3.29055 16.1572 3.18997 16.0845 3.11582C16.0118 3.04166 15.9132 3 15.8104 3H14.2597ZM16.7795 3C16.6767 3 16.5781 3.04166 16.5054 3.11582C16.4327 3.18997 16.3919 3.29055 16.3919 3.39542C16.3919 3.50029 16.4327 3.60086 16.5054 3.67502C16.5781 3.74917 16.6767 3.79083 16.7795 3.79083H21.3346C21.4374 3.79083 21.536 3.74917 21.6087 3.67502C21.6814 3.60086 21.7222 3.50029 21.7222 3.39542C21.7222 3.29055 21.6814 3.18997 21.6087 3.11582C21.536 3.04166 21.4374 3 21.3346 3H16.7795Z">
                                            </path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M15.2292 5.76953C15.1264 5.76953 15.0278 5.81119 14.9551 5.88535C14.8824 5.9595 14.8415 6.06008 14.8415 6.16495C14.8415 6.26982 14.8824 6.3704 14.9551 6.44455C15.0278 6.51871 15.1264 6.56037 15.2292 6.56037H24.1454C25.653 6.56037 26.5822 6.79999 27.3256 7.18493C27.9575 7.51194 28.4672 7.9467 29.1055 8.49119C29.2375 8.60368 29.3749 8.72073 29.5201 8.84271L29.6101 8.91824L29.726 8.93069C33.2653 9.31069 34.0622 10.5309 34.2246 11.1557V12.6893C34.2246 12.7942 34.1838 12.8948 34.1111 12.9689C34.0384 13.0431 33.9398 13.0847 33.8369 13.0847H32.8356C32.6511 11.9627 31.6943 11.1077 30.5418 11.1077C29.3893 11.1077 28.4325 11.9627 28.248 13.0847H21.2058C21.0212 11.9627 20.0645 11.1077 18.912 11.1077C17.7594 11.1077 16.8027 11.9627 16.6182 13.0847H14.7446C14.6418 13.0847 14.5432 13.1264 14.4705 13.2006C14.3978 13.2747 14.3569 13.3753 14.3569 13.4802C14.3569 13.585 14.3978 13.6856 14.4705 13.7598C14.5432 13.8339 14.6418 13.8756 14.7446 13.8756H16.6182C16.8027 14.9976 17.7594 15.8527 18.912 15.8527C20.0645 15.8527 21.0212 14.9976 21.2058 13.8756H28.248C28.4325 14.9976 29.3893 15.8527 30.5418 15.8527C31.6943 15.8527 32.6511 14.9976 32.8356 13.8756H33.8369C34.1454 13.8756 34.4412 13.7506 34.6593 13.5281C34.8774 13.3057 34.9999 13.0039 34.9999 12.6893V11.0626L34.99 11.0187C34.7431 9.92754 33.5791 8.57502 29.9239 8.15706C29.8217 8.07086 29.7215 7.98505 29.6227 7.90063C28.9828 7.35397 28.3942 6.851 27.6766 6.4795C26.7966 6.02418 25.7391 5.76953 24.1454 5.76953H15.2292ZM28.9912 13.4802C28.9912 13.0607 29.1545 12.6584 29.4453 12.3618C29.7361 12.0651 30.1306 11.8985 30.5418 11.8985C30.9531 11.8985 31.3475 12.0651 31.6383 12.3618C31.9291 12.6584 32.0925 13.0607 32.0925 13.4802C32.0925 13.8996 31.9291 14.302 31.6383 14.5986C31.3475 14.8952 30.9531 15.0618 30.5418 15.0618C30.1306 15.0618 29.7361 14.8952 29.4453 14.5986C29.1545 14.302 28.9912 13.8996 28.9912 13.4802ZM18.912 11.8985C18.5007 11.8985 18.1063 12.0651 17.8155 12.3618C17.5247 12.6584 17.3613 13.0607 17.3613 13.4802C17.3613 13.8996 17.5247 14.302 17.8155 14.5986C18.1063 14.8952 18.5007 15.0618 18.912 15.0618C19.3232 15.0618 19.7176 14.8952 20.0084 14.5986C20.2992 14.302 20.4626 13.8996 20.4626 13.4802C20.4626 13.0607 20.2992 12.6584 20.0084 12.3618C19.7176 12.0651 19.3232 11.8985 18.912 11.8985Z">
                                            </path>
                                            <path
                                                d="M11 8.14151C11 8.03664 11.0408 7.93606 11.1135 7.86191C11.1862 7.78775 11.2848 7.74609 11.3877 7.74609H15.7489C15.8517 7.74609 15.9503 7.78775 16.023 7.86191C16.0957 7.93606 16.1365 8.03664 16.1365 8.14151C16.1365 8.24638 16.0957 8.34696 16.023 8.42111C15.9503 8.49527 15.8517 8.53693 15.7489 8.53693H11.3877C11.2848 8.53693 11.1862 8.49527 11.1135 8.42111C11.0408 8.34696 11 8.24638 11 8.14151ZM26.6836 8.65278C26.7563 8.72694 26.7971 8.82749 26.7971 8.93234C26.7971 9.03719 26.7563 9.13775 26.6836 9.2119L26.6532 9.24294C26.2897 9.61367 25.7968 9.82197 25.2828 9.82203H19.1409C19.0381 9.82203 18.9395 9.78037 18.8668 9.70622C18.7941 9.63206 18.7532 9.53149 18.7532 9.42662C18.7532 9.32174 18.7941 9.22117 18.8668 9.14701C18.9395 9.07286 19.0381 9.0312 19.1409 9.0312H25.2826C25.4354 9.03122 25.5866 9.00055 25.7277 8.94095C25.8688 8.88134 25.997 8.79397 26.105 8.68382L26.1355 8.65278C26.2082 8.57866 26.3068 8.53701 26.4096 8.53701C26.5123 8.53701 26.6109 8.57866 26.6836 8.65278ZM19.5286 17.7304C19.5286 17.6255 19.5694 17.5249 19.6421 17.4508C19.7148 17.3766 19.8134 17.335 19.9162 17.335H21.5638C21.6666 17.335 21.7652 17.3766 21.8379 17.4508C21.9106 17.5249 21.9514 17.6255 21.9514 17.7304C21.9514 17.8352 21.9106 17.9358 21.8379 18.01C21.7652 18.0841 21.6666 18.1258 21.5638 18.1258H19.9162C19.8134 18.1258 19.7148 18.0841 19.6421 18.01C19.5694 17.9358 19.5286 17.8352 19.5286 17.7304ZM22.2422 17.7304C22.2422 17.6255 22.283 17.5249 22.3557 17.4508C22.4284 17.3766 22.527 17.335 22.6299 17.335H26.991C27.0939 17.335 27.1925 17.3766 27.2652 17.4508C27.3379 17.5249 27.3787 17.6255 27.3787 17.7304C27.3787 17.8352 27.3379 17.9358 27.2652 18.01C27.1925 18.0841 27.0939 18.1258 26.991 18.1258H22.6299C22.527 18.1258 22.4284 18.0841 22.3557 18.01C22.283 17.9358 22.2422 17.8352 22.2422 17.7304Z">
                                            </path>
                                        </svg>
                                        Danh sách xe
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-partials.layout-client>
