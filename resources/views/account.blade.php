@section('page_title')
    Đăng nhập vào Drivco
@endsection

@push('styles')
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .wrapper-login {
            align-items: center;
            display: flex;
            inset: 0;
            justify-content: center;
            position: fixed;
            z-index: 999;
        }

        .wrapper-login_overlay {
            -webkit-animation-duration: .3s;
            animation-duration: .3s;
            -webkit-animation-name: AuthModal_inline-urvhums__bFRaj;
            animation-name: AuthModal_inline-urvhums__bFRaj;
            -webkit-animation-timing-function: linear;
            animation-timing-function: linear;
            background: rgba(0, 0, 0, .4);
            inset: 0;
            backdrop-filter: blur(11.5px);
            -webkit-backdrop-filter: blur(11.5px);
            position: absolute;
        }

        .wrapper-login_closeBtn {
            align-items: center;
            background: #fff;
            border-radius: 50%;
            color: #333;
            cursor: pointer;
            display: flex;
            font-size: 1.4rem;
            height: 40px;
            justify-content: center;
            line-height: 0;
            position: absolute;
            right: 16px;
            top: 16px;
            width: 40px;
            z-index: 12;
            border: 2px solid #f1f1f1;
        }

        .wrapper-login_closeBtn span {
            margin-top: -4px;
        }

        .wrapper-login_btn svg {
            fill: #fff
        }

        .wrapper-login_main {
            align-items: center;
            display: flex;
            justify-content: center;
            min-height: 100vh;
            overflow: hidden;
            position: relative;
            -webkit-user-select: none;
            -ms-user-select: none;
            user-select: none;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .wrapper-login_container {
            align-items: center;
            display: flex;
            flex-direction: column;
            position: relative;
            text-align: center;
            z-index: 2;
        }

        @media (min-width: 0px) and (max-width: 767px) {
            .wrapper-login_container {
                /* height: 100vh !important; */
            }

            .wrapper-login_content {
                min-height: 100%;
            }

            .Login_acceptTerm {
                padding-top: 30px !important;
                padding-left: 13px !important;
                padding-right: 13px !important;
            }

            .wrapper-login_header h1 {
                font-size: 22px !important;
            }
        }

        .wrapper-login_content,
        .wrapper-register_content,
        .wrapper-options_content {
            --width: 640px;
            background: #fff;
            border-radius: 8px;
            max-width: calc(100vw - 32px);
            min-height: 600px;
            padding: 48px 16px 60px;
            position: relative;
            width: var(--width);
            overflow-y: scroll;
        }

        .wrapper-login_header h1 {
            color: #292929;
            font-size: 28px;
            font-weight: 700;
            line-height: 1.4;
            margin: 12px 0;
        }

        .wrapper-login_header p {
            font-size: .9rem;
            line-height: 1.5;
            margin: 0 auto;
            width: min(400px, 90%);
            color: red;
        }

        .wrapper-login_mainStep {
            margin-top: 24px;
        }

        .signInButton {
            --height: 44px;
            background-color: #fff;
            border: 2px solid #dce0e3;
            border-radius: 44px;
            display: inline-block;
            height: var(--height);
            /*line-height: var(--height);*/
            padding-left: 16px;
            position: relative;
            text-align: center;
            max-width: 320px;
            width: 100%;
            margin-top: 14px;
            transition: all .2s linear;
        }

        .signInButton:hover {
            background-color: #dce0e3;
            cursor: pointer;
        }

        .signInButton svg {
            width: 20px;
            height: 20px;
            left: 16px;
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .signInButton span {
            color: #35414c;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 600;
            line-height: 40px;
            outline: 0;
            text-align: center;
        }

        .loginFormControl-btn {
            text-align: center;
            width: 100%;
            height: 44px;
            max-height: 100%;
            padding: 8px 16px;
            border: none;
            outline: none;
            border-radius: 44px;
            color: #fff;
            font-weight: 600;
            margin-top: 12px;
            background-image: radial-gradient(circle 897px at 9% 80.3%, rgba(55, 60, 245, 1) 0%, rgba(234, 161, 15, 0.90) 100.2%);
            transition: background-image 1.5s linear;
        }

        .loginFormControl-btn:hover {
            cursor: pointer;
            background-image: linear-gradient(110.6deg, rgba(184, 142, 252, 1) 2.2%, rgba(104, 119, 244, 1) 100.2%);
        }

        .wrapper-login_Register {
            font-size: 1rem;
            line-height: 1.8;
            margin-bottom: 0;
            padding: 24px 16px 0;
        }

        .wrapper-login_Register a,
        .Login_acceptTerm a {
            color: #46d993;
            font-weight: 500;
            text-decoration: none;
            cursor: pointer;
        }

        .Login_acceptTerm {
            bottom: 0;
            color: #666;
            font-size: .8rem;
            left: 0;
            line-height: 1.6;
            padding: 12px 132px;
            position: absolute;
            right: 0;
        }

        .Login_backBtn__Ua2VX {
            color: #404040;
            font-size: 2rem;
            left: 0;
            opacity: .5;
            padding: 32px;
            position: absolute;
            top: 0;
            cursor: pointer;
        }

        .formInput {
            font-size: 18px;
            font-weight: 500;
            text-align: left;
        }

        .formInput.inputWrap input {
            font-size: 1rem;
            width: 100%;
            outline: none;
            padding: 6px 20px;
            background: rgba(22, 24, 35, .06);
            border: 1.5px solid rgba(22, 24, 35, .06);
            border-radius: 44px;
            display: flex;
            overflow: hidden;
            margin-top: 12px;
            transition: all .3s;
        }

        .formInput.inputWrap input:focus {
            border-color: #46d993;
        }

        .wrapper-login_formContainer {
            margin-top: 25px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .loginFormControl {
            max-width: 100%;
            width: 380px;
        }

        .wrapper-login_main ::placeholder {
            color: #757575;
            font-size: .9rem;
        }
    </style>
@endpush

<x-partials.layout-client>

    <div class="wrapper-login">
        <div class="wrapper-login_overlay"></div>
        <div class="wrapper-login_form">
            <button class="wrapper-login_closeBtn" onclick="window.location.href='{{route('homepage')}}'">
                <span>x</span>
            </button>

            <div class="wrapper-login_main">
                <div class="wrapper-login_container" x-data="{ isOption: true, isLogin: false, isRegister: false }">
                    <div class="wrapper-options_content" x-show="isOption">
                        <div class="wrapper-login_header">
                            <a href="/"><img src="https://drivco.shop/images/favicon/apple-touch-icon.png"
                                    width="40" height="40" alt=""></a>
                            <h1>Đăng ký tài khoản Drivco</h1>
                            <p>Mỗi người nên sử dụng riêng một tài khoản, tài khoản nhiều người sử dụng chung có thể sẽ
                                bị khóa.</p>
                        </div>

                        <div class="wrapper-login_mainStep">
                            <div class="signInButton" @click="isLogin = true;isOption = false;isRegister = false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                    <path
                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z" />
                                </svg>
                                <span>Sử dụng email đăng nhập</span>
                            </div>
                            <div class="signInButton" onclick="window.location.href='{{route('google.login')}}'">
                                <svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid"
                                    viewBox="0 0 256 262">
                                    <path fill="#4285F4"
                                        d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027">
                                    </path>
                                    <path fill="#34A853"
                                        d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1">
                                    </path>
                                    <path fill="#FBBC05"
                                        d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782">
                                    </path>
                                    <path fill="#EB4335"
                                        d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251">
                                    </path>
                                </svg>
                                <span>Đăng nhập bằng google</span>
                            </div>
                        </div>
                        <p class="wrapper-login_Register">Bạn chưa có tài khoản? <a
                                @click="isLogin = false;isOption = false;isRegister = true">Đăng ký</a></p>

                        <div class="Login_acceptTerm">
                            Việc bạn tiếp tục sử dụng trang web này đồng nghĩa bạn đồng ý với <a
                                href="javascript:void(0)" target="_top">điều khoản sử dụng</a> của chúng
                            tôi.
                        </div>

                        @if ($errors->any())
                            <div class="alert alert-danger mt-4">
                                <ul class="m-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>

                    <div class="wrapper-login_content" x-show="isLogin" x-trap="isLogin">
                        <div class="Login_backBtn__Ua2VX" @click="isLogin = false;isOption = true;isRegister = false">
                            <svg style="width: 14px;" aria-hidden="true" focusable="false" data-prefix="fas"
                                data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10 " role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <path fill="currentColor"
                                    d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
                                </path>
                            </svg>
                        </div>
                        <div class="wrapper-login_header">
                            <a href="/"><img src="https://drivco.shop/images/favicon/apple-touch-icon.png"
                                    width="40" height="40" alt=""></a>
                            <h1>Chào mừng đến với Drivco</h1>
                            <p>Mỗi người nên sử dụng riêng một tài khoản, tài khoản nhiều người sử dụng chung có thể sẽ
                                bị khóa.</p>
                        </div>
                        <div class="wrapper-login_formContainer">
                            <form action="{{ route('login') }}" id="lgForm" method="POST" class="loginFormControl">
                                @csrf
                                <div class="formInput" style="margin-left: 10px;">
                                    Đăng nhập với email
                                </div>
                                <div class="formInput inputWrap">
                                    <input autofocus class="login" type="email" id="lgEmail" @error('email') border border-danger @enderror
                                        name="email" placeholder="Địa chỉ email">
                                    <small class="text-danger fw-bold ml-2" style="font-size:13px"></small>
                                </div>
                                <div class="formInput inputWrap">
                                    <input class="login" type="password" id="lgPassword"
                                        @error('password') border border-danger @enderror name="password"
                                        placeholder="Mật khẩu">
                                    <small class="text-danger fw-bold ml-2" style="font-size:13px"></small>
                                </div>
                                <div class="formInput inputWrap">
                                    <button class="loginFormControl-btn">Đăng nhập</button>
                                </div>
                            </form>
                            <p class="wrapper-login_Register" style="padding: 30px 0 0">Bạn chưa có tài khoản? <a
                                    @click="isLogin = false;isOption = false;isRegister = true">Đăng ký</a></p>
                            <p class="wrapper-login_Register" style="padding-top: 3px;"><a href="/password/reset">Quên
                                    mật khẩu?</a></p>
                        </div>
                        <div class="Login_acceptTerm">
                            Việc bạn tiếp tục sử dụng trang web này đồng nghĩa bạn đồng ý với <a
                                href="javascript:void(0)" target="_top">điều khoản sử dụng</a> của chúng
                            tôi.
                        </div>
                    </div>

                    <div class="wrapper-register_content" x-show="isRegister" x-trap="isRegister">
                        <div class="Login_backBtn__Ua2VX" @click="isLogin = false;isOption = true;isRegister = false">
                            <svg style="width: 14px;" aria-hidden="true" focusable="false" data-prefix="fas"
                                data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10 " role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <path fill="currentColor"
                                    d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
                                </path>
                            </svg>
                        </div>
                        <div class="wrapper-login_header">
                            <a href="/"><img src="https://drivco.shop/images/favicon/apple-touch-icon.png"
                                    width="40" height="40" alt=""></a>
                            <h1>Đăng ký tài khoản Drivco</h1>
                            <p>Mỗi người nên sử dụng riêng một tài khoản, tài khoản nhiều người sử dụng chung có thể sẽ
                                bị khóa.</p>
                        </div>
                        <div class="wrapper-login_formContainer">
                            <form id="signup" class="loginFormControl" action="{{ route('register') }}"
                                method="POST">
                                @csrf
                                <div class="formInput" style="margin-left: 10px;">
                                    Đăng ký với email
                                </div>
                                <div class="formInput inputWrap">
                                    <input class="register" name="name" autofocus class="@error('name') border-danger @enderror"
                                        type="text" placeholder="Họ và tên" id="username">
                                    <small class="text-danger fw-bold ml-2" style="font-size:13px"></small>
                                </div>
                                <div class="formInput inputWrap">
                                    <input class="register" name="email" class="@error('email') border-danger @enderror"
                                        type="email" placeholder="Địa chỉ email" id="email">
                                    <small class="text-danger fw-bold ml-2" style="font-size:13px"></small>
                                </div>
                                <div class="formInput inputWrap">
                                    <input class="register" name="password" class="@error('password') border-danger @enderror"
                                        type="password" placeholder="Mật khẩu" id="password">
                                    <small class="text-danger fw-bold ml-2" style="font-size:13px"></small>
                                </div>
                                <div class="formInput inputWrap">
                                    <input class="register" name="password_confirmation"
                                        class="@error('password') border-danger @enderror" type="password"
                                        placeholder="Xác nhận mật khẩu" id="confirm-password">
                                    <small class="text-danger fw-bold ml-2" style="font-size:13px"></small>
                                </div>
                                <div class="formInput inputWrap">
                                    <button type="submit" class="loginFormControl-btn">Đăng
                                        ký</button>
                                </div>
                            </form>
                            <p class="wrapper-login_Register" style="padding: 30px 0 0">Bạn đã có tài khoản? <a
                                    @click="isLogin = true;isRegister = false;isOption = false">Đăng nhập</a></p>
                            <p class="wrapper-login_Register" style="padding-top: 3px;"><a
                                    href="/password/reset">Quên mật khẩu?</a></p>
                        </div>
                        <div class="Login_acceptTerm">
                            Việc bạn tiếp tục sử dụng trang web này đồng nghĩa bạn đồng ý với <a
                                href="javascript:void(0)" target="_top">điều khoản sử dụng</a> của chúng
                            tôi.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            const debounce = (fn, delay = 500) => {
                let timeoutId;
                return (...args) => {
                    if (timeoutId) {
                        clearTimeout(timeoutId);
                    }
                    timeoutId = setTimeout(() => {
                        fn.apply(null, args)
                    }, delay);
                };
            };

            const lgEmail = document.querySelector("#lgEmail");
            const lgPassword = document.querySelector("#lgPassword");
            const lgForm = document.querySelector("#lgForm");

            const checkLgEmail = () => {
                let validLg = false;
                const email = lgEmail.value.trim();
                if (!isRequired(email)) {
                    showError(lgEmail, 'Email không được bỏ trống.');
                } else if (!isEmailValid(email)) {
                    showError(lgEmail, 'Email không hợp lệ.');
                } else {
                    showSuccess(lgEmail);
                    validLg = true;
                }
                return validLg;
            };
            const checkLgPassword = () => {
                let validLg = false;

                const password = lgPassword.value.trim();

                if (!isRequired(password)) {
                    showError(lgPassword, 'Mật khẩu không được bỏ trống.');
                } else {
                    showSuccess(lgPassword);
                    validLg = true;
                }

                return validLg;
            };

            lgForm.addEventListener('submit', function(e) {
                e.preventDefault();
                let isEmailValidLg = checkLgEmail();
                let isPasswordValidLg = checkLgPassword();
                let isFormValidLg = isEmailValidLg && isPasswordValidLg;
                if (isFormValidLg) {
                    e.target.submit();
                }
            });
            lgForm.addEventListener('input', debounce(function(e) {
                switch (e.target.id) {
                    case 'lgEmail':
                        checkLgEmail();
                        break;
                    case 'lgPassword':
                        checkLgPassword();
                        break;
                }
            }));

            const usernameEl = document.querySelector('#username');
            const emailEl = document.querySelector('#email');
            const passwordEl = document.querySelector('#password');
            const confirmPasswordEl = document.querySelector('#confirm-password');

            const form = document.querySelector('#signup');


            const checkUsername = () => {

                let valid = false;

                const min = 3,
                    max = 25;

                const username = usernameEl.value.trim();

                if (!isRequired(username)) {
                    showError(usernameEl, 'Tên không được bỏ trống.');
                } else if (!isBetween(username.length, min, max)) {
                    showError(usernameEl, `Tên người dùng phải từ ${min} đến ${max} ký tự.`);
                } else {
                    showSuccess(usernameEl);
                    valid = true;
                }
                return valid;
            };


            const checkEmail = () => {
                let valid = false;
                const email = emailEl.value.trim();
                if (!isRequired(email)) {
                    showError(emailEl, 'Email không được bỏ trống.');
                } else if (!isEmailValid(email)) {
                    showError(emailEl, 'Email không hợp lệ.');
                } else {
                    showSuccess(emailEl);
                    valid = true;
                }
                return valid;
            };

            const checkPassword = () => {
                let valid = false;


                const password = passwordEl.value.trim();

                if (!isRequired(password)) {
                    showError(passwordEl, 'Mật khẩu không được bỏ trống.');
                } else if (!isPasswordSecure(password)) {
                    showError(passwordEl,
                        'Mật khẩu phải có ít nhất 8 ký tự, trong đó có ít nhất 1 ký tự viết thường, 1 ký tự viết hoa, 1 số và 1 ký tự đặc biệt trong (!@#$%^&*)'
                    );
                } else {
                    showSuccess(passwordEl);
                    valid = true;
                }

                return valid;
            };

            const checkConfirmPassword = () => {
                let valid = false;
                const confirmPassword = confirmPasswordEl.value.trim();
                const password = passwordEl.value.trim();

                if (!isRequired(confirmPassword)) {
                    showError(confirmPasswordEl, 'Vui lòng nhập lại mật khẩu');
                } else if (password !== confirmPassword) {
                    showError(confirmPasswordEl, 'Mật khẩu không trùng nhau');
                } else {
                    showSuccess(confirmPasswordEl);
                    valid = true;
                }

                return valid;
            };

            const isEmailValid = (email) => {
                const re =
                    /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(email);
            };

            const isPasswordSecure = (password) => {
                const re = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
                return re.test(password);
            };

            const isRequired = value => value === '' ? false : true;
            const isBetween = (length, min, max) => length < min || length > max ? false : true;


            const showError = (input, message) => {
                const formField = input.parentElement;
                const inputField = input;
                inputField.classList.remove('border-success');
                inputField.classList.add('border-danger');

                const error = formField.querySelector('small');
                error.textContent = message;
            };

            const showSuccess = (input) => {
                const formField = input.parentElement;
                const inputField = input;
                inputField.classList.remove('border-danger');
                inputField.classList.add('border-success');

                const error = formField.querySelector('small');
                error.textContent = '';
            };

            form.addEventListener('submit', function(e) {
                e.preventDefault();

                let isUsernameValid = checkUsername(),
                    isEmailValid = checkEmail(),
                    isPasswordValid = checkPassword(),
                    isConfirmPasswordValid = checkConfirmPassword();

                let isFormValid = isUsernameValid &&
                    isEmailValid &&
                    isPasswordValid &&
                    isConfirmPasswordValid;

                if (isFormValid) {
                    e.target.submit();
                }
            });

            form.addEventListener('input', debounce(function(e) {
                switch (e.target.id) {
                    case 'username':
                        checkUsername();
                        break;
                    case 'email':
                        checkEmail();
                        break;
                    case 'password':
                        checkPassword();
                        break;
                    case 'confirm-password':
                        checkConfirmPassword();
                        break;
                }
            }));
        </script>
    @endpush

</x-partials.layout-client>
