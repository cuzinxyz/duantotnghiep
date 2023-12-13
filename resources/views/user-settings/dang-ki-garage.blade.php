@push('styles')
    <link rel="stylesheet" href="{{ asset('css/payment.css') }}">
@endpush

<x-partials.layout-client>
    <div class="my-3">
        @include('components.nofication')
        <!-- content -->
        <div class="payment container d-flex flex-column gap-2">
            <div class="row">
                <div class="col-12">
                    <div class="text-slider2 w-100" style="background: #fff">
                        {{-- @dd(\App\Models\Service::all()) --}}
                        <div class="marquee_service text-black">
                            @foreach (\App\Models\Service::all() as $service)
                                <div class="marquee_service-item">
                                    <img src="{{ asset('images/car.svg') }}" alt="">
                                    <span class="fw-lighter">{{ $service->service_name }}</span> -
                                    {{ number_format($service->price) }}
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-8 col-sm-12 d-flex justify-content-center">
                    <form action="{{ route('recharge.submit') }}" method="POST" id="form-recharge" class="w-100">

                        @csrf

                        <div class="box-1 bg-light user">
                            <div class="box-inner-1 py-2 mb-3 ">
                                <div class="d-flex justify-content-between userdetails">
                                    <p class="fw-bold">Nạp tiền vào tài khoản: </p>
                                    <p class="fw-normal text-capitalize"><span style="color: red;"><i
                                                class="bi bi-person-circle"></i></span> {{ auth()->user()->name }} </p>
                                </div>
                                <div class="py-2 text-center">Số dư hiện tại: <span
                                        class="fw-bold">{{ number_format(auth()->user()->account_balence) }}</span>
                                </div>
                                <div class="radiobtn">
                                    <input type="radio" id="one" checked>
                                    {{-- <input type="radio" id="two"> --}}
                                    <label for="one" class="box py-2 first">
                                        <div class="d-flex align-items-start">
                                            <span class="circle"></span>
                                            <div class="course">
                                                <div class="d-flex align-items-center justify-content-between mb-2">
                                                    <span class="fw-bold">
                                                        Thanh toán qua VNPay
                                                    </span>
                                                </div>
                                                <span>
                                                    <img width="50" height="50"
                                                        src="{{ asset('images/vnpay.jpg') }}" alt="">
                                                </span>
                                                <span>hướng dẫn tải về và thanh toán</span>
                                            </div>
                                        </div>
                                    </label>
                                    {{-- <label for="two" class="box py-2 second">
                                        <div class="d-flex">
                                            <span class="circle"></span>
                                            <div class="course">
                                                <div class="d-flex align-items-center justify-content-between mb-2">
                                                    <span class="fw-bold">
                                                        Thanh toán trực tiếp
                                                    </span>
                                                </div>
                                                <span>Thanh toán bằng số dư có trong tài khoản</span>
                                            </div>
                                        </div>
                                    </label> --}}
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="fw-bold lh-base" for="price">Cách 1</label>
                                <div class="col-md-6 col-sm-12">
                                    <div class="options-recharge-money">
                                        <div class="custom-radio">
                                            <input type="radio" id="radio-1" value="100000" name="money">
                                            <label class="radio-label" for="radio-1">
                                                <div class="radio-circle"></div>
                                                <span class="radio-text">Nạp 100.000</span>
                                            </label>
                                            <input type="radio" id="radio-2" value="200000" name="money">
                                            <label class="radio-label" for="radio-2">
                                                <div class="radio-circle"></div>
                                                <span class="radio-text">Nạp 200.000</span>
                                            </label>
                                            <input type="radio" id="radio-3" value="300000" name="money">
                                            <label class="radio-label" for="radio-3">
                                                <div class="radio-circle"></div>
                                                <span class="radio-text">Nạp 300.000</span>
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="options-recharge-money">
                                        <div class="custom-radio">
                                            <input type="radio" id="radio-4" value="400000" name="money">
                                            <label class="radio-label" for="radio-4">
                                                <div class="radio-circle"></div>
                                                <span class="radio-text">Nạp 400.000</span>
                                            </label>
                                            <input type="radio" id="radio-5" value="500000" name="money">
                                            <label class="radio-label" for="radio-5">
                                                <div class="radio-circle"></div>
                                                <span class="radio-text">Nạp 500.000</span>
                                            </label>
                                            <input type="radio" id="radio-6" value="600000" name="money">
                                            <label class="radio-label" for="radio-6">
                                                <div class="radio-circle"></div>
                                                <span class="radio-text">Nạp 600.000</span>
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-link" type="reset">reset</button>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="fw-bold lh-base" for="other">Cách 2</label>
                                <input id="other" class="w-100 py-1 px-2 rounded-2" type="number"
                                    name="other-money" placeholder="ex: 100000">
                            </div>

                            <div class="w-100 mb-3">
                                <button id="recharge-btn"
                                    class="w-100 primary-btn2 btn-dark1 justify-content-center">Nạp tiền
                                    ngay</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- content end -->
    </div>

    @push('scripts')
        <script>
            const form = document.querySelector('#form-recharge');
            // console.log(document.querySelector('#form-recharge'));
            form.addEventListener("submit", (e) => {
                // Ngăn chặn submit mặc định
                e.preventDefault();
                // Kiểm tra xem có input nào được chọn
                const checkedRadio = document.querySelector('input[name="money"]:checked');
                const otherValue = document.getElementById('other').value;
                if (checkedRadio || otherValue) {
                    // Nếu có 1 input được chọn thì cho phép submit
                    e.target.submit();
                } else {
                    // Ngược lại thông báo lỗi
                    alert('Vui lòng chọn 1 trong 2 phương thức nạp tiền!');
                }
            });

            $(".marquee_service").marquee({
                direction: "left",
                duration: 25000,
                gap: 15,
                delayBeforeStart: 1,
                startVisible: true,
            });
        </script>
    @endpush
</x-partials.layout-client>
