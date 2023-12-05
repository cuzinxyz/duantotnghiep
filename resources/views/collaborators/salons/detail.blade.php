<x-collaborators.layout>
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">Duyệt salon</li>
            </ol>
        </div>

        <div class="row display-flex">
            <div class="col-lg-6">
                <h1 class="page-header">Chi tiết salon</h1>
            </div>
            <div class="col-lg-6">
                <div class="" style="text-align: end">
                    <a href="" class="btn btn-success">Duyệt </a>
                    <a href="" class="btn btn-danger">Không duyệt</a>
                </div>
            </div>
        </div>

        <div class="panel panel-container p-6" style="padding:20px">

            <div class="row">
                <div class="col-lg-12 row">
                    <h4 class="mb-40px">Thông tin khách hàng</h4>

                    <div class="col-lg-6" style="margin-bottom:20px">
                        <p>Họ và tên</p>
                        <p class="color-black">
                            <strong>
                                {{ $salon->user->name }}
                            </strong>
                        </p>
                    </div>

                    <div class="col-lg-6" style="margin-bottom:20px">
                        <p>Email</p>
                        <p class="color-black">
                            <strong>
                                {{ $salon->email }}
                            </strong>
                        </p>
                    </div>

                    <div class="col-lg-6" style="margin-bottom:20px">
                        <p>Địa chỉ</p>
                        <p class="color-black">
                            <strong>
                                {{ $salon->address }}
                            </strong>
                        </p>
                    </div>

                    <div class="col-lg-6" style="margin-bottom:20px">
                        <p>Số điện thoại</p>
                        <p class="color-black">
                            <strong>
                                {{ $salon->phone_number }}
                            </strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel panel-container p-6" style="padding:20px">

            <div class="row">
                <div class="col-lg-12 row">
                    <h4 class="mb-40px">Thông tin cửa hàng</h4>

                    <div class="col-lg-6">
                        <p>Tên cửa hàng</p>
                        <p class="color-black">
                            <strong>
                                {{ $salon->salon_name }}
                            </strong>
                        </p>
                    </div>

                    <div class="col-lg-6" style="margin-bottom: 20px">
                        <p>Hình ảnh</p>
                        <p class="color-black">
                            <img src="{{asset('storage/' . $salon->image_salon[0])}}" alt="Không có ảnh">
                        </p>
                    </div>

                    <div class="col-lg-12" >
                        <p>Mô tả</p>
                        <p class="color-black">
                            <strong>
                                {{$salon->description}}
                            </strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div><!--/.row-->
</x-collaborators.layout>
