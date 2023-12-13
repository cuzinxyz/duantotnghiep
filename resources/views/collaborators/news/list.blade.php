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
                <h1 class="page-header">Danh sách tin tức được bình luận</h1>
            </div>
        </div>

        <div class="panel panel-container p-6">
            <div class="row">
                <div class="col-lg-12">
                    <table id="datatable" class="table table-striped">
                        <thead>
                            <tr>
                                <td>Tiêu đề</td>
                                <td>Thời gian tạo</td>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <td>Tiêu đề</td>
                                <td>Thời gian tạo</td>
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
                    ajax: "{{ route('collaborators.reviewDataNew') }}",
                    columns: [
                        {
                            data: 'title',
                        },
                        {
                            data: 'created_at',
                        },
                        {
                            data: 'view'
                        },
                    ]
                });
            })

            setInterval(function() {
                $('#datatable').DataTable().ajax.reload();
            }, 30000);
        </script>
    @endpush
</x-collaborators.layout>
