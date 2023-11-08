@php
    $currentYear = date('Y');
    $startYear = $currentYear - 10;
@endphp
<div>
    <div class="inner-page-banner">
        <div class="banner-wrapper">
            <div class="container-fluid">
                <ul class="breadcrumb-list">
                    <li><a href="index.html">Home</a></li>
                    <li>Car Listing System</li>
                </ul>
                <div class="banner-main-content-wrap">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 d-flex align-items-center">
                            <div class="banner-content">
                                <span class="sub-title">Car Grid System</span>
                                <h1>To Choose Dream Car</h1>
                                <div class="customar-review">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <div class="review-top">
                                                    <div class="logo">
                                                        <img src="fonts/trstpilot-logo.svg" alt="">
                                                    </div>
                                                    <div class="star">
                                                        <img src="fonts/trustpilot-star.svg" alt="">
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <ul>
                                                        <li>Trust Rating <span>5.0</span></li>
                                                        <li><span>2348</span> Reviews</li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="review-top">
                                                    <div class="logo">
                                                        <img src="fonts/google-logo.svg" alt="">
                                                    </div>
                                                    <div class="star">
                                                        <ul>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-half"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <ul>
                                                        <li>Trust Rating <span>5.0</span></li>
                                                        <li><span>2348</span> Reviews</li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5 d-lg-flex d-none align-items-center justify-content-end">
                            <div class="banner-img">
                                <img src="images/inner-banner-img.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="product-page pt-100 mb-100">
        <div class="container">
            <div class="row g-xl-4 gy-5">
                <div class="col-xl-4 order-xl-1 order-2">
                    <div class="filter-area mb-40">
                        <div class="title-and-close-btn mb-20">
                            <h6>Bộ Lọc Tìm Kiếm</h6>
                            {{-- <div class="close-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                    viewBox="0 0 14 14">
                                    <path
                                        d="M7 13.125C5.37555 13.125 3.81763 12.4797 2.66897 11.331C1.52031 10.1824 0.875 8.62445 0.875 7C0.875 5.37555 1.52031 3.81763 2.66897 2.66897C3.81763 1.52031 5.37555 0.875 7 0.875C8.62445 0.875 10.1824 1.52031 11.331 2.66897C12.4797 3.81763 13.125 5.37555 13.125 7C13.125 8.62445 12.4797 10.1824 11.331 11.331C10.1824 12.4797 8.62445 13.125 7 13.125ZM7 14C8.85652 14 10.637 13.2625 11.9497 11.9497C13.2625 10.637 14 8.85652 14 7C14 5.14348 13.2625 3.36301 11.9497 2.05025C10.637 0.737498 8.85652 0 7 0C5.14348 0 3.36301 0.737498 2.05025 2.05025C0.737498 3.36301 0 5.14348 0 7C0 8.85652 0.737498 10.637 2.05025 11.9497C3.36301 13.2625 5.14348 14 7 14Z">
                                    </path>
                                    <path
                                        d="M4.06506 4.06506C4.1057 4.02431 4.15397 3.99199 4.20713 3.96993C4.26028 3.94788 4.31726 3.93652 4.37481 3.93652C4.43235 3.93652 4.48933 3.94788 4.54248 3.96993C4.59564 3.99199 4.64392 4.02431 4.68456 4.06506L6.99981 6.38118L9.31506 4.06506C9.35573 4.02438 9.40402 3.99211 9.45717 3.9701C9.51032 3.94808 9.56728 3.93675 9.62481 3.93675C9.68233 3.93675 9.73929 3.94808 9.79244 3.9701C9.84559 3.99211 9.89388 4.02438 9.93456 4.06506C9.97523 4.10573 10.0075 4.15402 10.0295 4.20717C10.0515 4.26032 10.0629 4.31728 10.0629 4.37481C10.0629 4.43233 10.0515 4.48929 10.0295 4.54244C10.0075 4.59559 9.97523 4.64388 9.93456 4.68456L7.61843 6.99981L9.93456 9.31506C9.97523 9.35573 10.0075 9.40402 10.0295 9.45717C10.0515 9.51032 10.0629 9.56728 10.0629 9.62481C10.0629 9.68233 10.0515 9.73929 10.0295 9.79244C10.0075 9.84559 9.97523 9.89388 9.93456 9.93456C9.89388 9.97523 9.84559 10.0075 9.79244 10.0295C9.73929 10.0515 9.68233 10.0629 9.62481 10.0629C9.56728 10.0629 9.51032 10.0515 9.45717 10.0295C9.40402 10.0075 9.35573 9.97523 9.31506 9.93456L6.99981 7.61843L4.68456 9.93456C4.64388 9.97523 4.59559 10.0075 4.54244 10.0295C4.48929 10.0515 4.43233 10.0629 4.37481 10.0629C4.31728 10.0629 4.26032 10.0515 4.20717 10.0295C4.15402 10.0075 4.10573 9.97523 4.06506 9.93456C4.02438 9.89388 3.99211 9.84559 3.9701 9.79244C3.94808 9.73929 3.93675 9.68233 3.93675 9.62481C3.93675 9.56728 3.94808 9.51032 3.9701 9.45717C3.99211 9.40402 4.02438 9.35573 4.06506 9.31506L6.38118 6.99981L4.06506 4.68456C4.02431 4.64392 3.99199 4.59564 3.96993 4.54248C3.94788 4.48933 3.93652 4.43235 3.93652 4.37481C3.93652 4.31726 3.94788 4.26028 3.96993 4.20713C3.99199 4.15397 4.02431 4.1057 4.06506 4.06506Z">
                                    </path>
                                </svg> Clear All
                            </div> --}}
                        </div>
                        {{-- <div class="tags">
                            <ul>
                                <li class="grid active">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8"
                                        viewBox="0 0 8 8">
                                        <path
                                            d="M0.167842 0.167842C0.220911 0.114638 0.283955 0.0724268 0.353363 0.0436257C0.422771 0.0148246 0.497179 0 0.572325 0C0.647471 0 0.72188 0.0148246 0.791287 0.0436257C0.860695 0.0724268 0.923739 0.114638 0.976809 0.167842L4.00015 3.19233L7.02349 0.167842C7.07661 0.114724 7.13967 0.072589 7.20907 0.043842C7.27847 0.015095 7.35286 0.000299116 7.42797 0.000299116C7.50309 0.000299116 7.57748 0.015095 7.64688 0.043842C7.71628 0.072589 7.77934 0.114724 7.83246 0.167842C7.88558 0.220959 7.92771 0.284019 7.95646 0.35342C7.98521 0.422821 8 0.497206 8 0.572325C8 0.647445 7.98521 0.721829 7.95646 0.79123C7.92771 0.860632 7.88558 0.923691 7.83246 0.976809L4.80797 4.00015L7.83246 7.02349C7.88558 7.07661 7.92771 7.13967 7.95646 7.20907C7.98521 7.27847 8 7.35286 8 7.42797C8 7.50309 7.98521 7.57748 7.95646 7.64688C7.92771 7.71628 7.88558 7.77934 7.83246 7.83246C7.77934 7.88558 7.71628 7.92771 7.64688 7.95646C7.57748 7.98521 7.50309 8 7.42797 8C7.35286 8 7.27847 7.98521 7.20907 7.95646C7.13967 7.92771 7.07661 7.88558 7.02349 7.83246L4.00015 4.80797L0.976809 7.83246C0.923691 7.88558 0.860632 7.92771 0.79123 7.95646C0.721829 7.98521 0.647445 8 0.572325 8C0.497206 8 0.422821 7.98521 0.35342 7.95646C0.284019 7.92771 0.220959 7.88558 0.167842 7.83246C0.114724 7.77934 0.072589 7.71628 0.043842 7.64688C0.015095 7.57748 0.000299116 7.50309 0.000299116 7.42797C0.000299116 7.35286 0.015095 7.27847 0.043842 7.20907C0.072589 7.13967 0.114724 7.07661 0.167842 7.02349L3.19233 4.00015L0.167842 0.976809C0.114638 0.923739 0.0724268 0.860695 0.0436257 0.791287C0.0148246 0.72188 0 0.647471 0 0.572325C0 0.497179 0.0148246 0.422771 0.0436257 0.353363C0.0724268 0.283955 0.114638 0.220911 0.167842 0.167842Z">
                                        </path>
                                    </svg> Wagon
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8"
                                        viewBox="0 0 8 8">
                                        <path
                                            d="M0.167842 0.167842C0.220911 0.114638 0.283955 0.0724268 0.353363 0.0436257C0.422771 0.0148246 0.497179 0 0.572325 0C0.647471 0 0.72188 0.0148246 0.791287 0.0436257C0.860695 0.0724268 0.923739 0.114638 0.976809 0.167842L4.00015 3.19233L7.02349 0.167842C7.07661 0.114724 7.13967 0.072589 7.20907 0.043842C7.27847 0.015095 7.35286 0.000299116 7.42797 0.000299116C7.50309 0.000299116 7.57748 0.015095 7.64688 0.043842C7.71628 0.072589 7.77934 0.114724 7.83246 0.167842C7.88558 0.220959 7.92771 0.284019 7.95646 0.35342C7.98521 0.422821 8 0.497206 8 0.572325C8 0.647445 7.98521 0.721829 7.95646 0.79123C7.92771 0.860632 7.88558 0.923691 7.83246 0.976809L4.80797 4.00015L7.83246 7.02349C7.88558 7.07661 7.92771 7.13967 7.95646 7.20907C7.98521 7.27847 8 7.35286 8 7.42797C8 7.50309 7.98521 7.57748 7.95646 7.64688C7.92771 7.71628 7.88558 7.77934 7.83246 7.83246C7.77934 7.88558 7.71628 7.92771 7.64688 7.95646C7.57748 7.98521 7.50309 8 7.42797 8C7.35286 8 7.27847 7.98521 7.20907 7.95646C7.13967 7.92771 7.07661 7.88558 7.02349 7.83246L4.00015 4.80797L0.976809 7.83246C0.923691 7.88558 0.860632 7.92771 0.79123 7.95646C0.721829 7.98521 0.647445 8 0.572325 8C0.497206 8 0.422821 7.98521 0.35342 7.95646C0.284019 7.92771 0.220959 7.88558 0.167842 7.83246C0.114724 7.77934 0.072589 7.71628 0.043842 7.64688C0.015095 7.57748 0.000299116 7.50309 0.000299116 7.42797C0.000299116 7.35286 0.015095 7.27847 0.043842 7.20907C0.072589 7.13967 0.114724 7.07661 0.167842 7.02349L3.19233 4.00015L0.167842 0.976809C0.114638 0.923739 0.0724268 0.860695 0.0436257 0.791287C0.0148246 0.72188 0 0.647471 0 0.572325C0 0.497179 0.0148246 0.422771 0.0436257 0.353363C0.0724268 0.283955 0.114638 0.220911 0.167842 0.167842Z">
                                        </path>
                                    </svg> Panama City
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8"
                                        viewBox="0 0 8 8">
                                        <path
                                            d="M0.167842 0.167842C0.220911 0.114638 0.283955 0.0724268 0.353363 0.0436257C0.422771 0.0148246 0.497179 0 0.572325 0C0.647471 0 0.72188 0.0148246 0.791287 0.0436257C0.860695 0.0724268 0.923739 0.114638 0.976809 0.167842L4.00015 3.19233L7.02349 0.167842C7.07661 0.114724 7.13967 0.072589 7.20907 0.043842C7.27847 0.015095 7.35286 0.000299116 7.42797 0.000299116C7.50309 0.000299116 7.57748 0.015095 7.64688 0.043842C7.71628 0.072589 7.77934 0.114724 7.83246 0.167842C7.88558 0.220959 7.92771 0.284019 7.95646 0.35342C7.98521 0.422821 8 0.497206 8 0.572325C8 0.647445 7.98521 0.721829 7.95646 0.79123C7.92771 0.860632 7.88558 0.923691 7.83246 0.976809L4.80797 4.00015L7.83246 7.02349C7.88558 7.07661 7.92771 7.13967 7.95646 7.20907C7.98521 7.27847 8 7.35286 8 7.42797C8 7.50309 7.98521 7.57748 7.95646 7.64688C7.92771 7.71628 7.88558 7.77934 7.83246 7.83246C7.77934 7.88558 7.71628 7.92771 7.64688 7.95646C7.57748 7.98521 7.50309 8 7.42797 8C7.35286 8 7.27847 7.98521 7.20907 7.95646C7.13967 7.92771 7.07661 7.88558 7.02349 7.83246L4.00015 4.80797L0.976809 7.83246C0.923691 7.88558 0.860632 7.92771 0.79123 7.95646C0.721829 7.98521 0.647445 8 0.572325 8C0.497206 8 0.422821 7.98521 0.35342 7.95646C0.284019 7.92771 0.220959 7.88558 0.167842 7.83246C0.114724 7.77934 0.072589 7.71628 0.043842 7.64688C0.015095 7.57748 0.000299116 7.50309 0.000299116 7.42797C0.000299116 7.35286 0.015095 7.27847 0.043842 7.20907C0.072589 7.13967 0.114724 7.07661 0.167842 7.02349L3.19233 4.00015L0.167842 0.976809C0.114638 0.923739 0.0724268 0.860695 0.0436257 0.791287C0.0148246 0.72188 0 0.647471 0 0.572325C0 0.497179 0.0148246 0.422771 0.0436257 0.353363C0.0724268 0.283955 0.114638 0.220911 0.167842 0.167842Z">
                                        </path>
                                    </svg> Toyota
                                </li>
                            </ul>
                        </div> --}}
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
                                    <ul>
                                        @foreach ($brands as $brand)
                                            <li>
                                                <label class="containerss">
                                                    <input type="checkbox" value="{{ $brand->id }}"
                                                        wire:model.live="updateBrands">
                                                    <span class="checkmark"></span>
                                                    <span class="text">{{ $brand->brand_name }} </span>
                                                    {{-- <span class="qty">(1,234)</span> --}}
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
                                                <select wire:model.live="minYear">
                                                    <option>Min Year</option>
                                                    @for ($year = $startYear; $year <= $currentYear; $year++)
                                                        <option value="{{ $year }}">{{ $year }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-inner">
                                                <select wire:model.live="maxYear" id="maxYear">
                                                    <option>Max Year</option>
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
                        {{-- <div class="product-widget mb-20">
                            <div class="check-box-item">
                                <h6 class="product-widget-title mb-20">Body Type</h6>
                                <div class="checkbox-container">
                                    <ul>
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">Wagon</span>
                                                <span class="qty">(1,234)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">Hatchback</span>
                                                <span class="qty">(11,353)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">Sedan</span>
                                                <span class="qty">(1,234)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">Cab Chassis</span>
                                                <span class="qty">(4,345)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">Utility </span>
                                                <span class="qty">(23,990)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">Tata</span>
                                                <span class="qty">(2,345)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">Hyundai</span>
                                                <span class="qty">(5,632)</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> --}}
                        <div class="product-widget mb-20">
                            <div  class="check-box-item">
                                <h6 class="product-widget-title mb-25">Giá</h6>
                                <div class="range-wrapper">
                                    <div wire:ignore class="slider-wrapper">
                                        <div id="eg-range-slider"></div>
                                    </div>
                                    <div class="valus">
                                        <div class="min-value">
                                            <span>$</span>
                                            <input type="text" class="from" value="200">
                                        </div>
                                        <div class="min-value">
                                            <span>$</span>
                                            <input type="text" class="to" value="2000">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="product-widget mb-20">
                            <div class="check-box-item">
                                <h6 class="product-widget-title mb-20">Mileage</h6>
                                <div class="checkbox-container">
                                    <div class="row g-3">
                                        <div class="col-6">
                                            <div class="form-inner">
                                                <select>
                                                    <option value="1">Min </option>
                                                    <option value="2">10000</option>
                                                    <option value="3">11000</option>
                                                    <option value="4">13200</option>
                                                    <option value="5">15000</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-inner">
                                                <select>
                                                    <option value="1">Max</option>
                                                    <option value="2">25000</option>
                                                    <option value="3">27000</option>
                                                    <option value="4">30000</option>
                                                    <option value="5">320000</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="product-widget mb-20">
                            <div class="check-box-item">
                                <h6 class="product-widget-title mb-20">Colors</h6>
                                <div class="checkbox-container d-flex gap-5">
                                    <ul class="color-area">
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">Yellow</span>
                                                <span class="qty">(10)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">Black</span>
                                                <span class="qty">(113)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">Silver</span>
                                                <span class="qty">(23)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">Orange</span>
                                                <span class="qty">(58)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">Green </span>
                                                <span class="qty">(89)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">Blue</span>
                                                <span class="qty">(76)</span>
                                            </label>
                                        </li>
                                    </ul>
                                    <ul class="color-area">
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">Gold</span>
                                                <span class="qty">(32)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">Gray</span>
                                                <span class="qty">(50)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">White</span>
                                                <span class="qty">(43)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">Red</span>
                                                <span class="qty">(77)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">Beige</span>
                                                <span class="qty">(35)</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> --}}
                        <div class="product-widget mb-20">
                            <div class="check-box-item">
                                <h6 class="product-widget-title mb-20">Địa điểm</h6>
                                <div class="checkbox-container">
                                    {{-- <div class="form-inner">
                                        <input type="text" placeholder="Type Location">
                                    </div> --}}
                                    <ul style="overflow: auto; max-height: 200px">
                                        @foreach ($locations as $location)
                                            <li>
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
                <div class="col-xl-8 order-xl-2 order-1">
                    <div class="row mb-40">
                        <div class="col-lg-12">
                            <div class="show-item-and-filte">
                                <p>Có <strong>{{ $cars->count() }}</strong> tin bán xe ô tô</p>
                                <div  class="filter-view">
                                    <div class="filter-atra">
                                        <h6>Sắp xếp theo:</h6>
                                        <form>
                                            <div wire:ignore class="form-inner">
                                                <select wire:model.live="sortPrice">
                                                    <option value="0">Không sắp xếp</option>
                                                    <option value="1">Giá thấp -> cao</option>
                                                    <option value="2">Giá cao -> thấp</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="view">
                                        <ul class="btn-group list-grid-btn-group">
                                            <li class="active grid">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                    viewBox="0 0 14 14">
                                                    <mask id="mask0_1631_19" style="mask-type:alpha"
                                                        maskUnits="userSpaceOnUse" x="0" y="0" width="14"
                                                        height="14">
                                                        <rect width="14" height="14" fill="#D9D9D9"></rect>
                                                    </mask>
                                                    <g mask="url(#mask0_1631_19)">
                                                        <path
                                                            d="M5.47853 6.08726H0.608726C0.272536 6.08726 0 5.81472 0 5.47853V0.608726C0 0.272536 0.272536 0 0.608726 0H5.47853C5.81472 0 6.08726 0.272536 6.08726 0.608726V5.47853C6.08726 5.81472 5.81472 6.08726 5.47853 6.08726Z">
                                                        </path>
                                                        <path
                                                            d="M13.3911 6.08726H8.52132C8.18513 6.08726 7.9126 5.81472 7.9126 5.47853V0.608726C7.9126 0.272536 8.18513 0 8.52132 0H13.3911C13.7273 0 13.9999 0.272536 13.9999 0.608726V5.47853C13.9999 5.81472 13.7273 6.08726 13.3911 6.08726Z">
                                                        </path>
                                                        <path
                                                            d="M5.47853 14.0013H0.608726C0.272536 14.0013 0 13.7288 0 13.3926V8.52279C0 8.1866 0.272536 7.91406 0.608726 7.91406H5.47853C5.81472 7.91406 6.08726 8.1866 6.08726 8.52279V13.3926C6.08726 13.7288 5.81472 14.0013 5.47853 14.0013Z">
                                                        </path>
                                                        <path
                                                            d="M13.3916 14.0013H8.52181C8.18562 14.0013 7.91309 13.7288 7.91309 13.3926V8.52279C7.91309 8.1866 8.18562 7.91406 8.52181 7.91406H13.3916C13.7278 7.91406 14.0003 8.1866 14.0003 8.52279V13.3926C14.0003 13.7288 13.7278 14.0013 13.3916 14.0013Z">
                                                        </path>
                                                    </g>
                                                </svg>
                                            </li>
                                            <li class="lists">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                    viewBox="0 0 14 14">
                                                    <mask id="mask0_1631_3" style="mask-type:alpha"
                                                        maskUnits="userSpaceOnUse" x="0" y="0" width="14"
                                                        height="14">
                                                        <rect width="14" height="14" fill="#D9D9D9"></rect>
                                                    </mask>
                                                    <g mask="url(#mask0_1631_3)">
                                                        <path
                                                            d="M1.21747 2C0.545203 2 0 2.55848 0 3.24765C0 3.93632 0.545203 4.49433 1.21747 4.49433C1.88974 4.49433 2.43494 3.93632 2.43494 3.24765C2.43494 2.55848 1.88974 2 1.21747 2Z">
                                                        </path>
                                                        <path
                                                            d="M1.21747 5.75195C0.545203 5.75195 0 6.30996 0 6.99913C0 7.68781 0.545203 8.24628 1.21747 8.24628C1.88974 8.24628 2.43494 7.68781 2.43494 6.99913C2.43494 6.30996 1.88974 5.75195 1.21747 5.75195Z">
                                                        </path>
                                                        <path
                                                            d="M1.21747 9.50586C0.545203 9.50586 0 10.0643 0 10.753C0 11.4417 0.545203 12.0002 1.21747 12.0002C1.88974 12.0002 2.43494 11.4417 2.43494 10.753C2.43494 10.0643 1.88974 9.50586 1.21747 9.50586Z">
                                                        </path>
                                                        <path
                                                            d="M13.0845 2.31055H4.42429C3.91874 2.31055 3.50879 2.7305 3.50879 3.24886C3.50879 3.76677 3.91871 4.1867 4.42429 4.1867H13.0845C13.59 4.1867 14 3.76677 14 3.24886C14 2.7305 13.59 2.31055 13.0845 2.31055Z">
                                                        </path>
                                                        <path
                                                            d="M13.0845 6.06055H4.42429C3.91874 6.06055 3.50879 6.48047 3.50879 6.99886C3.50879 7.51677 3.91871 7.9367 4.42429 7.9367H13.0845C13.59 7.9367 14 7.51677 14 6.99886C14 6.48047 13.59 6.06055 13.0845 6.06055Z">
                                                        </path>
                                                        <path
                                                            d="M13.0845 9.81348H4.42429C3.91874 9.81348 3.50879 10.2334 3.50879 10.7513C3.50879 11.2692 3.91871 11.6891 4.42429 11.6891H13.0845C13.59 11.6891 14 11.2692 14 10.7513C14 10.2334 13.59 9.81348 13.0845 9.81348Z">
                                                        </path>
                                                    </g>
                                                </svg>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-grid-main">
                        <div class="list-grid-product-wrap grid-group-wrapper">
                            <div class="row g-4 justify-content-center mb-40">
                                @foreach ($cars as $car)
                                    <div class="col-lg-6 col-md-6 col-sm-12 wow fadeInUp item" data-wow-delay="200ms">
                                        <div class="product-card">
                                            <div class="product-img">
                                                <div class="number-of-img">
                                                    <img src="fonts/gallery-icon-1.svg" alt="">
                                                    {{ count($car->verhicle_image_library) }}
                                                </div>
                                                <a href="#" class="fav">
                                                    <svg width="14" height="13" viewBox="0 0 14 14"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <div class="slider-btn-group">
                                                    <div class="product-stand-next swiper-arrow">
                                                        <svg width="8" height="13" viewBox="0 0 8 13"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <div class="product-stand-prev swiper-arrow">
                                                        <svg width="8" height="13" viewBox="0 0 8 13"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div wire:ignore class="swiper product-img-slider">
                                                    <div class="swiper-wrapper">
                                                        @foreach ($car->verhicle_image_library as $carImage)
                                                            <div class="swiper-slide">
                                                                <img src="/storage/{{ $carImage }}"
                                                                    alt="image">
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h5><a href="car-deatils.html">{{ $car->title }}</a></h5>
                                                <div class="price-location">
                                                    <div class="price">
                                                        <strong>{{ number_format($car->price) }}₫</strong>
                                                    </div>
                                                    <div class="location">
                                                        <a href="#"><i class="bi bi-geo-alt"></i>
                                                            {{ $car->province->name }}</a>
                                                    </div>
                                                </div>
                                                <ul class="features">
                                                    <li>
                                                        <img src="fonts/miles.svg" alt="">
                                                        {{ $car->car_info['mileage'] }} kilometers
                                                    </li>
                                                    <li>
                                                        <img src="fonts/fuel.svg" alt="" width="14px"
                                                            height="14px">
                                                        {{ $car->car_info['fuelType'] }}
                                                    </li>
                                                    <li>
                                                        <img src="fonts/electric.svg" alt="">
                                                        {{ $car->car_info['engine'] }}
                                                    </li>
                                                </ul>
                                                <div class="content-btm">
                                                    <a class="view-btn2" href="car-deatils.html">
                                                        <svg width="35" height="21" viewBox="0 0 35 21"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11 20C5.47715 20 1 15.7467 1 10.5C1 5.25329 5.47715 1 11 1"
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
                                                        Xem chi tiết
                                                    </a>
                                                    <div class="brand">
                                                        <a href="single-brand-category.html">
                                                            {{-- <img src="/storage/{{ $car->brand->logo_url }}" alt="image"> --}}
                                                            <img src="fonts/mercedes-01.svg" alt="image">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    {{ $cars->links() }}

                                    {{-- <div class="pagination-and-next-prev">
                                        <div class="pagination">
                                            {{ $cars->links('vendor.livewire.bootstrap') }}
                                        </div>
                                    </div> --}}
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
                        <h4>Top Rated Used Cars For Sale</h4>
                    </div>
                    <div class="brand-list">
                        <ul>
                            <li><a href="single-brand-category.html">Mitsubishi <span>(1,234)</span></a></li>
                            <li><a href="single-brand-category.html">Mazda <span>(2,365)</span></a></li>
                            <li><a href="single-brand-category.html">Land Rover <span>(7,562)</span></a></li>
                            <li><a href="single-brand-category.html">Volkswagen <span>(1,638)</span></a></li>
                            <li><a href="single-brand-category.html">Mercedes-Benz <span>(8,556)</span></a></li>
                            <li><a href="single-brand-category.html">Suzuki <span>(4,772)</span></a></li>
                            <li><a href="single-brand-category.html">Isuzu <span>(9,676)</span></a></li>
                            <li><a href="single-brand-category.html">Volvo <span>(3,763)</span></a></li>
                            <li><a href="single-brand-category.html">Honda <span>(2,432)</span></a></li>
                            <li><a href="single-brand-category.html">Hyundai <span>(22,463)</span></a></li>
                            <li><a href="single-brand-category.html">Nissan <span>(1,873)</span></a></li>
                            <li><a href="single-brand-category.html">SsangYong <span>(277 )</span></a></li>
                            <li><a href="single-brand-category.html">Peugeot <span>(7,382)</span></a></li>
                            <li><a href="single-brand-category.html">Kia <span>(532)</span></a></li>
                            <li><a href="single-brand-category.html">Maserati <span>(675)</span></a></li>
                            <li><a href="single-brand-category.html">Bentley <span>(5,645)</span></a></li>
                            <li><a href="single-brand-category.html">Holden <span>(11,324)</span></a></li>
                            <li><a href="single-brand-category.html">Haval <span>(6,676)</span></a></li>
                            <li><a href="single-brand-category.html">SKODA <span>(4,453)</span></a></li>
                            <li><a href="single-brand-category.html">Porsche <span>(3,754)</span></a></li>
                            <li><a href="single-brand-category.html">Subaru <span>(1,754)</span></a></li>
                            <li><a href="single-brand-category.html">Tesla <span>(9,442)</span></a></li>
                            <li><a href="single-brand-category.html">Mahindra <span>(3,766)</span></a></li>
                            <li><a href="single-brand-category.html">Lamborghini <span>(6,834)</span></a></li>
                            <li><a href="single-brand-category.html">Mitsubishi <span>(432)</span></a></li>
                            <li><a href="single-brand-category.html">Mazda <span>(5,334)</span></a></li>
                            <li><a href="single-brand-category.html">Bentley <span>(5,645)</span></a></li>
                            <li><a href="single-brand-category.html">Holden <span>(11,324)</span></a></li>
                            <li><a href="single-brand-category.html">Haval <span>(6,676)</span></a></li>
                            <li><a href="single-brand-category.html">SKODA <span>(4,453)</span></a></li>
                            <li><a href="single-brand-category.html">Porsche <span>(3,754)</span></a></li>
                            <li><a href="single-brand-category.html">Subaru <span>(1,754)</span></a></li>
                            <li><a href="single-brand-category.html">Tesla <span>(9,442)</span></a></li>
                            <li><a href="single-brand-category.html">Mahindra <span>(3,766)</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="customar-feedback-area mb-100">
        <div class="container">
            <div class="row mb-60 wow fadeInUp" data-wow-delay="200ms">
                <div class="col-lg-12">
                    <div class="section-title1">
                        <span>Customer Feedback</span>
                        <h2>What Our Customers Are Saying</h2>
                    </div>
                </div>
            </div>
            <div class="row g-4 mb-100">
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="200ms">
                    <div class="customer-feedback-left">
                        <a href="#" class="trustpilot">
                            <h5>Excellent!</h5>
                            <img class="star" src="fonts/trustpilot-star3.svg" alt="">
                            <span>Based On <strong>2348</strong> Reviews</span>
                            <img class="logo" src="fonts/trustpilot-log3.svg" alt="">
                        </a>
                        <a href="#" class="google">
                            <img class="logo" src="fonts/google3.svg" alt="">
                            <div class="star">
                                <ul>
                                    <li class="active"><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li class=""><i class="bi bi-star-half"></i></li>
                                </ul>
                            </div>
                            <span>Based On <strong>1448</strong> Reviews</span>
                        </a>
                    </div>
                </div>
                <div  class="col-lg-9 wow fadeInUp" data-wow-delay="200ms">
                    <div class="customer-feedback-right">
                        <div wire:ignore class="swiper customer-feedback-slider mb-40">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="feedback-card">
                                        <div class="feedback-top">
                                            <div class="stat-area">
                                                <div class="star">
                                                    <ul>
                                                        <li class="active"><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li class=""><i class="bi bi-star-half"></i></li>
                                                    </ul>
                                                </div>
                                                <span>Great Services!</span>
                                            </div>
                                            <div class="logo">
                                                <img src="fonts/google3.svg" alt="">
                                            </div>
                                        </div>
                                        <p>Drivco-Agency to the actively encourage customers to leave
                                            reviews to the help promote their products and services.”</p>
                                        <div class="author-name">
                                            <h6>Nowry Jahan</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="feedback-card">
                                        <div class="feedback-top">
                                            <div class="stat-area">
                                                <img src="fonts/trustpilot-star.svg" alt="">
                                                <span>Trusted Company</span>
                                            </div>
                                            <div class="logo">
                                                <img src="fonts/trustpilot-log3.svg" alt="">
                                            </div>
                                        </div>
                                        <p>Drivco-Agency customer feedback is an invaluable source of
                                            information that can help businesses improve their offerings and provide
                                            better experiences.</p>
                                        <div class="author-name">
                                            <h6>Jhon Abraham</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="feedback-card">
                                        <div class="feedback-top">
                                            <div class="stat-area">
                                                <div class="star">
                                                    <ul>
                                                        <li class="active"><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li class=""><i class="bi bi-star-half"></i></li>
                                                    </ul>
                                                </div>
                                                <span>Great Services!</span>
                                            </div>
                                            <div class="logo">
                                                <img src="fonts/google3.svg" alt="">
                                            </div>
                                        </div>
                                        <p>Drivco-Agency to the actively encourage customers to leave
                                            reviews to the help promote their products and services.”</p>
                                        <div class="author-name">
                                            <h6>Nowry Jahan</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="feedback-card">
                                        <div class="feedback-top">
                                            <div class="stat-area">
                                                <img src="fonts/trustpilot-star.svg" alt="">
                                                <span>Trusted Company</span>
                                            </div>
                                            <div class="logo">
                                                <img src="fonts/trustpilot-log3.svg" alt="">
                                            </div>
                                        </div>
                                        <p>Drivco-Agency customer feedback is an invaluable source of
                                            information that can help businesses improve their offerings and provide
                                            better experiences.</p>
                                        <div class="author-name">
                                            <h6>Jhon Abraham</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-lg-12 divider">
                                <div
                                    class="slider-btn-group style-2 justify-content-md-between justify-content-center">
                                    <div class="slider-btn prev-4 d-md-flex d-none">
                                        <svg width="11" height="19" viewBox="0 0 8 13"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                                        </svg>
                                    </div>
                                    <div class="view-btn-area">
                                        <p>Thousand of People Reviews to Us</p>
                                        <a class="view-btn" href="customer-review.html">View All Review</a>
                                    </div>
                                    <div class="slider-btn next-4 d-md-flex d-none">
                                        <svg width="11" height="19" viewBox="0 0 8 13"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div wire:ignore class="row wow fadeInUp" data-wow-delay="400ms">
                <div class="col-lg-12">
                    <div class="sub-title">
                        <h6>Đối Tác Đáng Tin Cậy Của Chúng Tôi</h6>
                        <div class="dash"></div>
                    </div>
                    <div class="partner-slider">
                        <h2 class="marquee_text2">
                            <img src="images/company-logo-01.png" alt="">
                            <img src="images/company-logo-02.png" alt="">
                            <img src="images/company-logo-03.png" alt="">
                            <img src="images/company-logo-04.png" alt="">
                            <img src="images/company-logo-05.png" alt="">
                            <img src="images/company-logo-06.png" alt="">
                            <img src="images/company-logo-01.png" alt="">
                            <img src="images/company-logo-02.png" alt="">
                            <img src="images/company-logo-03.png" alt="">
                            <img src="images/company-logo-04.png" alt="">
                            <img src="images/company-logo-05.png" alt="">
                            <img src="images/company-logo-06.png" alt="">
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
