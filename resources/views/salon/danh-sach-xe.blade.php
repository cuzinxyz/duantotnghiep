@section('page_title')
    {{ $salonInfo->salon_name ? $salonInfo->salon_name . ' - Drivco' : 'Drivco' }}
@endsection
@push('styles')
    <style>
        .contact-fixed {
            position: sticky;
            top: 70px;
        }
        .salon-info-mobile {
                display: none
            }
        @media only screen and (max-width: 988px) {
            .contact-fixed {
                left: 0;
                width: 100%;
                position: fixed !important;
                top: unset;
                bottom: 48px;
                background: #fff;
                z-index: 123;
                margin: 0;
                border-top: 6px solid !important;
                border-image-slice: 1 !important;
                border-image-source: linear-gradient(to right bottom, #6a5af9, #f62682) !important;
            }

            .salon-info {
                display: none;
            }
            .salon-info-mobile {
                display: block
            }

            .list-system {
                width: 100%;
            }
            .show-btn {
                height: 50px;
                position: fixed;
                left: 0;
                right: 0;
                bottom: 0;
                background: #fff;
                width: 100%;
                padding: 10px;
                border-top: 3px solid #000;
            }
        }

        .contact-info {
            border: 1px dashed #000;
            border-radius: 8px
        }

        .img-salon {
            max-height: 400px;
        }
    </style>
@endpush
<x-partials.layout-client>
    <div>
        <div class="single-category-page mb-100">

            <div class="container-fluid">

                <div class="autoplay">
                    @foreach ($salonInfo->image_salon as $image)
                        <div>
                            <img data-lazy="{{ asset('storage/' . $image) }}" class="img-salon"
                                alt="{{ $salonInfo->salon_name }}">
                        </div>
                    @endforeach
                </div>

            </div>

            <div class="container mt-3">
                <div class="row">

                    <div class="col-md-8 list-system">
                        @if ($cars->count() == 0)
                            <div class="text-center">
                                Salon chưa đăng tin nào cả!
                            </div>
                        @else
                            <div class="row g-4 mb-40">
                                @foreach ($cars as $item)
                                    <div class="col-md-6 col-12" wire:key="{{ $item->id }}">
                                        <div class="product-card2">
                                            <div class="product-img">
                                                <livewire:add-to-wish-list carID="{{ $item->id }}" />
                                                <img src="{{ asset('/storage/' . $item->verhicle_image_library[0]) }}"
                                                    alt="">
                                            </div>
                                            <div class="product-content">
                                                <div class="details-btn">
                                                    <a href="{{ route('car-detail', $item->slug) }}"><i
                                                            class="bi bi-arrow-right-short"></i></a>
                                                </div>
                                                <div class="price">
                                                    <strong>{{ number_format($item->price) }} đ</strong>
                                                </div>
                                                <h6><a
                                                        href="{{ route('car-detail', $item->slug) }}">{{ $item->title }}</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>

                    <div class="col-md-4 salon-info">
                        <div class="contact-info mb-50 px-3 py-4 contact-fixed shadow">
                            <div class="d-flex align-items-center gap-2">

                                @if (strpos($salonInfo->user->avatar, 'http') === 0)
                                    <img style="width: 50px;height:50px;object-fit:cover"
                                        class="img-fluid profile-image rounded-circle border-danger border-2"
                                        style="width: 60px;height:60px;object-fit:cover"
                                        src="{{ $salonInfo->user->avatar }}" alt="">
                                @elseif (Storage::url($salonInfo->user->avatar))
                                    <img style="width: 50px;height:50px;object-fit:cover"
                                        class="img-fluid profile-image rounded-circle border-danger border-2"
                                        style="width: 60px;height:60px;object-fit:cover"
                                        src="{{ asset('storage/' . $salonInfo->user->avatar) }}" alt="">
                                @else
                                    <img style="width: 50px;height:50px;object-fit:cover"
                                        class="img-fluid profile-image rounded-circle border-danger border-2"
                                        style="width: 60px;height:60px;object-fit:cover"
                                        src="{{ 'https://ui-avatars.com/api/?name=' . $salonInfo->user->name }}"
                                        alt="">
                                @endif

                                <div class="ml-3">
                                    <h6 class="name">{{ $salonInfo ? $salonInfo->user->name : '' }}</h6>
                                    <small>Tham gia vào {{ $salonInfo->created_at->diffForHumans() }}</small>
                                </div>
                            </div>
                            <div class="introduce d-flex flex-column py-2 px-3" style="row-gap: 10px">
                                <p class="m-0"><strong>Salon: </strong> {{ $salonInfo->salon_name }}</p>
                                <p class="m-0"><strong>Địa chỉ: </strong>{{ $salonInfo->address }}</p>
                                <p class="m-0 line-clamp-2"><strong>Giới thiệu: </strong>{{ $salonInfo->description }}
                                </p>
                            </div>
                            <div class="px-2 pt-3 d-flex align-items-center flex-wrap overflow-hidden"
                                style="row-gap:10px;column-gap:10px">
                                <!--<form action="/chatify/7?fromID=12">-->
                                <div class="form-inner d-flex align-items-center gap-1">
                                    <button class="btn py-2 px-2 fw-bold" type="button"
                                        onclick="window.location.href='/chatify/{{ $salonInfo->user_id }}'"
                                        style="font-size:12px;background:#f1f1f1;border-radius:24px">

                                        @if (strpos($salonInfo->user->avatar, 'http') === 0)
                                            <img style="width: 30px;height:30px;border-radius:12px"
                                                style="width: 60px;height:60px;object-fit:cover"
                                                src="{{ $salonInfo->user->avatar }}" alt="">
                                            Nhắn tin
                                        @elseif (Storage::url($salonInfo->user->avatar))
                                            <img style="width: 30px;height:30px;border-radius:12px"
                                                style="width: 60px;height:60px;object-fit:cover"
                                                src="{{ asset('storage/' . $salonInfo->user->avatar) }}"
                                                alt="">
                                            Nhắn tin
                                        @else
                                            <img style="width: 30px;height:30px;border-radius:12px"
                                                style="width: 60px;height:60px;object-fit:cover"
                                                src="{{ 'https://ui-avatars.com/api/?name=' . $salonInfo->user->name }}"
                                                alt="">
                                            Nhắn tin
                                        @endif
                                    </button>
                                </div>
                                <!--</form>-->
                                <a href="mailto:{{ $salonInfo->email }}">
                                    <button class="btn py-2 px-2 d-flex align-items-center gap-1 fw-bold"
                                        style="font-size:12px;background:#f1f1f1;border-radius:24px">
                                        <i class="bx bx-at"></i> {{ $salonInfo->email }}
                                    </button>
                                </a>
                                <a href="tel:{{ $salonInfo->phone_number }}">
                                    <button class="btn py-2 px-2 d-flex align-items-center gap-1 fw-bold"
                                        style="font-size:12px;background:#f1f1f1;border-radius:24px">
                                        <i class="bx bx-phone-call"></i> {{ $salonInfo->phone_number }}
                                    </button>
                                </a>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 salon-info-mobile" x-data="{ showContact: false }">
                        <button @click="showContact = !showContact" class="show-btn" >
                            Xem thông tin
                        </button>
                        <div class="contact-info mb-50 px-3 py-4 contact-fixed shadow" x-show="showContact">
                            <div class="d-flex align-items-center gap-2">

                                @if (strpos($salonInfo->user->avatar, 'http') === 0)
                                    <img style="width: 50px;height:50px;object-fit:cover"
                                        class="img-fluid profile-image rounded-circle border-danger border-2"
                                        style="width: 60px;height:60px;object-fit:cover"
                                        src="{{ $salonInfo->user->avatar }}" alt="">
                                @elseif (Storage::url($salonInfo->user->avatar))
                                    <img style="width: 50px;height:50px;object-fit:cover"
                                        class="img-fluid profile-image rounded-circle border-danger border-2"
                                        style="width: 60px;height:60px;object-fit:cover"
                                        src="{{ asset('storage/' . $salonInfo->user->avatar) }}" alt="">
                                @else
                                    <img style="width: 50px;height:50px;object-fit:cover"
                                        class="img-fluid profile-image rounded-circle border-danger border-2"
                                        style="width: 60px;height:60px;object-fit:cover"
                                        src="{{ 'https://ui-avatars.com/api/?name=' . $salonInfo->user->name }}"
                                        alt="">
                                @endif

                                <div class="ml-3">
                                    <h6 class="name">{{ $salonInfo ? $salonInfo->user->name : '' }}</h6>
                                    <small>Tham gia vào {{ $salonInfo->created_at->diffForHumans() }}</small>
                                </div>
                            </div>
                            <div class="introduce d-flex flex-column py-2 px-3" style="row-gap: 10px">
                                <p class="m-0"><strong>Salon: </strong> {{ $salonInfo->salon_name }}</p>
                                <p class="m-0"><strong>Địa chỉ: </strong>{{ $salonInfo->address }}</p>
                                <p class="m-0 line-clamp-2"><strong>Giới thiệu: </strong>{{ $salonInfo->description }}
                                </p>
                            </div>
                            <div class="px-2 pt-3 d-flex align-items-center flex-wrap overflow-hidden"
                                style="row-gap:10px;column-gap:10px">
                                <!--<form action="/chatify/7?fromID=12">-->
                                <div class="form-inner d-flex align-items-center gap-1">
                                    <button class="btn py-2 px-2 fw-bold" type="button"
                                        onclick="window.location.href='/chatify/{{ $salonInfo->user_id }}'"
                                        style="font-size:12px;background:#f1f1f1;border-radius:24px">

                                        @if (strpos($salonInfo->user->avatar, 'http') === 0)
                                            <img style="width: 30px;height:30px;border-radius:12px"
                                                style="width: 60px;height:60px;object-fit:cover"
                                                src="{{ $salonInfo->user->avatar }}" alt="">
                                            Nhắn tin
                                        @elseif (Storage::url($salonInfo->user->avatar))
                                            <img style="width: 30px;height:30px;border-radius:12px"
                                                style="width: 60px;height:60px;object-fit:cover"
                                                src="{{ asset('storage/' . $salonInfo->user->avatar) }}"
                                                alt="">
                                            Nhắn tin
                                        @else
                                            <img style="width: 30px;height:30px;border-radius:12px"
                                                style="width: 60px;height:60px;object-fit:cover"
                                                src="{{ 'https://ui-avatars.com/api/?name=' . $salonInfo->user->name }}"
                                                alt="">
                                            Nhắn tin
                                        @endif
                                    </button>
                                </div>
                                <!--</form>-->
                                <a href="mailto:{{ $salonInfo->email }}">
                                    <button class="btn py-2 px-2 d-flex align-items-center gap-1 fw-bold"
                                        style="font-size:12px;background:#f1f1f1;border-radius:24px">
                                        <i class="bx bx-at"></i> {{ $salonInfo->email }}
                                    </button>
                                </a>
                                <a href="tel:{{ $salonInfo->phone_number }}">
                                    <button class="btn py-2 px-2 d-flex align-items-center gap-1 fw-bold"
                                        style="font-size:12px;background:#f1f1f1;border-radius:24px">
                                        <i class="bx bx-phone-call"></i> {{ $salonInfo->phone_number }}
                                    </button>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            $('.autoplay').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: false,
                infinite: true,
                lazyLoad: 'ondemand',
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        </script>
    @endpush
</x-partials.layout-client>
