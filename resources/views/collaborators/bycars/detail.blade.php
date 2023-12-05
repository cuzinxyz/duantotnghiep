<x-collaborators.layout>
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">Duyệt tin mua xe</li>
            </ol>
        </div>

        <div class="row display-flex">
            <div class="col-lg-6">
                <h1 class="page-header">Chi tiết bài đăng</h1>
            </div>
            <div class="col-lg-6">
                <div class="" style="text-align: end">
                    <a id="activeCar" href="{{ route('collaborators.activeCar', $demnad->id) }}"
                        class="btn btn-success">Duyệt bài
                        đăng</a>
                    <a href="{{ route('collaborators.unActiveCar', $demnad->id) }}" class="btn btn-danger">Không duyệt</a>
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
                                {{ $demnad->user->name }}
                            </strong>
                        </p>
                    </div>

                    <div class="col-lg-6" style="margin-bottom:20px">
                        <p>Email</p>
                        <p class="color-black">
                            <strong>
                                {{ $demnad->user->email }}
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
                    <h4 class="mb-40px">Nội dung bài đăng</h4>

                    <div class="col-lg-12">
                        <p>Tiêu đề</p>
                        <p class="color-black">
                            <strong>
                                {{ $demnal->content }}
                            </strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div><!--/.row-->

    @push('scripts')
        <script>
            $(function() {
                $(document).on("click", "#activeCar", function(e) {
                    e.preventDefault();
                    var link = $(this).attr("href");

                    Swal.fire({
                        title: "Xác nhận duyệt bài đăng?",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Duyệt bài!",
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = link;
                            Swal.fire("Thành công!", "Bài đăng này đã được duyệt", "success");
                        }
                    });
                });
            });
        </script>
    @endpush
</x-collaborators.layout>
