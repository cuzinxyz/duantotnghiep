<x-partials.layout-client>
    @php
        $salon = \App\Models\Salon::where('user_id', auth()->id())->first();
    @endphp

    @if ($salon)
        @if ($salon->status == 0)
            <div class="my-5 py-3 fs-4 text-center alert alert-warning">
                <i class="bi bi-car-front-fill"></i> Đơn đăng ký salon của bạn đang được quản trị viên xem xét phê duyệt,
                <br> vui lòng chờ thông báo qua <strong>tin nhắn</strong> hoặc <strong>email</strong> của bạn để nhận
                kết quả.
            </div>
        @else
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <div class="product-st-card1">
                            <div class="product-img">
                                <div class="product-price">
                                    <span>$7,656.00</span>
                                </div>
                                <a href="#" class="fav" tabindex="0">
                                    <svg width="14" height="13" viewBox="0 0 14 14"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                                        </path>
                                    </svg>
                                </a>
                                <div class="product-img-slider">
                                    <img class="img-fluid" src="images/product-st-02.png" alt="image">
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="location">
                                    <a href="#" tabindex="0"><i class="bi bi-geo-alt"></i> Panama City</a>
                                </div>
                                <h6><a href="car-deatils.html" tabindex="0">Volkswagen Golf-2023</a></h6>

                                <div class="content-btm">
                                    <a class="view-btn2" href="car-deatils.html" tabindex="0">
                                        <svg width="35" height="21" viewBox="0 0 35 21"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11 20C5.47715 20 1 15.7467 1 10.5C1 5.25329 5.47715 1 11 1"
                                                stroke-linecap="round"></path>
                                            <path
                                                d="M14.2597 3C14.1569 3 14.0583 3.04166 13.9856 3.11582C13.9129 3.18997 13.8721 3.29055 13.8721 3.39542C13.8721 3.50029 13.9129 3.60086 13.9856 3.67502C14.0583 3.74917 14.1569 3.79083 14.2597 3.79083H15.8104C15.9132 3.79083 16.0118 3.74917 16.0845 3.67502C16.1572 3.60086 16.198 3.50029 16.198 3.39542C16.198 3.29055 16.1572 3.18997 16.0845 3.11582C16.0118 3.04166 15.9132 3 15.8104 3H14.2597ZM16.7795 3C16.6767 3 16.5781 3.04166 16.5054 3.11582C16.4327 3.18997 16.3919 3.29055 16.3919 3.39542C16.3919 3.50029 16.4327 3.60086 16.5054 3.67502C16.5781 3.74917 16.6767 3.79083 16.7795 3.79083H21.3346C21.4374 3.79083 21.536 3.74917 21.6087 3.67502C21.6814 3.60086 21.7222 3.50029 21.7222 3.39542C21.7222 3.29055 21.6814 3.18997 21.6087 3.11582C21.536 3.04166 21.4374 3 21.3346 3H16.7795Z">
                                            </path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M15.2292 5.76953C15.1264 5.76953 15.0278 5.81119 14.9551 5.88535C14.8824 5.9595 14.8415 6.06008 14.8415 6.16495C14.8415 6.26982 14.8824 6.3704 14.9551 6.44455C15.0278 6.51871 15.1264 6.56037 15.2292 6.56037H24.1454C25.653 6.56037 26.5822 6.79999 27.3256 7.18493C27.9575 7.51194 28.4672 7.9467 29.1055 8.49119C29.2375 8.60368 29.3749 8.72073 29.5201 8.84271L29.6101 8.91824L29.726 8.93069C33.2653 9.31069 34.0622 10.5309 34.2246 11.1557V12.6893C34.2246 12.7942 34.1838 12.8948 34.1111 12.9689C34.0384 13.0431 33.9398 13.0847 33.8369 13.0847H32.8356C32.6511 11.9627 31.6943 11.1077 30.5418 11.1077C29.3893 11.1077 28.4325 11.9627 28.248 13.0847H21.2058C21.0212 11.9627 20.0645 11.1077 18.912 11.1077C17.7594 11.1077 16.8027 11.9627 16.6182 13.0847H14.7446C14.6418 13.0847 14.5432 13.1264 14.4705 13.2006C14.3978 13.2747 14.3569 13.3753 14.3569 13.4802C14.3569 13.585 14.3978 13.6856 14.4705 13.7598C14.5432 13.8339 14.6418 13.8756 14.7446 13.8756H16.6182C16.8027 14.9976 17.7594 15.8527 18.912 15.8527C20.0645 15.8527 21.0212 14.9976 21.2058 13.8756H28.248C28.4325 14.9976 29.3893 15.8527 30.5418 15.8527C31.6943 15.8527 32.6511 14.9976 32.8356 13.8756H33.8369C34.1454 13.8756 34.4412 13.7506 34.6593 13.5281C34.8774 13.3057 34.9999 13.0039 34.9999 12.6893V11.0626L34.99 11.0187C34.7431 9.92754 33.5791 8.57502 29.9239 8.15706C29.8217 8.07086 29.7215 7.98505 29.6227 7.90063C28.9828 7.35397 28.3942 6.851 27.6766 6.4795C26.7966 6.02418 25.7391 5.76953 24.1454 5.76953H15.2292ZM28.9912 13.4802C28.9912 13.0607 29.1545 12.6584 29.4453 12.3618C29.7361 12.0651 30.1306 11.8985 30.5418 11.8985C30.9531 11.8985 31.3475 12.0651 31.6383 12.3618C31.9291 12.6584 32.0925 13.0607 32.0925 13.4802C32.0925 13.8996 31.9291 14.302 31.6383 14.5986C31.3475 14.8952 30.9531 15.0618 30.5418 15.0618C30.1306 15.0618 29.7361 14.8952 29.4453 14.5986C29.1545 14.302 28.9912 13.8996 28.9912 13.4802ZM18.912 11.8985C18.5007 11.8985 18.1063 12.0651 17.8155 12.3618C17.5247 12.6584 17.3613 13.0607 17.3613 13.4802C17.3613 13.8996 17.5247 14.302 17.8155 14.5986C18.1063 14.8952 18.5007 15.0618 18.912 15.0618C19.3232 15.0618 19.7176 14.8952 20.0084 14.5986C20.2992 14.302 20.4626 13.8996 20.4626 13.4802C20.4626 13.0607 20.2992 12.6584 20.0084 12.3618C19.7176 12.0651 19.3232 11.8985 18.912 11.8985Z">
                                            </path>
                                            <path
                                                d="M11 8.14151C11 8.03664 11.0408 7.93606 11.1135 7.86191C11.1862 7.78775 11.2848 7.74609 11.3877 7.74609H15.7489C15.8517 7.74609 15.9503 7.78775 16.023 7.86191C16.0957 7.93606 16.1365 8.03664 16.1365 8.14151C16.1365 8.24638 16.0957 8.34696 16.023 8.42111C15.9503 8.49527 15.8517 8.53693 15.7489 8.53693H11.3877C11.2848 8.53693 11.1862 8.49527 11.1135 8.42111C11.0408 8.34696 11 8.24638 11 8.14151ZM26.6836 8.65278C26.7563 8.72694 26.7971 8.82749 26.7971 8.93234C26.7971 9.03719 26.7563 9.13775 26.6836 9.2119L26.6532 9.24294C26.2897 9.61367 25.7968 9.82197 25.2828 9.82203H19.1409C19.0381 9.82203 18.9395 9.78037 18.8668 9.70622C18.7941 9.63206 18.7532 9.53149 18.7532 9.42662C18.7532 9.32174 18.7941 9.22117 18.8668 9.14701C18.9395 9.07286 19.0381 9.0312 19.1409 9.0312H25.2826C25.4354 9.03122 25.5866 9.00055 25.7277 8.94095C25.8688 8.88134 25.997 8.79397 26.105 8.68382L26.1355 8.65278C26.2082 8.57866 26.3068 8.53701 26.4096 8.53701C26.5123 8.53701 26.6109 8.57866 26.6836 8.65278ZM19.5286 17.7304C19.5286 17.6255 19.5694 17.5249 19.6421 17.4508C19.7148 17.3766 19.8134 17.335 19.9162 17.335H21.5638C21.6666 17.335 21.7652 17.3766 21.8379 17.4508C21.9106 17.5249 21.9514 17.6255 21.9514 17.7304C21.9514 17.8352 21.9106 17.9358 21.8379 18.01C21.7652 18.0841 21.6666 18.1258 21.5638 18.1258H19.9162C19.8134 18.1258 19.7148 18.0841 19.6421 18.01C19.5694 17.9358 19.5286 17.8352 19.5286 17.7304ZM22.2422 17.7304C22.2422 17.6255 22.283 17.5249 22.3557 17.4508C22.4284 17.3766 22.527 17.335 22.6299 17.335H26.991C27.0939 17.335 27.1925 17.3766 27.2652 17.4508C27.3379 17.5249 27.3787 17.6255 27.3787 17.7304C27.3787 17.8352 27.3379 17.9358 27.2652 18.01C27.1925 18.0841 27.0939 18.1258 26.991 18.1258H22.6299C22.527 18.1258 22.4284 18.0841 22.3557 18.01C22.283 17.9358 22.2422 17.8352 22.2422 17.7304Z">
                                            </path>
                                        </svg>
                                        Xem xe
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @else
        @push('styles')
            <style>
                ::placeholder {
                    font-size: 15px
                }
            </style>
        @endpush
        <div class="container my-5">
            <h2 class="text-left mb-4">Đăng ký salon</h2>

            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <strong>🚗 Tạo Salon Riêng Của Bạn - Lợi Ích Không Thể Bỏ Qua! 🚗</strong>
                <p>
                    Chào quý khách hàng thân mến, chúng tôi vô cùng hạnh phúc thông báo về tính năng mới trên trang web
                    bán
                    ô tô cũ của chúng tôi - <strong>"Salon Riêng"</strong>!
                </p>
                <p>
                <ul>
                    <li>Tận hưởng trang riêng dành cho salon của bạn</li>
                    <li>Giúp salon của bạn tiếp cận nhiều khách hàng hơn</li>
                    <li>Tăng cơ hội bán hàng</li>
                </ul>
                </p>
            </div>

            <form id="regForm" action="{{ route('registerSalon') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div style="text-align:center;margin-top:40px;">
                    <span class="step"></span>
                    <span class="step"></span>
                </div>

                <div class="tab">
                    <div class="row">
                        <!-- Hình ảnh -->
                        <div class="mb-3 col-12">
                            <label for="imageUpload" class="form-label fw-bold">Hình ảnh cửa hàng</label>

                            <input type="file" class="form-control" id="imageUpload" name="images[]" multiple
                                accept="image/*" style="height: 100px;line-height:100px">
                            <div class="image-preview-salon mt-2"></div>
                        </div>

                        <!-- Tên cửa hàng -->
                        <div class="mb-3 col-6">
                            <label for="storeName" class="form-label fw-bold">Tên cửa hàng</label>
                            <input type="text" class="form-control form-control-lg" id="storeName"
                                placeholder="vd: Son Tung Auto" name="storeName" required>
                        </div>

                        <!-- Địa chỉ -->
                        <div class="mb-3 col-6">
                            <label for="storeAddress" class="form-label fw-bold">Địa chỉ cửa hàng</label>
                            <input type="text" class="form-control form-control-lg" id="storeAddress"
                                placeholder="vd: 2 Tôn Thất Thuyết, Mỹ Đình, Từ Liêm, Hà Nội" name="storeAddress"
                                required>
                        </div>

                        <!-- Giới thiệu cửa hàng -->
                        <div class="mb-3 col-12">
                            <label for="storeIntro" class="form-label fw-bold">Giới thiệu cửa hàng</label>
                            <textarea class="form-control form-control-lg" id="storeIntro"
                                placeholder="vd: Sơn Tùng Auto Phân phối các dòng xe nhập khẩu cao cấp" name="storeIntro" rows="4" required></textarea>
                        </div>

                        <!-- Số điện thoại -->
                        <div class="mb-3 col-6">
                            <label for="phoneNumber" class="form-label fw-bold">Số điện thoại</label>
                            <input type="tel" class="form-control form-control-lg" id="phoneNumber"
                                placeholder="vd: 0909899898" name="phoneNumber" required>
                        </div>

                        <!-- Email -->
                        <div class="mb-3 col-6">
                            <label for="email" class="form-label fw-bold">Email</label>
                            <input type="email" class="form-control form-control-lg" id="email"
                                placeholder="vd: example@gmail.com" name="email" required>
                        </div>

                        <!-- Thông báo thanh toán phí hàng tháng -->
                        <div class="alert alert-warning">
                            <strong>Thông báo:</strong> Bạn cần thanh toán phí hàng tháng để duy trì cửa hàng (300,000
                            VND/tháng).
                        </div>
                    </div>
                </div>

                <div class="tab">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Thông báo chi tiết</h5>
                            <p class="card-text">
                                Bạn cần thanh toán <strong>300,000 VND / tháng</strong> từ số dư tài khoản của mình để
                                đăng
                                ký cửa hàng. <br>
                                Bạn cần gia hạn trước khi hết hạn vào ngày (
                                <strong>{{ \Carbon\Carbon::now()->addDays(30) }}</strong> )
                            </p>
                            <br>
                            <h6>Xác nhận lại thông tin</h6>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item storeName">Tên cửa hàng: </li>
                                <li class="list-group-item storeAddress">Địa chỉ cửa hàng: </li>
                                <li class="list-group-item storePhoneNumber">Số điện thoại: </li>
                                <li class="list-group-item storeEmail">Email: </li>
                                <li class="list-group-item storeIntro">Mô tả: </li>
                            </ul>
                            <div class="mt-3" id="result">
                                <button type="button" class="btn btn-primary" id="checkBalance">Kiểm tra số
                                    dư</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="overflow:auto;">
                    <div style="float:right;">
                        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Quay lại</button>
                        <button type="button" id="nextBtn">Tiếp tục</button>
                    </div>
                </div>
            </form>
        </div>

        @push('styles')
            <style>
                /* Hide all steps by default: */
                .tab {
                    display: none;
                }

                button {
                    background-color: #04AA6D;
                    color: #ffffff;
                    border: none;
                    padding: 10px 20px;
                    font-size: 17px;
                    font-family: Raleway;
                    cursor: pointer;
                }

                button:hover {
                    opacity: 0.8;
                }

                #prevBtn {
                    background-color: #bbbbbb;
                }

                /* Make circles that indicate the steps of the form: */
                .step {
                    height: 15px;
                    width: 15px;
                    margin: 0 2px;
                    background-color: #bbbbbb;
                    border: none;
                    border-radius: 50%;
                    display: inline-block;
                    opacity: 0.5;
                }

                .step.active {
                    opacity: 1;
                }

                /* Mark the steps that are finished and valid: */
                .step.finish {
                    background-color: #04AA6D;
                }
            </style>
        @endpush
        @push('scripts')
            <script>
                $(document).ready(function() {
                    // Image preview
                    $("#imageUpload").change(function() {
                        $(".image-preview-salon").html("");
                        readURL(this);
                    });

                    function readURL(input) {
                        if (input.files && input.files.length > 0) {
                            for (let i = 0; i < input.files.length; i++) {
                                const reader = new FileReader();
                                reader.onload = function(e) {
                                    $(".image-preview-salon").append(
                                        `<img src="${e.target.result}" class="img-thumbnail mx-1" width="100">`);
                                };
                                reader.readAsDataURL(input.files[i]);
                            }
                        }
                    }
                });
            </script>

            <script>
                $(document).ready(function() {
                    $('#checkBalance').on('click', function() {
                        var userId = 1; // Thay đổi userId theo người dùng hiện tại

                        $.ajax({
                            url: '/account-balance',
                            type: 'POST',
                            dataType: 'json',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            data: {
                                user_id: {{ auth()->id() }}
                            },
                            success: function(response) {
                                var resultMessage = response.message;
                                $('#result').html(response.message);

                                console.log(response);
                            },
                            error: function(error) {
                                console.log(error);
                            }
                        });
                    });
                });
            </script>

            <script>
                var currentTab = 0;

                showTab(currentTab);

                function showTab(n) {
                    $(".tab").hide();
                    $(".tab").eq(n).show();

                    $("#prevBtn").toggle(n !== 0);

                    if (n === $(".tab").length - 1) {
                        $("#nextBtn").text("Hoàn tất");
                    } else {
                        $("#nextBtn").text("Tiếp tục");
                    }

                    fixStepIndicator(n);
                }

                function nextPrev(n) {
                    var x = $(".tab");

                    x.eq(currentTab).hide();

                    currentTab = currentTab + n;

                    if (currentTab >= x.length) {
                        $("#regForm").submit();
                        return false;
                    }

                    showTab(currentTab);
                }

                function fixStepIndicator(n) {
                    $(".step").removeClass("active");
                    $(".step").eq(n).addClass("active");
                }

                $("#nextBtn").click(function() {
                    // Reset previous error messages
                    $(".text-danger").remove();

                    // Validate the form fields
                    var isValid = true;

                    // Validate images
                    var imageUpload = $("#imageUpload");
                    if (imageUpload.get(0).files.length === 0) {
                        displayError(imageUpload, "Vui lòng tải lên ít nhất một hình ảnh.");
                        isValid = false;
                    }

                    // Validate storeName
                    isValid = validateField($("#storeName"), "Vui lòng nhập tên cửa hàng.") && isValid;

                    // Validate storeAddress
                    isValid = validateField($("#storeAddress"), "Vui lòng nhập địa chỉ cửa hàng.") && isValid;

                    // Validate city
                    isValid = validateField($("#city"), "Vui lòng chọn thành phố.") && isValid;

                    // Validate district
                    isValid = validateField($("#district"), "Vui lòng chọn quận/huyện.") && isValid;

                    // Validate storeIntro
                    isValid = validateField($("#storeIntro"), "Vui lòng nhập giới thiệu cửa hàng.") && isValid;

                    // Validate phoneNumber
                    isValid = validateField($("#phoneNumber"), "Vui lòng nhập số điện thoại.") && isValid;

                    // Validate email
                    isValid = validateEmailField($("#email")) && isValid;

                    // // If all validations pass, you can submit the form or perform other actions
                    if (isValid) {
                        saveFormDataToLocalStorage();
                        nextPrev(1)


                        var storedStoreName = getSpecificFieldFromLocalStorage("storeName");
                        var storedStoreAddress = getSpecificFieldFromLocalStorage("storeAddress");
                        var storedStorePhoneNumber = getSpecificFieldFromLocalStorage("phoneNumber");
                        var storedStorestoreIntro = getSpecificFieldFromLocalStorage("storeIntro");
                        var storedStoreEmail = getSpecificFieldFromLocalStorage("email");

                        if (storedStoreName) {
                            $(".storeName").html("Tên cửa hàng: <strong>" + storedStoreName + "</strong>");
                        }
                        if (storedStoreAddress) {
                            $(".storeAddress").html("Địa chỉ cửa hàng: <strong>" + storedStoreAddress + "</strong>");
                        }

                        if (storedStorePhoneNumber) {
                            $(".storePhoneNumber").html("Số điện thoại: <strong>" + storedStorePhoneNumber + "</strong>");
                        }
                        if (storedStorestoreIntro) {
                            $(".storeIntro").html("Số điện thoại: <strong>" + storedStorestoreIntro + "</strong>");
                        }
                        if (storedStoreEmail) {
                            $(".storeEmail").html("Số điện thoại: <strong>" + storedStoreEmail + "</strong>");
                        }
                    } else {
                        return false;
                    }
                });

                // Function to validate a field and display error message
                function validateField(field, errorMessage) {
                    if (field.val() === "") {
                        displayError(field, errorMessage);
                        return false;
                    }
                    return true;
                }

                // Function to validate email format and display error message
                function validateEmailField(emailField) {
                    var email = emailField.val();
                    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                    if (email === "" || !emailRegex.test(email)) {
                        displayError(emailField, "Vui lòng nhập một địa chỉ email hợp lệ.");
                        return false;
                    }
                    return true;
                }

                // Function to display error message next to the field
                function displayError(field, message) {
                    field.after("<span class='text-danger'>" + message + "</span>");
                }

                function saveFormDataToLocalStorage() {
                    var formData = {
                        images: $("#imageUpload").val(),
                        storeName: $("#storeName").val(),
                        storeAddress: $("#storeAddress").val(),
                        storeIntro: $("#storeIntro").val(),
                        phoneNumber: $("#phoneNumber").val(),
                        email: $("#email").val()
                    };

                    localStorage.setItem("formData", JSON.stringify(formData));
                }

                function getSpecificFieldFromLocalStorage(fieldName) {
                    var formDataString = localStorage.getItem("formData");
                    if (formDataString) {
                        var formData = JSON.parse(formDataString);
                        return formData[fieldName] || null;
                    }
                    return null;
                }
            </script>
        @endpush

    @endif
</x-partials.layout-client>
