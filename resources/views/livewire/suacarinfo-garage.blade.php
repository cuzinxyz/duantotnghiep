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
            height: 3rem;
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
        <div class="">
        <div class="product-details-page">
        <div class="container shadow">
        @if ( Session::has('success') )
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif
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
                            aria-selected="false">List Car</button>
                        <button class="nav-link" id="v-pills-2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2"
                            type="button" role="tab" aria-controls="v-pills-2" aria-selected="true">Brands</button>
                        <button class="nav-link" id="v-pills-3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-3"
                            type="button" role="tab" aria-controls="v-pills-3" aria-selected="true">Model</button>
                        <button class="nav-link" id="v-pills-4-tab" data-bs-toggle="pill" data-bs-target="#v-pills-4"
                            type="button" role="tab" aria-controls="v-pills-4" aria-selected="true">News</button>
                        
                    </div>
                    <div class="tab-content tab-content2" id="v-pills-tabContent2">
                        <div class="tab-pane fade active show" id="v-pills-1" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">
                            <div class="blog-details-page mb-100">
        <div class="container">
            <div class="row g-lg-4 gy-5">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="comment-area">
                            <div class="inquiry-form mt-100">
                            <div class="mb-50 wow fadeInUp contact-page" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms;">
    @push('styles')
        <link href="{{ asset('css/sell-car.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/file_upload.css') }}">
        <link rel="stylesheet" href="{{ asset('css/simplemde.min.css') }}">
    @endpush

    <form enctype="multipart/form-data">
        <div class="row g-4 mb-100">
            <div class="col-lg-12">
                <div class="">
                    <div class=" " id="form-sell-1">
                        <div class="mb-15">
                            <h4 class="">Sửa thông tin xe :</h4>
                        </div>

                        <div class="row d-flex justify-content-between">
                            <div class="col-md-8 col-sm-12 mb-20 inquiry-form py-4 px-4 bg-shape">
                                <div class="row">
                                    <div class="col-md-6 mb-20">
                                        <div class="form-inner">
                                            <label class="fontAvantRegular">Hãng chế tạo</label>
                                            <select class="nice-select beauty-shadow" wire:model.live="brand_select">
                                                <option value="0">{{$Cardetail->brand_id}}</option>
                                                @foreach ($brands as $brand)
                                                    <option value="{{ $brand->id }}">{{ $brand->brand_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="text-danger">
                                            @error('brand_select')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        <div class="form-inner">
                                            <label class="fontAvantRegular">Tên xe</label>
                                            <select class="nice-select beauty-shadow form-control-lg"
                                                wire:model="model_select">
                                                <option value="0">{{$Cardetail->model_car_id}}</option>

                                                @foreach ($models as $model)
                                                    <option value="{{ $model->id }}">{{ $model->model_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <div class="text-danger">
                                                @error('model_select')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Tên xe thuộc hãng --}}

                                    <div class="col-md-6 mb-20">
                                        <div class="form-inner">
                                            <label class="fontAvantRegular">Nhiên liệu</label>
                                            <select class="nice-select beauty-shadow form-control-lg" wire:model="fuel">
                                                <option value="0"></option>
                                                @foreach ($fuels as $fuel)
                                                    <option>{{ $fuel }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="text-danger">
                                            @error('fuel')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        <div class="form-inner">
                                            <label class="fontAvantRegular">Số chỗ ngồi</label>
                                            <select class="nice-select beauty-shadow form-control-lg"
                                                wire:model="number_of_seats">
                                                <option value="">--Chọn số chỗ ngồi--</option>
                                                @foreach ($seats as $seat)
                                                    <option value="{{ $seat }}">{{ $seat }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="text-danger">
                                            @error('number_of_seats')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        <div class="form-inner">
                                            <label class="fontAvantRegular">Phiên bản</label>
                                            <input type="text" wire:model="version"
                                                placeholder="Hãy nhập phiên bản xe (nếu có)">
                                        </div>
                                        <div class="text-danger">
                                            @error('version')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        <div class="form-inner">
                                            <label class="fontAvantRegular">Năm sản xuất</label>
                                            <select class="nice-select beauty-shadow form-control-lg"
                                                wire:model="year_of_manufacture">
                                                <option value="0">-- Chọn năm sản xuất
                                                    <link rel="stylesheet"
                                                        href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
                                                        integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ"
                                                        crossorigin="anonymous">
                                                </option>
                                                @foreach ($years as $year)
                                                    <option>{{ $year }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="text-danger">
                                            @error('year_of_manufacture')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        <div class="form-inner">
                                            <label class="fontAvantRegular">Số KM đã đi*</label>
                                            <input wire:model="mileage" type="number" placeholder="Nhập số km đã đi">
                                        </div>
                                        <div class="text-danger">
                                            @error('mileage')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        <div class="form-inner">
                                            <label class="fontAvantRegular">Giá muốn bán*</label>
                                            <input wire:model="price" type="text" placeholder="VND">
                                        </div>
                                        <div class="text-danger">
                                            @error('price')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        <div class="form-inner">
                                            <label class="fontAvantRegular">Mã lực*</label>
                                            <input wire:model="engine" type="text" placeholder="Nhập số mã lực">
                                        </div>
                                        <div class="text-danger">
                                            @error('title')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-20">
                                        <div class="form-inner">
                                            <label class="fontAvantRegular">Tiêu đề*</label>
                                            <input wire:model="title" type="text"
                                                placeholder="Nhập tiêu đề cho bài đăng">
                                        </div>
                                        <div class="text-danger">
                                            @error('title')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-inner">
                                            <label class="fontAvantRegular">Mô tả*</label>
                                            <textarea wire:model="description" id="tiny" placeholder="Write somethings"></textarea>
                                        </div>
                                        <div class="text-danger">
                                            @error('description')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 p-4 bg-shape" wire:ignore>
                            <div class="custom-file-container" data-upload-id="mySecondImage">
                                <div class="label-container">
                                    <label class="fw-bold fontAvantRegular">Upload hình (* có thể upload nhiều
                                        hình)</label>
                                    <a class="clear-button" href="javascript:void(0)" title="Clear Image">
                                        ×
                                    </a>
                                </div>
                                <label class="input-container">
                                    <input accept="image/*" aria-label="Choose File" class="input-hidden"
                                        id="fileInput" multiple="" type="file"
                                        wire:model="verhicle_image_library">
                                    <span class="input-visible"><i class="bi bi-cloud-arrow-up text-success"></i> Chọn
                                        files</span>
                                </label>
                                <div id="preview-container" class="image-preview" style="">

                                </div>
                            </div>
                        </div>

                        <div class="mt-4 p-4 bg-shape" wire:ignore>
                            <div class="custom-file-container" data-upload-id="mySecondImage">
                                <div class="label-container">
                                    <label class="fw-bold fontAvantRegular">Upload video (*)</label>
                                    <a class="clear-button" href="javascript:void(0)" title="Clear Image">
                                        ×
                                    </a>
                                </div>
                                <label class="input-container">
                                    <input accept="video/*" aria-label="Choose File" class="input-hidden"
                                        id="fileInputVideo" type="file" wire:model="verhicle_videos">
                                    <span class="input-visible"><i class="bi bi-cloud-arrow-up text-success"></i> Chọn
                                        file</span>
                                </label>
                                <div id="preview-container-video" class="image-preview" style="">

                                </div>
                            </div>

                        </div>
                            </div>

                            <div class="col-md-4 col-sm-12 mb-20">
                                <div class="form-inner form-inner-padding mb-20 blurBG bg-shape" style=""
                                    id="changeColor">
                                    <label style="background: #fff;display:inline" class="rounded p-1">Màu sắc</label>
                                    <div class="radio-input" id="style-4" style="overflow:auto">
                                        @foreach ($colors as $key => $color)
                                            <input {{ $key == 'red' ? 'checked' : '' }} value="{{ $color }}"
                                                id="color-{{ $key }}" type="radio" wire:model="color">
                                            <label for="color-{{ $key }}">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 12L10.2426 16.2426L18.727 7.75732"
                                                                    id="Vector"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>
                                        @endforeach
                                    </div>

                                    <div class="text-danger">
                                        @error('color')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-inner form-inner-padding mb-20 bg-shape">
                                    <label for="">Hộp số</label>
                                    <div class="d-flex justify-content-between items-center">
                                        <div class="radio-tile-group">
                                            <div class="input-container">
                                                <input id="walk" wire:model="transmission" value="sotay"
                                                    class="radio-button" type="radio" name="radio">
                                                <div class="radio-tile">
                                                    <div class="icon walk-icon">

                                                    </div>
                                                    <label for="walk" class="radio-tile-label">Số tay</label>
                                                </div>
                                            </div>

                                            <div class="input-container">
                                                <input id="bike" wire:model="transmission" value="sotudong"
                                                    class="radio-button" type="radio" name="radio">
                                                <div class="radio-tile">
                                                    <div class="icon bike-icon">

                                                    </div>
                                                    <label for="bike" class="radio-tile-label">Số tự động</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="text-danger">
                                        @error('transmission')
                                            {{ $message }}
                                        @enderror
                                    </div>

                                </div>

                                <div class="form-inner form-inner-padding mb-20 bg-shape">
                                    <label for="" class="">Một số tính năng khác</label>

                                    <div class="row" style="padding: 0px 4px">
                                        @foreach ($featureValues as $key => $item)
                                            <label class="container-check-box my-2 col-lg-6">
                                                <div style="padding-right:12px">
                                                    <input value="{{ $item }}" type="checkbox"
                                                        wire:model="features">
                                                    <div class="checkmark"></div>
                                                </div>
                                                {{ $item }}
                                            </label>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="">
                                    <div class="form-inner" style="text-align: end">
                                        <button class="primary-btn2" wire:click="secondStepSubmit"
                                            type="button">Tiếp
                                            tục</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </form>

    @push('scripts')
        <script src="{{ asset('js/file_upload.js') }}"></script>
    @endpush
</div>

                        </div>
                        <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <p>1</p>
                        </div>
                        <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-common-tab">
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
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-partials.layout-client>
