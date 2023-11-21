<x-partials.layout-client>
    <style>
        ::placeholder {
            font-size: .5em !important;
        }
    </style>
    <div class="container">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Đăng Ký</h4>
                    {{-- <p>Don’t have any account? <button type="button" data-bs-toggle="modal"
                            data-bs-target="#signUpModal01">Sign Up</button></p> --}}
                    <button class="rounded-2 px-2" type="button" onclick="window.location.href='{{ url()->previous() }}'">
                        <i class="bi bi-house-door"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="form-inner">
                                    <label for="">Họ và tên</label>
                                    <input type="text" class="w-100 border px-1 fs-4 @error('name') is-invalid @enderror" style="height:60px"
                                        id="name" value="{{ old('name') }}" autocomplete="name" placeholder="Type your name"
                                        name="name" autofocus>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-inner">
                                    <label>Email của bạn*</label>
                                    <input class="w-100 border px-1 fs-4 @error('email') border border-danger @enderror"
                                        style="height: 60px" type="email" placeholder="Type email" id="email"
                                        type="email" value="{{ old('email') }}" autocomplete="email" name="email"
                                        autofocus>
                                </div>
                                @error('email')
                                    <p class="text-danger fw-bold" style="display:block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <div class="form-inner">
                                    <label>Mật khẩu*</label>
                                    <input class="w-100 border px-1 fs-4 @error('password') border border-danger @enderror"
                                        style="height: 60px" id="password3" type="password" placeholder="*** ***" name="password">
                                    <i class="bi bi-eye-slash d-none" id="togglePassword3"></i>
                                </div>
                                @error('password')
                                    <p class="text-danger fw-bold" style="display:block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <div class="form-inner">
                                    <label>Xác nhận mật khẩu*</label>
                                    <input class="w-100 border px-1 fs-4 @error('password') border border-danger @enderror"
                                        style="height: 60px" id="password3" type="password" placeholder="*** ***" name="password_confirmation" autocomplete="new-password">
                                    <i class="bi bi-eye-slash d-none" id="togglePassword3"></i>
                                </div>
                                @error('password')
                                    <p class="text-danger fw-bold" style="display:block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <div class="form-inner">
                                    <button class="primary-btn6 w-100 text-center justify-content-center"
                                        type="submit"><i class="text-success bi bi-door-open"></i> Đăng ký</button>
                                </div>
                            </div>
                        </div>

                        <div class="mt-3 d-flex align-items-center flex-column justify-content-center text-center" style="height:60px">
                            Nếu đã có tài khoản? <a href="{{ route('login') }}">Đăng nhập</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <section class="text-center text-lg-start">
        <!-- Jumbotron -->
        <div class="container py-4" style="max-width:1200px">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-lg-0">
                    <div class="card cascading-right"
                        style="background: hsla(0, 0%, 100%, 0.55); backdrop-filter: blur(30px);">
                        <div class="card-body shadow-5 ">
                            <h2 class="fw-bold text-center">Đăng kí</h2>
                            <form class="form" action="{{ route('register') }}" method="POST">
                                @csrf

                                <div class="flex-column">
                                    <label>Họ tên </label>
                                </div>
                                <div class="inputForm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                    </svg>
                                    <input type="text" class="input @error('name') is-invalid @enderror"
                                        id="name" value="{{ old('name') }}" autocomplete="name"
                                        name="name" autofocus>

                                </div>
                                <div class="error d-block">
                                    @error('name')
                                        <span class="invalid-feedback" style="display:block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="flex-column">
                                    <label>Email </label>
                                </div>
                                <div class="inputForm">
                                    <svg height="20" viewBox="0 0 32 32" width="20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g id="Layer_3" data-name="Layer 3">
                                            <path
                                                d="m30.853 13.87a15 15 0 0 0 -29.729 4.082 15.1 15.1 0 0 0 12.876 12.918 15.6 15.6 0 0 0 2.016.13 14.85 14.85 0 0 0 7.715-2.145 1 1 0 1 0 -1.031-1.711 13.007 13.007 0 1 1 5.458-6.529 2.149 2.149 0 0 1 -4.158-.759v-10.856a1 1 0 0 0 -2 0v1.726a8 8 0 1 0 .2 10.325 4.135 4.135 0 0 0 7.83.274 15.2 15.2 0 0 0 .823-7.455zm-14.853 8.13a6 6 0 1 1 6-6 6.006 6.006 0 0 1 -6 6z">
                                            </path>
                                        </g>
                                    </svg>
                                    <input type="text" class="input @error('email') is-invalid @enderror"
                                        id="email" type="email" value="{{ old('email') }}" autocomplete="email"
                                        name="email" autofocus>

                                </div>
                                <div class="error d-block">
                                    @error('email')
                                        <span class="invalid-feedback" style="display:block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="flex-column">
                                    <label>Password </label>
                                </div>
                                <div class="inputForm">
                                    <svg height="20" viewBox="-64 0 512 512" width="20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m336 512h-288c-26.453125 0-48-21.523438-48-48v-224c0-26.476562 21.546875-48 48-48h288c26.453125 0 48 21.523438 48 48v224c0 26.476562-21.546875 48-48 48zm-288-288c-8.8125 0-16 7.167969-16 16v224c0 8.832031 7.1875 16 16 16h288c8.8125 0 16-7.167969 16-16v-224c0-8.832031-7.1875-16-16-16zm0 0">
                                        </path>
                                        <path
                                            d="m304 224c-8.832031 0-16-7.167969-16-16v-80c0-52.929688-43.070312-96-96-96s-96 43.070312-96 96v80c0 8.832031-7.167969 16-16 16s-16-7.167969-16-16v-80c0-70.59375 57.40625-128 128-128s128 57.40625 128 128v80c0 8.832031-7.167969 16-16 16zm0 0">
                                        </path>
                                    </svg>
                                    <input type="password" class="input @error('password') is-invalid @enderror"
                                        name="password" autocomplete="current-password">
                                    <svg viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z">
                                        </path>
                                    </svg>

                                </div>
                                <div class="error d-block">
                                    @error('password')
                                        <span class="invalid-feedback" style="display:block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="flex-column">
                                    <label>Password </label>
                                </div>
                                <div class="inputForm">
                                    <svg height="20" viewBox="-64 0 512 512" width="20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m336 512h-288c-26.453125 0-48-21.523438-48-48v-224c0-26.476562 21.546875-48 48-48h288c26.453125 0 48 21.523438 48 48v224c0 26.476562-21.546875 48-48 48zm-288-288c-8.8125 0-16 7.167969-16 16v224c0 8.832031 7.1875 16 16 16h288c8.8125 0 16-7.167969 16-16v-224c0-8.832031-7.1875-16-16-16zm0 0">
                                        </path>
                                        <path
                                            d="m304 224c-8.832031 0-16-7.167969-16-16v-80c0-52.929688-43.070312-96-96-96s-96 43.070312-96 96v80c0 8.832031-7.167969 16-16 16s-16-7.167969-16-16v-80c0-70.59375 57.40625-128 128-128s128 57.40625 128 128v80c0 8.832031-7.167969 16-16 16zm0 0">
                                        </path>
                                    </svg>
                                    <input id="password-confirm" type="password" class="input @error('password') is-invalid @enderror"
                                        name="password_confirmation" autocomplete="new-password">
                                    <svg viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z">
                                        </path>
                                    </svg>

                                </div>
                                <div class="error d-block">
                                    @error('password_confirmation')
                                        <span class="invalid-feedback" style="display:block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <button class="button-submit" type="submit">Đăng kí</button>

                                </p>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img src="{{ asset('images/image_login.jpg') }}" class="w-100 rounded-4 shadow-4 h-75"
                        alt="" />
                </div>
            </div>
        </div>
        <!-- Jumbotron -->
    </section>
</x-partials.layout-client>
