<div>
    <div class="banner-main-content-wrap">
        <div class="row">
                <div class="banner-content">
                    <h1 style="margin-bottom: 150px;text-align: center">Tìm kiếm xe</h1>
                </div>
        </div>
    </div>
    <div class="product-search-area mb-100">
        <div class="container">
            <form>
                <div class="row row-cols-xl-3 row-cols-md-3 row-cols-sm-2 row-cols-1 g-3 justify-content-center">
                    <div class="col">
                        <div class="form-inner">
                            <label>Chọn thương hiệu</label>
                            <select class="nice-select" wire:model="brand" wire:change="filterCar">
                                <option value="">Chọn thương hiệu</option>
                                @foreach($brandCars as $brandCar)
                                    <option value="{{$brandCar->id}}" class="option">{{$brandCar->brand_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-inner">
                            <label>Chọn dòng xe</label>
                            <select class="nice-select"  wire:model="model" wire:change="filterCar">
                                <option value="">Chọn dòng xe</option>
                                @if($modelCars && count($modelCars)>0)
                                    @foreach($modelCars as $modelCar)
                                        <option value="{{$modelCar->id}}"
                                                class="option">{{$modelCar->model_name}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-inner">
                            <label>Chọn động cơ</label>
                            <select class="nice-select" tabindex="0" wire:model="engine" wire:change="filterCar">
                                <option value="">Chọn động cơ</option>
                                @if($engineCars && count($engineCars)>0)
                                    @foreach($engineCars as $item => $engineCar)
                                        <option value="{{$item}}"
                                                class="option">{{$engineCar}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="product-page no-sidebar mb-100">
        <div class="container">
            <div class="row g-xl-4 gy-5 justify-content-center">
                <div class="col-xl-12">
                    <div class="list-grid-main">
                        <div class="list-grid-product-wrap grid-group-wrapper">
                            <div class="row g-4">
                                @if($cars && count($cars) > 0 )
                                    @foreach($cars as $car)
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="product-card4">
                                                <div class="product-img">
                                                    <div class="slider-btn-group">
                                                        <div class="product-stand-next swiper-arrow">
                                                            <svg width="8" height="13" viewBox="0 0 8 13"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="product-stand-prev swiper-arrow">
                                                            <svg width="8" height="13" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="swiper product-img-slider">
                                                        <div class="swiper-wrapper">
                                                                @foreach ($car->verhicle_image_library as $carImage)
                                                                    <div class="swiper-slide">
                                                                        <img src="/storage/{{ $carImage }}" alt="image">
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="product-content">
                                                    @if(!empty($car->province->name))
                                                    <div class="location">
                                                        <a href="#"><i class="bi bi-geo-alt"></i> {{ $car->province->name}}</a>
                                                    </div>
                                                    @endif
                                                    <h6><a href="car-deatils.html">{{$car->title}}</a></h6>
                                                    <ul class="features">
                                                        <li>
                                                            <img src="{{ asset('images/miles.svg') }}" alt="">
                                                            {{$car->car_info['mileage']}} miles
                                                        </li>
                                                        <li>
                                                            <img src="{{ asset('images/menual.svg') }}" alt="">
                                                            {{ $car ? ($car->car_info['transmission'] == 'sotudong' ? 'Số tự động' : 'Số tay') : '' }}
                                                        </li>
                                                        <li>
                                                            <img src="{{ asset('images/fuel.svg') }}" alt="">
                                                            {{ $car ? $car->car_info['fuelType'] : '' }}
                                                        </li>
                                                    </ul>
                                                    <div class="button-and-price">
                                                        <a class="primary-btn3" href="{{ route('car-detail', $car->slug) }}">Xem chi tiết</a>
                                                        <div class="price-area">
                                                            <h6>{{number_format($car->price)}} VND</h6>
                                                            {{--                                                    <del>$28,564.00</del>--}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp item" data-wow-delay="200ms"
                                         style="visibility: visible; animation-delay: 200ms;">
                                        <h5 class=" text-center">Hiện không có dữ liệu nào</h5>
                                    </div>
                                @endif

                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="pagination-and-next-prev">
                                        <div class="pagination">
                                            <ul>
                                                <li class="active"><a href="#">01</a></li>
                                                <li><a href="#">02</a></li>
                                                <li><a href="#">03</a></li>
                                                <li><a href="#">04</a></li>
                                                <li><a href="#">05</a></li>
                                            </ul>
                                        </div>
                                        <div class="next-prev-btn">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="14"
                                                             viewBox="0 0 7 14">
                                                            <path
                                                                d="M0 7.00008L7 0L2.54545 7.00008L7 14L0 7.00008Z"></path>
                                                        </svg>
                                                        Prev
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Next
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="14"
                                                             viewBox="0 0 7 14">
                                                            <path
                                                                d="M7 7.00008L0 0L4.45455 7.00008L0 14L7 7.00008Z"></path>
                                                        </svg>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="toprated-used-cars mb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title">
                        <h4>Các thương hiệu xe cũ được đánh giá cao nhất</h4>
                    </div>
                    <div class="brand-list">
                        <ul>
                            @php
                                $popularBrands = \App\Models\Car::select('brand_id', \DB::raw('COUNT(*) as car_count'))
                                    ->groupBy('brand_id')
                                    ->orderByDesc('car_count')
                                    ->limit(8)
                                    ->get();
                                $brandIds = $popularBrands->pluck('brand_id');
                                $brandsInfo = \App\Models\Brand::whereIn('id', $brandIds)->distinct()->get();
                            @endphp
                            @foreach ($brandsInfo as $brand)
                                <li><a href="{{ route('brand.detail', $brand->brand_name) }}">{{ $brand->brand_name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
