@push('styles')
    <script src="https://kit.fontawesome.com/e3cf320e1f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
@endpush

<x-partials.layout-client>
    <div class="pt-100">
        <div class="row text-center pb-100">
            <h1 class="text-uppercase fs-1">Dịch vụ của chúng tôi</h1>
        </div>
        <div class="row">

            <div class="col-lg-4 col-md-12 mb-4">
                <div class="card h-100 shadow-lg">
                    <div class="card-body">
                        <div class="text-center p-3">
                            <h5 class="card-title">Gói Cơ Bản</h5>
                            <small>Cá nhân</small>
                            <br><br>
                            <span class="h2">100.000 đ </span>/tháng
                            <br><br>
                        </div>
                        <p class="card-text">Giải pháp tiết kiệm cho Người bán nhỏ lẻ.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                <path
                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                            </svg>
                            Lượt đăng tin lên tới <strong>10</strong> tin
                        </li>
                        <li class="list-group-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                <path
                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                            </svg>
                            Miễn phí <strong>1</strong> lượt đẩy tin
                        </li>
                    </ul>
                    <div class="card-body text-center">
                        <a href="{{ route('service.detail', 1) }}">
                          <button class="btn btn-outline-primary " style="border-radius:30px">Mua ngay</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 mb-4">
                <div class="card h-100 shadow-lg">
                    <div class="card-body">
                        <div class="text-center p-3">
                            <h5 class="card-title">Gói Tiêu Chuẩn</h5>
                            <small>Đề xuất</small>
                            <br><br>
                            <span class="h2">300.000 đ </span>/tháng
                            <br><br>
                        </div>
                        <p class="card-text">Giải pháp tiết kiệm cho hộ kinh doanh.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                <path
                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                            </svg>
                            Lượt đăng tin lên tới <strong>20</strong> tin
                        </li>
                        <li class="list-group-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                <path
                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                            </svg>
                            Miễn phí <strong>5</strong> lượt đẩy tin
                        </li>
                    </ul>
                    <div class="card-body text-center">
                        <a href="{{ route('service.detail', 2) }}">
                          <button class="btn btn-outline-primary " style="border-radius:30px">Mua ngay</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 mb-4">
                <div class="card h-100 shadow-lg">
                    <div class="card-body">
                        <div class="text-center p-3">
                            <h5 class="card-title">Gói Chuyên Nghiệp</h5>
                            <small>Doanh nghiệp</small>
                            <br><br>
                            <span class="h2">500.000 đ </span>/tháng
                            <br><br>
                        </div>
                        <p class="card-text">Giải pháp toàn diện cho Người bán chuyên.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                <path
                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                            </svg>
                            Lượt đăng tin lên tới <strong>50</strong> tin
                        </li>
                        <li class="list-group-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                <path
                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                            </svg>
                            Miễn phí <strong>15</strong> lượt đẩy tin
                        </li>
                    </ul>
                    <div class="card-body text-center">
                        <a href="{{ route('service.detail', 3) }}">
                          <button class="btn btn-outline-primary " style="border-radius:30px">Mua ngay</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-partials.layout-client>
