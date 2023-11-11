@push('styles')
    <link rel="stylesheet" href="{{ asset('css/payment.css') }}">
@endpush

<x-partials.layout-client>
    <div class="mt-3">
        <!-- content -->
        <div class="payment container d-flex flex-column gap-2" style="width: fit-content">
            <div class="box-1 bg-light user">
                <div class="box-inner-1 py-2 mb-3 ">
                    <div class="d-flex justify-content-between userdetails">
                        <p class="fw-bold">Nạp tiền vào tài khoản: </p>
                        <p class="fw-lighter text-capitalize"><span style="color: green;"><i class="bi bi-person-circle"></i></span> {{ auth()->user()->name }} </p>
                    </div>
                    <div class="py-2 text-center">Số dư hiện tại: <span class="fw-bold">{{ number_format(auth()->user()->account_balence) }}</span></div>
                    <p class="dis info my-3">
                    </p>
                    <div class="radiobtn">
                        <input type="radio" name="box" id="one">
                        <input type="radio" name="box" id="two">
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
                                        <img width="50" height="50" src="{{ asset('images/vnpay.jpg') }}"
                                            alt="">
                                    </span>
                                    <span>hướng dẫn tải về và thanh toán</span>
                                </div>
                            </div>
                        </label>
                        <label for="two" class="box py-2 second">
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
                        </label>
                    </div>
                </div>
            </div>

            <div class="box-2 bg-light">
                <a href="">
                    <div class="recharge-item font-agbalumo">
                        Nạp 1.000.000 <i class="bi bi-cash-coin"></i>
                    </div>
                </a>
                <a href="">
                    <div class="recharge-item font-agbalumo">
                        Nạp 10.000.000 <i class="bi bi-cash-coin"></i>
                    </div>
                </a>
                <a href="">
                    <div class="recharge-item font-agbalumo">
                        Nạp 100.000.000 <i class="bi bi-cash-coin"></i>
                    </div>
                </a>
                <a href="">
                    <div class="recharge-item font-agbalumo">
                        Nạp 1.000.000.000 <i class="bi bi-cash-coin"></i>
                    </div>
                </a>
            </div>
        </div>
        <!-- content end -->
    </div>
</x-partials.layout-client>
