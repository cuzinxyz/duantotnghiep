<x-partials.layout-client>
    <x-homepage.banner :$banners :$mark />

    <x-homepage.featured-cars />

    @if ($adsPartners->count() > 0)
        <div class="mb-100">
            @foreach ($adsPartners as $value)
                <a href="{{ $value->target_url }}" target="_blank" rel="noopener noreferrer">
                    <img src="{{ asset('storage/' . $value->image_url) }}" alt="">
                </a>
            @endforeach
        </div>
    @else
        <div class="home2-inner-banner mb-100">
            <div class="container">
                <div class="row wow fadeInUp" data-wow-delay="700ms" style="visibility: visible; animation-delay: 700ms;">
                    <div class="col-lg-12">
                        <div class="inner-banner-content section-title-2">
                            <h3 class="text-white">Drivco: Đăng tin trực tuyến - Kết nối trực tiếp</h3>
                            <!--<p>Bảo dưỡng ô tô là việc bảo dưỡng, kiểm tra định kỳ một chiếc xe để đảm bảo xe hoạt động an toàn và hiệu quả. </p>-->
                            <button onclick="window.location.href='{{ route('sellCar') }}'"
                                class="btn btn-sm px-5 primary-btn3" type="button" data-bs-toggle="modal"
                                data-bs-target="#sellUsModal01">
                                <svg width="24" height="15" viewBox="0 0 24 15"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3.25985 0C3.15704 0 3.05844 0.0413135 2.98574 0.114852C2.91304 0.18839 2.87219 0.28813 2.87219 0.392129C2.87219 0.496128 2.91304 0.595867 2.98574 0.669405C3.05844 0.742944 3.15704 0.784257 3.25985 0.784257H4.8105C4.91332 0.784257 5.01192 0.742944 5.08462 0.669405C5.15732 0.595867 5.19816 0.496128 5.19816 0.392129C5.19816 0.28813 5.15732 0.18839 5.08462 0.114852C5.01192 0.0413135 4.91332 0 4.8105 0H3.25985ZM5.77966 0C5.67684 0 5.57824 0.0413135 5.50554 0.114852C5.43284 0.18839 5.39199 0.28813 5.39199 0.392129C5.39199 0.496128 5.43284 0.595867 5.50554 0.669405C5.57824 0.742944 5.67684 0.784257 5.77966 0.784257H10.3347C10.4375 0.784257 10.5361 0.742944 10.6088 0.669405C10.6815 0.595867 10.7223 0.496128 10.7223 0.392129C10.7223 0.28813 10.6815 0.18839 10.6088 0.114852C10.5361 0.0413135 10.4375 0 10.3347 0H5.77966Z">
                                    </path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.22917 2.7464C4.12636 2.7464 4.02776 2.78771 3.95505 2.86125C3.88235 2.93479 3.84151 3.03453 3.84151 3.13853C3.84151 3.24253 3.88235 3.34227 3.95505 3.4158C4.02776 3.48934 4.12636 3.53066 4.22917 3.53066H13.1454C14.653 3.53066 15.5822 3.76829 16.3256 4.15002C16.9575 4.47431 17.4672 4.90546 18.1055 5.44542C18.2375 5.55698 18.3749 5.67305 18.5201 5.79402L18.6101 5.86892L18.726 5.88127C22.2653 6.25811 23.0622 7.46822 23.2246 8.08778V9.60865C23.2246 9.71265 23.1838 9.81239 23.1111 9.88593C23.0384 9.95947 22.9398 10.0008 22.8369 10.0008H21.8356C21.6511 8.88811 20.6943 8.04014 19.5418 8.04014C18.3893 8.04014 17.4325 8.88811 17.248 10.0008H10.2058C10.0212 8.88811 9.06448 8.04014 7.91196 8.04014C6.75944 8.04014 5.80269 8.88811 5.61816 10.0008H3.7446C3.64178 10.0008 3.54318 10.0421 3.47048 10.1156C3.39778 10.1892 3.35693 10.2889 3.35693 10.3929C3.35693 10.4969 3.39778 10.5966 3.47048 10.6702C3.54318 10.7437 3.64178 10.785 3.7446 10.785H5.61816C5.80269 11.8977 6.75944 12.7457 7.91196 12.7457C9.06448 12.7457 10.0212 11.8977 10.2058 10.785H17.248C17.4325 11.8977 18.3893 12.7457 19.5418 12.7457C20.6943 12.7457 21.6511 11.8977 21.8356 10.785H22.8369C23.1454 10.785 23.4412 10.6611 23.6593 10.4405C23.8774 10.2199 23.9999 9.92065 23.9999 9.60865V7.99543L23.99 7.95191C23.7431 6.86983 22.5791 5.52855 18.9239 5.11407C18.8217 5.02859 18.7215 4.9435 18.6227 4.85978C17.9828 4.31766 17.3942 3.81887 16.6766 3.45047C15.7966 2.99893 14.7391 2.7464 13.1454 2.7464H4.22917ZM17.9912 10.3929C17.9912 9.97691 18.1545 9.57795 18.4453 9.2838C18.7361 8.98965 19.1306 8.82439 19.5418 8.82439C19.9531 8.82439 20.3475 8.98965 20.6383 9.2838C20.9291 9.57795 21.0925 9.97691 21.0925 10.3929C21.0925 10.8089 20.9291 11.2079 20.6383 11.502C20.3475 11.7962 19.9531 11.9614 19.5418 11.9614C19.1306 11.9614 18.7361 11.7962 18.4453 11.502C18.1545 11.2079 17.9912 10.8089 17.9912 10.3929ZM7.91196 8.82439C7.5007 8.82439 7.10629 8.98965 6.81549 9.2838C6.52468 9.57795 6.36131 9.97691 6.36131 10.3929C6.36131 10.8089 6.52468 11.2079 6.81549 11.502C7.10629 11.7962 7.5007 11.9614 7.91196 11.9614C8.32322 11.9614 8.71763 11.7962 9.00843 11.502C9.29923 11.2079 9.46261 10.8089 9.46261 10.3929C9.46261 9.97691 9.29923 9.57795 9.00843 9.2838C8.71763 8.98965 8.32322 8.82439 7.91196 8.82439Z">
                                    </path>
                                    <path
                                        d="M0 5.09873C0 4.99473 0.0408428 4.89499 0.113543 4.82146C0.186244 4.74792 0.284847 4.7066 0.387662 4.7066H4.74886C4.85167 4.7066 4.95027 4.74792 5.02297 4.82146C5.09567 4.89499 5.13652 4.99473 5.13652 5.09873C5.13652 5.20273 5.09567 5.30247 5.02297 5.37601C4.95027 5.44955 4.85167 5.49086 4.74886 5.49086H0.387662C0.284847 5.49086 0.186244 5.44955 0.113543 5.37601C0.0408428 5.30247 0 5.20273 0 5.09873ZM15.6836 5.60575C15.7563 5.67929 15.7971 5.77901 15.7971 5.88299C15.7971 5.98697 15.7563 6.08669 15.6836 6.16022L15.6532 6.19101C15.2897 6.55865 14.7968 6.76522 14.2828 6.76528H8.14089C8.03808 6.76528 7.93948 6.72397 7.86678 6.65043C7.79408 6.57689 7.75323 6.47715 7.75323 6.37315C7.75323 6.26915 7.79408 6.16941 7.86678 6.09587C7.93948 6.02234 8.03808 5.98102 8.14089 5.98102H14.2826C14.4354 5.98104 14.5866 5.95063 14.7277 5.89152C14.8688 5.83241 14.997 5.74577 15.105 5.63654L15.1355 5.60575C15.2082 5.53224 15.3068 5.49094 15.4096 5.49094C15.5123 5.49094 15.6109 5.53224 15.6836 5.60575ZM8.52856 14.6079C8.52856 14.5039 8.5694 14.4041 8.6421 14.3306C8.7148 14.257 8.8134 14.2157 8.91622 14.2157H10.5638C10.6666 14.2157 10.7652 14.257 10.8379 14.3306C10.9106 14.4041 10.9514 14.5039 10.9514 14.6079C10.9514 14.7118 10.9106 14.8116 10.8379 14.8851C10.7652 14.9587 10.6666 15 10.5638 15H8.91622C8.8134 15 8.7148 14.9587 8.6421 14.8851C8.5694 14.8116 8.52856 14.7118 8.52856 14.6079ZM11.2422 14.6079C11.2422 14.5039 11.283 14.4041 11.3557 14.3306C11.4284 14.257 11.527 14.2157 11.6298 14.2157H15.991C16.0939 14.2157 16.1925 14.257 16.2652 14.3306C16.3379 14.4041 16.3787 14.5039 16.3787 14.6079C16.3787 14.7118 16.3379 14.8116 16.2652 14.8851C16.1925 14.9587 16.0939 15 15.991 15H11.6298C11.527 15 11.4284 14.9587 11.3557 14.8851C11.283 14.8116 11.2422 14.7118 11.2422 14.6079Z">
                                    </path>
                                </svg>
                                Bán xe ngay
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="mb-100" x-data="{ showHeading: true }">
        <livewire:brand-list />
    </div>

    {{-- Recent Product  --}}
    <livewire:recent-cars />

    <livewire:recent-salon />

    <div class="how-it-work-section style-2 mb-100">
        <div class="container">
            <div class="row mb-50 wow fadeInUp" data-wow-delay="200ms">
                <div class="col-lg-12 d-flex align-items-end justify-content-between gap-3 flex-wrap">
                    <div class="section-title-2">
                        <h3>Bán xe ở Drivco như thế nào?</h3>
                    </div>
                    <div class="video-btn">
                        <a class="" href="{{ route('sellCar') }}"><i class="bi bi-play-circle"></i> Bán xe
                            ngay</a>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp" data-wow-delay="300ms">
                <div class="col-lg-12">
                    <div class="work-process-group">
                        <div class="row justify-content-center g-lg-0 gy-5">
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-work-process text-center">
                                    <div class="step">
                                        <span>01</span>
                                    </div>
                                    <div class="icon">
                                        <img src="images/loaction.svg" alt="">
                                    </div>
                                    <div class="content">
                                        <h6>Đăng Tin Bán Xe</h6>
                                        <p>Bắt đầu bằng việc điền đầy đủ thông tin về chiếc xe của bạn. Hãy mô tả rõ các
                                            đặc điểm, trạng thái kỹ thuật, và lịch sử bảo dưỡng.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-work-process text-center">
                                    <div class="step">
                                        <span>02</span>
                                    </div>
                                    <div class="icon">
                                        <img src="images/contact.svg" alt="">
                                    </div>
                                    <div class="content">
                                        <h6>Tìm Dịch Vụ Phù Hợp</h6>
                                        <p>Dịch vụ đa dạng, hãy lựa chọn gói thích hợp nhất với bạn.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-work-process text-center">
                                    <div class="step">
                                        <span>03</span>
                                    </div>
                                    <div class="icon">
                                        <img src="images/pay.svg" alt="">
                                    </div>
                                    <div class="content">
                                        <h6>Quảng Cáo Hiệu Quả</h6>
                                        <p>Chọn gói quảng cáo phù hợp để đẩy tin xe lên trang đầu, tăng khả năng tiếp
                                            cận với đối tượng mua hàng mục tiêu.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-work-process text-center">
                                    <div class="step">
                                        <span>04</span>
                                    </div>
                                    <div class="icon">
                                        <img src="images/recieve.svg" alt="">
                                    </div>
                                    <div class="content">
                                        <h6>Đến Với Khách Hàng</h6>
                                        <p>Drivco mang sứ mệnh đưa các tin của người bán đến với khách hàng tiềm năng.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="trusted-partner-section mb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sub-title wow fadeInUp" data-wow-delay="200ms">
                        <h3>Đối Tác Tin Cậy</h3>
                        <div class="dash"></div>
                    </div>
                    <div class="partner-slider wow fadeInUp" data-wow-delay="300ms">
                        <div class="marquee_text2">
                            @foreach ($partners as $partner)
                                <img src="{{ asset('storage/' . $partner->logo_url) }}" height="60"
                                    alt="{{ $partner->name }}" loading="lazy">
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="news-section five mb-100">
        <div class="container">
            <div class="row mb-60 wow fadeInUp" data-wow-delay="200ms">
                <div class="col-lg-12 d-flex align-items-end justify-content-between flex-wrap gap-4">
                    <div class="section-title-2">
                        <h3 class="w-100">Tin tức mới nhất</h3>
                        <p>Thông tin mới liên tục cập nhật từ Drivco </p>
                    </div>

                    <a href="{{ route('news.list') }}">Xem tất cả</a>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                @php
                    $wowDelay = 100;
                @endphp
                @foreach ($posts as $post)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" style=""
                        data-wow-delay="{{ $wowDelay + 100 }}ms">
                        <div class="news-card style-2 d-flex flex-column h-100">
                            <div class="news-img" style="flex:1">
                                <a href="{{ route('news.index', $post->slug) }}">
                                    <img src="{{ str_contains($post->thumbnailImage, 'http') ? $post->thumbnailImage : asset('storage/' . $post->thumbnailImage) }}"
                                        alt="{{ $post->title }}" loading="lazy">
                                </a>
                            </div>
                            <div class="content">
                                <h6>
                                    <a class="line-clamp-2"
                                        href="{{ route('news.index', $post->slug) }}">{{ $post->title }}</a>
                                </h6>
                                <p class="line-clamp-2">
                                    {{ $post->summary }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</x-partials.layout-client>
