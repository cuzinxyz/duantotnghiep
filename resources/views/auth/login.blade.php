<x-partials.layout-client>

    <style>
        /* ::placeholder {
            font-size: .5em !important;
        } */
        .input_login::placeholder {
            font-size: 14px !important;
        }

        .input_login {
            /* border: 1px solid #000; */
            border: none;
            background-color: #fbf7fb;
            padding: 10px 15px;
            border-radius: 7px;
        }

        .form__login {
            box-shadow: #88bfa37a 6px 2px 16px 0px, rgba(255, 255, 255, 0.8) -6px -2px 16px 0px;
        }
    </style>
    <div class="container">
        <div class="modal-dialog modal-dialog-centered mb-5">
            <div style="border-radius: 10px" class="modal-content form__login">
                <div class="modal-header">
                    <h4 style="font-weight: 700" class="modal-title">Đăng Nhập</h4>
                    {{-- <p>Don’t have any account? <button type="button" data-bs-toggle="modal"
                            data-bs-target="#signUpModal01">Sign Up</button></p> --}}
                    <button class="rounded-2 px-2" type="button" onclick="window.location.href='{{ url()->previous() }}'">
                        <i class="bi bi-house-door"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="row g-4">
                            <div class="col-md-12">
                                <div class="form-inner">
                                    <label>Email của bạn<span class="text-danger">*</span></label>
                                    <input
                                        class="input_login w-100 border @error('email') border border-danger @enderror"
                                        style="height: 60px" type="email" placeholder="Example@gmail.com"
                                        id="email" type="email" value="{{ old('email') }}" autocomplete="email"
                                        name="email" autofocus>
                                </div>
                                @error('email')
                                    <p class="text-danger fw-bold" style="display:block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <div class="form-inner">
                                    <label>Mật khẩu<span class="text-danger">*</span></label>
                                    <input
                                        class="input_login w-100 border @error('password') border border-danger @enderror"
                                        style="height: 60px" id="password3" type="password" placeholder="*** ***"
                                        name="password">
                                    <i class="bi bi-eye-slash d-none" id="togglePassword3"></i>
                                </div>
                                @error('password')
                                    <p class="text-danger fw-bold" style="display:block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="col-lg-12">
                                <div class="form-agreement form-inner d-flex justify-content-between flex-wrap">
                                    <div class="form-group d-flex gap-1">
                                        <input type="checkbox" id="html" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <label for="html">Lưu đăng nhập</label>
                                    </div>
                                    <a style="color: #46D993" href="#" class="forgot-pass">Quên mật khẩu?</a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-inner">
                                    <button class="primary-btn6 w-100 text-center justify-content-center"
                                        type="submit"><i class="text-success bi bi-door-open"></i> Đăng nhập</button>
                                </div>
                            </div>
                        </div>

                        <div class="mt-3 d-flex align-items-center flex-column justify-content-center text-center"
                            style="height:60px;">
                            Nếu chưa có tài khoản? <a style=" color: #46D993; font-weight: 600"
                                href="{{ route('register') }}">Đăng ký
                                ngay?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-partials.layout-client>
