<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name">Username</div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <ul class="nav menu">
        <li class="active"><a href="index.html"><em class="fa fa-dashboard">&nbsp;</em> Thống kê</a></li>
        <li>
            <a href="{{ route('collaborators.cars') }}">
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
                Duyệt tin mua xe
            </a>
        </li>
        <li><a href="charts.html"><em class="fa fa-bar-chart">&nbsp;</em>Duyệt tin bán xe</a></li>
        <li><a href="elements.html"><em class="fa fa-toggle-off">&nbsp;</em> Rút tiền</a></li>
        <li><a href="elements.html"><em class="fa fa-toggle-off">&nbsp;</em> Tố cáo</a></li>
        <li><a href="panels.html"><em class="fa fa-clone">&nbsp;</em> Alerts &amp; Panels</a></li>
        {{-- <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
                <em class="fa fa-navicon">&nbsp;</em> Multilevel <span data-toggle="collapse" href="#sub-item-1"
                    class="icon pull-right"><em class="fa fa-plus"></em></span>
            </a>
            <ul class="children collapse" id="sub-item-1">
                <li><a class="" href="#">
                        <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 1
                    </a></li>
                <li><a class="" href="#">
                        <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 2
                    </a></li>
                <li><a class="" href="#">
                        <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3
                    </a></li>
            </ul>
        </li> --}}
        <li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> Đăng xuất</a></li>
    </ul>
</div>
