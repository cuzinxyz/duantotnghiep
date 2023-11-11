<div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <style>
        .upload__inputfile {
            width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }

        .upload__btn {
            display: inline-block;
            font-weight: 600;
            color: #fff;
            text-align: center;
            min-width: 116px;
            padding: 5px;
            transition: all 0.3s ease;
            cursor: pointer;
            border: 2px solid;
            background-color: #4045ba;
            border-color: #4045ba;
            border-radius: 10px;
            line-height: 26px;
            font-size: 14px;
        }

        .upload__btn:hover {
            background-color: unset;
            color: #4045ba;
            transition: all 0.3s ease;
        }

        .upload__btn-box {
            margin-bottom: 10px;
        }

        .upload__img-wrap {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -10px;
        }

        .upload__img-box {
            width: 174px;
            max-width: 100%;
            padding: 0 10px;
            margin-bottom: 12px;
        }

        .upload__img-close {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background-color: rgba(0, 0, 0, 0.5);
            position: absolute;
            top: 10px;
            right: 10px;
            text-align: center;
            line-height: 24px;
            z-index: 1;
            cursor: pointer;
        }

        .upload__img-close:after {
            content: "✖";
            font-size: 14px;
            color: white;
        }

        .img-bg {
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            position: relative;
            padding-bottom: 100%;
        }
    </style>
    <form wire:submit="saveCar" enctype="multipart/form-data">
        <div class="row g-4 mb-100">
            <div class="col-lg-4">
                <div class="comparea-content">
                    <h6>Thêm hình ảnh</h6>
                </div>

                <div class="upload__box">
                    <div class="upload__btn-box">
                        <label class="upload__btn">
                            <p>Upload images</p>
                            <input type="file" multiple="" data-max_length="20" class="upload__inputfile" hidden>
                        </label>
                    </div>
                    <div class="upload__img-wrap"></div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="inquiry-form" style="padding-top: 10px !important;">
                    <div id="form-sell-1 ">
                        <div class="col-lg-12 mb-15">
                            <h5>Thông tin xe của bạn</h5>
                        </div>
                        {{-- Hãng xe --}}
                        <div class="row {{ $currentStep != 1 ? 'd-none' : '' }}">
                            <div class="col-md-6 mb-20 ">
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
                            <div class="col-md-6 mb-20 ">
                                <div class="form-inner">
                                    <label>Tên xe</label>
                                    <select class="nice-select" wire:model="model_select">
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
                            <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="firstStepSubmit" type="button" >Next</button>
                        </div>

                        <div class="row {{ $currentStep != 2 ? 'd-none' : '' }}">
                            <div class="col-md-6 mb-20 ">
                                <div class="form-inner">
                                    <label>123</label>
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
                            <div class="col-md-6 mb-20 ">
                                <div class="form-inner">
                                    <label>456</label>
                                    <select class="nice-select" wire:model="model_select">
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
                                {{-- <select class="nice-select" wire:model="color">
                                    <option value="0">-- Chọn màu xe --</option>
                                </select> --}}
                                <div class="radio-input">
                                    @foreach ($colors as $key => $color)
                                        <input checked="" x-on:click="changeColor(event)"
                                            value="{{ $color }}" wire:model="color"
                                            id="color-{{ $key }}" type="radio">
                                        <label for="color-{{ $key }}">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" style="vertical-align:baseline">
                                                    <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                    <g stroke-linejoin="round" stroke-linecap="round"
                                                        id="SVGRepo_tracerCarrier"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <g id="Interface / Check">
                                                            <path stroke-linejoin="round" stroke-linecap="round"
                                                                stroke-width="2" stroke="#ffffff"
                                                                d="M6 12L10.2426 16.2426L18.727 7.75732" id="Vector">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </span>
                                        </label>
                                    @endforeach
                                </div>
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
                                <input type="text" wire:model="version" placeholder="Hãy nhập phiên bản xe (nếu có)">
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
                                <select class="nice-select" wire:model="year_of_manufacture">
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
                                <label>Thành phố</label>
                                <select class="nice-select" wire:model.live="city_id">
                                    <option value="0" selected>-- Chọn tỉnh thành phố --</option>
                                    @foreach (\Kjmtrue\VietnamZone\Models\Province::all() as $key => $item)
                                        <option value="{{ $item->id }}" wire.key={{ $item->id }}>
                                            {{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                @error('city_id')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6 mb-20">
                            <div class="form-inner">
                                <label>Quận, huyện</label>
                                <select class="nice-select" wire:model="district_id">
                                    <option value="0" selected>-- Chọn quận huyện --</option>
                                    @if (isset($city_id))
                                        @foreach (\Kjmtrue\VietnamZone\Models\District::whereProvinceId($this->city_id)->get() as $key => $item)
                                            <option value="{{ $item->id }}" wire.key={{ $item->id }}>
                                                {{ $item->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
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
    <script>
        jQuery(document).ready(function() {
            ImgUpload();
        });

        function ImgUpload() {
            var imgWrap = "";
            var imgArray = [];

            $('.upload__inputfile').each(function() {
                $(this).on('change', function(e) {
                    imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
                    var maxLength = $(this).attr('data-max_length');

                    var files = e.target.files;
                    var filesArr = Array.prototype.slice.call(files);
                    var iterator = 0;
                    filesArr.forEach(function(f, index) {

                        if (!f.type.match('image.*')) {
                            return;
                        }

                        if (imgArray.length > maxLength) {
                            return false
                        } else {
                            var len = 0;
                            for (var i = 0; i < imgArray.length; i++) {
                                if (imgArray[i] !== undefined) {
                                    len++;
                                }
                            }
                            if (len > maxLength) {
                                return false;
                            } else {
                                imgArray.push(f);

                                var reader = new FileReader();
                                reader.onload = function(e) {
                                    var html =
                                        "<div class='upload__img-box'><div style='background-image: url(" +
                                        e.target.result + ")' data-number='" + $(
                                            ".upload__img-close").length + "' data-file='" + f
                                        .name +
                                        "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                                    imgWrap.append(html);
                                    iterator++;
                                }
                                reader.readAsDataURL(f);
                            }
                        }
                    });
                });
            });

            $('body').on('click', ".upload__img-close", function(e) {
                var file = $(this).parent().data("file");
                for (var i = 0; i < imgArray.length; i++) {
                    if (imgArray[i].name === file) {
                        imgArray.splice(i, 1);
                        break;
                    }
                }
                $(this).parent().parent().remove();
            });
        }
    </script>
</div>
