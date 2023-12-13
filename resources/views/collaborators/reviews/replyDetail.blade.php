<x-collaborators.layout>
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">Bình luận</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Trả lời bình luận</h1>
            </div>
        </div>

        <div class="panel panel-container p-6">
            <div class="row">
                <div class="col-lg-12">
                    <table id="datatable" class="table table-striped">
                        <thead>
                            <tr>
                                <td>Nội dung</td>
                                <td>Người bình luận</td>
                                <td>Thời gian</td>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <td>Nội dung</td>
                                <td>Người bình luận</td>
                                <td>Thời gian</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </div><!--/.row-->

    @push('scripts')
        <script>
            $(document).ready(function() {
                $("#datatable").DataTable({
                    autoWidth: false,
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('collaborators.viewReplyCommentData', $replyCommentID) }}",
                    columns: [
                        {
                            data: 'body',
                        },

                        {
                            data: 'username',
                        },
                        {
                            data: 'created_at',
                        },
                        {
                            data: 'delete'
                        },
                    ]
                });
            })
            setInterval(function() {
                $('#datatable').DataTable().ajax.reload();
            }, 30000);
        </script>

        <script>
            $(function() {
                $(document).on("click", "#deleteComment", function(e) {
                    e.preventDefault();
                    var link = $(this).attr("href");
                    Swal.fire({
                        title: "Xác nhận xóa bình luận này?",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Tiếp tục!",
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = link;
                            Swal.fire("Thành công!", "Xóa thành công", "success");
                        }
                    });
                });
            });
        </script>
    @endpush
</x-collaborators.layout>
