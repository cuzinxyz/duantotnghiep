<div>
    <form wire:submit="saveCar" enctype="multipart/form-data">
        <div class="row g-4 mb-100">
            <div class="col-lg-4">
                <div class="comparea-content">
                    <h6>Thêm hình ảnh</h6>
                </div>
                <div class='wrapper'>
                    <div class="uploadBox">
                        <div>
                            <input type="file" multiple wire:model="image_library">
                            {{-- <div id="drag-drop-area"></div> --}}
                        </div>
                        @error('image_library.*')
                            <span class="error">{{ $message }}</span>
                        @enderror
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
                            <div>
                                @error('brand_select')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-20">
                            <div class="form-inner">
                                <label>Tên xe</label>
                                <select name="model" class="nice-select" wire:model="model_select">
                                    <option value="0">-- Chọn model --</option>

                                    @foreach ($models as $model)
                                        <option>{{ $model->model_name }}</option>
                                    @endforeach
                                </select>
                                <div>
                                    @error('model_select')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>

                        {{-- Tên xe thuộc hãng --}}


                        <div class="col-md-6 mb-20">
                            <div class="form-inner">
                                <label>Hộp số</label>
                                <select class="nice-select" wire:model="transmission">
                                    <option value="0">-- Chọn hộp số --</option>
                                    <option value="Sotay">Số tay</option>
                                    <option value="Sotudong">Số tự động</option>
                                </select>
                            </div>
                            <div>
                                @error('transmission')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6 mb-20">
                            <div class="form-inner">
                                <label>Nhiên liệu</label>
                                <select class="nice-select" wire:model="fuel">
                                    <option value="0">-- Chọn loại nhiên liệu --</option>
                                    @foreach ($fuels as $fuel)
                                        <option>{{ $fuel }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                @error('fuel')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6 mb-20">
                            <div class="form-inner">
                                <label>Số chỗ ngồi</label>
                                <input wire:model="number_of_seats" type="number" placeholder="Nhập số chỗ ngồi">
                            </div>
                            <div>
                                @error('number_of_seats')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6 mb-20">
                            <div class="form-inner">
                                <label>Màu sắc</label>
                                <select class="nice-select" wire:model="color">
                                    <option value="0">-- Chọn màu xe --</option>
                                    @foreach ($colors as $color)
                                        <option>{{ $color }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                @error('color')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6 mb-20">
                            <div class="form-inner">
                                <label>Phiên bản</label>
                                <input name="version" type="text" wire:model="version" placeholder="Hãy nhập phiên bản xe (nếu có)">
                            </div>
                            <div>
                                @error('version')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6 mb-20">
                            <div class="form-inner">
                                <label>Năm sản xuất</label>
                                <select name="year_of_manufacture" class="nice-select" wire:model="year_of_manufacture">
                                    <option value="0">-- Chọn năm sản xuất
                                        <link rel="stylesheet"
                                            href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
                                            integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ"
                                            crossorigin="anonymous">
                                    </option>
                                    @foreach ($years as $year)
                                        <option>{{ $year }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                @error('year_of_manufacture')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-20">
                            <div class="form-inner">
                                <label>Tình trạng</label>
                                <select class="nice-select" wire:model="condition">
                                    <option value="0">-- Chọn tình trạng --</option>
                                    <option value="xedaquasudung">Xe đã qua sử dụng</option>
                                    <option value="xemoi">Xe mới</option>
                                </select>
                            </div>
                            <div>
                                @error('condition')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6 mb-20">
                            <div class="form-inner">
                                <label>Số KM đã đi*</label>
                                <input wire:model="mileage_traveled" type="text" placeholder="Nhập số km đã đi">
                            </div>
                            <div>
                                @error('mileage_traveled')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6 mb-20">
                            <div class="form-inner">
                                <label>Giá muốn bán*</label>
                                <input wire:model="price" type="text" placeholder="VND">
                            </div>
                            <div>
                                @error('price')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6 mb-20">
                            <div class="form-inner">
                                <label>Tiêu đề*</label>
                                <input wire:model="title" type="text" placeholder="Nhập tiêu đề cho bài đăng">
                            </div>
                            <div>
                                @error('title')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12 mb-35">
                            <div class="form-inner">
                                <label>Mô tả*</label>
                                <textarea wire:model="description" placeholder="Write somethings"></textarea>
                            </div>
                            <div>
                                @error('description')
                                    {{ $message }}
                                @enderror
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
                                <input wire:model="name" type="text" placeholder="Họ tên">
                            </div>
                            <div>
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6 mb-20">
                            <div class="form-inner">
                                <label>Số điện thoại*</label>
                                <input wire:model="phone" type="text" placeholder="+880- 123 234 ***">
                            </div>
                            <div>
                                @error('phone')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6 mb-20">
                            <div class="form-inner">
                                <label>Email (Optional)</label>
                                <input wire:model="email" type="text" placeholder="Email liên hệ">
                            </div>
                            <div>
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6 mb-20">
                            <div class="form-inner">
                                <label>Tỉnh, thành phố</label>
                                <input type="text" wire:model="city" placeholder="Tỉnh/Thành phố">
                            </div>
                            <div>
                                @error('city')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6 mb-20">
                            <div class="form-inner">
                                <label>Quận, huyện</label>
                                <input type="text" wire:model="districts" name="Quận/huyện"
                                    placeholder="Quận/Huyện">
                            </div>
                            <div>
                                @error('districts')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6 mb-20">
                            <div class="form-inner">
                                <label>Địa chỉ cụ thể*</label>
                                <input wire:model="full_address" type="text" placeholder="Nhập địa chỉ cụ thể">
                            </div>
                            <div>
                                @error('full_address')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-inner">
                                <button class="primary-btn2" type="submit">Đăng tin</button>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div wire:loading>
                    loading............................
                    <svg>...</svg> <!-- SVG loading spinner -->
                </div> --}}
            </div>
        </div>
    </form>
</div>
