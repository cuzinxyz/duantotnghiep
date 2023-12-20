<div class="mb-50 wow fadeInUp contact-page" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms;">
    @push('styles')
        <link href="{{ asset('css/sell-car.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/file_upload.css') }}">
    @endpush

    <form enctype="multipart/form-data">
        <div class="row g-4 mb-100">
            <div class="col-lg-12">
                <div class="">
                    <div class="alert alert-info" role="alert">
                        <span class="fs-5"><i class="text-warning bi bi-megaphone-fill"></i></span> Vì quy định kiểm duyệt, khi bạn cập nhật lại thông tin bài đăng cần phải được quản trị viên <strong>phê duyệt lại</strong>, vui lòng cân nhắc trước khi sửa!
                    </div>

                    <div class="row inquiry-form justify-content-evenly mb-20" id="form-sell-3">
                        <h5 class="mb-15">Hình ảnh xe <span class="text-danger fw-bold">(*)</span></h5>

                        <div class="row" style="border-left: 5px solid #000;">
                            <div class="col-6 p-2">
                                @if ($car->verhicle_image_library)
                                    <div class="image-preview img-container-old" style="">
                                        @foreach ($car->verhicle_image_library as $image)
                                            <img src="{{ asset('storage/' . $image) }}">
                                        @endforeach
                                    </div>
                                @endif
                                <div class="custom-file-container" data-upload-id="mySecondImage">
                                    <div class="label-container">
                                        <label class="fw-bold" style="font-size: 13px">Upload hình  <span class="text-danger fw-bold">(*)</span></label>
                                    </div>
                                    <label class="input-container">
                                        <input accept="image/*" aria-label="Choose File" class="myInput input-hidden"
                                            id="fileInput" multiple="" type="file"
                                            wire:model="verhicle_image_library">
                                        <span class="input-visible"><i class="bi bi-cloud-arrow-up text-success"></i>
                                            Tải hình mới lên (nhiều hình)</span>
                                    </label>
                                    <div class="text-center">
                                        <div class="upload-loader" wire:loading></div>
                                    </div>
                                    @if ($verhicle_image_library)
                                        <div id="preview-container" class="image-preview img-container" style="">
                                            @foreach ($verhicle_image_library as $image)
                                                <img src="{{ $image->temporaryUrl() }}">
                                            @endforeach
                                        </div>
                                    @endif
                                    <div class="text-danger fw-bold" style="font-size:12px">
                                        @error('verhicle_image_library')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 p-2">
                                @if ($car->verhicle_videos)
                                    <div class="image-preview img-container-old" style="">
                                        <video width="320" height="240" controls>
                                            <source src="{{ asset('storage/' . $car->verhicle_videos) }}"
                                                type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                @endif
                                <div class="custom-file-container" data-upload-id="mySecondImage">
                                    <div class="label-container">
                                        <label class="fw-bold" style="font-size: 13px">Upload video mới</label>
                                    </div>
                                    <label class="input-container">
                                        <input accept="video/*" aria-label="Choose File" class="myInput input-hidden"
                                            id="fileInputVideo" type="file" wire:model="verhicle_videos">
                                        <span class="input-visible"><i class="bi bi-cloud-arrow-up text-success"></i>
                                            Tải video lên</span>
                                    </label>
                                    <div class="text-center">
                                        <div class="upload-loader" wire:loading></div>
                                    </div>
                                    @if ($verhicle_videos)
                                        <div id="preview-container-video" class="image-preview" style="">
                                            <video width="320" height="240" controls wire:ignore.self>
                                                <source src="{{ $verhicle_videos->temporaryUrl() }}" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        </div>
                                    @endif

                                </div>
                                <div class="text-danger fw-bold" style="font-size:12px">
                                    @error('verhicle_videos')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="" id="form-sell-1">
                        <div class="mb-15 d-flex justify-content-between align-items-center">
                            <h5 class="">Bạn đang bán xe gì?</h5>
                        </div>

                        <div class="row d-flex justify-content-between mb-20" style="border-left: 5px solid #ff4820">
                            <div class="col-md-8 col-sm-12 mb-20 inquiry-form py-4 px-4 bg-shape">
                                <div class="row">
                                    <div class="col-md-6 mb-20">
                                        <div class="form-inner">
                                            <label class="">Hãng chế tạo <span class="text-danger fw-bold">(*)</span></label>
                                            <select class=" form-control bg-white nice-select beauty-shadow"
                                                wire:ignore.self wire:model.live="brand_select">
                                                <option value="">-- hãng xe --</option>
                                                @foreach ($brands as $brand)
                                                    <option value="{{ $brand->id }}">{{ $brand->brand_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="text-danger fw-bold" style="font-size:12px">
                                            @error('brand_select')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        <div class="form-inner">
                                            <label class="">Dòng xe <span class="text-danger fw-bold">(*)</span></label>
                                            <select
                                                class=" form-control bg-white nice-select beauty-shadow form-control-lg"
                                                wire:ignore.self wire:model="model_select">
                                                <option value="">-- dòng xe --</option>
                                                @foreach ($models as $model)
                                                    <option value="{{ $model->id }}">{{ $model->model_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="text-danger fw-bold" style="font-size:12px">
                                            @error('model_select')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Tên xe thuộc hãng --}}

                                    <div class="col-md-6 mb-20">
                                        <div class="form-inner">
                                            <label class="">Nhiên liệu <span class="text-danger fw-bold">(*)</span></label>
                                            <select
                                                class=" form-control bg-white nice-select beauty-shadow form-control-lg"
                                                wire:model="fuel" wire:ignore.self>
                                                <option value="">-- nhiên liệu --</option>
                                                @foreach ($fuels as $fuel)
                                                    <option>{{ $fuel }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="text-danger fw-bold" style="font-size:12px">
                                            @error('fuel')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        <div class="form-inner">
                                            <label class="">Số chỗ ngồi <span class="text-danger fw-bold">(*)</span></label>
                                            <select
                                                class=" form-control bg-white nice-select beauty-shadow form-control-lg"
                                                wire:model="number_of_seats" wire:ignore.self>
                                                <option value="">-- chỗ ngồi--</option>
                                                @foreach ($seats as $seat)
                                                    <option value="{{ $seat }}">{{ $seat }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="text-danger fw-bold" style="font-size:12px">
                                            @error('number_of_seats')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        <div class="form-inner">
                                            <label class="">Phiên bản</label>
                                            <input type="text" wire:model="version"
                                                placeholder="Phiên bản xe (nếu có)" wire:ignore.self>
                                        </div>
                                        <div class="text-danger fw-bold" style="font-size:12px">
                                            @error('version')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        <div class="form-inner">
                                            <label class="">Năm sản xuất <span class="text-danger fw-bold">(*)</span></label>
                                            <select
                                                class=" form-control bg-white nice-select beauty-shadow form-control-lg"
                                                wire:model="year_of_manufacture" wire:ignore.self>
                                                <option value="">-- năm sản xuất --</option>
                                                @foreach ($years as $year)
                                                    <option value="{{ $year }}">{{ $year }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="text-danger fw-bold" style="font-size:12px">
                                            @error('year_of_manufacture')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        <div class="form-inner">
                                            <label class="">Số KM đã đi <span class="text-danger fw-bold">(*)</span></label>
                                            <input wire:model="mileage" type="number" placeholder="x00 KM"
                                                wire:ignore.self class="myInput">
                                        </div>
                                        <div class="text-danger fw-bold" style="font-size:12px">
                                            @error('mileage')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        <div class="form-inner">
                                            <label class="">Giá muốn bán <span class="text-danger fw-bold">(*)</span></label>
                                            <input wire:model="price" class="myInput" type="number"
                                                placeholder="x 000 000 000 VND" wire:ignore.self>
                                        </div>
                                        <div class="text-danger fw-bold" style="font-size:12px">
                                            @error('price')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        <div class="form-inner">
                                            <label class="">Mã lực <span class="text-danger fw-bold">(*)</span></label>
                                            <input wire:model="engine" type="number" placeholder="1xx"
                                                wire:ignore.self class="myInput">
                                        </div>
                                        <div class="text-danger fw-bold" style="font-size:12px">
                                            @error('engine')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-20">
                                        <div class="form-inner">
                                            <label class="">Tiêu đề <span class="text-danger fw-bold">(*)</span></label>
                                            <input wire:model="title" type="text" class="myInput"
                                                placeholder="Tiêu đề tin đăng" wire:ignore.self>
                                        </div>
                                        <div class="text-danger fw-bold" style="font-size:12px">
                                            @error('title')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-inner">
                                            <label class="">Mô tả <span class="text-danger fw-bold">(*)</span></label>
                                            <textarea id="description_car" class="myInput" wire:ignore.self wire:model="description" id="tiny"
                                                placeholder="Thông tin thêm về xe: cấu hình, nguồn gốc, xe chính chủ v.v..."></textarea>
                                        </div>
                                        <div class="text-danger fw-bold" style="font-size:12px">
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
                                    <label style="background: #fff;display:inline" class="rounded p-1">Màu sắc <span class="text-danger fw-bold">(*)</span></label>
                                    <div class="color-select row gy-2" wire:ignore>
                                        @foreach ($colors as $key => $item)
                                            <div class="col-4 my-2">
                                                <input {{ $item == $color ? 'checked' : '' }} hidden type="radio"
                                                    wire:model="color" data-color="{{ $key }}"
                                                    value="{{ $item }}" id="{{ $key }}"
                                                    name="colorpicker">
                                                <label for="{{ $key }}"
                                                    class="shadow-sm {{ $key }} text-center rounded-2"
                                                    style="padding: 4px 10px">{{ $item }}</label>
                                            </div>
                                        @endforeach
                                    </div>

                                    <div class="text-danger fw-bold" style="font-size:12px">
                                        @error('color')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-inner form-inner-padding mb-20 bg-shape">
                                    <label for="">Hộp số <span class="text-danger fw-bold">(*)</span></label>
                                    <div class="d-flex justify-content-between items-center">
                                        <div class="radio-tile-group">
                                            <div class="input-container">
                                                <input id="walk" wire:model="transmission" value="Số sàn"
                                                    class="radio-button" type="radio" name="radio">
                                                <div class="radio-tile">
                                                    <div class="icon walk-icon">

                                                    </div>
                                                    <label for="walk" class="radio-tile-label">Số sàn</label>
                                                </div>
                                            </div>

                                            <div class="input-container">
                                                <input id="bike" wire:model="transmission" value="Số tự động"
                                                    class="radio-button" type="radio" name="radio">
                                                <div class="radio-tile">
                                                    <div class="icon bike-icon">

                                                    </div>
                                                    <label for="bike" class="radio-tile-label">Số tự động</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="text-danger fw-bold" style="font-size:12px">
                                        @error('transmission')
                                            {{ $message }}
                                        @enderror
                                    </div>

                                </div>

                                <div class="form-inner form-inner-padding mb-20 bg-shape">
                                    <label for="" class="">Một số tính năng khác <span class="text-danger fw-bold">(*)</span></label>

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

                                    <div class="text-danger fw-bold" style="font-size:12px">
                                        @error('features')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="inquiry-form" id="form-sell-2">
                        <div class="mb-15 d-flex align-items-center justify-content-between">
                            <h5 class="">Thông tin của bạn</h5>
                        </div>
                        <div class="row bg-shape p-2 mb-20" style="border-left: 5px solid #198754;">
                            <div class="col-md-6 mb-20">
                                <div class="form-inner">
                                    <label class="">Số điện thoại <span class="text-danger fw-bold">(*)</span></label>
                                    <input wire:model="phone" class="myInput" type="text"
                                        placeholder="0968 872 826" wire:ignore.self>
                                </div>
                                <div class="text-danger fw-bold" style="font-size:12px">
                                    @error('phone')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 mb-20">
                                <div class="form-inner">
                                    <label class="">Email (tuỳ chọn)</label>
                                    <input wire:model="email" type="text" placeholder="ex: example@gmail.com">
                                </div>
                                <div class="text-danger fw-bold" style="font-size:12px">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 mb-20">
                                <div class="form-inner">
                                    <label class="">Thành phố <span class="text-danger fw-bold">(*)</span></label>
                                    <select class="form-control bg-white nice-select beauty-shadow form-control-lg"
                                        wire:model.live="city_id" wire:ignore.self>
                                        <option value="" selected>-- tỉnh thành phố --</option>
                                        @foreach (\Kjmtrue\VietnamZone\Models\Province::all() as $key => $item)
                                            <option value="{{ $item->id }}" wire.key={{ $item->id }}>
                                                {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="text-danger fw-bold" style="font-size:12px">
                                    @error('city_id')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 mb-20">
                                <div class="form-inner">
                                    <label class="">Quận, huyện <span class="text-danger fw-bold">(*)</span></label>
                                    <select class="form-control bg-white nice-select beauty-shadow form-control-lg"
                                        wire:model="district_id" wire:ignore.self>
                                        <option value="" selected>-- quận huyện --</option>
                                        @if (isset($city_id))
                                            @foreach (\Kjmtrue\VietnamZone\Models\District::whereProvinceId($this->city_id)->get() as $key => $item)
                                                <option value="{{ $item->id }}" wire.key={{ $item->id }}>
                                                    {{ $item->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="text-danger fw-bold" style="font-size:12px">
                                    @error('district_id')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12 mb-20">
                                <div class="form-inner">
                                    <label class="">Địa chỉ cụ thể <span class="text-danger fw-bold">(*)</span></label>
                                    <input wire:model="full_address" class="myInput" type="text"
                                        placeholder="ex: Trịnh Văn Bô, Phương Canh, Nam Từ Liêm, Hà Nội"
                                        wire:ignore.self>
                                </div>
                                <div class="text-danger fw-bold" style="font-size:12px">
                                    @error('full_address')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-100" style="margin-top: 24px">
                        <div class="form-inner" style="text-align: center">
                            <div class="text-center w-100" wire:loading>
                                <img class="" src="{{ asset('images/load.gif') }}" alt="">
                            </div>
                            <div class="form-inner" style="text-align: center">
                                <button wire:loading.attr="disabled"
                                    class="fs-6 btn-dark1 btn btn-lg justify-content-center align-items-center w-100 primary-btn2 shadow-sm"
                                    id="formDangTin" style="height: 50px" wire:click.prevent="updateCar">Sửa
                                    tin</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    @push('scripts')
        <script src="{{ asset('js/file_upload.js') }}"></script>
        <script>
            $(document).ready(function() {
                $('#formDangTin').on("click", function(e) {
                    // Reset trạng thái lớp border-danger
                    $('.myInput, select, textarea').removeClass('border border-danger');
                    // Validate tất cả các trường input và select
                    $('.myInput, select').each(function() {
                        var fieldValue = $(this).val();
                        if (!fieldValue) {
                            $(this).addClass('border border-danger');
                        }
                    });
                });
            });
        </script>
    @endpush
</div>
