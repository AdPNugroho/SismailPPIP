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
                <li class="">
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
                <div class="tab-pane active" id="inputSurat">
                    <div class="row">
                        <div class="col-lg-6">
                            {!! Form::open(array('class'=>'form-horizontal','role'=>'form','id'=>'frmI')) !!}
                                <div class="form-group">
	                                <label class="col-md-2 control-label">Tanggal Terima</label>
	                                <div class="col-md-10">
                                        <div class="input-group">
                                            <input type="text" class="form-control dAC" placeholder="mm/dd/yyyy" name="tanggal_terima">
                                            <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                        </div>
	                                </div>
                                </div>
                                <div class="form-group">
	                                <label class="col-md-2 control-label">Tanggal Surat</label>
	                                <div class="col-md-10">
                                        <div class="input-group">
                                            <input type="text" class="form-control dAC" placeholder="mm/dd/yyyy" name="tanggal_surat">
                                            <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                        </div>
	                                </div>
                                </div>
	                            <div class="form-group">
	                                <label class="col-md-2 control-label">Nomor Surat</label>
	                                <div class="col-md-10">
	                                    <input type="text" class="form-control" name="nomor_surat">
	                                </div>
	                            </div>
	                            <div class="form-group">
	                                <label class="col-md-2 control-label">Asal Surat</label>
	                                <div class="col-md-10">
	                                    <input type="text" class="form-control" name="asal_surat">
	                                </div>
	                            </div>
                                <div class="form-group">
	                                <label class="col-md-2 control-label">Perihal</label>
	                                <div class="col-md-10">
	                                    <textarea class="form-control" rows="5" name="perihal"></textarea>
	                                </div>
	                            </div>
                                <div class="form-group">
	                                <label class="col-md-2 control-label"></label>
	                                <div class="col-md-10">
                                        <button type="button" class="btn btn-primary waves-effect w-md waves-light m-b-5" id="btnSvI">Simpan</button>
                                        <button type="button" class="btn btn-danger waves-effect w-md waves-light m-b-5" id="btnRstI">Reset</button>
	                                </div>
	                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="dataSurat">
                    <div class="row">
                        <div class="col-md-12">
                        {!! Form::open(array('url'=>'sec/print')) !!}
                            <button type="submit" class="btn btn-sm btn-primary waves-effect w-md waves-light m-b-5" id="printSurat"><span class="fa fa-print"></span>&nbsp;&nbsp;Print</button>
                            <table id="tblInbox" class="table table-striped table-bordered table-hover">
                                <thead id="headInbox">
                                    <tr>
                                        <th><center><i class="mdi mdi-printer"></i></center></th>
                                        <th><center>#</center></th>
                                        <th>Tanggal Terima</th>
                                        <th>Tanggal Surat</th>
                                        <th>Nomor Surat</th>
                                        <th>Asal Surat</th>
                                        <th>Perihal</th>
                                        <th><span class="fa fa-wrench"></span></th>
                                    </tr>
                                </thead>
                            </table>    
                        {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="dataDisposisi">
                    <div class="row">
                        <div class="col-md-12">
                        {!! Form::open(array('url'=>'sec/print')) !!}
                            <button type="submit" class="btn btn-sm btn-primary waves-effect w-md waves-light m-b-5"><span class="fa fa-print"></span>&nbsp;&nbsp;Print</button>
                            <table id="tblDisposisi" class="table table-striped table-bordered table-hover">
                                <thead id="headDisposisi">
                                    <tr>
                                        <th><center><i class="mdi mdi-printer"></i></center></th>
                                        <th>#</th>
                                        <th>Nomor Surat</th>
                                        <th>Sifat</th>
                                        <th>Petunjuk</th>
                                        <th>BD401</th>
                                        <th>BD402</th>
                                        <th>BD403</th>
                                        <th>BD404</th>
                                        <th>BD701</th>
                                        <th>BD702</th>
                                        <th>Lainnya</th>
                                        <th><span class="fa fa-check-square-o"></span></th>
                                    </tr>
                                </thead>
                            </table>    
                        {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="detail-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content p-0 b-0">
                    <div class="panel panel-color panel-primary">
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
                            <button type="button" class="btn btn-googleplus waves-effect" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="disposisi-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content p-0 b-0">
                    <div class="panel panel-color panel-primary">
                        <div class="panel-heading">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h3 class="panel-title">Lembar Disposisi Surat Masuk</h3>
                        </div>
                        <div class="panel-body" id="bodyDisposisiModal">
                            <div class="col-md-12">
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Nomor Agenda</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="nomorAgendaDps" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="example-email">Tanggal Terima</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="tanggalTerimaDps">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Tanggal Surat</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="tanggalSuratDps">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Nomor Surat</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="nomorSuratDps">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Asal Surat</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="asalSuratDps">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Perihal</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" rows="5" id="perihalDps"></textarea>
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
                                                        <input id="sifatSRDps" type="checkbox">
                                                        <label for="sifatSRDps">
                                                            Sangat Rahasia
                                                        </label>
                                                    </div>
                                                </div>   
                                                <div class="col-sm-12">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="sifatRDps" type="checkbox">
                                                        <label for="sifatRDps">
                                                            Rahasia
                                                        </label>
                                                    </div>
                                                </div>   
                                                <div class="col-sm-12">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="sifatSSDps" type="checkbox">
                                                        <label for="sifatSSDps">
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
                                                        <input id="sifatSDps" type="checkbox">
                                                        <label for="sifatSDps">
                                                            Segera
                                                        </label>
                                                    </div>
                                                </div>   
                                                <div class="col-sm-12">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="sifatBDps" type="checkbox">
                                                        <label for="sifatBDps">
                                                            Biasa
                                                        </label>
                                                    </div>
                                                </div>     
                                                <div class="col-sm-8">
                                                    <div class="checkbox checkbox-primary">
                                                        <input type="text" class="form-control" id="labelSifatLainnyaDps" placeholder="Sifat Surat Lainnya">
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
                                                        <input id="disposisiBD401Dps" type="checkbox">
                                                        <label for="disposisiBD401Dps">
                                                            Kasi Administrasi dan Bimbingan
                                                        </label>
                                                    </div>
                                                </div>   
                                                <div class="col-sm-12">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="disposisiBD402Dps" type="checkbox">
                                                        <label for="disposisiBD402Dps">
                                                            Kasi Bimbingan Penagihan
                                                        </label>
                                                    </div>
                                                </div>   
                                                <div class="col-sm-12">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="disposisiBD403Dps" type="checkbox">
                                                        <label for="disposisiBD403Dps">
                                                            Kasi Intelijen
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="disposisiBD404Dps" type="checkbox">
                                                        <label for="disposisiBD404Dps">
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
                                                        <input id="disposisiBD701Dps" type="checkbox">
                                                        <label for="disposisiBD701Dps">
                                                            Ketua Kelompok I
                                                        </label>
                                                    </div>
                                                </div>   
                                                <div class="col-sm-12">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="disposisiBD702Dps" type="checkbox">
                                                        <label for="disposisiBD702Dps">
                                                            Ketua Kelompok II
                                                        </label>
                                                    </div>
                                                </div>  
                                                <div class="col-sm-8">
                                                    <div class="checkbox checkbox-primary">
                                                        <input type="text" class="form-control" id="labelDisposisiLainnyaDps" placeholder="Disposisi Surat Lainnya">
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
                                                        <input id="petunjukProsesDps" type="checkbox">
                                                        <label for="petunjukProsesDps">
                                                            Diproses
                                                        </label>
                                                    </div>
                                                </div>   
                                                <div class="col-sm-12">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="petunjukTindaklanjutiDps" type="checkbox">
                                                        <label for="petunjukTindaklanjutiDps">
                                                            Ditindaklanjuti
                                                        </label>
                                                    </div>
                                                </div>   
                                                <div class="col-sm-12">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="petunjukManfaatkanDps" type="checkbox">
                                                        <label for="petunjukManfaatkanDps">
                                                            Dimanfaatkan
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="petunjukAdministrasikanDps" type="checkbox">
                                                        <label for="petunjukAdministrasikanDps">
                                                            Diadministrasikan (TU)
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="petunjukPantauDps" type="checkbox">
                                                        <label for="petunjukPantauDps">
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
                                                        <input id="petunjukEdarkanDps" type="checkbox">
                                                        <label for="petunjukEdarkanDps">
                                                            Diedarkan/diketahui
                                                        </label>
                                                    </div>
                                                </div>   
                                                <div class="col-sm-12">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="petunjukPelajariDps" type="checkbox">
                                                        <label for="petunjukPelajariDps">
                                                            Dipelajari/dipedomani
                                                        </label>
                                                    </div>
                                                </div>   
                                                <div class="col-sm-12">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="petunjukCatatDps" type="checkbox">
                                                        <label for="petunjukCatatDps">
                                                            Catat dan Kembali Ke Kabid
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="petunjukArsipDps" type="checkbox">
                                                        <label for="petunjukArsipDps">
                                                            Arsip/file
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="checkbox checkbox-primary">
                                                        <input type="text" class="form-control" id="labelPetunjukLainnyaDps" placeholder="Petunjuk Surat Lainnya">
                                                    </div>
                                                </div>   
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="panel-footer">
                            <button type="button" class="btn btn-default btn-icon btn-sm waves-effect" id="prevDisposisi"><i class="mdi mdi-arrow-left"></i>Previous</button>
                            <button type="button" class="btn btn-googleplus waves-effect btn-sm" id="closeModalDisposisi">Close</button>
                            <button type="button" class="btn btn-success waves-effect btn-sm" id="saveDisposisi">Save</button>
                            <button type="button" class="btn btn-default btn-icon btn-sm waves-effect" id="nextDisposisi">Next<i class="mdi mdi-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="update-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content p-0 b-0">
                    <div class="panel panel-color panel-primary">
                        <div class="panel-heading">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h3 class="panel-title">Detail Lembar Surat Masuk</h3>
                        </div>
                        <div class="panel-body">
                            
                            
                        </div>
                        <div class="panel-footer">
                            <button type="button" class="btn btn-googleplus waves-effect" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary waves-effect" >Save</button>
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

<!-- App js -->
<script src="{{ url('assets/js/jquery.core.js') }}"></script>
<script src="{{ url('assets/js/jquery.app.js') }}"></script>

<script type="text/javascript" src="{{ asset('assets/js/jquery.pleaseWait.js') }}"></script>
<script src="{{ asset('assets/js/jquery.toast.js') }}"></script>
<script>
$(document).ready(function(){
    loadInbox()
    loadDisposisi()
    $('#btnSvI').click(function(){
        var data = $('#frmI').serialize();
        $.ajax({
            url:"{{ url('sec/inbox') }}",
            data:data,
            type:'post',
            dataType:'json',
            cache:false,
            beforeSend:function(){
                $('#crdInbox').pleaseWait();
            },
            success:function(response){
                $.toast({
                    heading: 'Information',
                    text: response.message,
                    position: 'bottom-right',
                    stack: false,
                    showHideTransition: 'slide',
                    icon: response.status
                });
                $('#crdInbox').pleaseWait('stop');
                $('#frmI').trigger('reset');
                $('#tblInbox').DataTable().ajax.reload(null,false);
                $('#tblDisposisi').DataTable().ajax.reload(null,false);
            },
			error:function(xhr,ajaxOptions,thrownError){
				var error = xhr.responseJSON;
                var no = 0;
                var errorArray = [];
                $.each(error, function (key, value) {
                    errorArray[no] = value[0];
                    no++;
                });
                $.toast({
                    heading: 'Error!',
                    text: errorArray,
                    icon: 'error',
                    position: 'bottom-right'
                });
                $('#crdInbox').pleaseWait('stop');
			}
        });
    });
    $('#btnRstI').click(function(){
        $('#frmI').trigger('reset');
    });
    $('#closeModalDisposisi').click(function(){
        $('#disposisi-modal').modal('hide');
        $('#tblDisposisi').DataTable().ajax.reload(null,false);
        $('#tblInbox').DataTable().ajax.reload(null,false);
    });
    $('#prevDisposisi').click(function(){
        var id_surat = $('#nomorAgendaDps').val();
        var tanggal_terima = $('#tanggalTerimaDps').val();
        var tanggal_surat = $('#tanggalSuratDps').val();
        var nomor_surat = $('#nomorSuratDps').val();
        var asal_surat = $('#asalSuratDps').val();
        var perihal = $('#perihalDps').val();
        var sifat_lainnya = $('#labelSifatLainnyaDps').val();
        var disposisi_lainnya = $('#labelDisposisiLainnyaDps').val();
        var petunjuk_lainnya = $('#labelPetunjukLainnyaDps').val();

        $('#sifatSRDps').is(':checked')             ? sangat_rahasia = 1: sangat_rahasia = 0 ;
        $('#sifatRDps').is(':checked')              ? rahasia = 1 : rahasia = 0;
        $('#sifatSSDps').is(':checked')             ? sangat_segera = 1 : sangat_segera = 0;
        $('#sifatSDps').is(':checked')              ? segera = 1 : segera = 0 ; 
        $('#sifatBDps').is(':checked')              ? biasa = 1 : biasa = 0 ;
        $('#disposisiBD401Dps').is(':checked')      ? kasi_adm_bimbingan = 1 : kasi_adm_bimbingan = 0 ;
        $('#disposisiBD402Dps').is(':checked')      ? kasi_bim_penagihan = 1 : kasi_bim_penagihan = 0 ;
        $('#disposisiBD403Dps').is(':checked')      ? kasi_intelijen = 1 : kasi_intelijen = 0 ;
        $('#disposisiBD404Dps').is(':checked')      ? kasi_adm_bukti = 1 : kasi_adm_bukti = 0 ;
        $('#disposisiBD701Dps').is(':checked')      ? kasi_ketua_kelompok_satu = 1 : kasi_ketua_kelompok_satu = 0 ;
        $('#disposisiBD702Dps').is(':checked')      ? kasi_ketua_kelompok_dua = 1 : kasi_ketua_kelompok_dua = 0 ;
        $('#petunjukProsesDps').is(':checked')      ? diproses = 1 : diproses = 0 ;
        $('#petunjukTindaklanjutiDps').is(':checked')   ? ditindaklanjuti = 1 : ditindaklanjuti = 0 ;
        $('#petunjukManfaatkanDps').is(':checked')      ? dimanfaatkan = 1 : dimanfaatkan = 0 ;
        $('#petunjukAdministrasikanDps').is(':checked') ? diadministrasikan = 1 : diadministrasikan = 0 ;
        $('#petunjukPantauDps').is(':checked')          ? dipantau = 1 : dipantau = 0 ;
        $('#petunjukEdarkanDps').is(':checked')         ? diedarkan = 1 : diedarkan = 0 ;
        $('#petunjukPelajariDps').is(':checked')        ? dipelajari = 1 : dipelajari = 0 ;
        $('#petunjukCatatDps').is(':checked')           ? dicatat = 1 : dicatat = 0 ;
        $('#petunjukArsipDps').is(':checked')           ? arsip = 1 : arsip = 0 ;
        
        $.ajax({
            url:"{{ url('sec/disposisi') }}",
            data:{
                _token:'{{ csrf_token() }}',
                id_surat:id_surat,
                tanggal_terima:tanggal_terima,
                tanggal_surat:tanggal_surat,
                nomor_surat:nomor_surat,
                asal_surat:asal_surat,
                perihal:perihal,
                sifat_lainnya:sifat_lainnya,
                disposisi_lainnya:disposisi_lainnya,
                petunjuk_lainnya:petunjuk_lainnya,
                sangat_rahasia:sangat_rahasia,
                rahasia:rahasia,
                sangat_segera:sangat_segera,
                segera:segera,
                biasa:biasa,
                kasi_adm_bimbingan:kasi_adm_bimbingan,
                kasi_bim_penagihan:kasi_bim_penagihan,
                kasi_intelijen:kasi_intelijen,
                kasi_adm_bukti:kasi_adm_bukti,
                kasi_ketua_kelompok_satu:kasi_ketua_kelompok_satu,
                kasi_ketua_kelompok_dua:kasi_ketua_kelompok_dua,
                diproses:diproses,
                ditindaklanjuti:ditindaklanjuti,
                dimanfaatkan:dimanfaatkan,
                diadministrasikan:diadministrasikan,
                dipantau:dipantau,
                diedarkan:diedarkan,
                dipelajari:dipelajari,
                dicatat:dicatat,
                arsip:arsip
            },
            type:'post',
            dataType:'json',
            cache:false,
            beforeSend:function(){
                $('#bodyDisposisiModal').pleaseWait();
            },
            success:function(response){
                $.post("{{ url('/sec/prev') }}",{
                    "_token":"{{ csrf_token() }}",
                    "id":id_surat
                },function(response){
                    if(response.length){
                        $.each(response,function(i,item){
                            $('#nomorAgendaDps').val(item.id_surat);
                            $('#tanggalTerimaDps').val(item.tanggal_terima);
                            $('#tanggalSuratDps').val(item.tanggal_surat);
                            $('#nomorSuratDps').val(item.nomor_surat);
                            $('#asalSuratDps').val(item.asal_surat);
                            $('#perihalDps').val(item.perihal);
                            item.sangat_rahasia==1      ? $('#sifatSRDps').prop('checked',true)        : $('#sifatSRDps').prop('checked', false);
                            item.rahasia==1             ? $('#sifatRDps').prop('checked', true)        : $('#sifatRDps').prop('checked', false);
                            item.sangat_segera==1       ? $('#sifatSSDps').prop('checked', true)       : $('#sifatSSDps').prop('checked', false);
                            item.segera==1              ? $('#sifatSDps').prop('checked', true)        : $('#sifatSDps').prop('checked', false);
                            item.biasa==1               ? $('#sifatBDps').prop('checked', true)        : $('#sifatBDps').prop('checked', false);
                            item.sifat_lainnya!==null   ? $('#labelSifatLainnyaDps').val(item.sifat_lainnya) : $('#labelSifatLainnyaDps').val('');
                            
                            item.kasi_adm_bimbingan==1          ? $('#disposisiBD401Dps').prop('checked', true) : $('#disposisiBD401Dps').prop('checked', false);
                            item.kasi_bim_penagihan==1          ? $('#disposisiBD402Dps').prop('checked', true) : $('#disposisiBD402Dps').prop('checked', false);
                            item.kasi_intelijen==1              ? $('#disposisiBD403Dps').prop('checked', true) : $('#disposisiBD403Dps').prop('checked', false);
                            item.kasi_adm_bukti==1              ? $('#disposisiBD404Dps').prop('checked', true) : $('#disposisiBD404Dps').prop('checked', false);
                            item.kasi_ketua_kelompok_satu==1    ? $('#disposisiBD701Dps').prop('checked', true) : $('#disposisiBD701Dps').prop('checked', false);
                            item.kasi_ketua_kelompok_dua==1     ? $('#disposisiBD702Dps').prop('checked', true) : $('#disposisiBD702Dps').prop('checked', false);
                            item.disposisi_lainnya!==null   ? $('#labelDisposisiLainnyaDps').val(item.disposisi_lainnya) : $('#labelDisposisiLainnyaDps').val('');
                            
                            item.diproses==1            ? $('#petunjukProsesDps').prop('checked', true)            : $('#petunjukProsesDps').prop('checked', false);
                            item.ditindaklanjuti==1     ? $('#petunjukTindaklanjutiDps').prop('checked', true)     : $('#petunjukTindaklanjutiDps').prop('checked', false);
                            item.dimanfaatkan==1        ? $('#petunjukManfaatkanDps').prop('checked', true)        : $('#petunjukManfaatkanDps').prop('checked', false);
                            item.diadministrasikan==1   ? $('#petunjukAdministrasikanDps').prop('checked', true)   : $('#petunjukAdministrasikanDps').prop('checked', false);
                            item.dipantau==1            ? $('#petunjukPantauDps').prop('checked', true)            : $('#petunjukPantauDps').prop('checked', false);
                            item.diedarkan==1           ? $('#petunjukEdarkanDps').prop('checked', true)           : $('#petunjukEdarkanDps').prop('checked', false);
                            item.dipelajari==1          ? $('#petunjukPelajariDps').prop('checked', true)          : $('#petunjukPelajariDps').prop('checked', false);
                            item.dicatat==1             ? $('#petunjukCatatDps').prop('checked', true)             : $('#petunjukCatatDps').prop('checked', false);
                            item.arsip==1               ? $('#petunjukArsipDps').prop('checked', true)             : $('#petunjukArsipDps').prop('checked', false);
                            item.petunjuk_lainnya!==null   ? $('#labelPetunjukLainnyaDps').val(item.petunjuk_lainnya) : $('#labelPetunjukLainnyaDps').val('');
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
                    $('#bodyDisposisiModal').pleaseWait('stop');
                    $.toast({
                        heading: 'Information',
                        text: 'Data Surat Disposisi Berhasil Di Simpan',
                        position: 'bottom-right',
                        stack: 5,
                        showHideTransition: 'slide',
                        icon: 'info'
                    });
                });
            },
			error:function(xhr,ajaxOptions,thrownError){
				var error = xhr.responseJSON;
                var no = 0;
                var errorArray = [];
                $.each(error, function (key, value) {
                    errorArray[no] = value[0];
                    no++;
                });
                $.toast({
                    heading: 'Error!',
                    text: errorArray,
                    icon: 'error',
                    position: 'bottom-right'
                });
                $('#bodyDisposisiModal').pleaseWait('stop');
			}
        });
    });
    $('#nextDisposisi').click(function(){
        var id_surat = $('#nomorAgendaDps').val();
        var tanggal_terima = $('#tanggalTerimaDps').val();
        var tanggal_surat = $('#tanggalSuratDps').val();
        var nomor_surat = $('#nomorSuratDps').val();
        var asal_surat = $('#asalSuratDps').val();
        var perihal = $('#perihalDps').val();
        var sifat_lainnya = $('#labelSifatLainnyaDps').val();
        var disposisi_lainnya = $('#labelDisposisiLainnyaDps').val();
        var petunjuk_lainnya = $('#labelPetunjukLainnyaDps').val();

        $('#sifatSRDps').is(':checked')             ? sangat_rahasia = 1: sangat_rahasia = 0 ;
        $('#sifatRDps').is(':checked')              ? rahasia = 1 : rahasia = 0;
        $('#sifatSSDps').is(':checked')             ? sangat_segera = 1 : sangat_segera = 0;
        $('#sifatSDps').is(':checked')              ? segera = 1 : segera = 0 ; 
        $('#sifatBDps').is(':checked')              ? biasa = 1 : biasa = 0 ;
        $('#disposisiBD401Dps').is(':checked')      ? kasi_adm_bimbingan = 1 : kasi_adm_bimbingan = 0 ;
        $('#disposisiBD402Dps').is(':checked')      ? kasi_bim_penagihan = 1 : kasi_bim_penagihan = 0 ;
        $('#disposisiBD403Dps').is(':checked')      ? kasi_intelijen = 1 : kasi_intelijen = 0 ;
        $('#disposisiBD404Dps').is(':checked')      ? kasi_adm_bukti = 1 : kasi_adm_bukti = 0 ;
        $('#disposisiBD701Dps').is(':checked')      ? kasi_ketua_kelompok_satu = 1 : kasi_ketua_kelompok_satu = 0 ;
        $('#disposisiBD702Dps').is(':checked')      ? kasi_ketua_kelompok_dua = 1 : kasi_ketua_kelompok_dua = 0 ;
        $('#petunjukProsesDps').is(':checked')      ? diproses = 1 : diproses = 0 ;
        $('#petunjukTindaklanjutiDps').is(':checked')   ? ditindaklanjuti = 1 : ditindaklanjuti = 0 ;
        $('#petunjukManfaatkanDps').is(':checked')      ? dimanfaatkan = 1 : dimanfaatkan = 0 ;
        $('#petunjukAdministrasikanDps').is(':checked') ? diadministrasikan = 1 : diadministrasikan = 0 ;
        $('#petunjukPantauDps').is(':checked')          ? dipantau = 1 : dipantau = 0 ;
        $('#petunjukEdarkanDps').is(':checked')         ? diedarkan = 1 : diedarkan = 0 ;
        $('#petunjukPelajariDps').is(':checked')        ? dipelajari = 1 : dipelajari = 0 ;
        $('#petunjukCatatDps').is(':checked')           ? dicatat = 1 : dicatat = 0 ;
        $('#petunjukArsipDps').is(':checked')           ? arsip = 1 : arsip = 0 ;
        
        $.ajax({
            url:"{{ url('sec/disposisi') }}",
            data:{
                _token:'{{ csrf_token() }}',
                id_surat:id_surat,
                tanggal_terima:tanggal_terima,
                tanggal_surat:tanggal_surat,
                nomor_surat:nomor_surat,
                asal_surat:asal_surat,
                perihal:perihal,
                sifat_lainnya:sifat_lainnya,
                disposisi_lainnya:disposisi_lainnya,
                petunjuk_lainnya:petunjuk_lainnya,
                sangat_rahasia:sangat_rahasia,
                rahasia:rahasia,
                sangat_segera:sangat_segera,
                segera:segera,
                biasa:biasa,
                kasi_adm_bimbingan:kasi_adm_bimbingan,
                kasi_bim_penagihan:kasi_bim_penagihan,
                kasi_intelijen:kasi_intelijen,
                kasi_adm_bukti:kasi_adm_bukti,
                kasi_ketua_kelompok_satu:kasi_ketua_kelompok_satu,
                kasi_ketua_kelompok_dua:kasi_ketua_kelompok_dua,
                diproses:diproses,
                ditindaklanjuti:ditindaklanjuti,
                dimanfaatkan:dimanfaatkan,
                diadministrasikan:diadministrasikan,
                dipantau:dipantau,
                diedarkan:diedarkan,
                dipelajari:dipelajari,
                dicatat:dicatat,
                arsip:arsip
            },
            type:'post',
            dataType:'json',
            cache:false,
            beforeSend:function(){
                $('#bodyDisposisiModal').pleaseWait();
            },
            success:function(response){
                console.log(response);
                $.post("{{ url('/sec/next') }}",{
                    "_token":"{{ csrf_token() }}",
                    "id":id_surat
                },function(response){
                    console.log(response);
                    if(response.length){
                        $.each(response,function(i,item){
                            $('#nomorAgendaDps').val(item.id_surat);
                            $('#tanggalTerimaDps').val(item.tanggal_terima);
                            $('#tanggalSuratDps').val(item.tanggal_surat);
                            $('#nomorSuratDps').val(item.nomor_surat);
                            $('#asalSuratDps').val(item.asal_surat);
                            $('#perihalDps').val(item.perihal);
                            item.sangat_rahasia==1      ? $('#sifatSRDps').prop('checked',true)        : $('#sifatSRDps').prop('checked', false);
                            item.rahasia==1             ? $('#sifatRDps').prop('checked', true)        : $('#sifatRDps').prop('checked', false);
                            item.sangat_segera==1       ? $('#sifatSSDps').prop('checked', true)       : $('#sifatSSDps').prop('checked', false);
                            item.segera==1              ? $('#sifatSDps').prop('checked', true)        : $('#sifatSDps').prop('checked', false);
                            item.biasa==1               ? $('#sifatBDps').prop('checked', true)        : $('#sifatBDps').prop('checked', false);
                            item.sifat_lainnya!==null   ? $('#labelSifatLainnyaDps').val(item.sifat_lainnya) : $('#labelSifatLainnyaDps').val('');
                            
                            item.kasi_adm_bimbingan==1          ? $('#disposisiBD401Dps').prop('checked', true) : $('#disposisiBD401Dps').prop('checked', false);
                            item.kasi_bim_penagihan==1          ? $('#disposisiBD402Dps').prop('checked', true) : $('#disposisiBD402Dps').prop('checked', false);
                            item.kasi_intelijen==1              ? $('#disposisiBD403Dps').prop('checked', true) : $('#disposisiBD403Dps').prop('checked', false);
                            item.kasi_adm_bukti==1              ? $('#disposisiBD404Dps').prop('checked', true) : $('#disposisiBD404Dps').prop('checked', false);
                            item.kasi_ketua_kelompok_satu==1    ? $('#disposisiBD701Dps').prop('checked', true) : $('#disposisiBD701Dps').prop('checked', false);
                            item.kasi_ketua_kelompok_dua==1     ? $('#disposisiBD702Dps').prop('checked', true) : $('#disposisiBD702Dps').prop('checked', false);
                            item.disposisi_lainnya!==null   ? $('#labelDisposisiLainnyaDps').val(item.disposisi_lainnya) : $('#labelDisposisiLainnyaDps').val('');
                            
                            item.diproses==1            ? $('#petunjukProsesDps').prop('checked', true)            : $('#petunjukProsesDps').prop('checked', false);
                            item.ditindaklanjuti==1     ? $('#petunjukTindaklanjutiDps').prop('checked', true)     : $('#petunjukTindaklanjutiDps').prop('checked', false);
                            item.dimanfaatkan==1        ? $('#petunjukManfaatkanDps').prop('checked', true)        : $('#petunjukManfaatkanDps').prop('checked', false);
                            item.diadministrasikan==1   ? $('#petunjukAdministrasikanDps').prop('checked', true)   : $('#petunjukAdministrasikanDps').prop('checked', false);
                            item.dipantau==1            ? $('#petunjukPantauDps').prop('checked', true)            : $('#petunjukPantauDps').prop('checked', false);
                            item.diedarkan==1           ? $('#petunjukEdarkanDps').prop('checked', true)           : $('#petunjukEdarkanDps').prop('checked', false);
                            item.dipelajari==1          ? $('#petunjukPelajariDps').prop('checked', true)          : $('#petunjukPelajariDps').prop('checked', false);
                            item.dicatat==1             ? $('#petunjukCatatDps').prop('checked', true)             : $('#petunjukCatatDps').prop('checked', false);
                            item.arsip==1               ? $('#petunjukArsipDps').prop('checked', true)             : $('#petunjukArsipDps').prop('checked', false);
                            item.petunjuk_lainnya!==null   ? $('#labelPetunjukLainnyaDps').val(item.petunjuk_lainnya) : $('#labelPetunjukLainnyaDps').val('');
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
                    $('#bodyDisposisiModal').pleaseWait('stop');  
                    $.toast({
                        heading: 'Information',
                        text: 'Data Surat Disposisi Berhasil Di Simpan',
                        position: 'bottom-right',
                        stack: 5,
                        showHideTransition: 'slide',
                        icon: 'info'
                    });
                });
            },
			error:function(xhr,ajaxOptions,thrownError){
				var error = xhr.responseJSON;
                var no = 0;
                var errorArray = [];
                $.each(error, function (key, value) {
                    errorArray[no] = value[0];
                    no++;
                });
                $.toast({
                    heading: 'Error!',
                    text: errorArray,
                    icon: 'error',
                    position: 'bottom-right'
                });
                $('#bodyDisposisiModal').pleaseWait('stop');
			}
        });
    });
    $('#saveDisposisi').click(function(){
        var id_surat = $('#nomorAgendaDps').val();
        var tanggal_terima = $('#tanggalTerimaDps').val();
        var tanggal_surat = $('#tanggalSuratDps').val();
        var nomor_surat = $('#nomorSuratDps').val();
        var asal_surat = $('#asalSuratDps').val();
        var perihal = $('#perihalDps').val();
        var sifat_lainnya = $('#labelSifatLainnyaDps').val();
        var disposisi_lainnya = $('#labelDisposisiLainnyaDps').val();
        var petunjuk_lainnya = $('#labelPetunjukLainnyaDps').val();

        $('#sifatSRDps').is(':checked')             ? sangat_rahasia = 1: sangat_rahasia = 0 ;
        $('#sifatRDps').is(':checked')              ? rahasia = 1 : rahasia = 0;
        $('#sifatSSDps').is(':checked')             ? sangat_segera = 1 : sangat_segera = 0;
        $('#sifatSDps').is(':checked')              ? segera = 1 : segera = 0 ; 
        $('#sifatBDps').is(':checked')              ? biasa = 1 : biasa = 0 ;
        $('#disposisiBD401Dps').is(':checked')      ? kasi_adm_bimbingan = 1 : kasi_adm_bimbingan = 0 ;
        $('#disposisiBD402Dps').is(':checked')      ? kasi_bim_penagihan = 1 : kasi_bim_penagihan = 0 ;
        $('#disposisiBD403Dps').is(':checked')      ? kasi_intelijen = 1 : kasi_intelijen = 0 ;
        $('#disposisiBD404Dps').is(':checked')      ? kasi_adm_bukti = 1 : kasi_adm_bukti = 0 ;
        $('#disposisiBD701Dps').is(':checked')      ? kasi_ketua_kelompok_satu = 1 : kasi_ketua_kelompok_satu = 0 ;
        $('#disposisiBD702Dps').is(':checked')      ? kasi_ketua_kelompok_dua = 1 : kasi_ketua_kelompok_dua = 0 ;
        $('#petunjukProsesDps').is(':checked')      ? diproses = 1 : diproses = 0 ;
        $('#petunjukTindaklanjutiDps').is(':checked')   ? ditindaklanjuti = 1 : ditindaklanjuti = 0 ;
        $('#petunjukManfaatkanDps').is(':checked')      ? dimanfaatkan = 1 : dimanfaatkan = 0 ;
        $('#petunjukAdministrasikanDps').is(':checked') ? diadministrasikan = 1 : diadministrasikan = 0 ;
        $('#petunjukPantauDps').is(':checked')          ? dipantau = 1 : dipantau = 0 ;
        $('#petunjukEdarkanDps').is(':checked')         ? diedarkan = 1 : diedarkan = 0 ;
        $('#petunjukPelajariDps').is(':checked')        ? dipelajari = 1 : dipelajari = 0 ;
        $('#petunjukCatatDps').is(':checked')           ? dicatat = 1 : dicatat = 0 ;
        $('#petunjukArsipDps').is(':checked')           ? arsip = 1 : arsip = 0 ;
        
        $.ajax({
            url:"{{ url('sec/disposisi') }}",
            data:{
                _token:'{{ csrf_token() }}',
                id_surat:id_surat,
                tanggal_terima:tanggal_terima,
                tanggal_surat:tanggal_surat,
                nomor_surat:nomor_surat,
                asal_surat:asal_surat,
                perihal:perihal,
                sifat_lainnya:sifat_lainnya,
                disposisi_lainnya:disposisi_lainnya,
                petunjuk_lainnya:petunjuk_lainnya,
                sangat_rahasia:sangat_rahasia,
                rahasia:rahasia,
                sangat_segera:sangat_segera,
                segera:segera,
                biasa:biasa,
                kasi_adm_bimbingan:kasi_adm_bimbingan,
                kasi_bim_penagihan:kasi_bim_penagihan,
                kasi_intelijen:kasi_intelijen,
                kasi_adm_bukti:kasi_adm_bukti,
                kasi_ketua_kelompok_satu:kasi_ketua_kelompok_satu,
                kasi_ketua_kelompok_dua:kasi_ketua_kelompok_dua,
                diproses:diproses,
                ditindaklanjuti:ditindaklanjuti,
                dimanfaatkan:dimanfaatkan,
                diadministrasikan:diadministrasikan,
                dipantau:dipantau,
                diedarkan:diedarkan,
                dipelajari:dipelajari,
                dicatat:dicatat,
                arsip:arsip
            },
            type:'post',
            dataType:'json',
            cache:false,
            beforeSend:function(){
                $('#bodyDisposisiModal').pleaseWait();
            },
            success:function(response){
                $.toast({
                    heading: 'Information',
                    text: response.message,
                    position: 'bottom-right',
                    stack: false,
                    showHideTransition: 'slide',
                    icon: response.status
                });
                $('#bodyDisposisiModal').pleaseWait('stop');
            },
			error:function(xhr,ajaxOptions,thrownError){
				var error = xhr.responseJSON;
                var no = 0;
                var errorArray = [];
                $.each(error, function (key, value) {
                    errorArray[no] = value[0];
                    no++;
                });
                $.toast({
                    heading: 'Error!',
                    text: errorArray,
                    icon: 'error',
                    position: 'bottom-right'
                });
                $('#bodyDisposisiModal').pleaseWait('stop');
			}
        });
        
    });
    $('#tabsSurat').click(function(){
        $('#headInbox').show();
        $('#headDisposisi').hide();
    });
    $('#tabsDisposisi').click(function(){
        $('#headDisposisi').show();
        $('#headInbox').hide();
    });
});
function loadInbox(){
    var table = $('#tblInbox').DataTable({
        processing:true,
        serverSide:true,
        destroy:true,
        fixedHeader:true,
        ajax:"{{ url('sec/dataInbox') }}",
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
                return '<a style="z-index:0;" class="btn btn-xs btn-icon waves-effect waves-light btn-primary m-b-5 detailDisposisi" data-id="'+ data +'"><i class="mdi mdi-magnify"></i></a>'+
                        '<a style="z-index:0;" class="btn btn-xs btn-icon waves-effect waves-light btn-youtube m-b-5 deleteInbox" data-title="Hapus Surat Masuk?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left" data-id="'+ data +'"><i class="fa fa-remove"></i></a>';
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
    var table = $('#tblDisposisi').DataTable({
        processing:true,
        serverSide:true,
        destroy:true,
        fixedHeader:true,
        ajax:"{{ url('sec/dataDisposisi') }}",
        columns:[
            {data:'id_surat',render:function(data,type,row){
                return '<center><input type="checkbox" name="id_surat_print[]" value="'+data+'" style="width:18px;height:18px;"></center>';
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
                return '<a style="z-index:0;" class="btn btn-xs btn-icon waves-effect waves-light btn-primary m-b-5 detailDisposisi" data-id="' + data.id_surat + '"><i class="mdi mdi-magnify"></i></a>';
            }},
        ],
            columnDefs:[
            { "width": "5%", "targets": 0 },
            { "width": "5%", "targets": 1 },
            { "width": "5%", "targets": 5 },
            { "width": "5%", "targets": 6 },
            { "width": "5%", "targets": 7 },
            { "width": "5%", "targets": 8 },
            { "width": "5%", "targets": 9 },
            { "width": "5%", "targets": 10 },
            { "width": "5%", "targets": 12 },
            {className:"noWrapTd",targets:[2]}
        ]
    });
}
$(document).on('click','.deleteInbox',function(){
    $(this).confirmation('show');
    $(this).on('confirmed.bs.confirmation',function(){
        var id = $(this).attr('data-id');
        $.post("{{ url('/sec/deleteInbox') }}",{
            "_token":"{{ csrf_token() }}",
            "id":id
        },
        function(response){
            $.toast({
                heading: 'Information',
                text: response.message,
                position: 'bottom-right',
                stack: false,
                showHideTransition: 'slide',
                icon: response.status
            });
        },"json").done(function(){
            $('#tblInbox').DataTable().ajax.reload(null,false);
            $('#tblDisposisi').DataTable().ajax.reload(null,false);
        });
    });
});
$(document).on('click','.detailDisposisi',function(){
    var id = $(this).attr('data-id');
    $('body').pleaseWait();
    $.post("{{ url('/sec/detailDisposisi') }}",{
        "_token":"{{ csrf_token() }}",
        "id":id
    },function(response){
        $.each(response,function(i,item){
            $('#nomorAgendaDps').val(item.id_surat);
            $('#tanggalTerimaDps').val(item.tanggal_terima);
            $('#tanggalSuratDps').val(item.tanggal_surat);
            $('#nomorSuratDps').val(item.nomor_surat);
            $('#asalSuratDps').val(item.asal_surat);
            $('#perihalDps').val(item.perihal);
            item.sangat_rahasia==1      ? $('#sifatSRDps').prop('checked',true)        : $('#sifatSRDps').prop('checked', false);
            item.rahasia==1             ? $('#sifatRDps').prop('checked', true)        : $('#sifatRDps').prop('checked', false);
            item.sangat_segera==1       ? $('#sifatSSDps').prop('checked', true)       : $('#sifatSSDps').prop('checked', false);
            item.segera==1              ? $('#sifatSDps').prop('checked', true)        : $('#sifatSDps').prop('checked', false);
            item.biasa==1               ? $('#sifatBDps').prop('checked', true)        : $('#sifatBDps').prop('checked', false);
            item.sifat_lainnya!==null   ? $('#labelSifatLainnyaDps').val(item.sifat_lainnya) : $('#labelSifatLainnyaDps').val('');
            
            item.kasi_adm_bimbingan==1          ? $('#disposisiBD401Dps').prop('checked', true) : $('#disposisiBD401Dps').prop('checked', false);
            item.kasi_bim_penagihan==1          ? $('#disposisiBD402Dps').prop('checked', true) : $('#disposisiBD402Dps').prop('checked', false);
            item.kasi_intelijen==1              ? $('#disposisiBD403Dps').prop('checked', true) : $('#disposisiBD403Dps').prop('checked', false);
            item.kasi_adm_bukti==1              ? $('#disposisiBD404Dps').prop('checked', true) : $('#disposisiBD404Dps').prop('checked', false);
            item.kasi_ketua_kelompok_satu==1    ? $('#disposisiBD701Dps').prop('checked', true) : $('#disposisiBD701Dps').prop('checked', false);
            item.kasi_ketua_kelompok_dua==1     ? $('#disposisiBD702Dps').prop('checked', true) : $('#disposisiBD702Dps').prop('checked', false);
            item.disposisi_lainnya!==null   ? $('#labelDisposisiLainnyaDps').val(item.disposisi_lainnya) : $('#labelDisposisiLainnyaDps').val('');
            
            item.diproses==1            ? $('#petunjukProsesDps').prop('checked', true)            : $('#petunjukProsesDps').prop('checked', false);
            item.ditindaklanjuti==1     ? $('#petunjukTindaklanjutiDps').prop('checked', true)     : $('#petunjukTindaklanjutiDps').prop('checked', false);
            item.dimanfaatkan==1        ? $('#petunjukManfaatkanDps').prop('checked', true)        : $('#petunjukManfaatkanDps').prop('checked', false);
            item.diadministrasikan==1   ? $('#petunjukAdministrasikanDps').prop('checked', true)   : $('#petunjukAdministrasikanDps').prop('checked', false);
            item.dipantau==1            ? $('#petunjukPantauDps').prop('checked', true)            : $('#petunjukPantauDps').prop('checked', false);
            item.diedarkan==1           ? $('#petunjukEdarkanDps').prop('checked', true)           : $('#petunjukEdarkanDps').prop('checked', false);
            item.dipelajari==1          ? $('#petunjukPelajariDps').prop('checked', true)          : $('#petunjukPelajariDps').prop('checked', false);
            item.dicatat==1             ? $('#petunjukCatatDps').prop('checked', true)             : $('#petunjukCatatDps').prop('checked', false);
            item.arsip==1               ? $('#petunjukArsipDps').prop('checked', true)             : $('#petunjukArsipDps').prop('checked', false);
            item.petunjuk_lainnya!==null   ? $('#labelPetunjukLainnyaDps').val(item.petunjuk_lainnya) : $('#labelPetunjukLainnyaDps').val('');
        });
    },"json").done(function(){
        $('body').pleaseWait('stop');
        $('#disposisi-modal').modal('show');
    });
});
</script>
<script>
    jQuery('.dAC').datepicker({
        autoclose: true,
        todayHighlight: true
    });
</script>
@endsection