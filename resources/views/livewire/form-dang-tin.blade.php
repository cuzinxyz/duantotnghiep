<div>
    <form method="POST" enctype="multipart/form-data" action="{{ route('sellCar') }}">
        @csrf
        <div class="row g-4 mb-100">
            <div class="col-lg-4">
                <div class="comparea-content">
                    <h6>Thêm hình ảnh</h6>
                </div>
                <div class='wrapper'>
                    <div class="upload">
                        <div class="upload-wrapper">
                            <div class="upload-img">
                                <!-- image here -->
                            </div>
                            <div class="upload-info">
                                <p>
                                    <span class="upload-info-value">0</span> file(s) uploaded.
                                </p>
                            </div>
                            <div class="upload-area">
                                <div class="upload-area-img">
                                    <img src="{{ asset('images/upload.png') }}" alt="">
                                </div>
                                <p class="upload-area-text">Select images or <span>browse</span>.</p>
                            </div>
                            <input name="images[]" type="file" class="visually-hidden" id="upload-input" multiple>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="inquiry-form" style="padding-top: 10px !important;">
                    <div class="row" id="form-sell-1">
                        <div class="col-lg-12 mb-15">
                            <h5>Thông tin xe của bạn</h5>
                        </div>
                        {{-- Hãng xe --}}

                        <div class="col-md-6 mb-20">
                            <div class="form-inner">
                                <label>Hãng xe</label>
                                <select class="nice-select" wire:model.live="brand_select">
                                    <option value="0">-- Chọn hãng xe --</option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-20">
                            <div class="form-inner">
                                <label>Tên xe</label>
                                <select class="nice-select" wire:model="model_cars" name="model_cars">
                                    <option disabled selected>-- Chọn tên xe --</option>
                                    @foreach ($model_cars as $model_car)
                                        <option value="{{ $model_car->id }}">{{ $model_car->model_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        {{-- Tên xe thuộc hãng --}}


                        <div class="col-md-6 mb-20">
                            <div class="form-inner">
                                <label>Hộp số</label>
                                <select class="nice-select" name="transmission">
                                    <option disabled selected>-- Chọn hộp số --</option>
                                    <option value="sotay">Số tay</option>
                                    <option value="sotudong">Số tự động</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 mb-20">
                            <div class="form-inner">
                                <label>Nhiên liệu</label>
                                <select class="nice-select" name="fuel">
                                    <option selected disabled>-- Chọn loại nhiên liệu --</option>
                                    @foreach ($fuels as $fuel)
                                        <option>{{ $fuel }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 mb-20">
                            <div class="form-inner">
                                <label>Số chỗ ngồi</label>
                                <input name="number_of_seats" type="number" placeholder="Nhập số chỗ ngồi">
                            </div>
                        </div>

                        <div class="col-md-6 mb-20">
                            <div class="form-inner">
                                <label>Màu sắc</label>
                                <select class="nice-select" name="color">
                                    <option disabled selected>-- Chọn màu xe --</option>
                                    @foreach ($colors as $color)
                                        <option>{{ $color }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 mb-20">
                            <div class="form-inner">
                                <label>Phiên bản</label>
                                <input type="text" name="version" placeholder="Hãy nhập phiên bản xe (nếu có)">
                            </div>
                        </div>

                        <div class="col-md-6 mb-20">
                            <div class="form-inner">
                                <label>Năm sản xuất</label>
                                <select class="nice-select" name="year_of_manufacture">
                                    <option selected disabled>-- Chọn năm sản xuất
                                        <link rel="stylesheet"
                                            href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
                                            integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ"
                                            crossorigin="anonymous">
                                    </option>
                                    @foreach ($year_of_manufacture as $year)
                                        <option>{{ $year }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-20">
                            <div class="form-inner">
                                <label>Tình trạng</label>
                                <select class="nice-select" name="condition">
                                    <option disabled selected>-- Chọn tình trạng --</option>
                                    <option value="xedaquasudung">Xe đã qua sử dụng</option>
                                    <option value="xemoi">Xe mới</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 mb-20">
                            <div class="form-inner">
                                <label>Số KM đã đi*</label>
                                <input name="mileage_traveled" type="text" placeholder="Nhập số km đã đi">
                            </div>
                        </div>

                        <div class="col-md-6 mb-20">
                            <div class="form-inner">
                                <label>Giá muốn bán*</label>
                                <input name="price" type="text" placeholder="VND">
                            </div>
                        </div>

                        <div class="col-md-6 mb-20">
                            <div class="form-inner">
                                <label>Tiêu đề*</label>
                                <input name="title" type="text" placeholder="Nhập tiêu đề cho bài đăng">
                            </div>
                        </div>

                        <div class="col-md-12 mb-35">
                            <div class="form-inner">
                                <label>Mô tả*</label>
                                <textarea name="description" placeholder="Write somethings"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="inquiry-form" style="margin-top: 40px !important;">
                    <div class="row" id="form-sell-2">
                        <div class="col-lg-12 mb-15">
                            <h5>Thông tin người bán</h5>
                        </div>
                        <div class="col-md-6 mb-20">
                            <div class="form-inner">
                                <label>Họ tên*</label>
                                <input name="name" type="text" placeholder="Họ tên">
                            </div>
                        </div>

                        <div class="col-md-6 mb-20">
                            <div class="form-inner">
                                <label>Số điện thoại*</label>
                                <input name="phone" type="text" placeholder="+880- 123 234 ***">
                            </div>
                        </div>

                        <div class="col-md-6 mb-20">
                            <div class="form-inner">
                                <label>Email (Optional)</label>
                                <input name="email" type="text" placeholder="Email liên hệ">
                            </div>
                        </div>

                        <div class="col-md-6 mb-20">
                            <div class="form-inner">
                                <label>Tỉnh, thành phố</label>
                                <input type="text" name="city" placeholder="Tỉnh/Thành phố">
                            </div>
                        </div>

                        <div class="col-md-6 mb-20">
                            <div class="form-inner">
                                <label>Quận, huyện</label>
                                <input type="text" name="districts" name="Quận/huyện" placeholder="Quận/Huyện">
                            </div>
                        </div>

                        <div class="col-md-6 mb-20">
                            <div class="form-inner">
                                <label>Địa chỉ cụ thể*</label>
                                <input name="full_address" type="text" placeholder="Nhập địa chỉ cụ thể">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-inner">
                                <button class="primary-btn2" type="submit">Hoàn thành</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
