<div>
    <div class="contact-page pt-100 mb-100">
        <div class="container">
            <div class="row mb-50 wow fadeInUp" data-wow-delay="200ms"
                style="visibility: visible; animation-delay: 200ms;">
                <div class="col-lg-12">
                    <div class="section-title-2 text-center">
                        <h2>Đăng tin bán xe</h2>
                    </div>
                </div>
            </div>

            <form>

                <div class="row g-4 mb-100">
                    <div class="col-lg-5">
                        <h6>Thêm hình ảnh</h6>
                        <div class="">
                            <input type="file" class="filepond" name="image" multiple />
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="mb-6">
                            <h2 class="sr-only">Steps</h2>

                            <div
                                class="after:mt-4 after:block after:h-1 after:w-full after:rounded-lg after:bg-gray-200">
                                <ol class="grid grid-cols-3 text-sm font-medium text-gray-500">
                                    <li
                                        class="relative flex justify-start {{ $currentStep >= 1 ? 'text-blue-600' : '' }} ">
                                        <a href="">
                                            <span
                                                class="absolute -bottom-[1.75rem] start-0 rounded-full {{ $currentStep >= 1 ? 'bg-blue-600 text-white' : 'bg-gray-600' }} ">
                                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </span>

                                            <span class="hidden sm:block"> 1 </span>

                                            <svg class="h-6 w-6 sm:hidden" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                                            </svg>
                                        </a>
                                    </li>

                                    <li
                                        class="relative flex justify-center {{ $currentStep >= 2 ? 'text-blue-600' : '' }}">
                                        <span
                                            class="absolute -bottom-[1.75rem] left-1/2 -translate-x-1/2 rounded-full {{ $currentStep >= 2 ? 'bg-blue-600 text-white' : 'bg-gray-600' }} ">
                                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>

                                        <span class="hidden sm:block"> 2 </span>

                                        <svg class="mx-auto h-6 w-6 sm:hidden" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </li>

                                    <li
                                        class="relative flex justify-end {{ $currentStep >= 3 ? 'text-blue-600' : '' }}">
                                        <span
                                            class="absolute -bottom-[1.75rem] end-0 rounded-full {{ $currentStep >= 3 ? 'bg-blue-600 text-white' : 'bg-gray-600' }}">
                                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>

                                        <span class="hidden sm:block"> 3 </span>

                                        <svg class="h-6 w-6 sm:hidden" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                        </svg>
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="inquiry-form">
                            <div class="{{ $currentStep != 1 ? 'hidden' : '' }}">
                                <div class="row">
                                    <div class="col-md-6 mb-20">
                                        @php
                                            $hang_xe = [
                                                [
                                                    'id' => 1,
                                                    'name' => 'Joe',
                                                ],
                                                [
                                                    'id' => 2,
                                                    'name' => 'Mary',
                                                ],
                                            ];
                                        @endphp

                                        <x-select label="Hãng xe" :options="$hang_xe" placeholder="Lựa chọn hãng xe"
                                            wire:model="hang_xe" />
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        @php
                                            $dong_xe = [
                                                [
                                                    'id' => 1,
                                                    'name' => 'Joe',
                                                ],
                                                [
                                                    'id' => 2,
                                                    'name' => 'Mary',
                                                ],
                                            ];
                                        @endphp

                                        <x-select label="Dòng xe" :options="$dong_xe" placeholder="Lựa chọn dòng xe"
                                            wire:model="dong_xe" />
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        @php
                                            $phien_ban = [
                                                [
                                                    'id' => 1,
                                                    'name' => 'Joe',
                                                ],
                                                [
                                                    'id' => 2,
                                                    'name' => 'Mary',
                                                ],
                                            ];
                                        @endphp

                                        <x-select label="Phiên bản" :options="$phien_ban" placeholder="Lựa chọn phiên bản"
                                            wire:model="phien_ban" />
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        @php
                                            $nam_san_xuat = [
                                                [
                                                    'id' => 1,
                                                    'name' => 'Joe',
                                                ],
                                                [
                                                    'id' => 2,
                                                    'name' => 'Mary',
                                                ],
                                            ];
                                        @endphp

                                        <x-select label="Năm sản xuất" :options="$nam_san_xuat"
                                            placeholder="Lựa chọn năm sản xuất" wire:model="nam_san_xuat" />
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        @php
                                            $tinh_trang = [
                                                [
                                                    'id' => 1,
                                                    'name' => 'Joe',
                                                ],
                                                [
                                                    'id' => 2,
                                                    'name' => 'Mary',
                                                ],
                                            ];
                                        @endphp

                                        <x-select label="Tình trạng xe" :options="$tinh_trang"
                                            placeholder="Lựa chọn tình trạng xe" wire:model="tinh_trang" />
                                    </div>

                                    <div class="col-md-12 mb-20">
                                        <x-input label="Số KM" placeholder="Nhập số km đã đi" wire:model="km" />
                                    </div>

                                    <div class="col-md-12 mb-20">
                                        <x-input label="Giá muốn bán" placeholder="Nhập giá muốn bán"
                                            wire:model="price" />
                                    </div>



                                    <div class="col-md-12">

                                        <div class="col-md-12">
                                            <div class="form-inner d-flex justify-content-end">
                                                <button type="button" class="primary-btn3"
                                                    wire:click.prevent="firstStepSubmit">Next</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="{{ $currentStep != 2 ? 'hidden' : '' }}">
                                <div class="row">
                                    <div class="col-md-6 mb-20">
                                        @php
                                            $hop_so = [
                                                [
                                                    'id' => 1,
                                                    'name' => 'Joe',
                                                ],
                                                [
                                                    'id' => 2,
                                                    'name' => 'Mary',
                                                ],
                                            ];
                                        @endphp

                                        <x-select label="Hộp số" :options="$hop_so" placeholder="Lựa chọn hộp số"
                                            wire:model="hop_so" />
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        @php
                                            $nhien_lieu = [
                                                [
                                                    'id' => 1,
                                                    'name' => 'Joe',
                                                ],
                                                [
                                                    'id' => 2,
                                                    'name' => 'Mary',
                                                ],
                                            ];
                                        @endphp

                                        <x-select label="Nhiên liệu" :options="$nhien_lieu"
                                            placeholder="Lựa chọn nhiên liệu" wire:model="nhien_lieu" />
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        @php
                                            $so_ghe = [
                                                [
                                                    'id' => 1,
                                                    'name' => 'Joe',
                                                ],
                                                [
                                                    'id' => 2,
                                                    'name' => 'Mary',
                                                ],
                                            ];
                                        @endphp

                                        <x-select label="Số ghế" :options="$so_ghe" placeholder="Lựa chọn số ghế"
                                            wire:model="so_ghe" />
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        @php
                                            $mau_sac = [
                                                [
                                                    'id' => 1,
                                                    'name' => 'Joe',
                                                ],
                                                [
                                                    'id' => 2,
                                                    'name' => 'Mary',
                                                ],
                                            ];
                                        @endphp

                                        <x-select label="Màu sắc" :options="$mau_sac" placeholder="Lựa chọn màu sắc"
                                            wire:model="mau_sac" />
                                    </div>

                                    <div class="col-md-12 mb-20">
                                        <x-input label="Tiêu đề" placeholder="Nhập tiêu đề" wire:model="tieu_de" />
                                    </div>

                                    <div class="col-md-12 mb-20">
                                        <x-textarea label="Mô tả" wire:model="mo_ta" placeholder="Nhập mô tả..."
                                            hint="Max 1000 chars" rows="5" />
                                    </div>

                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <div class="form-inner d-flex justify-content-end">

                                                <button type="button" class="primary-btn3 me-3"
                                                    wire:click="back(1)">
                                                    Previous
                                                </button>

                                                <button type="button" class="primary-btn3"
                                                    wire:click="secondStepSubmit">Next</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="{{ $currentStep != 3 ? 'hidden' : '' }}">
                                <div class="row">
                                    <div class="col-md-6 mb-20">
                                        <x-input label="Họ tên" placeholder="Nhập họ tên" wire:model="ho_ten" />
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        <x-input label="Số điện thoại" placeholder="Nhập số điện thoại"
                                            wire:model="phone" />
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        @php
                                            $thanh_pho = [
                                                [
                                                    'id' => 1,
                                                    'name' => 'Joe',
                                                ],
                                                [
                                                    'id' => 2,
                                                    'name' => 'Mary',
                                                ],
                                            ];
                                        @endphp

                                        <x-select label="Tỉnh / thành phố" :options="$thanh_pho"
                                            placeholder="Lựa chọn tỉnh / thành phố" wire:model="thanh_pho" />
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        @php
                                            $quan_huyen = [
                                                [
                                                    'id' => 1,
                                                    'name' => 'Joe',
                                                ],
                                                [
                                                    'id' => 2,
                                                    'name' => 'Mary',
                                                ],
                                            ];
                                        @endphp

                                        <x-select label="Quận / huyện" :options="$quan_huyen"
                                            placeholder="Lựa chọn quận, huyện" wire:model="quan_huyen" />
                                    </div>


                                    <div class="col-md-12 mb-20">
                                        <x-input label="Địa chỉ cụ thể" placeholder="Nhập địa chỉ cụ thể"
                                            wire:model="dia_chi" />
                                    </div>

                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <div class="form-inner d-flex justify-content-end">

                                                <button type="button" class="primary-btn3 me-3"
                                                    wire:click="back(2)">
                                                    Previous
                                                </button>

                                                <button type="button" class="primary-btn3"
                                                    wire:click="submitForm">Next</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
            </form>
        </div>
    </div>
</div>
