<x-partials.layout-client>

    <x-homepage.banner :$banners :$mark />

    <x-homepage.featured-cars :cars="$featured_cars" />

    <div class="pt-100 mb-100" x-data="{ showHeading : true }">
        <livewire:brand-list />
    </div>

    <div class="home5-why-drivco-area pt-90 pb-90 mb-100">
        <div class="container">
            <div class="row g-lg-4 gy-5">
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="drivco-content">
                        <div class="section-title-2 mb-60 wow fadeInUp" data-wow-delay="200ms">
                            <h2>Tại sao là Drivco?</h2>
                            <p>Để có được thông tin chính xác và cập nhật nhất.</p>
                        </div>
                        <div class="drivco-featute">
                            <ul>
                                <li class="single-feature wow fadeInUp" data-wow-delay="300ms">
                                    <div class="feature-icon">
                                        <img src="images/safe.svg" alt="icon">
                                    </div>
                                    <div class="feature-content">
                                        <h5>Mua hàng an toàn</h5>
                                        <p>Các sản phẩm mua hàng an toàn thường được biết đến với chất lượng và độ tin
                                            cậy cao.</p>
                                    </div>
                                </li>
                                <li class="single-feature wow fadeInUp" data-wow-delay="400ms">
                                    <div class="feature-icon">
                                        <img src="images/warranty.svg" alt="icon">
                                    </div>
                                    <div class="feature-content">
                                        <h5>Đa Dạng Xe Ô Tô Cũ</h5>
                                        <p>Duyệt qua danh sách đa dạng với nhiều thương hiệu và mẫu xe ô tô cũ đảm bảo
                                            chất lượng và độ tin cậy.</p>
                                    </div>
                                </li>
                                <li class="single-feature wow fadeInUp" data-wow-delay="500ms">
                                    <div class="feature-icon">
                                        <img src="images/hassle.svg" alt="icon">
                                    </div>
                                    <div class="feature-content">
                                        <h5>Chăm Sóc Khách Hàng 24/7</h5>
                                        <p>Đội ngũ chăm sóc khách hàng chuyên nghiệp sẵn sàng hỗ trợ bạn mọi lúc, mọi
                                            nơi.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-lg-end justify-content-center">
                    <div class="drivco-img wow zoomIn" data-wow-delay="400ms">
                        <img src="images/why-drivco.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Recommend Product  --}}
    <div class="browse-used-car-section mb-100">
        <div class="container">
            <div class="row mb-50 wow fadeInUp" data-wow-delay="200ms">
                <div class="col-lg-12">
                    <div class="section-title-2 text-center">
                        <h2>Browse Used Car </h2>
                        <p>There has 30+ Brand Category Available </p>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp" data-wow-delay="300ms">
                <div class="col-lg-12">
                    <div class="browse-car-filter-area">
                        <ul class="nav nav-tabs" id="myTab3" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="popular-tab" data-bs-toggle="tab"
                                    data-bs-target="#popular" type="button" role="tab" aria-controls="popular"
                                    aria-selected="true">Popular</button>
                            </li>
                            {{-- <li class="nav-item" role="presentation">
                                <button class="nav-link" id="fuel-type-tab" data-bs-toggle="tab"
                                    data-bs-target="#fuel-type" type="button" role="tab" aria-controls="fuel-type"
                                    aria-selected="false">Mercedes</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="transmission-tab" data-bs-toggle="tab"
                                    data-bs-target="#transmission" type="button" role="tab"
                                    aria-controls="transmission" aria-selected="false">Toyota</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="seating-capacity-tab" data-bs-toggle="tab"
                                    data-bs-target="#seating-capacity" type="button" role="tab"
                                    aria-controls="seating-capacity" aria-selected="false">Mitsubishi</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="doors-tab" data-bs-toggle="tab" data-bs-target="#doors"
                                    type="button" role="tab" aria-controls="doors"
                                    aria-selected="false">Tata</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="steering-side-tab" data-bs-toggle="tab"
                                    data-bs-target="#steering-side" type="button" role="tab"
                                    aria-controls="steering-side" aria-selected="false">Mazda</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="premium-car-tab" data-bs-toggle="tab"
                                    data-bs-target="#premium-car" type="button" role="tab"
                                    aria-controls="premium-car" aria-selected="false"><img
                                        src="assets/img/home2/icon/premium.svg" alt> Premium Car</button> --}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content" id="myTab3Content">
                        <div class="tab-pane fade show active" id="popular" role="tabpanel"
                            aria-labelledby="popular-tab">
                            <div class="row justify-content-center g-4">

                                @php
                                    $wowDelayRecommend = 100;
                                @endphp
                                @foreach ($cars as $car)

                                <div class="col-xl-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="{{ $wowDelayRecommend + 100 }}ms">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="{{ asset('storage/'.$car->verhicle_image_library[0]) }}" alt="{{ $car->title }}">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="{{ route('brand.detail') }}"><img style="max-width: 40px;max-height:40px;object-fit:contain"
                                                        src="{{ asset('storage/'.$car->brand->logo_url) }}" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>{{ number_format($car->price) . ' đ' }}</strong>
                                            </div>
                                            <h6><a href="{{ route('car-detail', $car->slug) }}">{{ $car->title }}</a></h6>
                                        </div>
                                    </div>
                                </div>

                                @endforeach
                            </div>
                        </div>
                        {{-- <div class="tab-pane fade" id="fuel-type" role="tabpanel" aria-labelledby="fuel-type-tab">
                            <div class="row justify-content-center g-4">
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-01.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/mercedes-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$32,445.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Mercedes-Benz-2023</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-02.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/mercedes-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$65,543.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Mercedes A Class</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-03.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/mercedes-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$78,432.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Mercedes-Benz C-Class</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-04.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/mercedes-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$22,765.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Mercedes-Benz G-Class</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-05.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/mercedes-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$44,745.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Mercedes-Benz GLE</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-06.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/mercedes-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$23,445.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Mercedes-Benz CLA</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-07.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/mercedes-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$32,445.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Mercedes-Benz EQB</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-08.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/mercedes-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$65,665.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Mercedes-Benz S-Class</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="transmission" role="tabpanel"
                            aria-labelledby="transmission-tab">
                            <div class="row justify-content-center g-4">
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-01.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/toyota-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$32,445.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Toyota Camry</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-02.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/toyota-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$65,543.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Toyota Prius</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-03.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/toyota-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$78,432.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Toyota Fortuner</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-04.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/toyota-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$22,765.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Toyota 4Runner</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-05.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/toyota-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$44,745.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Toyota Land Cruiser</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-06.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/toyota-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$23,445.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Toyota HiAce</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-07.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/toyota-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$32,445.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Toyota Avanza</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-08.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/toyota-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$65,665.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Toyota Tundra</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="seating-capacity" role="tabpanel"
                            aria-labelledby="seating-capacity-tab">
                            <div class="row justify-content-center g-4">
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-01.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/mitsubishi-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$32,445.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Mitsubishi Lancer</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-02.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/mitsubishi-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$65,543.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Montero Sport</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-03.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/mitsubishi-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$78,432.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Mitsubishi Triton</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-04.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/mitsubishi-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$22,765.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Mitsubishi Pajero</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-05.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/mitsubishi-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$44,745.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Mitsubishi Mirage</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-06.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/mitsubishi-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$23,445.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Xpander</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-07.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/mitsubishi-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$32,445.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Mitsubishi i-MiEV</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-08.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/mitsubishi-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$65,665.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Mitsubishi Mirage G4</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="doors" role="tabpanel" aria-labelledby="doors-tab">
                            <div class="row justify-content-center g-4">
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-01.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/tata-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$32,445.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Tata Punch</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-02.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/tata-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$65,543.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Tata Safari</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-03.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/tata-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$78,432.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Tata Altroz</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-04.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/tata-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$22,765.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Tata Harrier</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-05.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/tata-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$44,745.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Tata Tiago</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-06.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/tata-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$23,445.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">TATA Nexon EV</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-07.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/tata-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$32,445.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Tata Zest</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-08.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/tata-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$65,665.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">TATA Tiago EV</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="steering-side" role="tabpanel"
                            aria-labelledby="steering-side-tab">
                            <div class="row justify-content-center g-4">
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-01.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/mazda-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$32,445.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Mazda Mazda5</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-02.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/mazda-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$65,543.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Mazda BT-50</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-03.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/mazda-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$78,432.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">2018 Mazda Mazda3</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-04.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/mazda-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$22,765.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Mazda MX-30</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-05.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/mazda-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$44,745.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Mazda CX-8</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-06.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/mazda-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$23,445.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Mazda CX-5-2023</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-07.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/mazda-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$32,445.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Mazda MX-5</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-08.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/mazda-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$65,665.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Mazda3</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="premium-car" role="tabpanel"
                            aria-labelledby="premium-car-tab">
                            <div class="row justify-content-center g-4">
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-01.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/mercedes-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$32,445.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Mercedes-Benz-2023</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-02.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/volkswagen-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$65,543.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Hyundai Sonata-2022</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-03.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/toyota-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$78,432.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Toyota Camry-2022</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-04.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/mitsubishi-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$22,765.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Nissan Altima-2023</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-05.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/tata-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$44,745.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Porsche 911-2022</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-06.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/mazda-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$23,445.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Mazda CX-5-2023</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-07.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/suziki-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$32,445.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Nissan Altima S-2022</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-card2 two">
                                        <div class="product-img">
                                            <img src="assets/img/home2/used-car-08.png" alt="img">
                                        </div>
                                        <div class="product-content">
                                            <div class="company-logo">
                                                <a href="single-brand-category.html"><img
                                                        src="assets/img/home2/icon/audi-2.svg" alt></a>
                                            </div>
                                            <div class="price">
                                                <strong>$65,665.00</strong>
                                            </div>
                                            <h6><a href="car-deatils.html">Audi A4-2023</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="how-it-work-section style-2 mb-100">
        <div class="container">
            <div class="row mb-50 wow fadeInUp" data-wow-delay="200ms">
                <div class="col-lg-12 d-flex align-items-end justify-content-between gap-3 flex-wrap">
                    <div class="section-title-2">
                        <h2>Hoạt động như thế nào?</h2>
                        {{-- <p>Quy trình mua bán của chú</p> --}}
                    </div>
                    <div class="video-btn">
                        <a class="video-popup"
                            href="{{ route('sellCar') }}"><i
                                class="bi bi-play-circle"></i> Bán xe ngay</a>
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
                                        <p>Bắt đầu bằng việc điền đầy đủ thông tin về chiếc xe của bạn. Hãy mô tả rõ các đặc điểm, trạng thái kỹ thuật, và lịch sử bảo dưỡng.</p>
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
                                        <p>Chọn gói quảng cáo phù hợp để đẩy tin xe lên trang đầu, tăng khả năng tiếp cận với đối tượng mua hàng mục tiêu.</p>
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
                                        <p>Drivco mang sứ mệnh đưa các tin của người bán đến với khách hàng tiềm năng.</p>
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
                        <h6>Đối Tác Tin Cậy</h6>
                        <div class="dash"></div>
                    </div>
                    <div class="partner-slider wow fadeInUp" data-wow-delay="300ms">
                        <div class="marquee_text2">
                            @foreach ($partners as $partner)
                                <img src="{{ asset('storage/'.$partner->logo_url) }}" alt="{{ $partner->name }}" style="min-height: 60px;width:auto;">
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
                        <h2>Latest Car Advice</h2>
                        <p>Here are some of the featured cars in different categories</p>
                    </div>
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
                                    <img
                                        src="{{ str_contains($post->thumbnailImage, 'http') ? $post->thumbnailImage : asset('storage/' . $post->thumbnailImage) }}" alt="">
                                    </a>
                            </div>
                            <div class="content">
                                <h6>
                                    <a href="{{ route('news.index', $post->slug) }}">{{ $post->title }}</a>
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
