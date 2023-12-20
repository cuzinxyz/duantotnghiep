@section('page_title')
    {{ $brandDetail->brand_name ? 'Mua xe ' . $brandDetail->brand_name . ' tại Drivco' : 'Drivco' }}
@endsection
<div>
    <style>
        .input-search {
            width: 100%;
            border-radius: 5px;
            background: #fff;
            color: #5E5E5E;
            font-family: "Open Sans", sans-serif;
            font-size: 13px;
            font-weight: 400;
            height: 50px;
            padding: 10px 20px;
            border: 1px solid #46d993;
        }
    </style>
    <div class="inner-page-banner">
        <div class="banner-wrapper">
            <div class="container-fluid">
                <ul class="breadcrumb-list">
                    <li><a href="/">Trang chủ</a></li>
                    <li style="text-transform: capitalize;">{{ $brandDetail->brand_name }}</li>
                </ul>
                <div class="banner-main-content-wrap">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 d-flex align-items-center">
                            <div class="banner-content"><span
                                    class="sub-title fw-bold">{{ $brandDetail->brand_name }}</span>
                                <h2>Top các thương hiệu xe</h2>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5 d-lg-flex d-none align-items-center justify-content-end">
                            <div class="banner-img"><img src="{{ asset('images/inner-banner-img.png') }}"
                                    alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="product-search-area mb-100">
        <div class="container">
            <form>
                <div class="row row-cols-xl-3 row-cols-md-3 row-cols-sm-2 row-cols-2 g-3 justify-content-center">
                    <div class="form-inner mb-20">
                        <label>Tìm kiếm xe</label>
                        <input class="input-search" wire:model.live="search" type="search" placeholder="Tìm kiếm xe theo Từ khóa">
                    </div>
                    <div class="mb-20">
                        <div class="form-inner">
                            <label>Thương hiệu xe</label>
                            <select class="nice-select" wire:model.live="brand">
                                <option value="0" selected>-- Chọn thương hiệu --</option>
                                @foreach ($brands as $key => $item)
                                    <option value="{{ $item->id }}" wire.key={{ $item->id }}>
                                        {{ $item->brand_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-20">
                        <div class="form-inner">
                            <label>Tên xe</label>
                            <select class="nice-select" wire:model.live="model">
                                <option value="0" selected>-- Chọn dòng xe --</option>
                                @if (isset($modelCars) && sizeof($modelCars) > 0)
                                    @foreach ($modelCars as $key => $item)
                                        <option value="{{ $item->id }}" wire.key={{ $item->id }}>
                                            {{ $item->model_name }}
                                        </option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class="mb-20">
                        <div class="form-inner">
                            <label>Khoảng giá</label>
                            <select class="nice-select" wire:model.live="price">
                                <option value="0" selected>-- Chọn Khoảng giá --</option>
                                <option value="0-{{ $min_price }}">0 VNĐ -
                                    {{ number_format($min_price, 0, '', ',') }} VNĐ</option>
                                <option value="{{ $min_price }} - {{ $max_price }}">
                                    {{ number_format($min_price, 0, '', ',') }} VNĐ -
                                    {{ number_format($max_price, 0, '', ',') }} VNĐ</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="single-category-page mb-100">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="" wire:loading>
                    <img src="{{ asset('images/load.gif') }}" alt="">
                </div>
            </div>

            <div class="row g-4 mb-40">
                @forelse ($cars as $item)
                    <div class="col-xl-3 col-md-4 col-sm-6 wow fadeInUp" wire:loading.remove data-wow-delay="100ms">
                        <div class="product-card2 two position-relative">
                            @if (!empty($item->is_vip))
                                <span class="bg-success new p-2 rounded position-absolute"
                                    style="top:2px;left:2px;z-index:123">
                                    <i class="bi bi-check-circle-fill fs-5 text-white"></i>
                                </span>
                            @endif
                            <div class="product-img"
                                onclick="window.location='{{ route('car-detail', $item->slug) }}'">
                                <img src="{{ asset('storage/' . $item->verhicle_image_library[0]) }}"
                                    alt="{{ $item->title }}">
                            </div>
                            <div class="product-content">
                                <div class="company-logo" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                                    <a href="{{ route('brand.detail', $item->brand->brand_name) }}"><img
                                            style="max-width: 40px;max-height:40px;object-fit:contain"
                                            src="{{ asset('storage/' . $item->brand->logo_url) }}" alt></a>
                                </div>
                                <div class="price">
                                    <strong>{{ number_format($item->price) . ' đ' }}</strong>
                                </div>
                                <h6><a class="line-clamp-1"
                                        href="{{ route('car-detail', $item->slug) }}">{{ $item->title }}</a>
                                </h6>
                            </div>
                        </div>
                    </div>

                @empty
                    <h6 class="text-center">Không có xe nào cả</h6>
                @endforelse
            </div>
            <div class="row">
                <div class="col-lg-12">
                    {{-- $cars->links()  --}}
                </div>
            </div>
        </div>
    </div>
</div>
