<x-collaborators.layout>
    @push('styles')
        <link href="{{ asset('ctv/css/datepicker3.css') }}" rel="stylesheet">
    @endpush
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">Thống kê</li>
            </ol>
        </div><!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thống kê</h1>
            </div>
        </div><!--/.row-->

        <div class="panel panel-container">
            <div class="row">
                <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                    <div class="panel panel-teal panel-widget border-right">
                        <div class="row no-padding"><em class="fa fa-xl fa-shopping-cart color-blue"></em>
                            <div class="large">{{ $salon_count }}</div>
                            <div class="text-muted">Tổng số tin salon đã duyệt</div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                    <div class="panel panel-teal panel-widget border-right">
                        <div class="row no-padding"><em class="fa fa-xl fa fa-truck color-red"></em>
                            <div class="large">{{ $car_count }}</div>
                            <div class="text-muted">Tổng số tin bán xe đã duyệt</div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                    <div class="panel panel-blue panel-widget border-right">
                        <div class="row no-padding"><em class="fa fa-xl fa fa-newspaper-o color-orange"></em>
                            <div class="large">{{ $byCar_count }}</div>
                            <div class="text-muted">Tổng số tin mua xe đã duyệt</div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                    <div class="panel panel-orange panel-widget border-right">
                        <div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
                            <div class="large">{{ $report_count }}</div>
                            <div class="text-muted">Tổng số tin tố cáo đã xử lý</div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                    <div class="panel panel-blue panel-widget border-right">
                        <div class="row no-padding"><em class="fa fa-question-circle color-orange"></em>
                            <div class="large">{{ $support_count }}</div>
                            <div class="text-muted">Tổng số yêu cầu hỗ trợ đã xử lý</div>
                        </div>
                    </div>
                </div>
            </div><!--/.row-->
        </div>


        <div class="row">
            <div class="col-xs-12">
                <h4>Công việc cần xử lý</h4>
            </div>
            <div class="col-xs-6 col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body easypiechart-panel">
                        <h4>Cửa hàng</h4>
                        <div class="easypiechart" id="easypiechart-blue"
                            data-percent="{{ $efficiencyDay['unActiveSalon'] }}"><span
                                class="percent">{{ $efficiencyDay['unActiveSalon'] }}</span></div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body easypiechart-panel">
                        <h4>Tin bán xe</h4>
                        <div class="easypiechart" id="easypiechart-orange"
                            data-percent="{{ $efficiencyDay['unActiveCar'] }}"><span
                                class="percent">{{ $efficiencyDay['unActiveCar'] }}</span></div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body easypiechart-panel">
                        <h4>Tin mua xe</h4>
                        <div class="easypiechart" id="easypiechart-teal"
                            data-percent="{{ $efficiencyDay['unActiveByCar'] }}"><span
                                class="percent">{{ $efficiencyDay['unActiveByCar'] }}</span></div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body easypiechart-panel">
                        <h4>Tố cáo</h4>
                        <div class="easypiechart" id="easypiechart-red"
                            data-percent="{{ $efficiencyDay['unActiveReport'] }}"><span
                                class="percent">{{ $efficiencyDay['unActiveReport'] }}</span></div>
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body easypiechart-panel">
                        <h4>Hỗ trợ</h4>
                        <div class="easypiechart" id="easypiechart-green"
                            data-percent="{{ $efficiencyDay['unActiveSupport'] }}"><span
                                class="percent">{{ $efficiencyDay['unActiveSupport'] }}</span></div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->

    </div>
    @push('scripts')
        <script src="{{ asset('ctv/js/custom.js') }}"></script>
        <script src="{{ asset('ctv/js/chart.min.js') }}"></script>
        <script src="{{ asset('ctv/js/chart-data.js') }}"></script>
        <script src="{{ asset('ctv/js/easypiechart.js') }}"></script>
        <script src="{{ asset('ctv/js/easypiechart-data.js') }}"></script>
        <script src="{{ asset('ctv/js/bootstrap-datepicker.js') }}"></script>
        <script>
            window.onload = function() {
                var chart1 = document.getElementById("line-chart").getContext("2d");
                window.myLine = new Chart(chart1).Line(lineChartData, {
                    responsive: true,
                    scaleLineColor: "rgba(0,0,0,.2)",
                    scaleGridLineColor: "rgba(0,0,0,.05)",
                    scaleFontColor: "#c5c7cc"
                });
            };
        </script>
    @endpush
</x-collaborators.layout>
