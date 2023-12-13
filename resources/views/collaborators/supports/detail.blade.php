<x-collaborators.layout>
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">Hỗ trợ</li>
            </ol>
        </div>

        <div class="row display-flex">
            <div class="col-lg-6">
                <h1 class="page-header">Chi tiết hỗ trợ</h1>
            </div>
            <div class="col-lg-6">
                <div class="" style="text-align: end">
                    <a href="" class="btn btn-warning rename">
                        Phản hồi
                    </a>
                </div>
            </div>
        </div>

        <div class="panel panel-container p-6" style="padding:20px">

            <div class="row">
                <div class="col-lg-12 row">
                    <h4 class="mb-40px">Thông tin người yêu cầu</h4>

                    <div class="col-lg-6" style="margin-bottom:20px">
                        <p>Họ tên</p>
                        <p class="color-black">
                            <strong>
                                {{ $support->user->name }}
                            </strong>
                        </p>
                    </div>

                    <div class="col-lg-6" style="margin-bottom:20px">
                        <p>Email</p>
                        <p class="color-black">
                            <strong>
                                {{ $support->user->email }}
                            </strong>
                        </p>
                    </div>

                    <div class="col-lg-6" style="margin-bottom:20px">
                        <p>Số điện thoại</p>
                        <p class="color-black">
                            <strong>
                                {{ $support->user->phone_number }}
                            </strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel panel-container p-6" style="padding:20px">

            <div class="row">
                <div class="col-lg-12 row">
                    <h4 class="mb-40px">Nội dung yêu cầu</h4>

                    <div class="col-lg-6">
                        <p>Tiêu đề</p>
                        <p class="color-black">
                            <strong>
                                {{ $support->title }}
                            </strong>
                        </p>
                    </div>

                    <div class="col-lg-6">
                        <p>Chuyên mục</p>
                        <p class="color-black">
                            <strong>
                                {{ $support->category }}
                            </strong>
                        </p>
                    </div>

                    <div class="col-lg-12">
                        <p>Nội dung </p>
                        <p class="color-black">
                            <strong>
                                {{ $support->body }}
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
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Vui lòng điền phản hồi</h4>
                    </div>
                    <div class="modal-body">
                        <form>
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
                    url: "{{ route('collaborators.activeSupport', $support->id) }}",
                    data: {
                        reason: $('#reason').val()
                    },
                    success: function(data) {
                        location.href = "{{ route('collaborators.listSupport') }}";
                    }
                })
            })
        </script>
    @endpush
</x-collaborators.layout>
