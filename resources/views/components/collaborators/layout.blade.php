<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cộng tác viên - Dashboard</title>
    <link rel="icon" href="{{ asset('images/favicon/favicon.ico') }}">

    <link href="{{ asset('ctv/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('ctv/css/font-awesome.min.css') }}" rel="stylesheet">

    <link href="{{ asset('ctv/css/datepicker3.css') }}" rel="stylesheet">
    <link href="{{ asset('ctv/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('ctv/css/list.css') }}" rel="stylesheet">

    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />

</head>

<body>
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span></button>
                <a class="navbar-brand" href="#"><span>DRIVCO</span>Admin</a>
                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <em class="fa fa-bell"></em><span class="label label-info">5</span>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li><a href="#">
                                    <div><em class="fa fa-envelope"></em> 1 New Message
                                        <span class="pull-right text-muted small">3 mins ago</span>
                                    </div>
                                </a></li>
                            <li class="divider"></li>
                            <li><a href="#">
                                    <div><em class="fa fa-heart"></em> 12 New Likes
                                        <span class="pull-right text-muted small">4 mins ago</span>
                                    </div>
                                </a></li>
                            <li class="divider"></li>
                            <li><a href="#">
                                    <div><em class="fa fa-user"></em> 5 New Followers
                                        <span class="pull-right text-muted small">4 mins ago</span>
                                    </div>
                                </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div><!-- /.container-fluid -->
    </nav>

    @include('collaborators.sidebar')
    <!--/.sidebar-->

    {{ $slot }}
    <!--/.main-->

    
    <script src="{{ asset('ctv/js/jquery-1.11.1.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script src="{{ asset('ctv/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('ctv/js/chart.min.js') }}"></script>
    <script src="{{ asset('ctv/js/chart-data.js') }}"></script>
    <script src="{{ asset('ctv/js/easypiechart.js') }}"></script>
    <script src="{{ asset('ctv/js/easypiechart-data.js') }}"></script>
    <script src="{{ asset('ctv/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('ctv/js/custom.js') }}"></script>
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

    @stack('scripts')
</body>

</html>
