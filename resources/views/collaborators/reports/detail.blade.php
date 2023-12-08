<x-collaborators.layout>
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">Tố cáo</li>
            </ol>
        </div>

        <div class="row display-flex">
            <div class="col-lg-6">
                <h1 class="page-header">Chi tiết tố cáo</h1>
            </div>
            <div class="col-lg-6">
                <div class="" style="text-align: end">
                    <a  href="{{route('collaborators.warningUser', $report->id)}}"
                        class="btn btn-warning">Cảnh cáo </a>

                    <a  href="{{route('collaborators.deleteUserReported', $report->id)}}"
                        class="btn btn-danger">Xóa tài khoản bị tố cáo </a>
                    
                    <a  href="{{route('collaborators.deleteReported', $report->id)}}"
                        class="btn btn-danger">Xóa tố cáo</a>
                </div>
            </div>
        </div>

        <div class="panel panel-container p-6" style="padding:20px">

            <div class="row">
                <div class="col-lg-12 row">
                    <h4 class="mb-40px">Thông tin người tố cáo</h4>

                    <div class="col-lg-6" style="margin-bottom:20px">
                        <p>Họ tên</p>
                        <p class="color-black">
                            <strong>
                                {{ $report->fromUsers->name }}
                            </strong>
                        </p>
                    </div>

                    <div class="col-lg-6" style="margin-bottom:20px">
                        <p>Email</p>
                        <p class="color-black">
                            <strong>
                                {{ $report->fromUsers->email }}
                            </strong>
                        </p>
                    </div>

                    <div class="col-lg-6" style="margin-bottom:20px">
                        <p>Số điện thoại</p>
                        <p class="color-black">
                            <strong>
                                {{ $report->fromUsers->phone_number }}
                            </strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel panel-container p-6" style="padding:20px">

            <div class="row">
                <div class="col-lg-12 row">
                    <h4 class="mb-40px">Nội dung tố cáo</h4>

                    <div class="col-lg-6">
                        <p>Người bị tố cáo</p>
                        <p class="color-black">
                            <strong>
                                {{ $report->toUsers->name }}
                            </strong>
                        </p>
                    </div>

                    <div class="col-lg-6">
                        <p>Bài đăng bị tố cáo</p>
                        <p class="color-black">
                            <strong>
                                 {{ $report->cars->title }}
                            </strong>
                        </p>
                    </div>

                    <div class="col-lg-12">
                        <p>Nội dung </p>
                        <p class="color-black">
                            <strong>
                                 {{ $report->content }}
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
                $(document).on("click", "#activeReport", function(e) {
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
