<x-partials.layout-client>
    <div class="product-details-page">
        <div class="container shadow">
            <div class="inner-page-banner ">
                <div class="banner-wrapper">
                    <div class="container-fluid">
                        <ul class="breadcrumb-list d-flex justify-content-between">
                            <li><a href="index.html">Trang chủ</a></li>
                            <li>Quản lý tin mua</li>
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
                    <div class="reviews-area p-3">
                        <div class="row g-lg-4 gy-5">
                            <table class="table table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th>Tiêu đề</th>
                                        <th>Trạng thái</th>
                                        <th>Ngày hiệu lực</th>
                                        <th>Ngày hết hạn</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td><div>
                                            <a href="" class="btn border fw-bolder"><i
                                                    class="bi bi-arrow-counterclockwise"></i> Gia hạn tin</a>
                                            <a href="" class="btn border fw-bolder"><i class="bi bi-pencil"></i> Sửa
                                                tin</a>
                                            <a href="" class="btn border fw-bolder"><i class="bi bi-eye-slash"></i>
                                                Ẩn tin</a>
                                        </div></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-partials.layout-client>
