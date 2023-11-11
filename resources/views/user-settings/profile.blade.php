<x-partials.layout-client>
    @if (session('status'))
        <p class="bg-success py-4">
            {{ session('status') }}
        </p>
    @endif
    <div class="product-details-page">
        <div class="container shadow">
            <div class="inner-page-banner ">
                <div class="banner-wrapper">
                    <div class="container-fluid">
                        <ul class="breadcrumb-list d-flex justify-content-between">
                            <li><a href="index.html">Trang chủ</a></li>
                            <div class="d-flex align-items-center p-1 rounded-pill" style="background-color: #f4f4f4;">
                                <img src="/images/whatsnew.svg" alt="Có gì mới" style="width: 1rem; height: 1rem;">
                                <span class="ms-2">Có gì mới</span>
                            </div>
                        </ul>
                        <div class="row mt-5">
                            <div class="col-lg-12 d-flex align-items-center justify-content-between flex-wrap gap-4 mb-4">
                                <div class="section-title-2 d-flex align-items-center gap-2">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('storage/' . auth()->user()->avatar) }}"
                                            class="rounded-circle object-fit-cover shadow" style="width: 50px;height:50px"
                                            alt="avatar">
                                        <p class="fw-bolder ms-2 text-capitalize">{{ auth()->user()->name }}</p>
                                    </div>

                                    <div class="d-flex align-items-center p-1 rounded-pill"
                                        style="background-color: #f4f4f4;">
                                        <img src="/images/goi-pro.svg" alt="Có gì mới"
                                            style="width: 1rem; height: 1rem;">
                                        <span class="ms-2">{{ auth()->user()->service->service_name }}</span>
                                    </div>

                                </div>
                                <div class="d-flex align-items-center p-1 rounded" style="background-color: #f4f4f4;">
                                    <img src="/images/dongTot.svg" alt="Đồng Tốt" style="width: 1rem; height: 1rem;">
                                    <span class="fw-bolder mx-2">Số dư:
                                        {{ number_format(auth()->user()->account_balence) }}</span>
                                    <i class="bi bi-plus-square-fill"></i>
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
                            aria-selected="false">Đang Hiển Thị (1)</button>
                        <button class="nav-link" id="v-pills-2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2"
                            type="button" role="tab" aria-controls="v-pills-2" aria-selected="true">Hết hạn
                            (0)</button>
                        <button class="nav-link" id="v-pills-3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-3"
                            type="button" role="tab" aria-controls="v-pills-3" aria-selected="true">Bị Từ Chối
                            (0)</button>
                        <button class="nav-link" id="v-pills-4-tab" data-bs-toggle="pill" data-bs-target="#v-pills-4"
                            type="button" role="tab" aria-controls="v-pills-4" aria-selected="true">Cần Thanh Toán
                            (0)</button>
                        <button class="nav-link" id="v-pills-5-tab" data-bs-toggle="pill" data-bs-target="#v-pills-5"
                            type="button" role="tab" aria-controls="v-pills-5" aria-selected="true">Tin Nháp
                            (0)</button>
                        <button class="nav-link" id="v-pills-6-tab" data-bs-toggle="pill" data-bs-target="#v-pills-6"
                            type="button" role="tab" aria-controls="v-pills-6" aria-selected="true">Chờ duyệt
                            (0)</button>
                        <button class="nav-link" id="v-pills-7-tab" data-bs-toggle="pill" data-bs-target="#v-pills-7"
                            type="button" role="tab" aria-controls="v-pills-7" aria-selected="true">Đã ẩn
                            (0)</button>
                        <a href="{{ route('paymentHistory') }}">
                            <button class="nav-link" type="button">Lịch sử nạp tiền</button>
                        </a>
                    </div>
                    <div class="tab-content tab-content2" id="v-pills-tabContent2">
                        <div class="tab-pane fade active show" id="v-pills-1" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">
                            <div class="reviews-area">
                                <div class="row g-lg-4 gy-5">
                                    <div class="col-lg-7">

                                        @if ($cars->isEmpty())
                                            <p class="text-secondary text-uppercase">
                                                <i class="bi bi-recycle"></i> Bạn chưa đăng tin nào cả!
                                            </p>
                                        @else
                                            @foreach ($cars as $car)
                                                <div class="profile-car-item">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-5 col-sm-6">
                                                            <img class="rounded"
                                                                src="{{ asset('storage/' . $car->verhicle_image_library[0]) }}"
                                                                alt="{{ $car->title }}">
                                                        </div>
                                                        <div class="col-lg-8 col-md-7 col-sm-6">
                                                            <div class="author-and-review">
                                                                <div class="author-name-deg">
                                                                    <h6>{{ $car->title }}</h6>
                                                                </div>
                                                                <div>
                                                                    <p class="fw-bolder text-danger">
                                                                        {{ number_format($car->price) }} đ</p>
                                                                </div>
                                                            </div>
                                                            <p class="text-primary fs-6 font-weight-light">
                                                                {{ $car->brand->brand_name }} -
                                                                {{ $car->brand->models->model_name }}
                                                            </p>
                                                            <div class="replay-btn">
                                                                <span class="text-secondary">Ngày đăng: </span>
                                                                <span>{{ $car->created_at->diffForHumans() }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="d-flex justify-content-between align-items-center my-3">
                                                        <div>
                                                            <input type="checkbox" name="" id="">
                                                            <label for="">Chọn tin</label>
                                                        </div>
                                                        <div>
                                                            <a href="{{ route('day-tin', $car->id) }}"
                                                                class="btn border fw-bolder"><i
                                                                    class="bi bi-arrow-counterclockwise"></i> Đẩy
                                                                tin</a>
                                                            <a href="" class="btn border fw-bolder"><i
                                                                    class="bi bi-pencil"></i> Sửa
                                                                tin</a>
                                                            <a href="" class="btn border fw-bolder"><i
                                                                    class="bi bi-eye-slash"></i>
                                                                Ẩn tin</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="v-pills-2" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab">
                            <p>1</p>
                        </div>
                        <div class="tab-pane fade" id="v-pills-3" role="tabpanel"
                            aria-labelledby="v-pills-common-tab">
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
</x-partials.layout-client>
