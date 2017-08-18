@extends('../template') 

@section('css')

<!-- DataTables -->
<link href="{{ url('assets/plugins/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ url('assets/plugins/datatables/buttons.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ url('assets/plugins/datatables/fixedHeader.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ url('assets/plugins/datatables/responsive.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ url('assets/plugins/datatables/scroller.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ url('assets/plugins/datatables/dataTables.colVis.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ url('assets/plugins/datatables/dataTables.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ url('assets/plugins/datatables/fixedColumns.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ url('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css" />

<!-- App css -->
<link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ url('assets/css/core.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ url('assets/css/components.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ url('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ url('assets/css/pages.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ url('assets/css/menu.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ url('assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{ url('assets/plugins/switchery/switchery.min.css') }}">

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
        <a href="{!! url('adm/dashboard') !!}" class="waves-effect"><i class="mdi mdi-home"></i><span> Dashboard </span></a>
    </li>
    <li>
        <a href="{!! url('adm/control') !!}" class="waves-effect"><i class="mdi mdi-account-key"></i><span> Admin Panel </span></a>
    </li>
    <li>
        <a href="{!! url('adm/user') !!}" class="waves-effect"><i class="mdi mdi-account-location"></i><span> User Panel </span></a>
    </li>
    <li class="menu-title">Data</li>
    <li>
        <a href="{!! url('adm/inbox') !!}" class="waves-effect"><i class="mdi mdi-email-open"></i><span> Surat Masuk </span></a>
    </li>
    <li>
        <a href="{!! url('adm/outbox') !!}" class="waves-effect"><i class="mdi mdi-email"></i><span> Surat Keluar </span></a>
    </li>
    <li>
        <a href="{!! url('adm/chart') !!}" class="waves-effect"><i class="fa fa-line-chart"></i><span> Grafik Data Surat </span></a>
    </li>
    <li class="menu-title">Account</li>
    <li>
        <a href="{!! url('adm/logout') !!}" class="waves-effect"><i class="mdi mdi-power"></i><span> Logout </span></a>
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
                    <a href="{{ url('adm/dashboard') }}">Home</a>
                </li>
                <li class="active">
                    Surat Masuk
                </li>
            </ol>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card-box" id="crdInbox">
            <h4 class="header-title m-t-0 m-b-30">Navigasi</h4>
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#inputSurat" data-toggle="tab" aria-expanded="true">
                        <span class="visible-xs"><i class="fa fa-home"></i></span>
                        <span class="hidden-xs">Input Surat</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="inputSurat">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title"><b>Fixed Column Example</b></h4>
                                    <p class="text-muted font-13 m-b-30">
                                        In this example the column index is prefixed to the column title.
                                    </p>
                                    <table id="tblInbox" class="table table-striped table-bordered" style="width:200%;">
                                        <thead>
                                        <tr>
                                            <th><center><i class="mdi mdi-printer"></i></center></th>
                                            <th><center>#</center></th>
                                            <th>Tanggal Terima</th>
                                            <th>Tanggal Surat</th>
                                            <th>Nomor Surat</th>
                                            <th>Asal Surat</th>
                                            <th>Perihal</th>
                                            <th>Sifat</th>
                                            <th>Petunjuk</th>
                                            <th>BD401</th>
                                            <th>BD402</th>
                                            <th>BD403</th>
                                            <th>BD404</th>
                                            <th>BD701</th>
                                            <th>BD702</th>
                                            <th>Lainnya</th>
                                            <th><span class="fa fa-wrench"></span></th>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection 

@section('js')
<!-- jQuery  -->
<script src="{{ url('assets/js/jquery.min.js') }}"></script>
<script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ url('assets/js/bootstrap-confirmation.min.js') }}"></script>
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

<!-- init -->
<script src="{{ url('assets/pages/jquery.datatables.init.js') }}"></script>

<!-- App js -->
<script src="{{ url('assets/js/jquery.core.js') }}"></script>
<script src="{{ url('assets/js/jquery.app.js') }}"></script>

<script type="text/javascript" src="{{ asset('assets/js/jquery.pleaseWait.js') }}"></script>
<script src="{{ asset('assets/js/jquery.toast.js') }}"></script>

