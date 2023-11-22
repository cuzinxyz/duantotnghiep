<div>
    {{-- <x-partials.layout-client> --}}
    <div class="banner">
        <div class="container pricing-container">
            <div class="row justify-content-center">
                @if (isset($succeed))
                    <div class="p3 bg-green-300 text-green-700">
                        {{ $succeed }}
                    </div>
                @elseif (isset($error))
                    <div class="p3 bg-green-300 text-green-700">
                        {{ $error }}
                    </div>
                @endif
                @foreach ($services as $service)
                    <div wire:key="{{ $service->id }}" class="col-lg-3 col-sm-6 mb-5">
                        <div class="pricing-card">
                            <h2>{{ $service->service_name }}</h2>
                            <span class="price">{{ $service->price }}</span>
                            <span class="donvi">VNĐ/ Tháng</span>
                            <p>Giải pháp tiết kiệm cho Người bán nhỏ lẻ.</p>
                            <ul>
                                <li>{{ json_decode($service->description) }}
                            </ul>
                        </div>
                        {{-- @if (isset($error))
                            {{ $error }}
                        @else
                            {{ $succeed }}
                        @endif --}}
                        <button wire:model="" wire:click="buy({{ $service->id }})" class="btn btn-success btn1">Mua
                            ngay</button>
                    </div>
                @endforeach
                {{-- <div class="col-lg-3 col-sm-6">
                    <div class="pricing-card">
                        <h2>Gói Tiêu Chuẩn</h2>
                        <span class="price">1.400k</span>
                        <span class="donvi">VNĐ/ Tháng</span>
                        <p>Giải pháp tối ưu cho Người bán nhỏ lẻ.</p>
                        <ul>
                            <li><i class="fa-solid fa-check"></i> 65 lượt Đẩy Tin cho mọi Tin đăng bán Xe</li>
                            <li><i class="fa-solid fa-check"></i> 5 Tin Mới</li>
                            <li><i class="fa-solid fa-check"></i> Báo cáo hiệu quả tin đăng giúp tối ưu vượt bậc
                                chi phí</li>
                        </ul>
                    </div>
                    <button class="btn btn-success btn2">Mua ngay</button>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="pricing-card">
                        <h2>Gói Chuyên Nghiệp</h2>
                        <span class="price">2.690k</span>
                        <span class="donvi">VNĐ/ Tháng</span>
                        <p>Giải pháp toàn diện cho Người bán chuyên.</p>
                        <ul>
                            <li> <i class="fa-solid fa-check"></i> 128 lượt Đẩy Tin cho mọi Tin đăng bán Xe</li>
                            <li><i class="fa-solid fa-check"></i> 8 Tin Mới</li>
                            <li><i class="fa-solid fa-check"></i> Báo cáo hiệu quả tin đăng giúp tối ưu vượt bậc
                                chi phí</li>
                            <li><i class="fa-solid fa-check"></i> Hệ thống quản lí Khách hàng giúp ‘tiết lộ’ tất cả
                                Khách hàng quan tâm đến Tin đăng</li>
                        </ul>

                    </div>
                    <button class="btn btn-success btn3">Mua ngay</button>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="pricing-card">
                        <h2>Gói Vip</h2>
                        <span class="price">3.750k</span>
                        <span class="donvi">VNĐ/ Tháng</span>
                        <p>Giải pháp toàn diện cho Người bán chuyên.</p>
                        <ul>
                            <li> <i class="fa-solid fa-check"></i> 190 lượt Đẩy Tin cho mọi Tin đăng bán Xe</li>
                            <li> <i class="fa-solid fa-check"></i> 10 Tin Mới</li>
                            <li> <i class="fa-solid fa-check"></i> Báo cáo hiệu quả tin đăng giúp tối ưu vượt bậc
                                chi phí</li>
                            <li> <i class="fa-solid fa-check"></i> Hệ thống quản lí Khách hàng giúp ‘tiết lộ’ tất
                                cả Khách hàng quan tâm đến Tin đăng</li>
                            <li> <i class="fa-solid fa-check"></i> Chat tự động giúp phản hồi Khách hàng nhanh
                                chóng</li>
                        </ul>
                    </div>
                    <button class="btn btn-success btn4">Mua ngay</button>
                </div> --}}
            </div>
        </div>
    </div>

    <div class="container content">
        <div class="row title">
            <h1>Giới thiệu tính năng</h1>
            <p>Khám phá tiện ích của gói Pro</p>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <img class="banner1"src="https://lambanner.com/wp-content/uploads/2016/09/lambanner-ky-thuat-thiet-ke-banner-1130x570.png"
                    alt="">
            </div>
            <div class="col-lg-6 col-md-6 ">
                <h4 class="text1">Gia tăng độ tiếp cận đến với khách hàng</h4>
                <h5 class="text2">Đẩy tin "thả ga"với giá hời</h5>
                <h7>Tăng độ hiển thị đến Khách hàng tiềm năng</h7>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-6  ">
                <h4 class="text3">Tiết kiệm tối đa chi phí Quảng bá Xe online</h4>
                <h5 class="text4">Tiết kiệm chi phí Đẩy tin</h5>
                <h6 class="text5">Với giá mỗi lượt Đẩy tin giảm 8% - 13% so với giá gốc</h6><br>
                <h5 class="text4">Tiết kiệm chi phí làm Nổi Bật tin đăng</h5>
                <h6 class="text5">Gấp đôi diện tích hiển thị của Tin đăng với giá dịch vụ giảm đến 30%</h6>
            </div>
            <div class="col-lg-6 col-md-6">
                <img class="banner2"
                    src="https://img.pikbest.com/backgrounds/20190924/flat-and-simple-driving-school-city-background_1904040.jpg!bw700"
                    alt="">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-6">
                <img class="banner1"
                    src="https://lambanner.com/wp-content/uploads/2016/09/lambanner_dich-vu-thiet-ke-banner-1130x570.png"
                    alt="">
            </div>
            <div class="col-lg-6 col-md-6 content1">
                <h4 class="text1">Theo dõi sát sao hiệu quả tin đăng</h4>
                <h5 class="text2">Cập nhật hiệu quả tin đăng theo ngày</h5>
                <h6 style="font-weight: 400;">Nắm bắt chi tiết số lượt quan tâm đến Tin đăng trong Gói "Bán Xe Tiết
                    Kiệm" qua Báo cáo Hiệu suất</h6><br>
                <h5 class="text2">Giúp so sánh hiệu quả và đưa ra quyết định</h5>
                <h6 style="font-weight: 400;">Dễ dàng theo dõi và so sánh độ hiệu quả của những hành vi quảng bá
                    với Tin đăng</h6>
            </div>
        </div>

        <div class="row">

            <div class="col-lg-6 col-md-6 content1">
                <h4 class="text3">Mở rộng nguồn Khách hàng mới</h4>
                <h5 class="text4">Mở rộng tệp Khách hàng</h5>
                <h6 style="margin-left: 200px;">Tiếp cận thêm 1 nguồn khách hàng thụ động cần được tư vấn</h6><br>
                <h5 class="text4">Quản lí thông tin Khách hàng hiệu quả</h5>
                <h6 class="text5">Dễ dàng theo dõi và chăm sóc Khách hàng trong từng giai đoạn, nhờ vào Hệ thống
                    quản lí Khách hàng</h6>
            </div>
            <div class="col-lg-6 col-md-6">
                <img class="banner2" src="https://vinads.vn/wp-content/uploads/2019/01/z2.png" alt="">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-6">
                <img class="banner1"
                    src="https://lambanner.com/wp-content/uploads/2017/03/lambanner-thiet-ke-banner-xe-hoi.jpg"
                    alt="">
            </div>
            <div class="col-lg-6 col-md-6 content1">
                <h4 class="text1">Gia tăng diện tích hiển thị với Khách hàng</h4>
                <h5 style="font-weight: 600;">Tin đăng tăng gấp đôi diện tích hiển thị và nổi bật hơn</h5>
                <h6 style="font-weight: 400;">Giúp Khách hàng thấy được sản phẩm của bạn dễ hơn</h6>
            </div>
        </div>
    </div>
    {{-- </x-partials.layout-client> --}}

</div>
