<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cộng tác viên - Dashboard</title>
    <link rel="icon" href="{{ asset('images/favicon/favicon.ico') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link href="{{ asset('ctv/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('ctv/css/font-awesome.min.css') }}" rel="stylesheet">

    <link href="{{ asset('ctv/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('ctv/css/list.css') }}" rel="stylesheet">

    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />

    @stack('styles')

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
            </div>
        </div><!-- /.container-fluid -->
    </nav>

    @include('collaborators.sidebar')
    <!--/.sidebar-->

    {{ $slot }}
    <!--/.main-->

    <script src="{{ asset('ctv/js/jquery-1.11.1.min.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script src="{{ asset('ctv/js/bootstrap.min.js') }}"></script>
    @stack('scripts')
</body>

</html>
