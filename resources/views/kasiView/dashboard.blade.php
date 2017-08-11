@extends('../template') 
@section('css')
    <!-- App css -->
    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/css/core.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/css/components.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/css/pages.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/css/menu.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('nav')
<ul>
    <li class="menu-title">Navigation</li>
    <li>
        <a href="{!! url('kasi/dashboard') !!}" class="waves-effect"><i class="mdi mdi-home"></i><span> Dashboard </span></a>
    </li>
    <li>
        <a href="{!! url('kasi/acc') !!}" class="waves-effect"><i class="mdi mdi-account-key"></i><span> Account Panel </span></a>
    </li>
    <li class="menu-title">Data</li>
    <li>
        <a href="{!! url('kasi/inbox') !!}" class="waves-effect"><i class="mdi mdi-email-open"></i><span> Surat Masuk </span></a>
    </li>
    <li>
        <a href="{!! url('kasi/outbox') !!}" class="waves-effect"><i class="mdi mdi-email"></i><span> Surat Keluar </span></a>
    </li>
    <li>
        <a href="{!! url('kasi/chart') !!}" class="waves-effect"><i class="mdi mdi-email"></i><span> Grafik Data Surat </span></a>
    </li>
    <li class="menu-title">Account</li>
    <li>
        <a href="{!! url('kasi/logout') !!}" class="waves-effect"><i class="mdi mdi-power"></i><span> Logout </span></a>
    </li>
</ul>    
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="page-title-box">
            <h4 class="page-title">Dashboard</h4>
            <ol class="breadcrumb p-0 m-0">
                <li>
                    <a>Home</a>
                </li>
                <li class="active">
                    Dashboard
                </li>
            </ol>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-md-6">
        <div class="card-box widget-box-two widget-two-default">
            <i class="mdi mdi-account-key widget-two-icon"></i>
            <div class="wigdet-two-content">
                <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Last Login</p>
                <h2><span>{{ $last_login }}</span> <small></small></h2>
                <p class="text-muted m-0"><b>&nbsp;</b></p>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6">
        <div class="card-box widget-box-two widget-two-default">
            <i class="mdi mdi-email widget-two-icon"></i>
            <div class="wigdet-two-content">
                <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Total Surat Masuk</p>
                <h2><span data-plugin="counterup">{{ $surat }}</span> <small></small></h2>
                <p class="text-muted m-0"><b>&nbsp;</b></p>
            </div>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-lg-12 col-md-6">
        <div class="card-box">
            <h4 class="header-title m-t-0 m-b-30">Navigasi</h4>
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#home" data-toggle="tab" aria-expanded="true">
                        <span class="visible-xs"><i class="fa fa-home"></i></span>
                        <span class="hidden-xs">Information</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <p><h3>Anda Telah Login Sebagai Kasi</h3></p>
                    <p>
                        Hak akses yang diberikan kepada anda adalah sebagai berikut :
                        <ul>
                            <li>Mengelola Akun Kasi</li>
                            <li>Mengelola Melihat Data Disposisi Surat</li>
                            <li>Mencetak Disposisi</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
        <!-- jQuery  -->
        <script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/assets/js/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('/assets/js/waves.js') }}"></script>

        <!-- Counter js  -->
        <script src="{{ asset('/assets/plugins/waypoints/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('/assets/plugins/counterup/jquery.counterup.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('/assets/js/jquery.core.js') }}"></script>
        <script src="{{ asset('/assets/js/jquery.app.js') }}"></script>

@endsection