<script>
$(document).ready(function(){
    var table = $('#tblInbox').DataTable({
        processing:true,
        serverSide:true,
        scrollX: true,
        scrollCollapse: true,
        fixedColumns: {
            leftColumns: 5
        },
        ajax:"{{ url('adm/dataDisposisi') }}",
        columns:[
            {data:'id_surat',render:function(data,type,row){
                return '<center><input type="checkbox" name="id_surat_print[]" value="'+data+'" style="width:20px;height:20px;"></center>';
            }},
            {data:'id_surat'},
            {data:'tanggal_terima'},
            {data:'tanggal_surat'},
            {data:'nomor_surat'},
            {data:'asal_surat'},
            {data:'perihal'},
            {data: function(data,type,dataToSet){
                var sifat = "";
                if(data.sangat_rahasia==1){
                    sifat += "Sangat Rahasia";
                }
                if(data.rahasia==1){
                    if(sifat==""){
                        sifat += "Rahasia";
                    }else{
                        sifat += ", Rahasia";
                    }
                }
                if(data.segera==1){
                    if(sifat==""){
                        sifat += "Segera";
                    }else{
                    sifat += ", Segera";
                    }
                }
                if(data.sangat_segera==1){
                    if(sifat==""){
                        sifat += "Sangat Segera";
                    }else{
                    sifat += ", Sangat Segera";
                    }
                }
                if(data.biasa==1){
                    if(sifat==""){
                        sifat += "Biasa";
                    }else{
                        sifat += ", Biasa";
                    }
                }
                if(data.sifat_lainnya!=""){
                    if(sifat==""){
                        sifat += data.sifat_lainnya;
                    }else{
                        sifat += ",";
                        sifat += data.sifat_lainnya;
                    }
                }
                if(sifat==""){
                    return "<center>--</center>";
                }else{
                    return sifat;
                }
            }},
            {data:function(data,type,dataToSet){
                var petunjuk ="";
                if(data.diproses==1){
                    petunjuk += "Diproses"
                }
                if(data.ditindaklanjuti==1){
                    if(petunjuk==""){
                        petunjuk += "Ditindaklanjuti";
                    }else{
                        petunjuk += ", Ditindaklanjuti";
                    }
                }
                if(data.dimanfaatkan==1){
                    if(petunjuk==""){
                        petunjuk += "Dimanfaatkan";
                    }else{
                        petunjuk += ", Dimanfaatkan";
                    }
                }
                if(data.diadministrasikan==1){
                    if(petunjuk==""){
                        petunjuk += "Diadministrasikan";
                    }else{
                        petunjuk += ", Diadministrasikan";
                    }
                }
                if(data.dipantau==1){
                    if(petunjuk==""){
                        petunjuk += "Dipantau";
                    }else{
                        petunjuk += ", Dipantau";
                    }
                }
                if(data.diedarkan==1){
                    if(petunjuk==""){
                        petunjuk += "Diedarkan";
                    }else{
                        petunjuk += ", Diedarkan";
                    }
                }
                if(data.dipelajari==1){
                    if(petunjuk==""){
                        petunjuk += "Dipelajari";
                    }else{
                        petunjuk += ", Dipelajari";
                    }
                }
                if(data.dicatat==1){
                    if(petunjuk==""){
                        petunjuk += "Dicatat";
                    }else{
                        petunjuk += ", Dicatat";
                    }
                }
                if(data.arsip==1){
                    if(petunjuk==""){
                        petunjuk = "Arsip";
                    }else{
                        petunjuk += ", Arsip";
                    }
                }
                if(data.petunjuk_lainnya!=""){
                    console.log("masuk ke sini");
                    if(petunjuk==""){
                        petunjuk += data.petunjuk_lainnya;
                    }else{
                        petunjuk += ", " ;
                        petunjuk += data.petunjuk_lainnya ;
                    }
                }
                if(petunjuk==""){
                    return "<center>--</center>";
                }else{
                    petunjuk += ".";
                    return petunjuk;
                }
            }},
            {data:function(data,type,dataToSet){
                if(data.kasi_adm_bimbingan==1){
                    return "<center>&#10004;</center>";
                }else{
                    return "";
                }
            }},
            {data:function(data,type,dataToSet){
                if(data.kasi_bim_penagihan==1){
                    return "<center>&#10004;</center>";
                }else{
                    return "";
                }
            }},
            {data:function(data,type,dataToSet){
                if(data.kasi_intelijen==1){
                    return "<center>&#10004;</center>";
                }else{
                    return "";
                }
            }},
            {data:function(data,type,dataToSet){
                if(data.kasi_adm_bukti==1){
                    return "<center>&#10004;</center>";
                }else{
                    return "";
                }
            }},
            {data:function(data,type,dataToSet){
                if(data.kasi_ketua_kelompok_satu==1){
                    return "<center>&#10004;</center>";
                }else{
                    return "";
                }
            }},
            {data:function(data,type,dataToSet){
                if(data.kasi_ketua_kelompok_dua==1){
                    return "<center>&#10004;</center>";
                }else{
                    return "";
                }
            }},
            {data:function(data,type,dataToSet){
                if(data.disposisi_lainnya!=""){
                    return data.disposisi_lainnya;
                }else{
                    return "";
                }
            }},
            {data:'id_surat',render:function(data,type,row){
                return '<a class="btn btn-sm btn-icon waves-effect waves-light btn-primary m-b-5 detailDisposisi" data-id="'+ data +'"><i class="mdi mdi-magnify"></i></a>'+
                        '<a class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 deleteInbox" data-title="Hapus Surat Masuk?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left" data-id="'+ data +'"><i class="fa fa-remove"></i></a>';
            }}
        ],
            columnDefs:[
            { "width": "1%", "targets": 0 },
            { "width": "1%", "targets": 1 },
            { "width": "1%", "targets": 2 },
            { "width": "1%", "targets": 3 },
            { "width": "1%", "targets": 4 },
            { "width": "1%", "targets": 9 },
            { "width": "1%", "targets": 16}
        ]
    });
});</script>

@endsection