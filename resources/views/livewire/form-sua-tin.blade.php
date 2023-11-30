<div>
    <div class="mb-50 wow fadeInUp contact-page" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms;">
        @push('styles')
            <link href="{{ asset('css/sell-car.css') }}" rel="stylesheet">
            <link rel="stylesheet" href="{{ asset('css/file_upload.css') }}">
            <link rel="stylesheet" href="{{ asset('css/simplemde.min.css') }}">
        @endpush

        <form enctype="multipart/form-data">
            <div class="row g-4 mb-100">
                <div class="col-lg-12">
                    <div class="">
                        <div class=" {{ $currentStep == 1 ? '' : 'd-none' }}" id="form-sell-1">
                            <div class="mb-15">
                                <h4 class="">Chỉnh sửa tin đăng</h4>
                            </div>

                            <div class="row d-flex justify-content-between">
                                <div class="col-md-8 col-sm-12 mb-20 inquiry-form py-4 px-4 bg-shape">
                                    <div class="row">
                                        <div class="col-md-6 mb-20">
                                            <div class="form-inner">
                                                <label class="fontAvantRegular">Hãng chế tạo</label>
                                                <select class="nice-select beauty-shadow" wire:model.live="brand_select">
                                                    <option value="">-- Chọn hãng xe --</option>
                                                    @foreach ($brands as $brand)
                                                        <option value="{{ $brand->id }}">
                                                            {{ $brand->brand_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="text-danger">
                                                @error('brand_select')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-20">
                                            <div class="form-inner">
                                                <label class="fontAvantRegular">Tên xe</label>
                                                <select class="nice-select beauty-shadow form-control-lg"
                                                    wire:model="model_select">
                                                    <option value="">-- Chọn model --</option>
                                                    @foreach ($models as $model)
                                                        <option value="{{ $model->id }}">
                                                            {{ $model->model_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <div class="text-danger">
                                                    @error('model_select')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Tên xe thuộc hãng --}}

                                        <div class="col-md-6 mb-20">
                                            <div class="form-inner">
                                                <label class="fontAvantRegular">Nhiên liệu</label>
                                                <select class="nice-select beauty-shadow form-control-lg" wire:model="fuel">
                                                    <option value="">-- Chọn loại nhiên liệu --</option>
                                                    @foreach ($fuels as $fuel)
                                                        <option>{{ $fuel }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="text-danger">
                                                @error('fuel')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-20">
                                            <div class="form-inner">
                                                <label class="fontAvantRegular">Số chỗ ngồi</label>
                                                <select class="nice-select beauty-shadow form-control-lg"
                                                    wire:model="number_of_seats">
                                                    <option value="">--Chọn số chỗ ngồi--</option>
                                                    @foreach ($seats as $seat)
                                                        <option value="{{ $seat }}">{{ $seat }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="text-danger">
                                                @error('number_of_seats')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-20">
                                            <div class="form-inner">
                                                <label class="fontAvantRegular">Phiên bản</label>
                                                <input type="text" wire:model="version"
                                                    placeholder="Hãy nhập phiên bản xe (nếu có)">
                                            </div>
                                            <div class="text-danger">
                                                @error('version')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-20">
                                            <div class="form-inner">
                                                <label class="fontAvantRegular">Năm sản xuất</label>
                                                <select class="nice-select beauty-shadow form-control-lg"
                                                    wire:model="year_of_manufacture">
                                                    <option value="">-- Chọn năm sản xuất
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
                                            <div class="text-danger">
                                                @error('year_of_manufacture')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-20">
                                            <div class="form-inner">
                                                <label class="fontAvantRegular">Số KM đã đi*</label>
                                                <input wire:model="mileage" type="number" placeholder="Nhập số km đã đi">
                                            </div>
                                            <div class="text-danger">
                                                @error('mileage')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-20">
                                            <div class="form-inner">
                                                <label class="fontAvantRegular">Giá muốn bán*</label>
                                                <input wire:model="price" type="text" placeholder="VND">
                                            </div>
                                            <div class="text-danger">
                                                @error('price')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-20">
                                            <div class="form-inner">
                                                <label class="fontAvantRegular">Mã lực*</label>
                                                <input wire:model="engine" type="text" placeholder="Nhập số mã lực">
                                            </div>
                                            <div class="text-danger">
                                                @error('title')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12 mb-20">
                                            <div class="form-inner">
                                                <label class="fontAvantRegular">Tiêu đề*</label>
                                                <input wire:model="title" type="text"
                                                    placeholder="Nhập tiêu đề cho bài đăng">
                                            </div>
                                            <div class="text-danger">
                                                @error('title')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-inner">
                                                <label class="fontAvantRegular">Mô tả*</label>
                                                <textarea wire:model="description" id="tiny" placeholder="Write somethings"></textarea>
                                            </div>
                                            <div class="text-danger">
                                                @error('description')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-12 mb-20">
                                    <div class="form-inner form-inner-padding mb-20 blurBG bg-shape" style=""
                                        id="changeColor">
                                        <label style="background: #fff;display:inline" class="rounded p-1">Màu sắc</label>
                                        {{-- <div class="radio-input" id="style-4" style="overflow:auto">
                                            @foreach ($colors as $key => $color)
                                                <input {{ $key == 'red' ? 'checked' : '' }} value="{{ $color }}"
                                                    id="color-{{ $key }}" type="radio" wire:model="color">
                                                <label for="color-{{ $key }}">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24">
                                                            <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                            <g stroke-linejoin="round" stroke-linecap="round"
                                                                id="SVGRepo_tracerCarrier"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <g id="Interface / Check">
                                                                    <path stroke-linejoin="round" stroke-linecap="round"
                                                                        stroke-width="2" stroke="#ffffff"
                                                                        d="M6 12L10.2426 16.2426L18.727 7.75732"
                                                                        id="Vector"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                </label>
                                            @endforeach
                                        </div> --}}

                                        <div class="color-select row gy-2">
                                            @foreach ($colors as $key => $color)
                                            <div class="col-6">
                                                <input {{ $key == 'black' ? 'checked' : '' }} hidden type="radio" wire:model="color" data-color="{{ $key }}" value="{{ $color }}" id="{{ $key }}" name="colorpicker">
                                                <label for="{{ $key }}" class="shadow-lg {{ $key }} text-center rounded-2" style="padding: 4px 10px">{{ $color }}</label>
                                            </div>
                                            @endforeach
                                        </div>

                                        <div class="text-danger">
                                            @error('color')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-inner form-inner-padding mb-20 bg-shape">
                                        <label for="">Hộp số</label>
                                        <div class="d-flex justify-content-between items-center">
                                            <div class="radio-tile-group">
                                                <div class="input-container">
                                                    <input id="walk" wire:model="transmission" value="sotay"
                                                        class="radio-button" type="radio" name="radio">
                                                    <div class="radio-tile">
                                                        <div class="icon walk-icon">

                                                        </div>
                                                        <label for="walk" class="radio-tile-label">Số sàn</label>
                                                    </div>
                                                </div>

                                                <div class="input-container">
                                                    <input id="bike" wire:model="transmission" value="sotudong"
                                                        class="radio-button" type="radio" name="radio">
                                                    <div class="radio-tile">
                                                        <div class="icon bike-icon">

                                                        </div>
                                                        <label for="bike" class="radio-tile-label">Số tự động</label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="text-danger">
                                            @error('transmission')
                                                {{ $message }}
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="form-inner form-inner-padding mb-20 bg-shape">
                                        <label for="" class="">Một số tính năng khác</label>

                                        <div class="row" style="padding: 0px 4px">
                                            @foreach ($featureValues as $key => $item)
                                                <label class="container-check-box my-2 col-lg-6">
                                                    <div style="padding-right:12px">
                                                        <input value="{{ $item }}" type="checkbox"
                                                            wire:model="features">
                                                        <div class="checkmark"></div>
                                                    </div>
                                                    {{ $item }}
                                                </label>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="form-inner" style="text-align: end">
                                            <button class="primary-btn2" wire:click="secondStepSubmit"
                                                type="button">Tiếp
                                                tục</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="inquiry-form {{ $currentStep == 2 ? '' : 'd-none' }}" id="form-sell-2">
                            <div class="mb-15">
                                <h5 class="">Thông tin của bạn</h5>
                            </div>
                            <div class="row bg-shape p-4">
                                <div class="col-md-6 mb-20">
                                    <div class="form-inner">
                                        <label class="fontAvantRegular">Số điện thoại*</label>
                                        <input wire:model="phone" type="text" placeholder="+880- 123 234 ***">
                                    </div>
                                    <div class="text-danger">
                                        @error('phone')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mb-20">
                                    <div class="form-inner">
                                        <label class="fontAvantRegular">Email (Optional)</label>
                                        <input wire:model="email" type="text" placeholder="Email liên hệ">
                                    </div>
                                    <div class="text-danger">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mb-20">
                                    <div class="form-inner">
                                        <label class="fontAvantRegular">Thành phố</label>
                                        <select class="nice-select beauty-shadow form-control-lg"
                                            wire:model.live="city_id">
                                            <option value="" selected>-- Chọn tỉnh thành phố --</option>
                                            @foreach (\Kjmtrue\VietnamZone\Models\Province::all() as $key => $item)
                                                <option value="{{ $item->id }}" wire.key={{ $item->id }}>
                                                    {{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="text-danger">
                                        @error('city_id')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mb-20">
                                    <div class="form-inner">
                                        <label class="fontAvantRegular">Quận, huyện</label>
                                        <select class="nice-select beauty-shadow form-control-lg"
                                            wire:model="district_id">
                                            <option value="" selected>-- Chọn quận huyện --</option>
                                            @if (isset($city_id))
                                                @foreach (\Kjmtrue\VietnamZone\Models\District::whereProvinceId($this->city_id)->get() as $key => $item)
                                                    <option value="{{ $item->id }}" wire.key={{ $item->id }}>
                                                        {{ $item->name }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="text-danger">
                                        @error('districts')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mb-20">
                                    <div class="form-inner">
                                        <label class="fontAvantRegular">Địa chỉ cụ thể*</label>
                                        <input wire:model="full_address" type="text"
                                            placeholder="Nhập địa chỉ cụ thể">
                                    </div>
                                    <div class="text-danger">
                                        @error('full_address')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-inner" style="text-align: end">
                                        <button class="primary-btn2" wire:click="previousStepSubmit" type="button">Quay
                                            lại</button>
                                        <button class="primary-btn2" wire:click="thirdStepSubmit" type="button">Tiếp
                                            tục</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row {{ $currentStep == 3 ? '' : 'd-none' }} inquiry-form justify-content-evenly"
                            id="form-sell-3">
                            <h5 class="mb-15">Hình ảnh xe</h5>
                            <div class="col-lg-5 p-4 bg-shape" wire:ignore>
                                <div class="custom-file-container" data-upload-id="mySecondImage">
                                    <div class="label-container">
                                        <label class="fw-bold fontAvantRegular">Upload hình (* có thể upload nhiều
                                            hình)</label>
                                        <a class="clear-button" href="javascript:void(0)" title="Clear Image">
                                            ×
                                        </a>
                                    </div>
                                    <label class="input-container">
                                        <input accept="image/*" aria-label="Choose File" class="input-hidden"
                                            id="fileInput" multiple="" type="file"
                                            wire:model="verhicle_image_library">
                                        <span class="input-visible"><i class="bi bi-cloud-arrow-up text-success"></i> Chọn
                                            files</span>
                                    </label>
                                    <div id="preview-container" class="image-preview" style="">
                                        @foreach ($car->verhicle_image_library as $item)
                                            <img src="{{ asset('storage/' . $item) }}" alt="">
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5 p-4 bg-shape" wire:ignore>
                                <div class="custom-file-container" data-upload-id="mySecondImage">
                                    <div class="label-container">
                                        <label class="fw-bold fontAvantRegular">Upload video (*)</label>
                                        <a class="clear-button" href="javascript:void(0)" title="Clear Image">
                                            ×
                                        </a>
                                    </div>
                                    <label class="input-container">
                                        <input accept="video/*" aria-label="Choose File" class="input-hidden"
                                            id="fileInputVideo" type="file" wire:model="verhicle_videos">
                                        <span class="input-visible"><i class="bi bi-cloud-arrow-up text-success"></i> Chọn
                                            file</span>
                                    </label>
                                    <div id="preview-container-video" class="image-preview" style="">
                                        <video width="400" controls>
                                            <source src="{{ asset('storage/' . $car->verhicle_videos) }}" type="video/mp4">
                                            Your browser does not support HTML video.
                                          </video>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-12" style="margin-top: 24px">
                                <div wire:loading.remove class="form-inner" style="text-align: center">
                                    <button class="primary-btn2" wire:click="previousStepSubmit" type="button">Quay
                                        lại</button>
                                    <button wire:loading.attr="disabled" class="primary-btn2"
                                        wire:click.prevent="updateCar">Cập nhật</button>
                                    </div>
                                </div>
                                <div wire:loading class="loading-form__submit text-center">
                                    <svg viewBox="25 25 50 50">
                                        <circle r="20" cy="50" cx="50"></circle>
                                    </svg>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        @push('scripts')
            <script src="{{ asset('js/file_upload.js') }}"></script>
        @endpush
    </div>

</div>
