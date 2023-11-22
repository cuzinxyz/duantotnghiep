<div class="mb-50 wow fadeInUp" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms;">
    @push('styles')
        <link href="{{ asset('css/sell-car.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/file_upload.css') }}">
        <link rel="stylesheet" href="{{ asset('css/simplemde.min.css') }}">
    @endpush
    <form enctype="multipart/form-data">
<div class="mb-50 wow fadeInUp" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms;">
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
                            <h4 class="">Bạn đang bán xe gì?</h4>
                        </div>

                        <div class="row d-flex justify-content-between">
                            <div class="col-md-8 col-sm-12 mb-20 inquiry-form py-4 px-4 bg-shape">
                                <div class="row">
                                    <div class="col-md-6 mb-20">
                                        <div class="form-inner">
                                            <label class="fontAvantRegular">Hãng chế tạo</label>
                                            <select class="nice-select beauty-shadow" wire:model.live="brand_select">
                                                <option value="0">-- Chọn hãng xe --</option>
                                                @foreach ($brands as $brand)
                                                    <option value="{{ $brand->id }}">{{ $brand->brand_name }}
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
                                                <option value="0">-- Chọn model --</option>

                                    @foreach ($models as $model)
                                        <option value="{{ $model->id }}">{{ $model->model_name }}</option>
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
                                    <option value="sotay">Số tay</option>
                                    <option value="sotudong">Số tự động</option>
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

                    <div class="row {{ $currentStep == 3 ? '' : 'd-none' }} inquiry-form justify-content-evenly"
                        id="form-sell-3">
                        <h5 class="mb-15">Hình ảnh xe</h5>
                        <div class="col-lg-5 p-4 bg-shape" wire:ignore>
                            <div class="custom-file-container" data-upload-id="mySecondImage">
                                <div class="label-container">
                                    <label class="fw-bold fontAvantRegular">Upload hình (* có thể upload nhiều hình)</label>
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

                                </div>
                            </div>

                        </div>

                        <div class="col-lg-12" style="margin-top: 24px">
                            <div class="form-inner" style="text-align: center">
                                <button class="primary-btn2" wire:click="previousStepSubmit" type="button">Quay
                                    lại</button>
                                <button wire:loading.attr="disabled" class="primary-btn2"
                                    wire:click.prevent="saveCar">ĐĂNG TIN</button>
                                <div wire:loading class="loading-form__submit">
                                    <svg viewBox="25 25 50 50">
                                        <circle r="20" cy="50" cx="50"></circle>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </form>
</div>
