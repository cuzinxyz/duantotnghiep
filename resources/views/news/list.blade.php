<x-partials.layout-client>
    <div class="blog-standard-page pt-100 mb-100">
        <div class="container">
            <div class="row g-lg-4 gy-5">
                <div class="col-lg-8">
                    @if ($posts->count() > 0)
                        @foreach ($posts as $post)
                            <div class="news-card2 mb-50">
                                <div class="news-img">
                                    <a href="{{ route('news.index', $post->slug) }}"><img
                                            src="{{ str_contains($post->thumbnailImage, 'http') ? $post->thumbnailImage : asset('storage/' . $post->thumbnailImage) }}"
                                            alt=""></a>
                                </div>
                                <div class="content">
                                    <h4><a href="{{ route('news.index', $post->slug) }}">{{ $post->title }}</a></h4>
                                    <p>{{ $post->summary }}</p>
                                    <div class="news-btm d-flex align-items-center justify-content-between">
                                        <div class="author-area">
                                            <div class="author-content">
                                                <a
                                                    href="blog-standard.html">{{ $post->created_at->diffForHumans() }}</a>
                                            </div>
                                        </div>
                                        <a class="view-btn" href="{{ route('news.index', $post->slug) }}">Đọc thêm</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

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
                                            <path d="M0 7.00008L7 0L2.54545 7.00008L7 14L0 7.00008Z"></path>
                                        </svg> Prev
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Next
                                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="14"
                                            viewBox="0 0 7 14">
                                            <path d="M7 7.00008L0 0L4.45455 7.00008L0 14L7 7.00008Z"></path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-sidebar mb-50">
                        <div class="single-widgets widget_egns_categoris mb-20">
                            <div class="widget-title mb-20">
                                <h6>Category</h6>
                            </div>
                            <ul class="wp-block-categoris-cloud">
                                <li><a href="blog-standard.html" class="active"><span>Car Servicing</span> <span
                                            class="number-of-categoris">(30)</span></a></li>
                                <li><a href="blog-standard.html" class="active"><span>Car Buying Advice</span> <span
                                            class="number-of-categoris">(18)</span> </a></li>
                                <li><a href="blog-standard.html" class="active"><span>Car Rental</span> <span
                                            class="number-of-categoris">(21)</span></a></li>
                                <li><a href="blog-standard.html" class="active"><span>Driving</span> <span
                                            class="number-of-categoris">(25)</span></a></li>
                                <li><a href="blog-standard.html" class="active"><span>Brand Car</span> <span
                                            class="number-of-categoris">(29)</span></a></li>
                                <li><a href="blog-standard.html" class="active"><span>Tata</span> <span
                                            class="number-of-categoris">(2,554)</span></a></li>
                                <li><a href="blog-standard.html" class="active"><span>Hyundai</span> <span
                                            class="number-of-categoris">(1,556)</span></a></li>
                            </ul>
                        </div>
                        <div class="single-widgets widget_egns_recent_post mb-20">
                            <div class="widget-title blog-title mb-20">
                                <h6>Recent Blog</h6>
                                <div class="slider-btn-group2 d-flex align-items-center justify-content-between">
                                    <div class="slider-btn prev-51 swiper-button-disabled" tabindex="-1" role="button"
                                        aria-label="Previous slide" aria-controls="swiper-wrapper-862ffba7eed34a24"
                                        aria-disabled="true">
                                        <svg width="7" height="12" viewBox="0 0 8 13"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                                        </svg>
                                    </div>
                                    <div class="slider-btn next-51" tabindex="0" role="button"
                                        aria-label="Next slide" aria-controls="swiper-wrapper-862ffba7eed34a24"
                                        aria-disabled="false">
                                        <svg width="7" height="12" viewBox="0 0 8 13"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-post-wraper">
                                <div
                                    class="swiper recent-post-sidebar-slider swiper-initialized swiper-horizontal swiper-pointer-events">
                                    <div class="swiper-wrapper" id="swiper-wrapper-862ffba7eed34a24" aria-live="off"
                                        style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                                        <div class="swiper-slide swiper-slide-active"
                                            style="width: 346px; margin-right: 24px;" role="group" aria-label="1 / 3">
                                            <div class="widget-cnt">
                                                <div class="wi">
                                                    <a href="blog-details.html"><img
                                                            src="assets/img/inner-page/blog-st-01.png"
                                                            alt="image"></a>
                                                </div>
                                                <div class="wc">
                                                    <a class="date" href="blog-standard.html">May 18, 2023</a>
                                                    <h6><a href="blog-details.html">The Environmental Impact of Cars
                                                            and How to Minimize It.</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-next"
                                            style="width: 346px; margin-right: 24px;" role="group"
                                            aria-label="2 / 3">
                                            <div class="widget-cnt">
                                                <div class="wi">
                                                    <a href="blog-details.html"><img
                                                            src="assets/img/inner-page/blog-st-02.png"
                                                            alt="image"></a>
                                                </div>
                                                <div class="wc">
                                                    <a class="date" href="blog-standard.html">May 18, 2023</a>
                                                    <h6><a href="blog-details.html">The Environmental Impact of Cars
                                                            and How to Minimize It.</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" role="group" aria-label="3 / 3"
                                            style="width: 346px; margin-right: 24px;">
                                            <div class="widget-cnt">
                                                <div class="wi">
                                                    <a href="blog-details.html"><img
                                                            src="assets/img/inner-page/blog-st-03.png"
                                                            alt="image"></a>
                                                </div>
                                                <div class="wc">
                                                    <a class="date" href="blog-standard.html">May 18, 2023</a>
                                                    <h6><a href="blog-details.html">The Environmental Impact of Cars
                                                            and How to Minimize It.</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="swiper-notification" aria-live="assertive"
                                        aria-atomic="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="single-widgets widget_egns_tag">
                            <div class="widget-title mb-20">
                                <h6>Popular Tags</h6>
                            </div>
                            <p class="wp-block-tag-cloud">
                                <a href="blog-standard.html">Car Advice</a>
                                <a href="#">Rental</a>
                                <a href="#">Hyundai</a>
                                <a href="#">Driving</a>
                                <a href="#">Compare</a>
                                <a href="#">Buying</a>
                                <a href="car-deatils.html">Toyota</a>
                                <a href="#">Audi</a>
                                <a href="#">Service</a>
                            </p>
                        </div>
                    </div>
                    <div class="single-widgets sidebar-banner">
                        <div class="product-content">
                            <div class="text">
                                <h4><a href="#">Mercedes-Benz <span>( Model-S13)</span></a></h4>
                                <h6>For Summer Offer</h6>
                            </div>
                            <div class="offer-batch">
                                <h3>30%</h3>
                                <span>Discount</span>
                            </div>
                        </div>
                        <div class="product-img">
                            <img src="assets/img/inner-page/sb-banner-img.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-partials.layout-client>
