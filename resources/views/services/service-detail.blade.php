@push('styles')
    <link rel="stylesheet" href="{{ asset('css/payment.css') }}">
@endpush

@section('page_title')
    {{ $serv->service_name ? $serv->service_name . ' - Drivco' : 'Drivco' }}
@endsection
<x-partials.layout-client>
    <div class="mb-5">
        <!-- content -->
        <div class="pt-5 pb-3 text-center">
            @if (auth()->user()->service_id != 0 && auth()->user()->expired_date >= \Carbon\Carbon::now())
                <div class="alert alert-primary" role="alert">
                    Chỉ được phép mua 1 gói tin, nếu đã mua gói trước đó, bạn cần phải chờ hết hạn của dịch vụ trước đó.
                </div>
            @endif

            <span class="ms-2">
                {!! auth()->user()->service_id != 0 && auth()->user()->expired_date >= \Carbon\Carbon::now()
                    ? 'Bạn đang đăng ký dịch vụ: <strong>' .
                        auth()->user()->service->service_name .
                        '</strong> - còn: <strong>' .
                        \DB::table('purchased_service')->where('user_id', auth()->id())->orderBy('expired_date', 'desc')->first()->remaining_push .
                        '</strong> lượt đẩy!'
                    : 'Bạn chưa đăng ký dịch vụ' !!}
            </span>
        </div>
        <form action="{{ route('payment-vnpay', $serv->id) }}" method="POST" id="paymentService" novalidate>
            <div class="row mx-auto payment container d-flex justify-content-center gap-3">
                <div class="col-md-6 col-sm-12 box-1 bg-light user">
                    <div class="box-inner-1 pb-3 mb-3 ">
                        <div class="d-flex justify-content-between my-3 userdetails">
                            <span class="fw-bold">Mua gói: {{ $serv->service_name }}</span>
                            <span class="fw-bold fs-6">{{ number_format($serv->price) }} đ</span>
                        </div>
                        <div id="my" class="carousel slide carousel-fade img-details" data-bs-ride="carousel"
                            data-bs-interval="2000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('images/motor_intro_2.png') }}" class="d-block w-100 rounded">
                                </div>
                            </div>
                        </div>
                        <p class="dis info my-3">{{ $serv->title }}</p>
                        <div class="radiobtn">
                            <input type="radio" name="payment-method" value="vnpay" required id="one">
                            <input type="radio" name="payment-method" value="balance" required id="two">
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
                <div class="col-md-6 col-sm-12 box-2">
                    <div class="box-inner-2">
                        <div>
                            <div>
                                <p class="fw-bold fs-4">{{ $serv->service_name }}</p>
                                @php
                                    $descArr = preg_split("/\r\n|\n|\r/", $serv->description);
                                @endphp
                                @foreach ($descArr as $desc)
                                    <p class="dis mb-3">
                                        <i class="bi bi-patch-check"></i> {{ $desc }} <br>
                                    </p>
                                    <p>
                                        <i class="bi bi-patch-check"></i> <strong>Báo cáo</strong> hiệu quả tin đăng
                                        giúp tối ưu vượt bậc chi phí
                                    </p>
                                @endforeach
                            </div>

                            <div class="mt-4">
                                <p class="dis">
                                    <span class="fw-bold">Thành tiền:</span>
                                    <span class="fs-5">{{ number_format($serv->price) }} đ</span>
                                </p>
                            </div>
                        </div>

                        <div>
                            @csrf
                            <button type="submit" id="payNow" class="w-100 btn btn-primary mt-2">Thanh toán ngay
                            </button>
                        </div>

                        <div class="text-danger validate mt-3 fw-bold fs-6"></div>
                    </div>
                </div>
            </div>
        </form>
        <!-- content end -->
    </div>
    @push('scripts')
        <script>
            $(document).ready(function() {
                $("#paymentService").on("submit", function(e) {
                    e.preventDefault();

                    var selectedPaymentMethod = $("input[name=payment-method]:checked").val();

                    if (!selectedPaymentMethod) {
                        $(".validate").text("Vui lòng chọn phương thức thanh toán");
                    } else {
                        $(".validate").text("");
                        console.log('success');
                        // $("#paymentService").submit();
                        e.target.submit()
                    }
                });
            });
        </script>
    @endpush
</x-partials.layout-client>
