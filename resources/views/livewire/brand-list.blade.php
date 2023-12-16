<div class="home5-brand-category-area">
    <div class="container">
        <div class="row mb-50 wow fadeInUp" data-wow-delay="200ms">
            <div :class="showHeading ? 'd-flex' : ''" class="col-lg-12 align-items-end justify-content-between gap-3 flex-wrap" x-show="showHeading">
                <div class="section-title-2">
                    <h3>Lướt thương hiệu</h3>
                    <p>Đa dạng và phong phú các lựa chọn dành cho bạn.</p>
                </div>
                <div class="filter-and-slider-btn">
                    <div class="slider-btn-group2 d-flex align-items-center justify-content-between">
                        <div class="slider-btn prev-52">
                            <svg width="9" height="15" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                            </svg>
                        </div>
                        <div class="slider-btn next-52">
                            <svg width="9" height="15" viewBox="0 0 8 13"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if ($brands->count() > 0)
            <div class="row wow fadeInUp" data-wow-delay="300ms">
                <div class="col-lg-12">
                    <div class="swiper home5-brand-category-slider">
                        <div class="swiper-wrapper">
                            @foreach ($brands as $brand)
                                @if($brand->brandCar->count() > 0)
                                    <div class="swiper-slide">
                                        <div class="single-category5">
                                            <div class="category-icon">
                                                <img src="{{ asset('storage/' . $brand->logo_url) }}"
                                                    width="40"
                                                    height="40"
                                                    style="object-fit:contain"
                                                    alt="{{ $brand->brand_name }}" 
                                                    loading="lazy">
                                            </div>
                                            <div class="category-content">
                                                <h5><a href="{{ route('brand.detail', $brand->brand_name) }}">{{ $brand->brand_name }}</a>
                                                </h5>
                                            </div>
                                            <div class="explore-btn5">
                                                <a href="{{ route('brand.detail', $brand->brand_name) }}"><span>Xem</span> <i
                                                        class="bi bi-arrow-right-short"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
