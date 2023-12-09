<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="{{ Auth::user()->avatar ? asset('storage/' . Auth::user()->avatar) : 'http://placehold.it/50/30a5ff/fff' }}"
                class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name">{{ Auth::user()->name }}</div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>
                <livewire:user-status>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <ul class="nav menu">
        <li
            class="
                {{ request()->is(trim(route('collaborators.dashboard', [], false), '/') . '/*') ||
                request()->is(trim(route('collaborators.dashboard', [], false), '/'))
                    ? 'active'
                    : false }}">
            <a href="{{ route('collaborators.dashboard') }}">
                <em class="fa fa-dashboard">&nbsp;</em>
                Thống kê
            </a>
        </li>

        <li
            class="
                {{ request()->is(trim(route('collaborators.salons', [], false), '/') . '/*') ||
                request()->is(trim(route('collaborators.salons', [], false), '/'))
                    ? 'active'
                    : false }}">
            <a href="{{ route('collaborators.salons') }}">
                <em class="fa fa-calendar">&nbsp;</em>
                Duyệt salon xe
            </a>
        </li>

        <li
            class="
                {{ request()->is(trim(route('collaborators.cars', [], false), '/') . '/*') ||
                request()->is(trim(route('collaborators.cars', [], false), '/'))
                    ? 'active'
                    : false }}">
            <a href="{{ route('collaborators.cars') }}">
                <em class="fa fa-calendar">&nbsp;</em>
                Duyệt tin bán xe
            </a>
        </li>

        <li
            class="
                {{ request()->is(trim(route('collaborators.listByCar', [], false), '/') . '/*') ||
                request()->is(trim(route('collaborators.listByCar', [], false), '/'))
                    ? 'active'
                    : false }}">
            <a href="{{ route('collaborators.listByCar') }}">
                <em class="fa fa-calendar">&nbsp;</em>
                Duyệt tin mua xe
            </a>
        </li>

        <li
            class="
                {{ request()->is(trim(route('collaborators.listSupport', [], false), '/') . '/*') ||
                request()->is(trim(route('collaborators.listSupport', [], false), '/'))
                    ? 'active'
                    : false }}">
            <a href="{{ route('collaborators.listSupport') }}">
                <em class="fa fa-question">&nbsp;</em>
                Hỗ trợ
            </a>
        </li>

        <li
            class="
                {{ request()->is(trim(route('collaborators.listReport', [], false), '/') . '/*') ||
                request()->is(trim(route('collaborators.listReport', [], false), '/'))
                    ? 'active'
                    : false }}">

            <a href="{{ route('collaborators.listReport') }}">
                <em class="fa fa-bullhorn">&nbsp;</em> Tố cáo</a>
        </li>

        <li
            class="
                {{ request()->is(trim(route('collaborators.listWithDraw', [], false), '/') . '/*') ||
                request()->is(trim(route('collaborators.listWithDraw', [], false), '/'))
                    ? 'active'
                    : false }}">

            <a href="{{ route('collaborators.listWithDraw') }}">
                <em class="fa fa-credit-card">&nbsp;</em> Rút tiền</a>
        </li
            class="
                {{ request()->is(trim(route('collaborators.listReviewCar', [], false), '/') . '/*') ||
                request()->is(trim(route('collaborators.listReviewCar', [], false), '/'))
                    ? 'active'
                    : false }}">

        <li
            class="parent 
        {{ request()->is(trim(route('collaborators.listReviewCar', [], false), '/') . '/*') ||
        request()->is(trim(route('collaborators.listReviewCar', [], false), '/'))
            ? 'active'
            : false }}
        ">
            <a data-toggle="collapse" href="#sub-item-1">
                <em class="fa fa-navicon">&nbsp;</em> Bình luận <span data-toggle="collapse" href="#sub-item-1"
                    class="icon pull-right"><em class="fa fa-plus"></em></span>
            </a>
            <ul class="children 
            {{ request()->is(trim(route('collaborators.listReviewCar', [], false), '/') . '/*') ||
            request()->is(trim(route('collaborators.listReviewCar', [], false), '/'))
                ? 'collapse-in'
                : 'collapse' }}"
                id="sub-item-1">
                <li
                    class="
                {{ request()->is(trim(route('collaborators.listReviewCar', [], false), '/') . '/*') ||
                request()->is(trim(route('collaborators.listReviewCar', [], false), '/'))
                    ? 'active'
                    : false }}
                ">
                    <a class="" href="{{ route('collaborators.listReviewCar') }}">
                        <span class="fa fa-car">&nbsp;</span> Xe
                    </a>
                </li>
                <li
                    class="
                {{ request()->is(trim(route('collaborators.listReviewNew', [], false), '/') . '/*') ||
                request()->is(trim(route('collaborators.listReviewNew', [], false), '/'))
                    ? 'active'
                    : false }}
                ">
                    <a class="" href="{{ route('collaborators.listReviewNew') }}">
                        <span class="fa fa-file-text-o">&nbsp;</span> Tin tức
                    </a></li>
            </ul>
        </li>
        <li>
            <a id="logout_button" href="">
                <em class="fa fa-power-off">&nbsp;</em>
                Đăng xuất
            </a>
        </li>

        <form id="logout_user" action="{{ route('logout') }}" method="POST" style="display: none">
            @csrf
        </form>
    </ul>
</div>

@push('scripts')
    <script>
        let a = document.querySelector('#logout_button');
        a.addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector('#logout_user').submit();
        })
    </script>
@endpush
