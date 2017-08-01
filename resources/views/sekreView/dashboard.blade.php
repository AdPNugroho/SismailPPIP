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
        <a href="{!! url('sec/dashboard') !!}" class="waves-effect"><i class="mdi mdi-view-dashboard"></i><span> Dashboard </span></a>
    </li>
    <li class="menu-title">Data</li>
    <li>
        <a href="{!! url('sec/inbox') !!}" class="waves-effect"><i class="mdi mdi-email"></i><span> Surat Masuk </span></a>
    </li>
    <li>
        <a href="{!! url('sec/outbox') !!}" class="waves-effect"><i class="mdi mdi-email"></i><span> Surat Keluar </span></a>
    </li>
    <li class="menu-title">Account</li>
    <li>
        <a href="{!! url('sec/profile') !!}" class="waves-effect"><i class="ti ti-user"></i><span> Profile </span></a>
    </li>
    <li>
        <a href="{!! url('sec/logout') !!}" class="waves-effect"><i class="mdi mdi-power"></i><span> Logout </span></a>
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
                    <a href="#">Zircos</a>
                </li>
                <li>
                    <a href="#">Dashboard</a>
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
            <i class="mdi mdi-account-star-variant widget-two-icon"></i>
            <div class="wigdet-two-content">
                <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Total Surat Keluar</p>
                <h2><span data-plugin="counterup">34578</span> <small></small></h2>
                <p class="text-muted m-0"><b>&nbsp;</b></p>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6">
        <div class="card-box widget-box-two widget-two-default">
            <i class="mdi mdi-email widget-two-icon"></i>
            <div class="wigdet-two-content">
                <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Total Surat Masuk</p>
                <h2><span data-plugin="counterup">{{ $inbox }}</span> <small></small></h2>
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
                        <span class="hidden-xs">Home</span>
                    </a>
                </li>
                <li class="">
                    <a href="#profile" data-toggle="tab" aria-expanded="false">
                        <span class="visible-xs"><i class="fa fa-user"></i></span>
                        <span class="hidden-xs">Profile</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam
                        felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet
                        a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus.
                        Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                        consequat vitae, eleifend ac, enim.</p>
                </div>
                <div class="tab-pane" id="profile">
                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet
                        a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus.
                        Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                        consequat vitae, eleifend ac, enim.</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam
                        felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
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