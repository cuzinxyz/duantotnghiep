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
            border-radius: 8px
        }

        .img-salon {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
        }

        .search {
            display: flex;
            align-items: center;
            justify-content: space-between;
            text-align: center;
        }

        .search__input {
            font-family: inherit;
            font-size: 16px;
            background-color: #f4f2f2;
            border: none;
            color: #646464;
            padding: 0.5rem 1rem;
            border-radius: 18px;
            width: 15em;
            transition: all ease-in-out .5s;
            margin-right: -2rem;
        }

        .search__input:hover,
        .search__input:focus {
            box-shadow: 0 0 1em #00000013;
        }

        .search__input:focus {
            outline: none;
            background-color: #f0eeee;
        }

        .search__input::-webkit-input-placeholder {
            font-weight: 100;
            color: #ccc;
        }

        .search__input:focus+.search__button {
            background-color: #f0eeee;
        }

        .search__button {
            border: none;
            background-color: #f4f2f2;
            margin-top: .1em;
        }

        .search__button:hover {
            cursor: pointer;
        }

        .search__icon {
            height: 1.3em;
            width: 1.3em;
            fill: #b4b4b4;
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
                    <div class="col-md-8 list-system product-page">
                        <livewire:list-car-salon :salonSlug="$salonInfo->slug" wire:key="list-car-salon" />
                    </div>
                    
                    <div class="col-md-4 salon-info">
                        <div class="contact-info mb-50 px-3 py-4 contact-fixed shadow-sm">
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
                        <button @click="showContact = !showContact" class="show-btn">
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
                slidesToShow: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: false,
                infinite: true,
                lazyLoad: 'ondemand',
            });
        </script>
    @endpush
</x-partials.layout-client>
