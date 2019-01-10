<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap core CSS-->
    <link href={{asset('vendor/bootstrap/css/bootstrap.min.css')}} rel="stylesheet">
{{--<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">--}}

<!-- Custom fonts for this template-->
    <link href={{asset('vendor/fontawesome-free/css/all.min.css')}} rel="stylesheet">
{{--<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">--}}

<!-- Page level plugin CSS-->
    <link href={{asset('vendor/datatables/dataTables.bootstrap4.css')}} rel="stylesheet">
{{--<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">--}}

<!-- Custom styles for this template-->
    <link href={{asset('css/sb-admin.css')}} rel="stylesheet">
    {{--<link href="css/sb-admin.css" rel="stylesheet">--}}

</head>

<body id="page-top">

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href={{url('/admin')}}>{{ config('app.name', 'Laravel') }}</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        {{--<div class="input-group">--}}
        {{--<input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">--}}
        {{--<div class="input-group-append">--}}
        {{--<button class="btn btn-primary" type="button">--}}
        {{--<i class="fas fa-search"></i>--}}
        {{--</button>--}}
        {{--</div>--}}
        {{--</div>--}}
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <span class="badge badge-danger">{{count($m1)}}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                <a class="dropdown-item" href={{url('/message')}}>Message</a>
            </div>
        </li>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle fa-fw"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right pull-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">Settings</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
            </div>
        </li>
    </ul>

</nav>

<div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href={{url('/admin')}}>
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-home"></i>
                <span>Home</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <h6 class="dropdown-header">Topic And Homework:</h6>
                <a class="dropdown-item" href={{url('/viewtopic')}}>Topic</a>
                <div class="dropdown-divider"></div>
            </div>
        </li>

    </ul>
    <div id="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <!-- Icon Cards-->
            @yield('content')
        </div>
        <!-- /.container-fluid -->
        <!-- Sticky Footer -->
        <footer class="sticky-footer">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright © Pacific InterContinental College 2018</span>
                </div>
            </div>
        </footer>
    </div>
    <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->
<script src={{asset('js/app.js')}}></script>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="{{route('logout')}}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}

                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
<script src={{asset('js/app.js')}}></script>
<!-- Bootstrap core JavaScript-->
{{--<script src="vendor/jquery/jquery.min.js"></script>--}}
<script src={{asset('vendor/jquery/jquery.min.js')}}></script>

{{--<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>--}}
<script src={{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}></script>

<!-- Core plugin JavaScript-->
{{--<script src=""></script>--}}
<script src={{asset('vendor/jquery-easing/jquery.easing.min.js')}}></script>

<!-- Page level plugin JavaScript-->
{{--<script src=""></script>--}}
{{--<script src={{asset('vendor/chart.js/Chart.min.js')}}></script>--}}
{{--<script src=""></script>--}}
<script src={{asset('vendor/datatables/jquery.dataTables.js')}}></script>
{{--<script src=""></script>--}}
<script src={{asset('vendor/datatables/dataTables.bootstrap4.js')}}></script>

<!-- Custom scripts for all pages-->
{{--<script src=""></script>--}}
<script src={{asset('js/sb-admin.min.js')}}></script>

<!-- Demo scripts for this page-->
<script src=""></script>
<script src={{asset('js/demo/datatables-demo.js')}}></script>

{{--<script src={{asset('js/demo/chart-area-demo.js')}}></script>--}}

</body>

</html>
