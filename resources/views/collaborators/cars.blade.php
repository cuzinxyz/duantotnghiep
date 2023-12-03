<x-collaborators.layout>
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">Duyệt tin bán xe</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách tin bán xe</h1>
            </div>
        </div>

        <div class="panel panel-container">
            <div class="row">
                <div class="col-lg-12">
                    <table id="datatable" class="table table-bordered">
                        <thead>
                            <tr>
                                <td>STT</td>
                                <td>Tiêu đề</td>
                                <td>Tác giả</td>
                                <td>Thời gian tạo</td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

    </div><!--/.row-->

    @push('scripts')
    @endpush
</x-collaborators.layout>
