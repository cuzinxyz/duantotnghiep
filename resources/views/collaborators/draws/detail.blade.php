<x-collaborators.layout>
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">Duyệt yêu cầu rút tiền</li>
            </ol>
        </div>

        <div class="row display-flex">
            <div class="col-lg-6">
                <h1 class="page-header">Chi tiết rút tiền</h1>
            </div>
            <div class="col-lg-6">
                <div class="" style="text-align: end">
                    <a id="activeDraw" href="{{route('collaborators.activeWithDraw', $draw->id)}}" class="btn btn-success">Duyệt </a>
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
                                {{ $draw->user->name }}
                            </strong>
                        </p>
                    </div>

                    <div class="col-lg-6" style="margin-bottom:20px">
                        <p>Email</p>
                        <p class="color-black">
                            <strong>
                                {{ $draw->user->email }}
                            </strong>
                        </p>
                    </div>

                    <div class="col-lg-6" style="margin-bottom:20px">
                        <p>Số điện thoại</p>
                        <p class="color-black">
                            <strong>
                                {{ $draw->phone_number ? $draw->phone_number : 'Không có số điện thoại' }}
                            </strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel panel-container p-6" style="padding:20px">

            <div class="row">
                <div class="col-md-6 row">
                    <h4 class="mb-40px">Thông tin chuyển tiền</h4>

                    <div class="col-lg-6">
                        <p>Ngân hàng</p>
                        <p class="color-black">
                            <strong>
                                {{ $draw->bank_name }}
                            </strong>
                        </p>
                    </div>

                    <div class="col-lg-6" style="margin-bottom: 20px">
                        <p>Số tài khoản</p>
                        <p class="color-black">
                            <strong>
                                {{ $draw->bank_number }}
                            </strong>
                        </p>
                    </div>

                    <div class="col-lg-6" >
                        <p>Tên chủ tài khoản</p>
                        <p class="color-black">
                            <strong>
                                {{$draw->username}}
                            </strong>
                        </p>
                    </div>

                    <div class="col-lg-6" >
                        <p>Số tiền muốn rút</p>
                        <p class="color-black">
                            <strong>
                                {{number_format($draw->bank_price, 0, '', ',')}} VNĐ
                            </strong>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="w-100" src='https://img.vietqr.io/image/{{$draw->bank_name}}-{{$draw->bank_number}}-compact2.png?amount={{$draw->bank_price}}&addInfo=DRIVCO chuyen tien&accountName={{$draw->username}}' /> 
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
                $(document).on("click", "#activeDraw", function(e) {
                    e.preventDefault();
                    var link = $(this).attr("href");

                    Swal.fire({
                        title: "Xác nhận chuyển khoản?",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Xác nhận!",
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = link;
                            Swal.fire("Thành công!", "Xác nhận thành công", "success");
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
                    url: "{{ route('collaborators.unActiveWithDraw', $draw->id) }}",
                    data: {
                        reason: $('#reason').val()
                    },
                    success: function(data) {
                        location.href = "{{route('collaborators.listWithDraw')}}";
                    }
                })
            })
        </script>
    @endpush
</x-collaborators.layout>
