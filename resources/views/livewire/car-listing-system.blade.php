@php
    $currentYear = date('Y');
    $startYear = $currentYear - 10;
@endphp
@section('page_title')
    Mua bán ô tô cũ, xe hơi cũ giá rẻ toàn quốc - Drivco
@endsection
<div>
    <div class="row m-0" x-data="{ showHeading: false }">
        <livewire:brand-list wire:key="brand-list" />
    </div>

    <div class="product-page pt-100 mb-100">
        <div class="container">
            <div class="row g-xl-4 gy-5">
                <div class="col-xl-3 order-xl-1 order-1">
                    <div class="filter-area mb-40">
                        <div class="title-and-close-btn mb-20">
                            <h5>Bộ Lọc Tìm Kiếm</h5>
                        </div>
                    </div>
                    <div class="product-sidebar">
                        <div class="product-widget mb-20">
                            <div class="check-box-item">
                                <h6 class="product-widget-title mb-20">Tên và thương hiệu</h6>
                                <div class="checkbox-container">
                                    <div class="form-inner">
                                        <input wire:model.live="make" type="search"
                                            placeholder="Tìm kiếm xe theo Từ khóa">
                                    </div>
                                    <ul style="overflow: auto; max-height: 200px">
                                        @foreach ($brands as $brand)
                                            <li wire:key="brand-{{ $brand->id }}">
                                                <label class="containerss">
                                                    <input type="checkbox" value="{{ $brand->id }}"
                                                        wire:model.live="updateBrands">
                                                    <span class="checkmark"></span>
                                                    <span class="text">{{ $brand->brand_name }} </span>
                                                </label>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-widget mb-20">
                            <div class="check-box-item">
                                <h6 class="product-widget-title mb-20">Năm sản xuất</h6>
                                <div class="checkbox-container">
                                    <div wire:ignore class="row g-3">
                                        <div class="col-6">
                                            <div class="form-inner">
                                                <select class="nice-select" wire:model.live="minYear">
                                                    <option>Từ</option>
                                                    @for ($year = $startYear; $year <= $currentYear; $year++)
                                                        <option value="{{ $year }}">{{ $year }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-inner">
                                                <select class="nice-select" wire:model.live="maxYear" id="maxYear">
                                                    <option>Đến</option>
                                                    @for ($year = $startYear; $year <= $currentYear; $year++)
                                                        <option value="{{ $year }}">{{ $year }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-widget mb-20">
                            <div class="check-box-item" wire:ignore>
                                <h6 class="product-widget-title mb-25">Giá</h6>
                                <div class="range-wrapper" x-data="{
                                    max_price: @js(number_format($maxPrice, 0, '', ',')),
                                    min_price: @js(number_format($minPrice, 0, '', ','))
                                }">
                                    <div class="slider-wrapper">
                                        <div id="eg-range-slider" x-on:click="filter_prices"></div>
                                    </div>
                                    <div class="valus">
                                        <input id="rangeMin" type="number" max="{{ $maxPrice }}"
                                            min="{{ $minPrice }}" step="100000" value="{{ $minPrice }}" hidden>
                                        <input id="rangeMax" type="number" max="{{ $maxPrice }}"
                                            min="{{ $minPrice }}" step="100000" value="{{ $maxPrice }}"
                                            hidden>
                                        <div class="min-value">
                                            <input type="text" class="from" id="slider-range-value1"
                                                x-bind:value="min_price" disabled>
                                        </div>
                                        <div class="min-value">
                                            <input type="text" class="to" id="slider-range-value2"
                                                x-bind:value="max_price" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-widget mb-20">
                            <div class="check-box-item">
                                <h6 class="product-widget-title mb-20">Địa điểm</h6>
                                <div class="checkbox-container">
                                    {{-- <div class="form-inner">
                                        <input type="text" placeholder="Type Location">
                                    </div> --}}
                                    <ul style="overflow: auto; max-height: 200px">
                                        @foreach ($locations as $location)
                                            <li wire:key="location-{{ $location->id }}">
                                                <label class="containerss">
                                                    <input type="checkbox" value="{{ $location->id }}"
                                                        wire:model.live="updateLocations">
                                                    <span class="checkmark"></span>
                                                    <span class="text">{{ $location->name }}</span>
                                                    {{-- <span class="qty">(1,234)</span> --}}
                                                </label>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 order-xl-2 order-2">
                    <div class="row mb-40">
                        <div class="col-lg-12">
                            <div class="show-item-and-filte">
                                <p>Có <strong>{{ $carCount }}</strong> tin bán xe ô tô</p>
                                <div class="filter-view">
                                    <div class="filter-atra">
                                        <h6>Sắp xếp theo:</h6>
                                        <form>
                                            <div wire:ignore class="form-inner">
                                                <select class="nice-select" wire:model.live="sortPrice">
                                                    <option value="0">Không sắp xếp</option>
                                                    <option value="1">Giá thấp -> cao</option>
                                                    <option value="2">Giá cao -> thấp</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-grid-main">
                        <div class="list-grid-product-wrap grid-group-wrapper">
                            <div class="row g-4 justify-content-start mb-40">
                                @php
                                    $wowDelay = 100;
                                @endphp
                                @forelse ($cars as $car)
                                    <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp item"
                                        wire:key="car-{{ $car->id }}" data-wow-delay="{{ $wowDelay + 100 }}ms">
                                        <div class="product-card2">
                                            @if (!empty($item->is_vip))
                                                <span class="bg-success new p-2 rounded position-absolute"
                                                    style="top:2px;left:2px;z-index:123">
                                                    <i class="bi bi-check-circle-fill fs-5 text-white"></i>
                                                </span>
                                            @endif
                                            <div class="product-img">
                                                <div class="date">
                                                    <button type="button" data-bs-toggle="modal"
                                                        data-bs-target="#alartModal01">
                                                        {{ $car->created_at->format('d M, Y') }} <i
                                                            class="bi bi-exclamation-circle"></i>
                                                    </button>
                                                </div>
                                                <livewire:add-to-wish-list wire:key="wish-list-{{ $car->id }}"
                                                    carID="{{ $car->id }}" />
                                                <img loading="lazy"
                                                    src="{{ asset('storage/' . $car->verhicle_image_library[0]) }}"
                                                    alt="{{ $car->title }}">
                                            </div>
                                            <div class="product-content">
                                                <div class="details-btn">
                                                    <a href="{{ route('car-detail', $car->slug) }}"><i
                                                            class="bi bi-arrow-right-short"></i></a>
                                                </div>
                                                <div class="price">
                                                    <strong class="line-clamp-1">{{ number_format($car->price) }}
                                                        đ</strong>
                                                </div>
                                                <h6><a href="{{ route('car-detail', $car->slug) }}"
                                                        class="line-clamp-1">{{ $car->title }}</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <h6>Không có xe nào cả</h6>
                                @endforelse
                                <div x-intersect="$wire.load()"></div>
                            </div>
                            <div class="w-100 text-center" wire:loading>
                                <img src="{{ asset('images/load.gif') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    @push('styles')
        <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    @endpush
    
    @push('scripts')
        <script>
            function filter_prices() {
                let max = parseInt(document.querySelector('#slider-range-value2').value.replace(/[^\d]/g, ''));
                let min = parseInt(document.querySelector('#slider-range-value1').value.replace(/[^\d]/g, ''));
                console.log(min, max);

                @this.dispatch('filterPrices', {
                    max: max,
                    min: min
                });
            }


            document.addEventListener('livewire:initialized', () => {

                let maxPrice = parseInt(document.querySelector("#rangeMax").value);
                let minPrice = parseInt(document.querySelector("#rangeMin").value);
                if (minPrice <= 0) {
                    minPrice = 0;
                }

                $("#eg-range-slider").slider({
                    range: true,
                    min: minPrice,
                    max: maxPrice,
                    values: [minPrice, maxPrice],
                    slide: function(event, ui) {
                        $(".from").val(ui.values[0].toLocaleString('vi', {
                            style: 'currency',
                            currency: 'VND'
                        }));
                        $(".to").val(ui.values[1].toLocaleString('vi', {
                            style: 'currency',
                            currency: 'VND'
                        }));
                    }
                });
                $(".from").change(function() {
                    let value = $(this).val();
                    $("#eg-range-slider").slider("values", 0, value);
                });
                $(".to").change(function() {
                    let value = $(this).val();
                    $("#eg-range-slider").slider("values", 1, value);
                });

            })
        </script>
        
    @endpush

</div>
