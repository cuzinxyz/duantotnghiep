@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <link rel="stylesheet" href="{{ asset('css/payment.css') }}">
@endpush

@section('page_title')
    Yêu cầu rút tiền - Drivco
@endsection
<x-partials.layout-client>
    <div class="my-3 contact-page">
        @include('components.nofication')
        <!-- content -->
        <div class="payment container d-flex flex-column gap-2 inquiry-form my-4">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-8 col-sm-12 d-flex justify-content-center">
                    <form action="{{ route('withdraw.submit') }}" method="POST" id="form-recharge" class="w-100">

                        @csrf

                        <div class="box-1 bg-light user">
                            <div class="box-inner-1 py-2 mb-3 ">
                                <div class="d-flex justify-content-between userdetails">
                                    <p class="fw-bold">Rút tiền: </p>
                                    <p class="fw-normal text-capitalize"><span style="color: red;"><i
                                                class="bi bi-person-circle"></i></span> {{ auth()->user()->name }} </p>
                                </div>
                                <div class="py-2 text-center">Số dư hiện tại: <span
                                        class="fw-bold">{{ number_format(auth()->user()->account_balence) }}</span>
                                </div>


                                <div class="row" style="margin: 24px 0">
                                    <div class="col-lg-6" style="margin-bottom: 20px">
                                        <div class="form-inner">
                                            <label for="">Ngân hàng *</label>
                                            <select name="bank_name" class="form-select select2">
                                                <option value="">Lựa chọn ngân hàng nhận tiền</option>
                                                @foreach ($dataAPI['data'] as $data)
                                                    <option value="{{ $data['shortName'] }}">
                                                        {{ $data['name'] }} ({{ $data['shortName'] }})
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6" style="margin-bottom: 20px">
                                        <div class="form-inner">
                                            <label for="">Số tài khoản *</label>
                                            <input type="text" name="bank_number" placeholder="Nhập số tài khoản">
                                        </div>
                                    </div>

                                    <div class="col-lg-6" style="margin-bottom: 20px">
                                        <div class="form-inner">
                                            <label for="">Số tiền muốn rút *</label>
                                            <input type="text" name="bank_price" placeholder="Nhập số tiền muốn rút">
                                        </div>
                                    </div>

                                    <div class="col-lg-6" style="margin-bottom: 20px">
                                        <div class="form-inner">
                                            <label for="">Tên chủ tài khoản *</label>
                                            <input type="text" name="username" oninput="unaccentedString(this)"
                                                placeholder="Nhập tên chủ tài khoản">
                                        </div>
                                    </div>

                                </div>

                                <div class="w-100 mb-3">
                                    <button id="recharge-btn"
                                        class="w-100 primary-btn2 btn-dark1 justify-content-center">Rút tiền
                                    </button>
                                </div>

                            </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- content end -->
    </div>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <script>
            function unaccentedString(inputElement) {
                let chuoiKhongDau = inputElement.value
                    .normalize('NFD')
                    .replace(/[\u0300-\u036f]/g, '');

                let chuoiInHoa = chuoiKhongDau.toUpperCase();
                inputElement.value = chuoiInHoa;
            }

            $(document).ready(function() {
                $('.select2').select2({
                    theme: "bootstrap-5",
                    width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
                        'style',
                    placeholder: $(this).data('placeholder'),
                });

                $('#form-recharge').validate({
                    rules: {
                        bank_name: {
                            required: true,
                        },
                        bank_number: {
                            required: true,
                            number: true,
                            minlength: 8,
                            maxlength: 15
                        },
                        bank_price: {
                            required: true,
                            number: true
                        },
                        bank_username: {
                            required: true,
                        },
                    },
                    messages: {
                        bank_name: {
                            required: 'Vui lòng chọn ngân hàng',
                        },
                        bank_number: {
                            required: 'Vui lòng nhập số tài khoản',
                            number: 'Số tài khoản phải là số',
                            minlength: 'Số tài khoản không hợp lệ',
                            maxlength: 'Số tài khoản không hợp lệ',
                        },
                        bank_price: {
                            required: 'Vui lòng nhập số tiền muốn rút',
                            number: 'Số tiền muốn rút phải là số',
                        },
                        bank_username: {
                            required: 'Vui lòng nhập tên chủ tài khoản',
                        },

                    },
                    errorElement: 'span',
                    errorPlacement: function(error, element) {
                        error.addClass('invalid-feedback');
                        element.closest('.form-inner').append(error);
                    },
                    highlight: function(element, errorClass, validClass) {
                        $(element).addClass('is-invalid');
                    },
                    unhighlight: function(element, errorClass, validClass) {
                        $(element).removeClass('is-invalid');
                    },
                });
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
