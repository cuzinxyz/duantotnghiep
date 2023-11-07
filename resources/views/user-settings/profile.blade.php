<x-partials.layout-client>
    <div class="product-details-page">
        <div class="container shadow">
            <div class="inner-page-banner ">
                <div class="banner-wrapper">
                    <div class="container-fluid">
                        <ul class="breadcrumb-list d-flex justify-content-between">
                            <li><a href="index.html">Trang chủ</a></li>
                            <li>Quản lý tin</li>
                            <div class="d-flex align-items-center p-1 rounded-pill" style="background-color: #f4f4f4;">
                                <img src="/images/whatsnew.svg" alt="Có gì mới" style="width: 1rem; height: 1rem;">
                                <span class="ms-2">Có gì mới</span>
                            </div>
                        </ul>
                        <div class="row">
                            <div class="col-lg-12 d-flex align-items-center flex-wrap gap-4 my-2">
                                <span class="fw-bolder">Lối tắt</span>
                                <div class="d-flex align-items-center p-1 rounded-pill"
                                    style="background-color: #f4f4f4;">
                                    {{-- <a href=""> --}}
                                        <img src="/images/goi-pro.svg" alt="Có gì mới"
                                            style="width: 1rem; height: 1rem;">
                                        <span class="ms-2">Gói PRO</span>
                                    {{-- </a> --}}
                                </div>
                                <div class="d-flex align-items-center p-1 rounded-pill"
                                    style="background-color: #f4f4f4;">
                                    {{-- <a href=""> --}}
                                        <i class="bi bi-people-fill"></i>
                                        <span class="ms-2">Danh sách liên hệ</span>
                                    {{-- </a> --}}
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex align-items-end justify-content-between flex-wrap gap-4 mb-4">
                                <div class="section-title-2 d-flex align-items-center">
                                    <img src="/images/author-01.png" class="rounded-circle" alt="avatar">
                                    <p class="fw-bolder ms-2">Tom Cat</p>
                                </div>
                                <div class="d-flex align-items-center p-1 rounded" style="background-color: #f4f4f4;">
                                    <img src="/images/dongTot.svg" alt="Đồng Tốt" style="width: 1rem; height: 1rem;">
                                    <span class="fw-bolder mx-2">Số dư: 0</span>
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
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <img src="images/product-img-02.png" alt="" width="260px" ;
                                                    height="260px">
                                            </div>
                                            <div class="">
                                                <div class="author-and-review">
                                                    <div class="author-name-deg">
                                                        <h6>Sirius Fi Yamaha 2018 Đen Xám 90%</h6>
                                                    </div>
                                                    <div>
                                                        <p class="fw-bolder text-danger">10.000.000đ</p>
                                                    </div>
                                                </div>
                                                <p class="text-secondary fs-6 text">Xã Lam Điền, Huyện Chương Mỹ, Hà Nội</p>
                                                <div class="replay-btn">
                                                    <span class="text-secondary">Ngày đăng tin: </span><span>05 June, 2023</span>
                                                </div>
                                                <div class="replay-btn">
                                                    <span class="text-secondary">Ngày hết hạn: </span><span>05 June, 2023</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between my-3">
                                            <div>
                                                <input type="checkbox" name="" id="">
                                                <label for="">Chọn tin</label>
                                            </div>
                                            <div>
                                                <a href="{{ route('day-tin') }}" class="btn border fw-bolder"><i
                                                        class="bi bi-arrow-counterclockwise"></i> Đẩy tin</a>
                                                <a href="" class="btn border fw-bolder"><i class="bi bi-pencil"></i> Sửa
                                                    tin</a>
                                                <a href="" class="btn border fw-bolder"><i class="bi bi-eye-slash"></i>
                                                    Ẩn tin</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="review-form">

                                        </div>
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
