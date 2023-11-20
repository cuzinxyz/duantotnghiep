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

    {{-- <div class="home5-top-use-car-section mb-100">
        <div class="container">
            <div class="row mb-50 wow fadeInUp" data-wow-delay="200ms">
                <div class="col-lg-12 d-flex align-items-end justify-content-between gap-3 flex-wrap">
                    <div class="section-title-2">
                        <h2>Top Used Cars</h2>
                        <p>To get the most accurate and up-to-date information.</p>
                    </div>
                    <div class="slider-btn-and-exp-btn">
                        <div class="explore-more-btn">
                            <a href="car-deatils.html">Explore More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-xl-3 col-lg-4 col-sm-2 wow fadeInUp" data-wow-delay="200ms">
                    <div class="product-card5">
                        <div class="product-img">
                            <div class="product-price">
                                <span>$7,656.00</span>
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
                                        <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                                    </svg>
                                </div>
                                <div class="product-stand-prev swiper-arrow">
                                    <svg width="8" height="13" viewBox="0 0 8 13"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="swiper product-img-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="images/feature-car-01.png" alt="image">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="images/feature-car-01.png" alt="image">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="images/feature-car-01.png" alt="image">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="images/feature-car-01.png" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="location">
                                <a href="#"><i class="bi bi-geo-alt"></i> Panama City</a>
                            </div>
                            <h6><a href="car-deatils.html">Mercedes-Benz Class-2023</a></h6>
                            <ul class="features">
                                <li>
                                    <img src="images/miles.svg" alt="">
                                    2500 miles
                                </li>
                                <li>
                                    <img src="images/menual.svg" alt="">
                                    Manual
                                </li>
                                <li>
                                    <img src="images/fuel.svg" alt="">
                                    Petrol
                                </li>
                                <li>
                                    <img src="images/electric.svg" alt="">
                                    Electric
                                </li>
                            </ul>
                            <div class="content-btm">
                                <a class="view-btn2" href="car-deatils.html">
                                    <svg width="35" height="21" viewBox="0 0 35 21"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 20C5.47715 20 1 15.7467 1 10.5C1 5.25329 5.47715 1 11 1"
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
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-2 wow fadeInUp" data-wow-delay="300ms">
                    <div class="product-card5">
                        <div class="product-img">
                            <div class="product-price">
                                <span>$7,656.00</span>
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
                                        <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                                    </svg>
                                </div>
                                <div class="product-stand-prev swiper-arrow">
                                    <svg width="8" height="13" viewBox="0 0 8 13"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="swiper product-img-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="images/feature-car-02.png" alt="image">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="images/feature-car-02.png" alt="image">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="images/feature-car-02.png" alt="image">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="images/feature-car-02.png" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="location">
                                <a href="#"><i class="bi bi-geo-alt"></i> Panama City</a>
                            </div>
                            <h6><a href="car-deatils.html">Nissan Altima S-2022</a></h6>
                            <ul class="features">
                                <li>
                                    <img src="images/miles.svg" alt="">
                                    2500 miles
                                </li>
                                <li>
                                    <img src="images/menual.svg" alt="">
                                    Automatic
                                </li>
                                <li>
                                    <img src="images/fuel.svg" alt="">
                                    Petrol
                                </li>
                                <li>
                                    <img src="images/electric.svg" alt="">
                                    Electric
                                </li>
                            </ul>
                            <div class="content-btm">
                                <a class="view-btn2" href="car-deatils.html">
                                    <svg width="35" height="21" viewBox="0 0 35 21"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 20C5.47715 20 1 15.7467 1 10.5C1 5.25329 5.47715 1 11 1"
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
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-2 wow fadeInUp" data-wow-delay="400ms">
                    <div class="product-card5">
                        <div class="product-img">
                            <div class="product-price">
                                <span>$7,656.00</span>
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
                                        <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                                    </svg>
                                </div>
                                <div class="product-stand-prev swiper-arrow">
                                    <svg width="8" height="13" viewBox="0 0 8 13"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="swiper product-img-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="images/feature-car-03.png" alt="image">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="images/feature-car-03.png" alt="image">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="images/feature-car-03.png" alt="image">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="images/feature-car-03.png" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="location">
                                <a href="#"><i class="bi bi-geo-alt"></i> Panama City</a>
                            </div>
                            <h6><a href="car-deatils.html">Hyundai Sonata-2022</a></h6>
                            <ul class="features">
                                <li>
                                    <img src="images/miles.svg" alt="">
                                    2500 miles
                                </li>
                                <li>
                                    <img src="images/menual.svg" alt="">
                                    Manual
                                </li>
                                <li>
                                    <img src="images/fuel.svg" alt="">
                                    Petrol
                                </li>
                                <li>
                                    <img src="images/electric.svg" alt="">
                                    Electric
                                </li>
                            </ul>
                            <div class="content-btm">
                                <a class="view-btn2" href="car-deatils.html">
                                    <svg width="35" height="21" viewBox="0 0 35 21"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 20C5.47715 20 1 15.7467 1 10.5C1 5.25329 5.47715 1 11 1"
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
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-2 wow fadeInUp" data-wow-delay="500ms">
                    <div class="product-card5">
                        <div class="product-img">
                            <div class="product-price">
                                <span>$7,656.00</span>
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
                                        <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                                    </svg>
                                </div>
                                <div class="product-stand-prev swiper-arrow">
                                    <svg width="8" height="13" viewBox="0 0 8 13"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="swiper product-img-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="images/feature-car-04.png" alt="image">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="images/feature-car-04.png" alt="image">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="images/feature-car-04.png" alt="image">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="images/feature-car-04.png" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="location">
                                <a href="#"><i class="bi bi-geo-alt"></i> Panama City</a>
                            </div>
                            <h6><a href="car-deatils.html">Tesla Model S-2023</a></h6>
                            <ul class="features">
                                <li>
                                    <img src="images/miles.svg" alt="">
                                    2500 miles
                                </li>
                                <li>
                                    <img src="images/menual.svg" alt="">
                                    Automatic
                                </li>
                                <li>
                                    <img src="images/fuel.svg" alt="">
                                    Petrol
                                </li>
                                <li>
                                    <img src="images/electric.svg" alt="">
                                    Electric
                                </li>
                            </ul>
                            <div class="content-btm">
                                <a class="view-btn2" href="car-deatils.html">
                                    <svg width="35" height="21" viewBox="0 0 35 21"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 20C5.47715 20 1 15.7467 1 10.5C1 5.25329 5.47715 1 11 1"
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
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="home5-upcomming-car-section pt-90 pb-90 mb-100">
        <div class="container">
            <div class="row mb-50 wow fadeInUp" data-wow-delay="200ms">
                <div class="col-lg-12 d-flex align-items-end justify-content-between gap-3 flex-wrap">
                    <div class="section-title-2">
                        <h2>Upcoming Cars</h2>
                        <p>To get the most accurate and up-to-date information.</p>
                    </div>
                    <div class="slider-btn-group2 d-flex align-items-center justify-content-between">
                        <div class="slider-btn prev-51">
                            <svg width="9" height="15" viewBox="0 0 8 13"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                            </svg>
                        </div>
                        <div class="slider-btn next-51">
                            <svg width="9" height="15" viewBox="0 0 8 13"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp" data-wow-delay="300ms">
                <div class="col-lg-12">
                    <div class="swiper home5-fetured-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="product-card5 two">
                                    <div class="product-img">
                                        <div class="product-price">
                                            <span>$7,656.00</span>
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
                                                    <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                                                </svg>
                                            </div>
                                            <div class="product-stand-prev swiper-arrow">
                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="swiper product-img-slider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="images/feature-car-01.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="images/feature-car-01.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="images/feature-car-01.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="images/feature-car-01.png" alt="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h6><a href="car-deatils.html">Mercedes-Benz Class-2023</a></h6>
                                        <div class="exp-date">
                                            <p>Expected Date <span>02 April, 2023</span></p>
                                        </div>
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
                                                View Details
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-card5 two">
                                    <div class="product-img">
                                        <div class="product-price">
                                            <span>$7,656.00</span>
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
                                                    <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                                                </svg>
                                            </div>
                                            <div class="product-stand-prev swiper-arrow">
                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="swiper product-img-slider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="images/feature-car-02.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="images/feature-car-02.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="images/feature-car-02.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="images/feature-car-02.png" alt="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h6><a href="car-deatils.html">Nissan Altima S-2022</a></h6>
                                        <div class="exp-date">
                                            <p>Expected Date <span>02 April, 2023</span></p>
                                        </div>
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
                                                View Details
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-card5 two">
                                    <div class="product-img">
                                        <div class="product-price">
                                            <span>$7,656.00</span>
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
                                                    <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                                                </svg>
                                            </div>
                                            <div class="product-stand-prev swiper-arrow">
                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="swiper product-img-slider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="images/feature-car-03.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="images/feature-car-03.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="images/feature-car-03.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="images/feature-car-03.png" alt="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h6><a href="car-deatils.html">Hyundai Sonata-2022</a></h6>
                                        <div class="exp-date">
                                            <p>Expected Date <span>02 April, 2023</span></p>
                                        </div>
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
                                                View Details
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-card5 two">
                                    <div class="product-img">
                                        <div class="product-price">
                                            <span>$7,656.00</span>
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
                                                    <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                                                </svg>
                                            </div>
                                            <div class="product-stand-prev swiper-arrow">
                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="swiper product-img-slider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="images/feature-car-04.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="images/feature-car-04.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="images/feature-car-04.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="images/feature-car-04.png" alt="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h6><a href="car-deatils.html">Tesla Model S-2023</a></h6>
                                        <div class="exp-date">
                                            <p>Expected Date <span>02 April, 2023</span></p>
                                        </div>
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
                                                View Details
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-card5 two">
                                    <div class="product-img">
                                        <div class="product-price">
                                            <span>$7,656.00</span>
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
                                                    <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                                                </svg>
                                            </div>
                                            <div class="product-stand-prev swiper-arrow">
                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="swiper product-img-slider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="images/feature-car-01.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="images/feature-car-01.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="images/feature-car-01.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="images/feature-car-01.png" alt="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h6><a href="car-deatils.html">Mercedes-Benz Class-2023</a></h6>
                                        <div class="exp-date">
                                            <p>Expected Date <span>02 April, 2023</span></p>
                                        </div>
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
                                                View Details
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-card5 two">
                                    <div class="product-img">
                                        <div class="product-price">
                                            <span>$7,656.00</span>
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
                                                    <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                                                </svg>
                                            </div>
                                            <div class="product-stand-prev swiper-arrow">
                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="swiper product-img-slider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="images/feature-car-02.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="images/feature-car-02.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="images/feature-car-02.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="images/feature-car-02.png" alt="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h6><a href="car-deatils.html">Nissan Altima S-2022</a></h6>
                                        <div class="exp-date">
                                            <p>Expected Date <span>02 April, 2023</span></p>
                                        </div>
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
                                                View Details
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-card5 two">
                                    <div class="product-img">
                                        <div class="product-price">
                                            <span>$7,656.00</span>
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
                                                    <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                                                </svg>
                                            </div>
                                            <div class="product-stand-prev swiper-arrow">
                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="swiper product-img-slider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="images/feature-car-03.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="images/feature-car-03.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="images/feature-car-03.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="images/feature-car-03.png" alt="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h6><a href="car-deatils.html">Hyundai Sonata-2022</a></h6>
                                        <div class="exp-date">
                                            <p>Expected Date <span>02 April, 2023</span></p>
                                        </div>
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
                                                View Details
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-card5 two">
                                    <div class="product-img">
                                        <div class="product-price">
                                            <span>$7,656.00</span>
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
                                                    <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                                                </svg>
                                            </div>
                                            <div class="product-stand-prev swiper-arrow">
                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="swiper product-img-slider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="images/feature-car-04.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="images/feature-car-04.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="images/feature-car-04.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="images/feature-car-04.png" alt="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h6><a href="car-deatils.html">Tesla Model S-2023</a></h6>
                                        <div class="exp-date">
                                            <p>Expected Date <span>02 April, 2023</span></p>
                                        </div>
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
                                                View Details
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

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
            <div class="row g-4 justify-content-between">
                @php
                    $wowDelay = 100;
                @endphp
                @foreach ($posts as $post)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" style="flex: 1"
                        data-wow-delay="{{ $wowDelay + 100 }}ms">
                        <div class="news-card style-2 d-flex flex-column h-100">
                            <div class="news-img" style="flex:1">
                                <a href="{{ route('news.index', $post->slug) }}"><img
                                        src="{{ asset('storage/' . $post->thumbnailImage) }}" alt=""></a>
                                {{-- <div class="date">
                                <a href="blog-standard.html">Buying Advice</a>
                            </div> --}}
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
