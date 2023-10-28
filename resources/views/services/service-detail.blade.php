@push('styles')
    <link rel="stylesheet" href="{{ asset('css/payment.css') }}">
@endpush

<x-partials.layout-client>
    <div class="mt-3">
        <!-- content -->
        <div class="payment container d-flex justify-content-center">
            <div class="box-1 bg-light user">
                <div class="box-inner-1 pb-3 mb-3 ">
                    <div class="d-flex justify-content-between mb-3 userdetails">
                        <p class="fw-bold">Thanh toán: {{ $serv->service_name }}</p>
                        <p class="fw-lighter"><span style="color: green;" class="fas fa-dollar-sign"></span>{{ $serv->price }}+</p>
                    </div>
                    <div id="my" class="carousel slide carousel-fade img-details" data-bs-ride="carousel"
                        data-bs-interval="2000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://images.pexels.com/photos/100582/pexels-photo-100582.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                                    class="d-block w-100 rounded">
                            </div>
                        </div>
                    </div>
                    <p class="dis info my-3">{{ $serv->title }}
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
            <div class="box-2">
                <div class="box-inner-2">
                    <div>
                        <p class="fw-bold">Payment Details</p>
                        <p class="dis mb-3">Complete your purchase by providing your payment details</p>
                    </div>
                    {{-- <form action=""> --}}
                        <div class="mb-3">
                            <p class="dis fw-bold mb-2">Email address</p>
                            <input class="form-control" type="email" value="luke@skywalker.com">
                        </div>
                        <div>
                            <p class="dis fw-bold mb-2">Card details</p>
                            <div class="d-flex align-items-center justify-content-between card-atm border rounded">
                                <div class="fab fa-cc-visa ps-3"></div>
                                <input type="text" class="form-control" placeholder="Card Details">
                                <div class="d-flex w-50">
                                    <input type="text" class="form-control px-0" placeholder="MM/YY">
                                    <input type="password" maxlength=3 class="form-control px-0" placeholder="CVV">
                                </div>
                            </div>
                            <div class="my-3 cardname">
                                <p class="dis fw-bold mb-2">Cardholder name</p>
                                <input class="form-control" type="text">
                            </div>
                            <div class="address">
                                <p class="dis fw-bold mb-3">Billing address</p>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected hidden>United States</option>
                                    <option value="1">India</option>
                                    <option value="2">Australia</option>
                                    <option value="3">Canada</option>
                                </select>
                                <div class=" my-3">
                                    <p class="dis fw-bold mb-2">VAT Number</p>
                                    <div class="inputWithcheck">
                                        <input class="form-control" type="text" value="GB012345B9">
                                        <span class="fas fa-check"></span>

                                    </div>
                                </div>
                                <div class="d-flex flex-column dis">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <p>Subtotal</p>
                                        <p><span class="fas fa-dollar-sign"></span>33.00</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <p>VAT<span>(20%)</span></p>
                                        <p><span class="fas fa-dollar-sign"></span>2.80</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <p class="fw-bold">Total</p>
                                        <p class="fw-bold"><span class="fas fa-dollar-sign"></span>35.80</p>
                                    </div>

                                    <form action="{{ route('payment-vnpay') }}" method="POST">
                                      @csrf
                                      <input hidden="" name="id_service" value="{{$serv->id}}">
                                      <input hidden="" name="total_price" value="{{$serv->price}}">
                                      <button type="submit" class="btn btn-primary mt-2">Pay<span
                                              class="fas fa-dollar-sign px-1"></span>{{ $serv->price }}
                                      </button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    {{-- </form> --}}
                </div>
            </div>
        </div>
        <!-- content end -->
    </div>
</x-partials.layout-client>
