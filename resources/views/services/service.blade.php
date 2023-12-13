@push('styles')
    <script src="https://kit.fontawesome.com/e3cf320e1f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
@endpush

@section('page_title')
    Dịch vụ của Drivco
@endsection
<x-partials.layout-client>
    <div class="pt-100">
        @include('components.nofication')

        <div class="row text-center pb-100">
            <h2 class="fs-2 text-center">Dịch vụ của chúng tôi</h2>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card h-100 shadow-lg">
                            <div class="card-body">
                                <div class="text-center p-3">
                                    <h5 class="card-title">{{ $service->service_name ? $service->service_name : '' }}
                                    </h5>
                                    {{-- <small>Cá nhân</small> --}}
                                    <br><br>
                                    <span class="h2">{{ $service->price ? number_format($service->price) : '' }}
                                        đ </span>/tháng
                                    <br><br>
                                </div>
                                <p class="card-text">{{ $service->title ? $service->title : '' }}</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                @php
                                    $array = preg_split("/\r\n|\n|\r/", $service->description);
                                @endphp
                                @foreach ($array as $desc)
                                    <li class="list-group-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                            <path
                                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                        </svg>
                                        {{ $desc }}
                                    </li>
                                @endforeach

                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>
                                    <strong>Báo cáo</strong> hiệu quả tin đăng giúp tối ưu vượt bậc chi phí
                                </li>
                            </ul>
                            <div class="card-body text-center">
                                <a href="{{ route('service.detail', $service->id) }}">
                                    <button class="btn btn-outline-primary " style="border-radius:30px">Mua
                                        ngay</button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="service-intro mt-5 mb-5">

            <h2 class="fs-2 text-center">Giới thiệu tính năng</h2>

            <div class="row align-items-start mt-4">
                <div class="col-6 text-end" style="">
                    <img src="https://static.chotot.com/storage/CT_WEB_UNI_SUBSCRIPTION/img/landing_page/motor_intro_2.png"
                        class="" style="max-width: 100%;max-height:500px;object-fit: contain" alt="">
                </div>
                <div class="col-6">
                    <h5 class="text-success fw-bold">Gia tăng độ tiếp cận đến với Khách hàng</h5>
                    <div>
                        <p class="fw-bold">Đẩy tin "thả ga"với giá hời</p>
                        <p>Tăng độ hiển thị đến Khách hàng tiềm năng</p>
                    </div>
                </div>
            </div>

            <div class="row align-items-start mt-4">
                <div class="col-6 text-end">
                    <h5 class="text-success fw-bold">Tiết kiệm tối đa chi phí Quảng bá Xe online</h5>
                    <div>
                        <p class="fw-bold">Tiết kiệm chi phí Đẩy tin</p>
                        <p>Với giá mỗi lượt Đẩy tin giảm 8% - 13% so với giá gốc</p>
                    </div>
                </div>
                <div class="col-6 " style="">
                    <img src="https://static.chotot.com/storage/CT_WEB_UNI_SUBSCRIPTION/img/landing_page/motor_intro_1.png"
                        class="" style="max-width: 100%;max-height:500px;object-fit: contain" alt="">
                </div>
            </div>

            <div class="row align-items-start mt-4">
                <div class="col-6 text-end" style="">
                    <img src="https://static.chotot.com/storage/CT_WEB_UNI_SUBSCRIPTION/img/landing_page/job_intro_4.png"
                        class="" style="max-width: 100%;max-height:500px;object-fit: contain" alt="">
                </div>
                <div class="col-6">
                    <h5 class="text-success fw-bold">Mở rộng nguồn Khách hàng mới</h5>
                    <div>
                        <p class="fw-bold">Mở rộng tệp Khách hàng</p>
                        <p>Tiếp cận thêm 1 nguồn khách hàng thụ động cần được tư vấn</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-partials.layout-client>
