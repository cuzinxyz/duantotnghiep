<x-collaborators.layout>
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">Duyệt tin bán xe</li>
            </ol>
        </div>

        <div class="row display-flex">
            <div class="col-lg-6">
                <h1 class="page-header">Chi tiết bài đăng</h1>
            </div>
            <div class="col-lg-6">
                <div class="" style="text-align: end">
                    <a href="" class="btn btn-success">Duyệt bài đăng</a>
                    <a href="" class="btn btn-danger">Không duyệt</a>
                </div>
            </div>
        </div>

        <div class="panel panel-container p-6" style="padding:20px">

            <div class="row">
                <div class="col-lg-12 row">
                    <h4 class="mb-40px">Thông tin người đăng</h4>

                    <div class="col-lg-6" style="margin-bottom:20px">
                        <p>Tên người đăng</p>
                        <p class="color-black">
                            <strong>
                                {{ $car->user->name }}
                            </strong>
                        </p>
                    </div>

                    <div class="col-lg-6" style="margin-bottom:20px">
                        <p>Email</p>
                        <p class="color-black">
                            <strong>
                                {{ $car->contact['email'] }}
                            </strong>
                        </p>
                    </div>

                    <div class="col-lg-6" style="margin-bottom:20px">
                        <p>Địa chỉ</p>
                        <p class="color-black">
                            <strong>
                                {{ $car->full_address }}
                            </strong>
                        </p>
                    </div>

                    <div class="col-lg-6" style="margin-bottom:20px">
                        <p>Số điện thoại</p>
                        <p class="color-black">
                            <strong>
                                {{ $car->contact['phone'] }}
                            </strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel panel-container p-6" style="padding:20px">

            <div class="row">
                <div class="col-lg-12 row">
                    <h4 class="mb-40px">Thông tin bài đăng</h4>

                    <div class="col-lg-6">
                        <p>Tiêu đề</p>
                        <p class="color-black">
                            <strong>
                                {{ $car->title }}
                            </strong>
                        </p>
                    </div>

                    <div class="col-lg-6">
                        <p>Giá muốn bán</p>
                        <p class="color-black">
                            <strong>
                                {{ number_format($car->price, 0, '', ',') }} VNĐ
                            </strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel panel-container p6" style="padding:20px">
            <div class="row">
                <div class="col-lg-12 row">
                    <h4 class="mb-40px">Thông số kĩ thuật</h4>

                    <div class="col-lg-4" style="margin-bottom: 20px">
                        <p>Hãng xe</p>
                        <p class="color-black">
                            <strong>
                                {{ $car->brand->brand_name }}
                            </strong>
                        </p>
                    </div>

                    <div class="col-lg-4" style="margin-bottom: 20px">
                        <p>Loại xe</p>
                        <p class="color-black">
                            <strong>
                                {{ $car->model->model_name }}
                            </strong>
                        </p>
                    </div>

                    <div class="col-lg-4" style="margin-bottom: 20px">
                        <p>Số km đã đi</p>
                        <p class="color-black">
                            <strong>
                                {{ $car->car_info['mileage'] }}
                            </strong>
                        </p>
                    </div>

                    <div class="col-lg-4" style="margin-bottom: 20px">
                        <p>Số chỗ ngồi</p>
                        <p class="color-black">
                            <strong>
                                {{ $car->car_info['number_of_seats'] }}
                            </strong>
                        </p>
                    </div>

                    <div class="col-lg-4" style="margin-bottom: 20px">
                        <p>Năm sản xuất</p>
                        <p class="color-black">
                            <strong>
                                {{ $car->car_info['year_of_manufacture'] }}
                            </strong>
                        </p>
                    </div>

                    <div class="col-lg-4" style="margin-bottom: 20px">
                        <p>Động cơ</p>
                        <p class="color-black">
                            <strong>
                                {{ $car->car_info['engine'] }} cc
                            </strong>
                        </p>
                    </div>

                    <div class="col-lg-4" style="margin-bottom: 20px">
                        <p>Hộp số</p>
                        <p class="color-black">
                            <strong>
                                {{ $car->car_info['transmission'] }}
                            </strong>
                        </p>
                    </div>

                    <div class="col-lg-4" style="margin-bottom: 20px">
                        <p>Màu sắc</p>
                        <p class="color-black">
                            <strong>
                                {{ $car->car_info['color'] }}
                            </strong>
                        </p>
                    </div>

                    <div class="col-lg-4" style="margin-bottom: 20px">
                        <p>Nhiên liệu</p>
                        <p class="color-black">
                            <strong>
                                {{ $car->car_info['fuelType'] }}
                            </strong>
                        </p>
                    </div>

                    <div class="col-lg-4" style="margin-bottom: 20px">
                        <p>Một số tính năng khác</p>
                        <p class="color-black">
                            <strong>
                                {{ implode(', ', $car->car_info['features']) }}
                            </strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel panel-container p6" style="padding:20px">
            <div class="row">
                <div class="col-lg-12 row">
                    <h4 class="mb-40px">Hình ảnh, video</h4>

                    <div class="col-lg-6" style="margin-bottom: 20px">
                        <p>Hình ảnh</p>
                        <p class="color-black">
                            @foreach ($car->verhicle_image_library as $image)
                                <img src="{{ asset('storage/' . $image) }}" alt="" style="margin-bottom: 20px">
                            @endforeach
                        </p>
                    </div>

                    <div class="col-lg-6" style="margin-bottom: 20px">
                        <p>Video</p>
                        <p class="color-black">
                            <video height="240" controls style="width:100%">
                                <source src="{{asset('storage/'. $car->verhicle_videos)}}" type="video/mp4">
                                Trình duyệt của bạn không hỗ trợ xem video
                            </video>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel panel-container p6" style="padding: 20px">
            <div class="row">
                <div class="col-lg-12 row">
                    <h4 class="mb-40px">Mô tả chi tiết về xe</h4>

                    <div class="col-lg-12">
                        <span>{{$car->description}}</span>
                    </div>

                </div>
            </div>
            
        </div>
    </div><!--/.row-->
</x-collaborators.layout>
