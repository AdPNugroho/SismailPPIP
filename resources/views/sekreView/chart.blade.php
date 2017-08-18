@extends('../template') 

@section('css')

<!-- DataTables -->
<link href="{{ url('assets/plugins/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ url('assets/plugins/datatables/responsive.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ url('assets/plugins/datatables/scroller.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ url('assets/plugins/datatables/dataTables.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ url('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css" />


<!-- App css -->
<link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ url('assets/css/core.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ url('assets/css/components.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ url('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ url('assets/css/menu.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ url('assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="{{ asset('/assets/css/jquery.toast.css') }}"> 
<style>
td.noWrapTd{
    overflow:hidden;
    white-space:nowrap;
    text-overflow:ellipsis;
}
</style>
@endsection 


@section('nav')
<ul>
    <li class="menu-title">Navigation</li>
    <li>
        <a href="{!! url('sec/dashboard') !!}" class="waves-effect"><i class="mdi mdi-home"></i><span> Dashboard </span></a>
    </li>
    <li>
        <a href="{!! url('sec/acc') !!}" class="waves-effect"><i class="mdi mdi-account-key"></i><span> Account Panel </span></a>
    </li>
    <li class="menu-title">Data</li>
    <li>
        <a href="{!! url('sec/inbox') !!}" class="waves-effect"><i class="mdi mdi-email-open"></i><span> Surat Masuk </span></a>
    </li>
    <li>
        <a href="{!! url('sec/outbox') !!}" class="waves-effect"><i class="mdi mdi-email"></i><span> Surat Keluar </span></a>
    </li>
    <li>
        <a href="{!! url('sec/chart') !!}" class="waves-effect"><i class="mdi mdi-email"></i><span> Grafik Data Surat </span></a>
    </li>
    <li class="menu-title">Account</li>
    <li>
        <a href="{!! url('sec/logout') !!}" class="waves-effect"><i class="mdi mdi-power"></i><span> Logout </span></a>
    </li>
</ul>    
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="page-title-box">
            <h4 class="page-title">Kelola Surat Masuk</h4>
            <ol class="breadcrumb p-0 m-0">
                <li>
                    <a href="{{ url('sec/dashboard') }}">Home</a>
                </li>
                <li class="active">
                    Grafik Disposisi Surat Masuk Bidang
                </li>
            </ol>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <h4 class="header-title m-t-0 m-b-30">Export Excel</h4>
            {!! Form::open(array("url"=>'sec/export')) !!}
            {!! Form::hidden('type','1') !!}
            <button id="exportInbox" class="btn btn-primary waves-effect w-md waves-light m-b-5"><span class="mdi mdi-email-open"></span>&nbsp;&nbsp;Export Surat Masuk</button>
            {!! Form::close() !!}

            {!! Form::open(array("url"=>'sec/export')) !!}
            {!! Form::hidden('type','2') !!}
            <button id="exportInbox" class="btn btn-success waves-effect w-md waves-light m-b-5"><span class="mdi mdi-email"></span>&nbsp;&nbsp;Export Surat Keluar</button>
            {!! Form::close() !!}
        </div>     
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <h4 class="header-title m-t-0 m-b-30">Grafik Disposisi Surat Masuk Berdasarkan Bidang</h4>
            <div class="row">
            {!! Form::open(array('id'=>'frmInbox')) !!}
                <div class="col-sm-1">
                    <button type="button" class="btn btn-primary waves-effect w-md m-b-5" id="btnGrfInbox"><span class="fa fa-line-chart"></span>&nbsp;&nbsp;Buat Grafik</button>
                    <button type="button" class="btn btn-danger waves-effect w-md m-b-5" id="btnRstInbox" style="display:none;"><span class="fa fa-history"></span>&nbsp;&nbsp;Reset</button>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <div class="input-group">
                                <input type="text" class="form-control dAC" placeholder="Tanggal Awal Grafik" name="tanggal_awal_disposisi">
                                <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <div class="input-group">
                                <input type="text" class="form-control dAC" placeholder="Tanggal Akhir Grafik" name="tanggal_akhir_disposisi">
                                <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            {!! Form::close() !!}
            </div>
        </div>     
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <h4 class="header-title m-t-0 m-b-30">Grafik Surat Keluar Bidang PPIP</h4>
            <div class="row">
            {!! Form::open(array('id'=>'frmOutbox')) !!}
                <div class="col-sm-1">
                    <button type="button" class="btn btn-success waves-effect w-md m-b-5" id="btnGrfOutbox"><span class="fa fa-line-chart"></span>&nbsp;&nbsp;Buat Grafik</button>
                    <button type="button" class="btn btn-danger waves-effect w-md m-b-5" id="btnRstOutbox" style="display:none;"><span class="fa fa-history"></span>&nbsp;&nbsp;Reset</button>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <div class="input-group">
                                <input type="text" class="form-control dAC" placeholder="Tanggal Awal Grafik" name="tanggal_awal_outbox">
                                <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <div class="input-group">
                                <input type="text" class="form-control dAC" placeholder="Tanggal Akhir Grafik" name="tanggal_akhir_outbox">
                                <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            {!! Form::close() !!}        
            </div>
        </div>     
    </div>
</div>
@endsection 

@section('js')
<!-- jQuery  -->
<script src="{{ url('assets/js/jquery.min.js') }}"></script>
<script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ url('assets/js/detect.js') }}"></script>
<script src="{{ url('assets/js/fastclick.js') }}"></script>
<script src="{{ url('assets/js/jquery.blockUI.js') }}"></script>
<script src="{{ url('assets/js/waves.js') }}"></script>
<script src="{{ url('assets/js/jquery.slimscroll.js') }}"></script>
<script src="{{ url('assets/js/jquery.scrollTo.min.js') }}"></script>
<script src="{{ url('assets/plugins/switchery/switchery.min.js') }}"></script>

<script src="{{ url('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('assets/plugins/datatables/dataTables.bootstrap.js') }}"></script>
<script src="{{ url('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>

<script src="{{ url('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ url('assets/plugins/datatables/buttons.bootstrap.min.js') }}"></script>
<script src="{{ url('assets/plugins/datatables/dataTables.fixedHeader.min.js') }}"></script>
<script src="{{ url('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ url('assets/plugins/datatables/responsive.bootstrap.min.js') }}"></script>
<script src="{{ url('assets/plugins/datatables/dataTables.fixedColumns.min.js') }}"></script>

<!-- App js -->
<script src="{{ url('assets/js/jquery.core.js') }}"></script>
<script src="{{ url('assets/js/jquery.app.js') }}"></script>

<script type="text/javascript" src="{{ asset('assets/js/jquery.pleaseWait.js') }}"></script>
<script src="{{ asset('assets/js/jquery.toast.js') }}"></script>
<script>
$(document).ready(function(){
    $('#btnGrfInbox').click(function(){

    });
    $('#btnGrfOutbox').click(function(){});
    $('#btnRstInbox').click(function(){});
    $('#btnRstOutbox').click(function(){});
});
</script>
<script>
    jQuery('.dAC').datepicker({
        autoclose: true,
        todayHighlight: true
    });
</script>
@endsection