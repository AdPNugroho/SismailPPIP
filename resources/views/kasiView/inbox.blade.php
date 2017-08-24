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
            <h4 class="page-title">Kelola Surat Masuk</h4>
            <ol class="breadcrumb p-0 m-0">
                <li>
                    <a href="{{ url('kasi/dashboard') }}">Home</a>
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
                    <a href="#dataSurat" data-toggle="tab" aria-expanded="false" id="tabsSurat">
                        <span class="visible-xs"><i class="fa fa-user"></i></span>
                        <span class="hidden-xs">Data Surat</span>
                    </a>
                </li>
                <li class="">
                    <a href="#dataDisposisi" data-toggle="tab" aria-expanded="false" id="tabsDisposisi">
                        <span class="visible-xs"><i class="fa fa-user"></i></span>
                        <span class="hidden-xs">Disposisi</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="dataSurat">
                    <div class="row" id="divSurat">
                        <div class="col-md-12">
                        {!! Form::open(array('url'=>'kasi/print')) !!}
                            <button type="submit" class="btn btn-primary waves-effect w-md waves-light m-b-5" id="printSurat"><span class="fa fa-print"></span>&nbsp;&nbsp;Print</button>
                            <table id="tblInbox" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="col-md-1"><center><i class="mdi mdi-printer"></i></center></th>
                                        <th class="col-md-1"><center>No</center></th>
                                        <th class="col-md-1">Terima Surat</th>
                                        <th class="col-md-1">Tanggal Surat</th>
                                        <th class="col-md-3">Nomor Surat</th>
                                        <th class="col-md-3">Asal Surat</th>
                                        <th class="col-md-3">Perihal</th>
                                        <th class="col-md-2">#</th>
                                    </tr>
                                </thead>
                            </table>    
                        {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="dataDisposisi">
                    <div class="row" id="divDisposisi">
                        <div class="col-md-12">
                        {!! Form::open(array('url'=>'kasi/print')) !!}
                            <button type="submit" class="btn btn-primary waves-effect w-md waves-light m-b-5"><span class="fa fa-print"></span>&nbsp;&nbsp;Print</button>
                            <table id="tblDsp" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="col-sm-1"><center><i class="mdi mdi-printer"></i></center></th>
                                        <th class="col-sm-1">No</th>
                                        <th>Nomor Surat</th>
                                        <th>Sifat</th>
                                        <th>Petunjuk</th>
                                        <th class="col-sm-1">BD401</th>
                                        <th class="col-sm-1">BD402</th>
                                        <th class="col-sm-1">BD403</th>
                                        <th class="col-sm-1">BD404</th>
                                        <th class="col-sm-1">BD701</th>
                                        <th class="col-sm-1">BD702</th>
                                        <th>Lainnya</th>
                                        <th class="col-sm-1">#</th>
                                    </tr>
                                </thead>
                            </table>    
                        {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="dataModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content p-0 b-0">
                    <div class="panel panel-color panel-primary" id="mdlPnl">
                        <div class="panel-heading">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h3 class="panel-title">Detail Lembar Surat Masuk</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-12">
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Nomor Agenda</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="nomorAgendaDetail" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="example-email">Tanggal Terima</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="tanggalTerimaDetail" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Tanggal Surat</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="tanggalSuratDetail" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Nomor Surat</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="nomorSuratDetail" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Asal Surat</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="asalSuratDetail" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Perihal</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" rows="5" id="perihalDetail" readonly></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <label class="col-sm-12 control-label">Sifat</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="sifatSR" type="checkbox" disabled>
                                                        <label for="sifatSR">
                                                            Sangat Rahasia
                                                        </label>
                                                    </div>
                                                </div>   
                                                <div class="col-sm-12">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="sifatR" type="checkbox" disabled>
                                                        <label for="sifatR">
                                                            Rahasia
                                                        </label>
                                                    </div>
                                                </div>   
                                                <div class="col-sm-12">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="sifatSS" type="checkbox" disabled>
                                                        <label for="sifatSS">
                                                            Sangat Segera
                                                        </label>
                                                    </div>
                                                </div>   
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="sifatS" type="checkbox" disabled>
                                                        <label for="sifatS">
                                                            Segera
                                                        </label>
                                                    </div>
                                                </div>   
                                                <div class="col-sm-12">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="sifatB" type="checkbox" disabled>
                                                        <label for="sifatB">
                                                            Biasa
                                                        </label>
                                                    </div>
                                                </div>   
                                                <div class="col-sm-12">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="sifatLainnya" type="checkbox" disabled>
                                                        <label for="sifatLainnya">
                                                            <div id="labelSifatLainnya">
                                                            ........
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>   
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <label class="col-sm-12 control-label">Disposisi Kabid</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="disposisiBD401" type="checkbox" disabled>
                                                        <label for="disposisiBD401">
                                                            Kasi Administrasi dan Bimbingan
                                                        </label>
                                                    </div>
                                                </div>   
                                                <div class="col-sm-12">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="disposisiBD402" type="checkbox" disabled>
                                                        <label for="disposisiBD402">
                                                            Kasi Bimbingan Penagihan
                                                        </label>
                                                    </div>
                                                </div>   
                                                <div class="col-sm-12">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="disposisiBD403" type="checkbox" disabled>
                                                        <label for="disposisiBD403">
                                                            Kasi Intelijen
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="disposisiBD404" type="checkbox" disabled>
                                                        <label for="disposisiBD404">
                                                            Kasi Administrasi Bukti Permulaan dan Penyidikan
                                                        </label>
                                                    </div>
                                                </div>   
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="disposisiBD701" type="checkbox" disabled>
                                                        <label for="disposisiBD701">
                                                            Ketua Kelompok I
                                                        </label>
                                                    </div>
                                                </div>   
                                                <div class="col-sm-12">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="disposisiBD702" type="checkbox" disabled>
                                                        <label for="disposisiBD702">
                                                            Ketua Kelompok II
                                                        </label>
                                                    </div>
                                                </div>   
                                                <div class="col-sm-12">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="disposisiLainnya" type="checkbox" disabled>
                                                        <label for="disposisiLainnya">
                                                            <div id="labelDisposisiLainnya">
                                                            ........
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>   
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <label class="col-sm-12 control-label">Petunjuk</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="petunjukProses" type="checkbox" disabled>
                                                        <label for="petunjukProses">
                                                            Diproses
                                                        </label>
                                                    </div>
                                                </div>   
                                                <div class="col-sm-12">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="petunjukTindaklanjuti" type="checkbox" disabled>
                                                        <label for="petunjukTindaklanjuti">
                                                            Ditindaklanjuti
                                                        </label>
                                                    </div>
                                                </div>   
                                                <div class="col-sm-12">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="petunjukManfaatkan" type="checkbox" disabled>
                                                        <label for="petunjukManfaatkan">
                                                            Dimanfaatkan
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="petunjukAdministrasikan" type="checkbox" disabled>
                                                        <label for="petunjukAdministrasikan">
                                                            Diadministrasikan (TU)
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="petunjukPantau" type="checkbox" disabled>
                                                        <label for="petunjukPantau">
                                                            Dipantau Pelaksanaannya
                                                        </label>
                                                    </div>
                                                </div>   
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="petunjukEdarkan" type="checkbox" disabled>
                                                        <label for="petunjukEdarkan">
                                                            Diedarkan/diketahui
                                                        </label>
                                                    </div>
                                                </div>   
                                                <div class="col-sm-12">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="petunjukPelajari" type="checkbox" disabled>
                                                        <label for="petunjukPelajari">
                                                            Dipelajari/dipedomani
                                                        </label>
                                                    </div>
                                                </div>   
                                                <div class="col-sm-12">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="petunjukCatat" type="checkbox" disabled>
                                                        <label for="petunjukCatat">
                                                            Catat dan Kembali Ke Kabid
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="petunjukArsip" type="checkbox" disabled>
                                                        <label for="petunjukArsip">
                                                            Arsip/file
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="petunjukLainnya" type="checkbox" disabled>
                                                        <label for="petunjukLainnya">
                                                            <div id="labelPetunjukLainnya">
                                                            ........
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>   
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-lg-1">
                                    <button type="button" class="btn btn-primary btn-icon btn-sm waves-effect" id="prev"><i class="mdi mdi-arrow-left"></i>Previous</button>
                                </div>
                                <div class="col-lg-10">
                                    <center>
                                        <button type="button" class="btn btn-googleplus btn-icon btn-sm waves-effect" data-dismiss="modal">Close</button>
                                    </center>
                                </div>
                                <div class="col-lg-1">
                                    <button type="button" class="btn btn-primary btn-icon btn-sm waves-effect" id="next">Next<i class="mdi mdi-arrow-right"></i></button>
                                </div>
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
<script src="{{ url('assets/js/detect.js') }}"></script>
<script src="{{ url('assets/js/fastclick.js') }}"></script>
<script src="{{ url('assets/js/jquery.blockUI.js') }}"></script>
<script src="{{ url('assets/js/waves.js') }}"></script>
<script src="{{ url('assets/js/jquery.slimscroll.js') }}"></script>
<script src="{{ url('assets/js/jquery.scrollTo.min.js') }}"></script>
<script src="{{ url('assets/plugins/switchery/switchery.min.js') }}"></script>

<script src="{{ url('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('assets/plugins/datatables/dataTables.bootstrap.js') }}"></script>

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
    loadInbox()
    loadDisposisi()
    $('#prev').click(function(){
        $('#mdlPnl').pleaseWait();
        var id_surat = $('#nomorAgendaDetail').val();
        $.post("{{ url('/kasi/prev') }}",{
            "_token":"{{ csrf_token() }}",
            "id":id_surat
        },function(response){
            console.log(response);
            if(response.length){
                $.each(response,function(i,item){
                    $('#nomorAgendaDetail').val(item.id_surat);
                    $('#tanggalTerimaDetail').val(item.tanggal_terima);
                    $('#tanggalSuratDetail').val(item.tanggal_surat);
                    $('#nomorSuratDetail').val(item.nomor_surat);
                    $('#asalSuratDetail').val(item.asal_surat);
                    $('#perihalDetail').val(item.perihal);
                    item.sangat_rahasia==1      ? $('#sifatSR').prop('checked',true)        : $('#sifatSR').prop('checked', false);
                    item.rahasia==1             ? $('#sifatR').prop('checked', true)        : $('#sifatR').prop('checked', false);
                    item.sangat_segera==1       ? $('#sifatSS').prop('checked', true)       : $('#sifatSS').prop('checked', false);
                    item.segera==1              ? $('#sifatS').prop('checked', true)        : $('#sifatS').prop('checked', false);
                    item.biasa==1               ? $('#sifatB').prop('checked', true)        : $('#sifatB').prop('checked', false);
                    if(item.sifat_lainnya!==null){
                        $('#sifatLainnya').prop('checked',true);
                        $('#labelSifatLainnya').empty();
                        $('#labelSifatLainnya').append(item.sifat_lainnya);
                    }else{
                        $('#sifatLainnya').prop('checked',false);
                        $('#labelSifatLainnya').empty();
                        $('#labelSifatLainnya').append('.............');
                    }
                    
                    item.kasi_adm_bimbingan==1          ? $('#disposisiBD401').prop('checked', true) : $('#disposisiBD401').prop('checked', false);
                    item.kasi_bim_penagihan==1          ? $('#disposisiBD402').prop('checked', true) : $('#disposisiBD402').prop('checked', false);
                    item.kasi_intelijen==1              ? $('#disposisiBD403').prop('checked', true) : $('#disposisiBD403').prop('checked', false);
                    item.kasi_adm_bukti==1              ? $('#disposisiBD404').prop('checked', true) : $('#disposisiBD404').prop('checked', false);
                    item.kasi_ketua_kelompok_satu==1    ? $('#disposisiBD701').prop('checked', true) : $('#disposisiBD701').prop('checked', false);
                    item.kasi_ketua_kelompok_dua==1     ? $('#disposisiBD702').prop('checked', true) : $('#disposisiBD702').prop('checked', false);
                    if(item.disposisi_lainnya!==null){
                        $('#disposisiLainnya').prop('checked',true);
                        $('#labelDisposisiLainnya').empty();
                        $('#labelDisposisiLainnya').append(item.disposisi_lainnya);
                    }else{
                        $('#disposisiLainnya').prop('checked',false);
                        $('#labelDisposisiLainnya').empty();
                        $('#labelDisposisiLainnya').append('.............');
                    }

                    item.diproses==1            ? $('#petunjukProses').prop('checked', true)            : $('#petunjukProses').prop('checked', false);
                    item.ditindaklanjuti==1     ? $('#petunjukTindaklanjuti').prop('checked', true)     : $('#petunjukTindaklanjuti').prop('checked', false);
                    item.dimanfaatkan==1        ? $('#petunjukManfaatkan').prop('checked', true)        : $('#petunjukManfaatkan').prop('checked', false);
                    item.diadministrasikan==1   ? $('#petunjukAdministrasikan').prop('checked', true)   : $('#petunjukAdministrasikan').prop('checked', false);
                    item.dipantau==1            ? $('#petunjukPantau').prop('checked', true)            : $('#petunjukPantau').prop('checked', false);
                    item.diedarkan==1           ? $('#petunjukEdarkan').prop('checked', true)           : $('#petunjukEdarkan').prop('checked', false);
                    item.dipelajari==1          ? $('#petunjukPelajari').prop('checked', true)          : $('#petunjukPelajari').prop('checked', false);
                    item.dicatat==1             ? $('#petunjukCatat').prop('checked', true)             : $('#petunjukCatat').prop('checked', false);
                    item.arsip==1               ? $('#petunjukArsip').prop('checked', true)             : $('#petunjukArsip').prop('checked', false);
                    if(item.petunjuk_lainnya!==null){
                        $('#petunjukLainnya').prop('checked',true);
                        $('#labelPetunjukLainnya').empty();
                        $('#labelPetunjukLainnya').append(item.disposisi_lainnya);
                    }else{
                        $('#petunjukLainnya').prop('checked',false);
                        $('#labelPetunjukLainnya').empty();
                        $('#labelPetunjukLainnya').append('.............');
                    }
                }); 
            }else{
                $.toast({
                    heading: 'Kesalahan',
                    text: 'Tidak Ada Surat Sebelum Nomor Agenda Ini',
                    position: 'bottom-right',
                    stack: 5,
                    showHideTransition: 'slide',
                    icon: 'error'
                });
            }
        },"json").done(function(){
            $('#mdlPnl').pleaseWait('stop');
        });
    });
    $('#next').click(function(){
        $('#mdlPnl').pleaseWait();
        var id_surat = $('#nomorAgendaDetail').val();
        $.post("{{ url('/kasi/next') }}",{
            "_token":"{{ csrf_token() }}",
            "id":id_surat
        },function(response){
            if(response.length){
                $.each(response,function(i,item){
                    $('#nomorAgendaDetail').val(item.id_surat);
                    $('#tanggalTerimaDetail').val(item.tanggal_terima);
                    $('#tanggalSuratDetail').val(item.tanggal_surat);
                    $('#nomorSuratDetail').val(item.nomor_surat);
                    $('#asalSuratDetail').val(item.asal_surat);
                    $('#perihalDetail').val(item.perihal);
                    item.sangat_rahasia==1      ? $('#sifatSR').prop('checked',true)        : $('#sifatSR').prop('checked', false);
                    item.rahasia==1             ? $('#sifatR').prop('checked', true)        : $('#sifatR').prop('checked', false);
                    item.sangat_segera==1       ? $('#sifatSS').prop('checked', true)       : $('#sifatSS').prop('checked', false);
                    item.segera==1              ? $('#sifatS').prop('checked', true)        : $('#sifatS').prop('checked', false);
                    item.biasa==1               ? $('#sifatB').prop('checked', true)        : $('#sifatB').prop('checked', false);
                    if(item.sifat_lainnya!==null){
                        $('#sifatLainnya').prop('checked',true);
                        $('#labelSifatLainnya').empty();
                        $('#labelSifatLainnya').append(item.sifat_lainnya);
                    }else{
                        $('#sifatLainnya').prop('checked',false);
                        $('#labelSifatLainnya').empty();
                        $('#labelSifatLainnya').append('.............');
                    }
                    
                    item.kasi_adm_bimbingan==1          ? $('#disposisiBD401').prop('checked', true) : $('#disposisiBD401').prop('checked', false);
                    item.kasi_bim_penagihan==1          ? $('#disposisiBD402').prop('checked', true) : $('#disposisiBD402').prop('checked', false);
                    item.kasi_intelijen==1              ? $('#disposisiBD403').prop('checked', true) : $('#disposisiBD403').prop('checked', false);
                    item.kasi_adm_bukti==1              ? $('#disposisiBD404').prop('checked', true) : $('#disposisiBD404').prop('checked', false);
                    item.kasi_ketua_kelompok_satu==1    ? $('#disposisiBD701').prop('checked', true) : $('#disposisiBD701').prop('checked', false);
                    item.kasi_ketua_kelompok_dua==1     ? $('#disposisiBD702').prop('checked', true) : $('#disposisiBD702').prop('checked', false);
                    if(item.disposisi_lainnya!==null){
                        $('#disposisiLainnya').prop('checked',true);
                        $('#labelDisposisiLainnya').empty();
                        $('#labelDisposisiLainnya').append(item.disposisi_lainnya);
                    }else{
                        $('#disposisiLainnya').prop('checked',false);
                        $('#labelDisposisiLainnya').empty();
                        $('#labelDisposisiLainnya').append('.............');
                    }

                    item.diproses==1            ? $('#petunjukProses').prop('checked', true)            : $('#petunjukProses').prop('checked', false);
                    item.ditindaklanjuti==1     ? $('#petunjukTindaklanjuti').prop('checked', true)     : $('#petunjukTindaklanjuti').prop('checked', false);
                    item.dimanfaatkan==1        ? $('#petunjukManfaatkan').prop('checked', true)        : $('#petunjukManfaatkan').prop('checked', false);
                    item.diadministrasikan==1   ? $('#petunjukAdministrasikan').prop('checked', true)   : $('#petunjukAdministrasikan').prop('checked', false);
                    item.dipantau==1            ? $('#petunjukPantau').prop('checked', true)            : $('#petunjukPantau').prop('checked', false);
                    item.diedarkan==1           ? $('#petunjukEdarkan').prop('checked', true)           : $('#petunjukEdarkan').prop('checked', false);
                    item.dipelajari==1          ? $('#petunjukPelajari').prop('checked', true)          : $('#petunjukPelajari').prop('checked', false);
                    item.dicatat==1             ? $('#petunjukCatat').prop('checked', true)             : $('#petunjukCatat').prop('checked', false);
                    item.arsip==1               ? $('#petunjukArsip').prop('checked', true)             : $('#petunjukArsip').prop('checked', false);
                    if(item.petunjuk_lainnya!==null){
                        $('#petunjukLainnya').prop('checked',true);
                        $('#labelPetunjukLainnya').empty();
                        $('#labelPetunjukLainnya').append(item.disposisi_lainnya);
                    }else{
                        $('#petunjukLainnya').prop('checked',false);
                        $('#labelPetunjukLainnya').empty();
                        $('#labelPetunjukLainnya').append('.............');
                    }
                }); 
            }else{
                $.toast({
                    heading: 'Kesalahan',
                    text: 'Tidak Ada Surat Sesudah Nomor Agenda Ini',
                    position: 'bottom-right',
                    stack: 5,
                    showHideTransition: 'slide',
                    icon: 'error'
                });
            }
        },"json").done(function(){
            $('#mdlPnl').pleaseWait('stop');
        });
    });
    $('#tabsSurat').click(function(){
        $('#tblInbox').show();
        $('#tblDsp').hide(); 
    });
    $('#tabsDisposisi').click(function(){
        $('#tblDsp').show();
        $('#tblInbox').hide();
    });
});
$(document).on('click','.detailInbox',function(){
    var id = $(this).attr('data-id');
    $('body').pleaseWait();
    $.post("{{ url('/kasi/detailInbox') }}",{
        "_token":"{{ csrf_token() }}",
        "id":id
    },function(notice){
        $.each(notice,function(i,item){
            $('#nomorAgendaDetail').val(item.id_surat);
            $('#tanggalTerimaDetail').val(item.tanggal_terima);
            $('#tanggalSuratDetail').val(item.tanggal_surat);
            $('#nomorSuratDetail').val(item.nomor_surat);
            $('#asalSuratDetail').val(item.asal_surat);
            $('#perihalDetail').val(item.perihal);
            item.sangat_rahasia==1      ? $('#sifatSR').prop('checked',true)        : $('#sifatSR').prop('checked', false);
            item.rahasia==1             ? $('#sifatR').prop('checked', true)        : $('#sifatR').prop('checked', false);
            item.sangat_segera==1       ? $('#sifatSS').prop('checked', true)       : $('#sifatSS').prop('checked', false);
            item.segera==1              ? $('#sifatS').prop('checked', true)        : $('#sifatS').prop('checked', false);
            item.biasa==1               ? $('#sifatB').prop('checked', true)        : $('#sifatB').prop('checked', false);
            if(item.sifat_lainnya!==null){
                $('#sifatLainnya').prop('checked', true);
                $('#labelSifatLainnya').empty();
                $('#labelSifatLainnya').append(item.sifat_lainnya);
            }else{
                $('#sifatLainnya').prop('checked', false);
                $('#labelSifatLainnya').empty();
                $('#labelSifatLainnya').append(".........");
            }

            item.kasi_adm_bimbingan==1          ? $('#disposisiBD401').prop('checked', true) : $('#disposisiBD401').prop('checked', false);
            item.kasi_bim_penagihan==1          ? $('#disposisiBD402').prop('checked', true) : $('#disposisiBD402').prop('checked', false);
            item.kasi_intelijen==1              ? $('#disposisiBD403').prop('checked', true) : $('#disposisiBD403').prop('checked', false);
            item.kasi_adm_bukti==1              ? $('#disposisiBD404').prop('checked', true) : $('#disposisiBD404').prop('checked', false);
            item.kasi_ketua_kelompok_satu==1    ? $('#disposisiBD701').prop('checked', true) : $('#disposisiBD701').prop('checked', false);
            item.kasi_ketua_kelompok_dua==1     ? $('#disposisiBD702').prop('checked', true) : $('#disposisiBD702').prop('checked', false);
            if(item.disposisi_lainnya!==null){
                $('#disposisiLainnya').prop('checked', true);
                $('#labelDisposisiLainnya').empty();
                $('#labelDisposisiLainnya').append(item.disposisi_lainnya);
            }else{
                $('#disposisiLainnya').prop('checked', false);
                $('#labelDisposisiLainnya').empty();
                $('#labelDisposisiLainnya').append(".........");
            }
            
            item.diproses==1            ? $('#petunjukProses').prop('checked', true)            : $('#petunjukProses').prop('checked', false);
            item.ditindaklanjuti==1     ? $('#petunjukTindaklanjuti').prop('checked', true)     : $('#petunjukTindaklanjuti').prop('checked', false);
            item.dimanfaatkan==1        ? $('#petunjukManfaatkan').prop('checked', true)        : $('#petunjukManfaatkan').prop('checked', false);
            item.diadministrasikan==1   ? $('#petunjukAdministrasikan').prop('checked', true)   : $('#petunjukAdministrasikan').prop('checked', false);
            item.dipantau==1            ? $('#petunjukPantau').prop('checked', true)            : $('#petunjukPantau').prop('checked', false);
            item.diedarkan==1           ? $('#petunjukEdarkan').prop('checked', true)           : $('#petunjukEdarkan').prop('checked', false);
            item.dipelajari==1          ? $('#petunjukPelajari').prop('checked', true)          : $('#petunjukPelajari').prop('checked', false);
            item.dicatat==1             ? $('#petunjukCatat').prop('checked', true)             : $('#petunjukCatat').prop('checked', false);
            item.arsip==1               ? $('#petunjukArsip').prop('checked', true)             : $('#petunjukArsip').prop('checked', false);
            if(item.petunjuk_lainnya!==null){
                $('#petunjukLainnya').prop('checked', true);
                $('#labelPetunjukLainnya').empty();
                $('#labelPetunjukLainnya').append(item.petunjuk_lainnya);
            }else{
                $('#petunjukLainnya').prop('checked', false);
                $('#labelPetunjukLainnya').empty();
                $('#labelPetunjukLainnya').append(".........");
            }
        });
    },"json").done(function(){
        $('body').pleaseWait('stop');
        $('#dataModal').modal('show');
    });
});
function loadInbox(){
    var table = $('#tblInbox').DataTable({
        processing:true,
        serverSide:true,
        destroy:true,
        fixedHeader: true,
        ajax:"{{ url('kasi/dataInbox') }}",
        columns:[
            {data:'id_surat',render:function(data,type,row){
                return '<center><input type="checkbox" name="id_surat_print[]" value="'+data+'" style="width:18px;height:18px;"></center>';
            }},
            {data:'id_surat'},
            {data:'tanggal_terima'},
            {data:'tanggal_surat'},
            {data:'nomor_surat'},
            {data:'asal_surat'},
            {data:'perihal'},
            {data:'id_surat',render:function(data,type,row){
                return '<a style="z-index:0;" class="btn btn-xs btn-icon waves-effect waves-light btn-primary m-b-5 detailInbox" data-id="'+ data +'"><i class="mdi mdi-magnify"></i></a>';
            }}
        ],
            columnDefs:[
            { "width": "5%", "targets": 0 },
            { "width": "5%", "targets": 1 },
            { "width": "5%", "targets": 7},
            {className:"noWrapTd",targets:[2]},
            {className:"noWrapTd",targets:[3]},
            {className:"noWrapTd",targets:[4]},
            {className:"noWrapTd",targets:[-1]}
        ]
    });
}
function loadDisposisi(){
    var table = $('#tblDsp').DataTable({
        processing:true,
        serverSide:true,
        destroy:true,
        fixedHeader: true,
        ajax:"{{ url('kasi/dataDisposisi') }}",
        columns:[
            {data:'id_surat',render:function(data,type,row){
                return '<center><input type="checkbox" name="id_surat_print[]" value="'+data+'" style="width:20px;height:20px;"></center>';
            }},
            {data:'id_surat'},
            {data:'nomor_surat'},
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
            {data:'kasi_adm_bimbingan',render:function(data,type,row){
                if(data==1){
                    return "<center>&#10004;</center>";
                }else{
                    return "";
                }
            }},
            {data:'kasi_bim_penagihan',render:function(data,type,row){
                if(data==1){
                    return "<center>&#10004;</center>";
                }else{
                    return "";
                }
            }},
            {data:'kasi_intelijen',render:function(data,type,row){
                if(data==1){
                    return "<center>&#10004;</center>";
                }else{
                    return "";
                }
            }},
            {data:'kasi_adm_bukti',render:function(data,type,row){
                if(data==1){
                    return "<center>&#10004;</center>";
                }else{
                    return "";
                }
            }},
            {data:'kasi_ketua_kelompok_satu',render:function(data,type,row){
                if(data==1){
                    return "<center>&#10004;</center>";
                }else{
                    return "";
                }
            }},
            {data:'kasi_ketua_kelompok_dua',render:function(data,type,row){
                if(data==1){
                    return "<center>&#10004;</center>";
                }else{
                    return "";
                }
            }},
            {data:'disposisi_lainnya',render:function(data,type,row){
                if(data!=""){
                    return data;
                }else{
                    return "";
                }
            
            }},
            {data: function(data,type,dataToSet){
                return '<a style="z-index:0;" class="btn btn-xs btn-icon waves-effect waves-light btn-primary m-b-5 detailInbox" data-id="' + data.id_surat + '"><i class="mdi mdi-magnify"></i></a>';
            }},
        ],
            columnDefs:[
            {className:"noWrapTd",targets:[2]}
        ]
    });
}
</script>
@endsection