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
                    <a id="activeSalon" href="{{route('collaborators.activeSalon', $salon->id)}}" class="btn btn-success">Duyệt </a>
                    <a href="" class="btn btn-danger rename">Không duyệt</a>
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
                            <img src="{{asset('storage/' . $salon->image_salon[0])}}" alt="Không có ảnh" style="max-width:100%">
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

    <div class="container">
        <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Vui lòng điền lý do</h4>
                    </div>
                    <div class="modal-body">
                        <form >
                            @csrf
                            <input type="text" id="reason"
                                style="
                            width: 100%;
                            height: 50px;
                            border: 1px solid #ccc;
                            border-radius: 10px;
                            outline: none;
                            font-size: 16px;">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        <button type="button" id="submit_reason" class="btn btn-primary">Lưu</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            $(function() {
                $(document).on("click", "#activeSalon", function(e) {
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

        <script>
            $(".rename").click(function(e) {
                e.preventDefault();
                let $this = $(this);
                let fileName = $(this).data("file");
                $("#basicModal").data("fileName", fileName).modal("toggle", $this);
            });


            $("#submit_reason").click(function() {
                $.ajax({
                    method: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "{{ route('collaborators.unActiveSalon', $salon->id) }}",
                    data: {
                        reason: $('#reason').val()
                    },
                    success: function(data) {
                        location.href = "{{route('collaborators.salons')}}";
                    }
                })
            })
        </script>
    @endpush
</x-collaborators.layout>
