@push('styles')
    <link rel="stylesheet" href="{{ asset('css/payment-history.css') }}">
@endpush

@section('page_title')
    Lịch sử hoạt động - Drivco
@endsection
<x-partials.layout-client>

    <div class="container-xl px-4 mt-4">
        <!-- Account page navigation-->
        <nav class="nav nav-borders">
            <a href="{{ url()->previous() }}"><i class="bi bi-caret-left"></i> trở lại trang trước</a>
        </nav>
        <hr class="mt-0 mb-4">
        <div class="row">
            <div class="col-lg-4 mb-4">
                <!-- Billing card 1-->
                <div class="card h-100 border-start-lg border-start-primary">
                    <div class="card-body">
                        <div class="small text-muted">Số dư hiện tại</div>
                        <div class="h3">{{ number_format($currentBalance) }}₫</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <!-- Billing card 2-->
                <div class="card h-100 border-start-lg border-start-secondary">
                    <div class="card-body">
                        <div class="small text-muted">Số tiền đã sử dụng</div>
                        <div class="h3">{{ number_format($moneySpending) }}₫</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <!-- Billing card 3-->
                <div class="card h-100 border-start-lg border-start-success">
                    <div class="card-body">
                        <div class="small text-muted">Tổng tiền đã nạp</div>
                        <div class="h3 d-flex align-items-center">{{ number_format($totalAmount) }}₫</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Payment methods card-->
        <div class="card card-header-actions mb-4">
            <div class="card-header">
                Lịch sử thanh toán dịch vụ
            </div>
            <div class="card-body px-0">
                <div class="table-responsive table-billing-history text-center">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th class="border-gray-200" scope="col">Tên gói</th>
                                <th class="border-gray-200" scope="col">Giá</th>
                                <th class="border-gray-200" scope="col">Mô tả</th>
                                <th class="border-gray-200" scope="col">Thời gian sử dụng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($billHistories as $value)
                                <tr>
                                    <td>
                                        <span class="badge bg-success">
                                            {{ $value->service_name }}
                                        </span>
                                        <br>
                                        @if ($value->title)
                                            ({{ $value->title }})
                                        @endif
                                    </td>
                                    <td>{{ number_format($value->price) }}₫</td>
                                    <td>
                                        @php
                                            $string = $value->description;
                                            $newString = str_replace(' \n', '<br>', $string);
                                            echo $newString;
                                        @endphp
                                    </td>
                                    <td>{{ $value->expiration_date }} ngày</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Billing history card-->
        <div class="card mb-4">
            <div class="card-header">Lịch sử nạp tiền</div>
            <div class="card-body p-0">
                <!-- Billing history table-->
                <div class="table-responsive table-billing-history text-center">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th class="border-gray-200" scope="col">Mã giao dịch</th>
                                <th class="border-gray-200" scope="col">Ngày</th>
                                <th class="border-gray-200" scope="col">Số tiền</th>
                                <th class="border-gray-200" scope="col">Trạng thái</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($depositHistory as $value)
                                <tr>
                                    <td>#{{ $value->id }}</td>
                                    @php
                                        $dateString = $value->created_at;
                                        $dateTime = new DateTime($dateString);
                                        $formattedDate = $dateTime->format('d/m/Y H:i:s');
                                    @endphp
                                    <td>{{ $formattedDate }}</td>
                                    <td>{{ number_format($value->amount) }}₫</td>
                                    <td><span class="badge bg-success text-dark">Thành công</span></td>
                                    {{-- <td><span class="badge bg-success">Paid</span></td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Rút tiền --}}
        <div class="card mb-4">
            <div class="card-header">Lịch sử rút tiền</div>
            <div class="card-body p-0">
                <!-- Billing history table-->
                <div class="table-responsive table-billing-history text-center">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th class="border-gray-200" scope="col">Mã giao dịch</th>
                                <th class="border-gray-200" scope="col">Ngày</th>
                                <th class="border-gray-200" scope="col">Số tiền</th>
                                <th class="border-gray-200" scope="col">Trạng thái</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($withDrawHistory as $value)
                                <tr>
                                    <td>#{{ $value->id }}</td>
                                    @php
                                        $dateString = $value->created_at;
                                        $dateTime = new DateTime($dateString);
                                        $formattedDate = $dateTime->format('d/m/Y H:i:s');
                                    @endphp
                                    <td>{{ $formattedDate }}</td>
                                    <td>{{ number_format($value->amount) }}₫</td>
                                    <td><span class="badge bg-success text-dark">Thành công</span></td>
                                    {{-- <td><span class="badge bg-success">Paid</span></td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-partials.layout-client>
