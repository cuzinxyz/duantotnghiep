@push('styles')
    <link rel="stylesheet" href="{{ asset('css/settings-page.css') }}">
@endpush

@section('page_title')
    Cài đặt - Drivco
@endsection
<x-partials.layout-client>
    <div class="container mt-5">
        <form action="{{ route('settings') }}" method="POST" enctype="multipart/form-data" style="display: inline">
            @csrf
            <div class="row">
                <div class="col-lg-4 pb-5">
                    <!-- Account Sidebar-->
                    <div class="author-card pb-3">
                        <div class="author-card-cover"
                            style="background-image: url(https://bootdey.com/img/Content/flores-amarillas-wallpaper.jpeg);">
                            <a class="btn btn-style-1 btn-white btn-sm" href="#" data-toggle="tooltip"
                                title=""
                                data-original-title="You currently have 290 Reward points to spend">{{ number_format($user->account_balence) }}
                                đ</a>
                        </div>
                        <div class="author-card-profile">
                            <div for="avatar" class="author-card-avatar">
                                <label for="avatar" class="avatar__label">
                                    <img src="{{ auth()->user()->avatar ? Storage::url(auth()->user()->avatar) : 'https://ui-avatars.com/api/?name=' . auth()->user()->name }}"
                                        alt="Daniel Adams" id="avatar__img">
                                </label>
                                <input type="file" name="avatar" hidden id="avatar">
                            </div>
                            <div class="author-card-details">
                                <h5 class="author-card-name text-lg">{{ $user->name }} <i
                                        class="text-success ms-1 bi bi-check-circle-fill"></i></h5><span
                                    class="author-card-position">Joined {{ $user->created_at }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="wizard">
                        <nav class="list-group list-group-flush">
                            <a class="list-group-item active" href="#">
                                <i class="bi bi-gear-wide-connected"></i> Cài đặt trang cá nhân
                            </a>
                            <form action="{{ route('logout') }}" method="POST">
                                <button type="submit" class="text-start list-group-item">
                                    <i class="bi bi-box-arrow-right"></i> Đăng xuất
                                </button>
                            </form>
                        </nav>
                    </div>
                </div>
                <!-- Profile Settings-->
                <div class="col-lg-8 pb-5">
                    <div class="col-12">
                        @include('components.nofication')
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-fn">Họ tên</label>
                            <input class="form-control" type="text" id="account-fn" value="{{ $user->name }}"
                                required="" name="name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-email">E-mail</label>
                            <input class="form-control" type="email" id="account-email" value="{{ $user->email }}"
                                disabled="" name="email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-phone">Số điện thoại</label>
                            <input class="form-control" type="number" id="account-phone"
                                value="{{ $user->phone_number ? $user->phone_number : '' }}" required=""
                                name="phone_number">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-pass">Mật khẩu mới</label>
                            <input class="form-control" type="password" id="account-pass" name="password">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-confirm-pass">Xác nhận mật khẩu <span class="text-danger"
                                    style="font-size: 14px">{{ $err ? $err : '' }}</span></label>
                            <input class="form-control" type="password" id="account-confirm-pass" name="confirm">
                        </div>
                    </div>
                    <div class="col-12">
                        <hr class="mt-2 mb-3">
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                            {{-- <button></button> --}}
                            <input type="submit" class="btn btn-style-1 btn-primary" type="button" data-toast=""
                                data-toast-position="topRight" data-toast-type="success"
                                data-toast-icon="fe-icon-check-circle" data-toast-title="Success!"
                                data-toast-message="Your profile updated successfuly." value="Update Profile">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>
        const avatar__img = document.querySelector("#avatar__img");
        const avatar__input = document.querySelector("#avatar");
        // alert(avatar__input.files[0]);
        avatar__input.addEventListener("change", () => {
            avatar__img.src = URL.createObjectURL(avatar__input.files[0]);
        })
    </script>
</x-partials.layout-client>
