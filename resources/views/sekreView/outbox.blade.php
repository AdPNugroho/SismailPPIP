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
            <h4 class="page-title">Kelola Surat Keluar</h4>
            <ol class="breadcrumb p-0 m-0">
                <li>
                    <a href="{{ url('adm/dashboard') }}">Home</a>
                </li>
                <li class="active">
                    Surat Keluar
                </li>
            </ol>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <h4 class="header-title m-t-0 m-b-30">Navigasi</h4>
            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="col-sm-1 control-label">Jenis Surat</label>
                            <div class="col-sm-3">
                                <select class="form-control" name="jenisSurat" id="jenisSurat">
                                    <option value="1" data-type="1" data-form="1">BA.TA</option>
                                    <option value="2" data-type="1" data-form="1">TA</option>
                                    <option value="3" data-type="1" data-form="1">S</option>
                                    <option value="4" data-type="1" data-form="1">KET</option>
                                    <option value="5" data-type="1" data-form="1">ND</option>
                                    <option value="6" data-type="1" data-form="1">SPR</option>
                                    <option value="7" data-type="1" data-form="1">NDR</option>
                                    <option value="8" data-type="1" data-form="1">SP</option>
                                    <option value="9" data-type="1" data-form="1">SR</option>
                                    <option value="10" data-type="1" data-form="1">S-RIKSIS</option>
                                    <option value="11" data-type="1" data-form="1">SI</option>
                                    <option value="12" data-type="1" data-form="1">WPJ.14</option>
                                    <option value="13" data-type="1" data-form="1">UND</option>
                                    <option value="14" data-type="1" data-form="1">ST</option>
                                    <option value="15" data-type="3">Fax</option>
                                    <option value="16" data-type="1" data-form="1">LHPPU</option>
                                    <option value="17" data-type="1" data-form="1">LAP</option>
                                    <option value="18" data-type="1" data-form="1">LAT</option>
                                    <option value="19" data-type="1" data-form="1">BA</option>
                                    <option value="20" data-type="2">LII</option>
                                    <option value="21" data-type="2">LAPJU.IDLP</option>
                                    <option value="22" data-type="2">LHPA.IDLP</option>
                                    <option value="23" data-type="2">LIA.IDLP</option>
                                    <option value="24" data-type="2">BA.PEN.IDLP</option>
                                    <option value="25" data-type="1" data-form="1">BA.PEN</option>
                                    <option value="26" data-type="1" data-form="1">PRIN.BP</option>
                                    <option value="27" data-type="1" data-form="1">SPPBP.P</option>
                                    <option value="28" data-type="1" data-form="1">SPEMB.BP</option>
                                    <option value="29" data-type="1" data-form="1">PEMB.BP</option>
                                    <option value="30" data-type="2">LAPJU.Penyidikan</option>
                                    <option value="31" data-type="1" data-form="1">LK.DIK</option>
                                    <option value="32" data-type="1" data-form="1">PRIN.DIK</option>
                                    <option value="33" data-type="1" data-form="1">LHPS</option>
                                    <option value="34" data-type="1" data-form="1">PANG.BP</option>
                                    <option value="35" data-type="1" data-form="1">LPBP</option>
                                    <option value="36" data-type="1" data-form="1">DUPAK</option>
                                    <option value="37" data-type="1" data-form="1">KEPKakanwil</option>
                                    <option value="38" data-type="1" data-form="1">PRIN.MAT</option>
                                    <option value="39" data-type="1" data-form="1">INS.MAT</option>
                                    <option value="40" data-type="1" data-form="1">LAP.MAT</option>
                                    <option value="41" data-type="1" data-form="1">LHIP</option>
                                    <option value="42" data-type="1" data-form="1">LAP.ATENSI</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-primary waves-effect w-md waves-light m-b-5" id="btnPilihSurat">Pilih Surat</button>
                                <button type="button" class="btn btn-youtube waves-effect w-md waves-light m-b-5" id="btnResetPilihSurat" style="display:none;">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <ul class="nav nav-tabs" id="navTabs" hidden>
                <li class="active">
                    <a href="#inputSurat" data-toggle="tab" aria-expanded="true">
                        <span class="visible-xs"><i class="fa fa-home"></i></span>
                        <span class="hidden-xs">Input Surat Keluar</span>
                    </a>
                </li>
                <li class="">
                    <a href="#dataSurat" data-toggle="tab" aria-expanded="false">
                        <span class="visible-xs"><i class="fa fa-user"></i></span>
                        <span class="hidden-xs">Data Surat Keluar</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="contentTabs" hidden>
                <div class="tab-pane active" id="inputSurat">
                    <div class="row" id="frmA" hidden>
                        <div class="col-md-6">
                            {!! Form::open(array('class'=>'form-horizontal','role'=>'form','id'=>'frmInA')) !!}
                                <div class="form-group">
	                                <label class="col-md-2 control-label">Tanggal Surat</label>
	                                <div class="col-md-10">
                                        <div class="input-group">
                                            <input type="text" class="form-control dateAutoClose" placeholder="mm/dd/yyyy" name="tanggal_surat">
                                            <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                        </div><!-- input-group -->
	                                </div>
                                </div>
	                            <div class="form-group">
	                                <label class="col-md-2 control-label">Tujuan</label>
	                                <div class="col-md-10">
	                                    <input type="text" class="form-control" name="tujuan">
	                                </div>
	                            </div>
                                <div class="form-group">
	                                <label class="col-md-2 control-label">Perihal</label>
	                                <div class="col-md-10">
	                                    <textarea class="form-control" rows="5" name="perihal"></textarea>
	                                </div>
	                            </div>
	                            <div class="form-group">
	                                <label class="col-md-2 control-label">Tembusan</label>
	                                <div class="col-md-10">
	                                    <input type="text" class="form-control" name="tembusan">
	                                </div>
	                            </div>
                                <div class="form-group">
	                                <label class="col-md-2 control-label">Sehubungan Dengan Surat</label>
	                                <div class="col-md-10">
	                                    <input type="text" class="form-control" name="sehubungan">
	                                </div>
	                            </div>
                                <div class="form-group">
	                                <label class="col-md-2 control-label">Kode Seksi</label>
	                                <div class="col-md-10">
	                                    <input type="text" class="form-control" name="kode_seksi">
	                                </div>
	                            </div>
                                <div class="form-group">
	                                <label class="col-md-2 control-label"></label>
	                                <div class="col-md-10">
                                        <button type="button" class="btn btn-success waves-effect w-md waves-light m-b-5" id="btnfrmA">Simpan</button>
	                                </div>
	                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="row" id="frmKepK" hidden>
                        <div class="col-md-6">
                            {!! Form::open(array('class'=>'form-horizontal','role'=>'form','id'=>'frmInKepK')) !!}
                                <div class="form-group">
	                                <label class="col-md-2 control-label">Tanggal Surat</label>
	                                <div class="col-md-10">
                                        <div class="input-group">
                                            <input type="text" class="form-control dateAutoClose" placeholder="mm/dd/yyyy" name="tanggal_surat">
                                            <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                        </div><!-- input-group -->
	                                </div>
                                </div>
	                            <div class="form-group">
	                                <label class="col-md-2 control-label">Tujuan</label>
	                                <div class="col-md-10">
	                                    <input type="text" class="form-control" name="tujuan">
	                                </div>
	                            </div>
                                <div class="form-group">
	                                <label class="col-md-2 control-label">Perihal</label>
	                                <div class="col-md-10">
	                                    <textarea class="form-control" rows="5" name="perihal"></textarea>
	                                </div>
	                            </div>
                                <div class="form-group">
	                                <label class="col-md-2 control-label">Kode Seksi</label>
	                                <div class="col-md-10">
	                                    <input type="text" class="form-control" name="kode_seksi">
	                                </div>
	                            </div>
                                <div class="form-group">
	                                <label class="col-md-2 control-label"></label>
	                                <div class="col-md-10">
                                        <button type="button" class="btn btn-success waves-effect w-md waves-light m-b-5" id="btnKepK">Simpan</button>
	                                </div>
	                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="row" id="frmF" hidden>
                        <div class="col-md-6">
                            {!! Form::open(array('class'=>'form-horizontal','role'=>'form','id'=>'frmInF')) !!}
                                <div class="form-group">
	                                <label class="col-md-2 control-label">Tanggal Berita Fax</label>
	                                <div class="col-md-10">
                                        <div class="input-group">
                                            <input type="text" class="form-control dateAutoClose" placeholder="mm/dd/yyyy" id="" name="tanggal_berita_fax">
                                            <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                        </div><!-- input-group -->
	                                </div>
                                </div>
	                            <div class="form-group">
	                                <label class="col-md-2 control-label">Tujuan</label>
	                                <div class="col-md-10">
	                                    <input type="text" class="form-control" name="tujuan">
	                                </div>
	                            </div>
                                <div class="form-group">
	                                <label class="col-md-2 control-label">Jumlah Hal</label>
	                                <div class="col-md-10">
	                                    <input type="number" class="form-control" name="jumlah_hal">
	                                </div>
	                            </div>
	                            <div class="form-group">
	                                <label class="col-md-2 control-label">Tanggal Kirim</label>
	                                <div class="col-md-10">
                                        <div class="input-group">
                                            <input type="text" class="form-control dateAutoClose" placeholder="mm/dd/yyyy" id="" name="tanggal_kirim">
                                            <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                        </div><!-- input-group -->
	                                </div>
                                </div>
                                <div class="form-group">
	                                <label class="col-md-2 control-label">Hal</label>
	                                <div class="col-md-10">
	                                    <input type="text" class="form-control" name="hal">
	                                </div>
	                            </div>
                                <div class="form-group">
	                                <label class="col-md-2 control-label">Tembusan</label>
	                                <div class="col-md-10">
	                                    <input type="text" class="form-control" name="tembusan">
	                                </div>
	                            </div>
                                <div class="form-group">
	                                <label class="col-md-2 control-label">Nama Petugas</label>
	                                <div class="col-md-10">
	                                    <input type="text" class="form-control" name="nama_petugas">
	                                </div>
	                            </div>
                                <div class="form-group">
	                                <label class="col-md-2 control-label">NIP</label>
	                                <div class="col-md-10">
	                                    <input type="text" class="form-control" name="nip">
	                                </div>
	                            </div>
                                <div class="form-group">
	                                <label class="col-md-2 control-label">Jab.Petugas</label>
	                                <div class="col-md-10">
	                                    <input type="text" class="form-control" name="jabatan_petugas">
	                                </div>
	                            </div>
                                <div class="form-group">
	                                <label class="col-md-2 control-label">Penanda Tangan</label>
	                                <div class="col-md-10">
	                                    <input type="text" class="form-control" name="penandatangan">
	                                </div>
	                            </div>
                                <div class="form-group">
	                                <label class="col-md-2 control-label">Nama Kasi</label>
	                                <div class="col-md-10">
	                                    <input type="text" class="form-control" name="nama_kasi">
	                                </div>
	                            </div>
                                <div class="form-group">
	                                <label class="col-md-2 control-label">NIP Kasi</label>
	                                <div class="col-md-10">
	                                    <input type="text" class="form-control" name="nip_kasi">
	                                </div>
	                            </div>
                                <div class="form-group">
	                                <label class="col-md-2 control-label"></label>
	                                <div class="col-md-10">
                                        <button type="button" class="btn btn-success waves-effect w-md waves-light m-b-5" id="btnF">Simpan</button>
	                                </div>
	                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="row" id="frmBA" hidden>
                        <div class="col-md-6">
                            {!! Form::open(array('class'=>'form-horizontal','role'=>'form','id'=>'frmInBA')) !!}
                                <div class="form-group">
	                                <label class="col-md-2 control-label">Tanggal Surat</label>
	                                <div class="col-md-10">
                                        <div class="input-group">
                                            <input type="text" class="form-control dateAutoClose" placeholder="mm/dd/yyyy" id="" name="tanggal_surat">
                                            <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                        </div>
	                                </div>
                                </div>
	                            <div class="form-group">
	                                <label class="col-md-2 control-label">Nama WP</label>
	                                <div class="col-md-10">
	                                    <input type="text" class="form-control" name="nama_wp">
	                                </div>
	                            </div>
                                <div class="form-group">
	                                <label class="col-md-2 control-label">NPWP</label>
	                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="npwp">
	                                </div>
	                            </div>
	                            <div class="form-group">
	                                <label class="col-md-2 control-label">Tahun Pajak</label>
	                                <div class="col-md-10">
	                                    <input type="text" class="form-control" name="tahun_pajak">
	                                </div>
	                            </div>
                                <div class="form-group">
	                                <label class="col-md-2 control-label">Analis</label>
	                                <div class="col-md-10">
	                                    <input type="text" class="form-control" name="analis">
	                                </div>
	                            </div>
                                <div class="form-group">
	                                <label class="col-md-2 control-label">Tindak Lanjut</label>
	                                <div class="col-md-10">
	                                    <input type="text" class="form-control" name="tindak_lanjut">
	                                </div>
	                            </div>
                                <div class="form-group">
	                                <label class="col-md-2 control-label"></label>
	                                <div class="col-md-10">
                                        <button type="button" class="btn btn-success waves-effect w-md waves-light m-b-5" id="btnfrmBA">Simpan</button>
	                                </div>
	                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="row" id="frmBB" hidden>
                        <div class="col-md-6">
                            {!! Form::open(array('class'=>'form-horizontal','role'=>'form','id'=>'frmInBB')) !!}
                                <div class="form-group">
	                                <label class="col-md-2 control-label">Tanggal Surat</label>
	                                <div class="col-md-10">
                                        <div class="input-group">
                                            <input type="text" class="form-control dateAutoClose" placeholder="mm/dd/yyyy" id="" name="tanggal_surat">
                                            <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                        </div>
	                                </div>
                                </div>
	                            <div class="form-group">
	                                <label class="col-md-2 control-label">Nama WP</label>
	                                <div class="col-md-10">
	                                    <input type="text" class="form-control" name="nama_wp">
	                                </div>
	                            </div>
                                <div class="form-group">
	                                <label class="col-md-2 control-label">NPWP</label>
	                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="npwp">
	                                </div>
	                            </div>
	                            <div class="form-group">
	                                <label class="col-md-2 control-label">Tahun Pajak</label>
	                                <div class="col-md-10">
	                                    <input type="text" class="form-control" name="tahun_pajak">
	                                </div>
	                            </div>
                                <div class="form-group">
	                                <label class="col-md-2 control-label">Analis</label>
	                                <div class="col-md-10">
	                                    <input type="text" class="form-control" name="analis">
	                                </div>
	                            </div>
                                <div class="form-group">
	                                <label class="col-md-2 control-label"></label>
	                                <div class="col-md-10">
                                        <button type="button" class="btn btn-success waves-effect w-md waves-light m-b-5" id="btnfrmBB">Simpan</button>
	                                </div>
	                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="row" id="frmC" hidden>
                        <div class="col-md-6">
                            {!! Form::open(array('class'=>'form-horizontal','role'=>'form','id'=>'frmInC')) !!}
                                <div class="form-group">
	                                <label class="col-md-2 control-label">Tanggal Surat</label>
	                                <div class="col-md-10">
                                        <div class="input-group">
                                            <input type="text" class="form-control dateAutoClose" placeholder="mm/dd/yyyy" id="" name="tanggal_surat">
                                            <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                        </div>
	                                </div>
                                </div>
                                <div class="form-group">
	                                <label class="col-md-2 control-label">Perihal Surat</label>
	                                <div class="col-md-10">
	                                <textarea class="form-control" rows="5" name="perihal_surat"></textarea>
	                                </div>
	                            </div>
	                            <div class="form-group">
	                                <label class="col-md-2 control-label">Tahun Pajak</label>
	                                <div class="col-md-10">
	                                    <input type="text" class="form-control" name="tahun_pajak">
	                                </div>
	                            </div>
                                <div class="form-group">
	                                <label class="col-md-2 control-label">Kesimpulan</label>
	                                <div class="col-md-10">
	                                    <input type="text" class="form-control" name="kesimpulan">
	                                </div>
	                            </div>
                                <div class="form-group">
	                                <label class="col-md-2 control-label"></label>
	                                <div class="col-md-10">
                                        <button type="button" class="btn btn-success waves-effect w-md waves-light m-b-5" id="btnfrmC">Simpan</button>
	                                </div>
	                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="row" id="frmD" hidden>
                        <div class="col-md-6">
                            {!! Form::open(array('class'=>'form-horizontal','role'=>'form','id'=>'frmInD')) !!}
                                <div class="form-group">
	                                <label class="col-md-2 control-label">Tanggal Surat</label>
	                                <div class="col-md-10">
                                        <div class="input-group">
                                            <input type="text" class="form-control dateAutoClose" placeholder="mm/dd/yyyy" id="" name="tanggal_surat">
                                            <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                        </div>
	                                </div>
                                </div>
	                            <div class="form-group">
	                                <label class="col-md-2 control-label">Nama WP</label>
	                                <div class="col-md-10">
	                                    <input type="text" class="form-control" name="nama_wp">
	                                </div>
	                            </div>
                                <div class="form-group">
	                                <label class="col-md-2 control-label">NPWP</label>
	                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="npwp">
	                                </div>
	                            </div>
	                            <div class="form-group">
	                                <label class="col-md-2 control-label">Tahun Pajak</label>
	                                <div class="col-md-10">
	                                    <input type="text" class="form-control" name="tahun_pajak">
	                                </div>
	                            </div>
                                <div class="form-group">
	                                <label class="col-md-2 control-label">Tindak Lanjut</label>
	                                <div class="col-md-10">
	                                    <input type="text" class="form-control" name="tindak_lanjut">
	                                </div>
	                            </div>
                                <div class="form-group">
	                                <label class="col-md-2 control-label"></label>
	                                <div class="col-md-10">
                                        <button type="button" class="btn btn-success waves-effect w-md waves-light m-b-5" id="btnfrmD">Simpan</button>
	                                </div>
	                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="dataSurat">
                    <div class="row">
                        <div class="col-md-12" id="fieldDataSurat">

                            <div id="tbA" hidden>
                                <table id="dTbA" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nomor Surat</th>
                                            <th>Tanggal Surat</th>
                                            <th>Tujuan</th>
                                            <th>Perihal Surat</th>
                                            <th>Tembusan</th>
                                            <th>Menjawab Surat</th>
                                            <th>Kode Seksi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>

                            <div id="tbKepK" hidden>
                                <table id="dTbKepK" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nomor Surat</th>
                                            <th>Tanggal Surat</th>
                                            <th>Tujuan</th>
                                            <th>Perihal Surat</th>
                                            <th>Kode Seksi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>

                            <div id="tbFax" hidden>
                                <table id="dTbFax" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Tanggal Berita</th>
                                            <th>Tujuan</th>
                                            <th>Hal</th>
                                            <th>Tanggal Kirim</th>
                                            <th>Perihal</th>
                                            <th>Tembusan</th>
                                            <th>Nama Petugas</th>
                                            <th>NIP</th>
                                            <th>Jab. Petugas</th>
                                            <th>Penanda Tangan</th>
                                            <th>Nama Kasi</th>
                                            <th>NIP Kasi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>

                            <div id="tbBA" hidden>
                                <table id="dTbBA" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="col-sm-1">#</th>
                                            <th>Nomor Surat</th>
                                            <th>Tanggal</th>
                                            <th>Nama WP</th>
                                            <th>NPWP</th>
                                            <th>Tahun Pajak</th>
                                            <th>Analis</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>

                            <div id="tbBB" hidden>
                                <table id="dTbBB" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nomor Surat</th>
                                            <th>Tanggal</th>
                                            <th>Nama WP</th>
                                            <th>NPWP</th>
                                            <th>Tahun Pajak</th>
                                            <th>Analis</th>
                                            <th>Tindak Lanjut</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>

                            <div id="tbC" hidden>
                                <table id="dTbC" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="col-sm-1">#</th>
                                            <th>Nomor Surat</th>
                                            <th>Tanggal</th>
                                            <th>Perihal</th>
                                            <th>Tahun</th>
                                            <th>Kesimpulan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>

                            <div id="tbD" hidden>
                                <table id="dTbD" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nomor Surat</th>
                                            <th>Tanggal</th>
                                            <th>Nama WP</th>
                                            <th>NPWP</th>
                                            <th>Tahun Pajak</th>
                                            <th>Tindak Lanjut</th>
                                            <th>Action</th>
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
    $('#btnPilihSurat').click(function(){
        var id = $('#jenisSurat').val();
        $('#jenisSurat').prop('disabled',true);
        var token = "{{ csrf_token() }}";
        $('#btnResetPilihSurat').show();
        $('#btnPilihSurat').hide();
        $('#navTabs').show();
        $('#contentTabs').show();
        switch(id){
            case '1':
                console.log('BA.TA');
                $('#frmA').show();
                $('#cont').pleaseWait();
                $('#dTbA').show();
                $('#dTbKepK').hide();
                $('#dTbFax').hide();
                $('#dTbBA').hide();
                $('#dTbBB').hide();
                $('#dTbC').hide();
                $('#dTbD').hide();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    fixedHeader: true,
                    ajax:"{{ url('data/ba_ta') }}",
                    initComplete:function(){
                        $('#cont').pleaseWait('stop');
                        $('#tbA').show();
                    },
                    columns:[
                        {data:'nomor_urut'},
                        {data:'nomor_surat'},
                        {data:'tanggal_surat'},
                        {data:'tujuan'},
                        {data:'perihal_surat'},
                        {data:'tembusan'},
                        {data:'menjawab'},
                        {data:'kode_seksi_pembuat'},
                        {data:function(data,type,dataToSet){
                            return '<a style="z-index:0;" class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hpsOut" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        { "width": "5%", "targets": 0 },
                        { "width": "15%", "targets": 1 },
                        { "width": "15%", "targets": 2 },
                        { "width": "5%", "targets": 7},
                        { "width": "5%", "targets": 8},
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '2':
                console.log('TA'); 
                $('#frmA').show();
                $('#cont').pleaseWait();
                $('#dTbA').show();
                $('#dTbKepK').hide();
                $('#dTbFax').hide();
                $('#dTbBA').hide();
                $('#dTbBB').hide();
                $('#dTbC').hide();
                $('#dTbD').hide();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    fixedHeader: true,
                    ajax:"{{ url('data/ta') }}",
                    initComplete:function(){
                        $('#cont').pleaseWait('stop');
                        $('#tbA').show();
                    },
                    columns:[
                        {data:'nomor_urut'},
                        {data:'nomor_surat'},
                        {data:'tanggal_surat'},
                        {data:'tujuan'},
                        {data:'perihal_surat'},
                        {data:'tembusan'},
                        {data:'menjawab'},
                        {data:'kode_seksi_pembuat'},
                        {data:function(data,type,dataToSet){
                            return '<a style="z-index:0;" class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hpsOut" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        { "width": "5%", "targets": 0 },
                        { "width": "15%", "targets": 1 },
                        { "width": "15%", "targets": 2 },
                        { "width": "5%", "targets": 7},
                        { "width": "5%", "targets": 8},
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '3':
                console.log('S');
                $('#frmA').show();
                $('#cont').pleaseWait();
                $('#dTbA').show();
                $('#dTbKepK').hide();
                $('#dTbFax').hide();
                $('#dTbBA').hide();
                $('#dTbBB').hide();
                $('#dTbC').hide();
                $('#dTbD').hide();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    fixedHeader: true,
                    ajax:"{{ url('data/s') }}",
                    initComplete:function(){
                        $('#cont').pleaseWait('stop');
                        $('#tbA').show();
                    },
                    columns:[
                        {data:'nomor_urut'},
                        {data:'nomor_surat'},
                        {data:'tanggal_surat'},
                        {data:'tujuan'},
                        {data:'perihal_surat'},
                        {data:'tembusan'},
                        {data:'menjawab'},
                        {data:'kode_seksi_pembuat'},
                        {data:function(data,type,dataToSet){
                            return '<a style="z-index:0;" class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hpsOut" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        { "width": "5%", "targets": 0 },
                        { "width": "15%", "targets": 1 },
                        { "width": "15%", "targets": 2 },
                        { "width": "5%", "targets": 7},
                        { "width": "5%", "targets": 8},
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '4':
                console.log('KET');
                $('#frmA').show();
                $('#cont').pleaseWait();
                $('#dTbA').show();
                $('#dTbKepK').hide();
                $('#dTbFax').hide();
                $('#dTbBA').hide();
                $('#dTbBB').hide();
                $('#dTbC').hide();
                $('#dTbD').hide();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    fixedHeader: true,
                    ajax:"{{ url('data/ket') }}",
                    initComplete:function(){
                        $('#cont').pleaseWait('stop');
                        $('#tbA').show();
                    },
                    columns:[
                        {data:'nomor_urut'},
                        {data:'nomor_surat'},
                        {data:'tanggal_surat'},
                        {data:'tujuan'},
                        {data:'perihal_surat'},
                        {data:'tembusan'},
                        {data:'menjawab'},
                        {data:'kode_seksi_pembuat'},
                        {data:function(data,type,dataToSet){
                            return '<a style="z-index:0;" class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hpsOut" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        { "width": "5%", "targets": 0 },
                        { "width": "15%", "targets": 1 },
                        { "width": "15%", "targets": 2 },
                        { "width": "5%", "targets": 7},
                        { "width": "5%", "targets": 8},
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '5':
                console.log('ND');
                $('#frmA').show();
                $('#cont').pleaseWait();
                $('#dTbA').show();
                $('#dTbKepK').hide();
                $('#dTbFax').hide();
                $('#dTbBA').hide();
                $('#dTbBB').hide();
                $('#dTbC').hide();
                $('#dTbD').hide();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    fixedHeader: true,
                    ajax:"{{ url('data/nd') }}",
                    initComplete:function(){
                        $('#cont').pleaseWait('stop');
                        $('#tbA').show();
                    },
                    columns:[
                        {data:'nomor_urut'},
                        {data:'nomor_surat'},
                        {data:'tanggal_surat'},
                        {data:'tujuan'},
                        {data:'perihal_surat'},
                        {data:'tembusan'},
                        {data:'menjawab'},
                        {data:'kode_seksi_pembuat'},
                        {data:function(data,type,dataToSet){
                            return '<a style="z-index:0;" class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hpsOut" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        { "width": "5%", "targets": 0 },
                        { "width": "15%", "targets": 1 },
                        { "width": "15%", "targets": 2 },
                        { "width": "5%", "targets": 7},
                        { "width": "5%", "targets": 8},
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                //TODO SAMPAI SINI
                break;
            case '6':
                console.log('SPR');
                $('#frmA').show();
                $('#cont').pleaseWait();
                $('#dTbA').show();
                $('#dTbKepK').hide();
                $('#dTbFax').hide();
                $('#dTbBA').hide();
                $('#dTbBB').hide();
                $('#dTbC').hide();
                $('#dTbD').hide();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    fixedHeader: true,
                    ajax:"{{ url('data/spr') }}",
                    initComplete:function(){
                        $('#cont').pleaseWait('stop');
                        $('#tbA').show();
                    },
                    columns:[
                        {data:'nomor_urut'},
                        {data:'nomor_surat'},
                        {data:'tanggal_surat'},
                        {data:'tujuan'},
                        {data:'perihal_surat'},
                        {data:'tembusan'},
                        {data:'menjawab'},
                        {data:'kode_seksi_pembuat'},
                        {data:function(data,type,dataToSet){
                            return '<a style="z-index:0;" class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hpsOut" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        { "width": "5%", "targets": 0 },
                        { "width": "15%", "targets": 1 },
                        { "width": "15%", "targets": 2 },
                        { "width": "5%", "targets": 7},
                        { "width": "5%", "targets": 8},
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '7':
                $('#frmA').show();
                $('#cont').pleaseWait();
                $('#dTbA').show();
                $('#dTbKepK').hide();
                $('#dTbFax').hide();
                $('#dTbBA').hide();
                $('#dTbBB').hide();
                $('#dTbC').hide();
                $('#dTbD').hide();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    fixedHeader: true,
                    ajax:"{{ url('data/ndr') }}",
                    initComplete:function(){
                        $('#cont').pleaseWait('stop');
                        $('#tbA').show();
                    },
                    columns:[
                        {data:'nomor_urut'},
                        {data:'nomor_surat'},
                        {data:'tanggal_surat'},
                        {data:'tujuan'},
                        {data:'perihal_surat'},
                        {data:'tembusan'},
                        {data:'menjawab'},
                        {data:'kode_seksi_pembuat'},
                        {data:function(data,type,dataToSet){
                            return '<a style="z-index:0;" class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hpsOut" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        { "width": "5%", "targets": 0 },
                        { "width": "15%", "targets": 1 },
                        { "width": "15%", "targets": 2 },
                        { "width": "5%", "targets": 7},
                        { "width": "5%", "targets": 8},
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '8':
                $('#frmA').show();
                $('#cont').pleaseWait();
                $('#dTbA').show();
                $('#dTbKepK').hide();
                $('#dTbFax').hide();
                $('#dTbBA').hide();
                $('#dTbBB').hide();
                $('#dTbC').hide();
                $('#dTbD').hide();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    fixedHeader: true,
                    ajax:"{{ url('data/sp') }}",
                    initComplete:function(){
                        $('#cont').pleaseWait('stop');
                        $('#tbA').show();
                    },
                    columns:[
                        {data:'nomor_urut'},
                        {data:'nomor_surat'},
                        {data:'tanggal_surat'},
                        {data:'tujuan'},
                        {data:'perihal_surat'},
                        {data:'tembusan'},
                        {data:'menjawab'},
                        {data:'kode_seksi_pembuat'},
                        {data:function(data,type,dataToSet){
                            return '<a style="z-index:0;" class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hpsOut" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        { "width": "5%", "targets": 0 },
                        { "width": "15%", "targets": 1 },
                        { "width": "15%", "targets": 2 },
                        { "width": "5%", "targets": 7},
                        { "width": "5%", "targets": 8},
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '9':
                $('#frmA').show();
                $('#cont').pleaseWait();
                $('#dTbA').show();
                $('#dTbKepK').hide();
                $('#dTbFax').hide();
                $('#dTbBA').hide();
                $('#dTbBB').hide();
                $('#dTbC').hide();
                $('#dTbD').hide();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    fixedHeader: true,
                    ajax:"{{ url('data/sr') }}",
                    initComplete:function(){
                        $('#cont').pleaseWait('stop');
                        $('#tbA').show();
                    },
                    columns:[
                        {data:'nomor_urut'},
                        {data:'nomor_surat'},
                        {data:'tanggal_surat'},
                        {data:'tujuan'},
                        {data:'perihal_surat'},
                        {data:'tembusan'},
                        {data:'menjawab'},
                        {data:'kode_seksi_pembuat'},
                        {data:function(data,type,dataToSet){
                            return '<a style="z-index:0;" class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hpsOut" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        { "width": "5%", "targets": 0 },
                        { "width": "15%", "targets": 1 },
                        { "width": "15%", "targets": 2 },
                        { "width": "5%", "targets": 7},
                        { "width": "5%", "targets": 8},
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '10':
                $('#frmA').show();
                $('#cont').pleaseWait();
                $('#dTbA').show();
                $('#dTbKepK').hide();
                $('#dTbFax').hide();
                $('#dTbBA').hide();
                $('#dTbBB').hide();
                $('#dTbC').hide();
                $('#dTbD').hide();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    fixedHeader: true,
                    ajax:"{{ url('data/s_riksis') }}",
                    initComplete:function(){
                        $('#cont').pleaseWait('stop');
                        $('#tbA').show();
                    },
                    columns:[
                        {data:'nomor_urut'},
                        {data:'nomor_surat'},
                        {data:'tanggal_surat'},
                        {data:'tujuan'},
                        {data:'perihal_surat'},
                        {data:'tembusan'},
                        {data:'menjawab'},
                        {data:'kode_seksi_pembuat'},
                        {data:function(data,type,dataToSet){
                            return '<a style="z-index:0;" class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hpsOut" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        { "width": "5%", "targets": 0 },
                        { "width": "15%", "targets": 1 },
                        { "width": "15%", "targets": 2 },
                        { "width": "5%", "targets": 7},
                        { "width": "5%", "targets": 8},
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '11':
                $('#frmA').show();
                $('#cont').pleaseWait();
                $('#dTbA').show();
                $('#dTbKepK').hide();
                $('#dTbFax').hide();
                $('#dTbBA').hide();
                $('#dTbBB').hide();
                $('#dTbC').hide();
                $('#dTbD').hide();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    fixedHeader: true,
                    ajax:"{{ url('data/si') }}",
                    initComplete:function(){
                        $('#cont').pleaseWait('stop');
                        $('#tbA').show();
                    },
                    columns:[
                        {data:'nomor_urut'},
                        {data:'nomor_surat'},
                        {data:'tanggal_surat'},
                        {data:'tujuan'},
                        {data:'perihal_surat'},
                        {data:'tembusan'},
                        {data:'menjawab'},
                        {data:'kode_seksi_pembuat'},
                        {data:function(data,type,dataToSet){
                            return '<a style="z-index:0;" class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hpsOut" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        { "width": "5%", "targets": 0 },
                        { "width": "15%", "targets": 1 },
                        { "width": "15%", "targets": 2 },
                        { "width": "5%", "targets": 7},
                        { "width": "5%", "targets": 8},
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '12':
                 $.toast({
                    heading: 'Information',
                    text: 'Data Nomor Surat WPJ.14 Belum Jelas',
                    position: 'bottom-right',
                    stack: false,
                    showHideTransition: 'slide',
                    icon: 'error',
                    hideAfter: false
                }); 
                $('#frmA').show();
                $('#cont').pleaseWait();
                $('#dTbA').show();
                $('#dTbKepK').hide();
                $('#dTbFax').hide();
                $('#dTbBA').hide();
                $('#dTbBB').hide();
                $('#dTbC').hide();
                $('#dTbD').hide();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    fixedHeader: true,
                    ajax:"{{ url('data/wpj') }}",
                    initComplete:function(){
                        $('#cont').pleaseWait('stop');
                        $('#tbA').show();
                    },
                    columns:[
                        {data:'nomor_urut'},
                        {data:'nomor_surat'},
                        {data:'tanggal_surat'},
                        {data:'tujuan'},
                        {data:'perihal_surat'},
                        {data:'tembusan'},
                        {data:'menjawab'},
                        {data:'kode_seksi_pembuat'},
                        {data:function(data,type,dataToSet){
                            return '<a style="z-index:0;" class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hpsOut" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        { "width": "5%", "targets": 0 },
                        { "width": "15%", "targets": 1 },
                        { "width": "15%", "targets": 2 },
                        { "width": "5%", "targets": 7},
                        { "width": "5%", "targets": 8},
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '13': 
                $('#frmA').show();
                $('#cont').pleaseWait();
                $('#dTbA').show();
                $('#dTbKepK').hide();
                $('#dTbFax').hide();
                $('#dTbBA').hide();
                $('#dTbBB').hide();
                $('#dTbC').hide();
                $('#dTbD').hide();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    fixedHeader: true,
                    ajax:"{{ url('data/und') }}",
                    initComplete:function(){
                        $('#cont').pleaseWait('stop');
                        $('#tbA').show();
                    },
                    columns:[
                        {data:'nomor_urut'},
                        {data:'nomor_surat'},
                        {data:'tanggal_surat'},
                        {data:'tujuan'},
                        {data:'perihal_surat'},
                        {data:'tembusan'},
                        {data:'menjawab'},
                        {data:'kode_seksi_pembuat'},
                        {data:function(data,type,dataToSet){
                            return '<a style="z-index:0;" class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hpsOut" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        { "width": "5%", "targets": 0 },
                        { "width": "15%", "targets": 1 },
                        { "width": "15%", "targets": 2 },
                        { "width": "5%", "targets": 7},
                        { "width": "5%", "targets": 8},
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '14':
                $('#frmA').show();
                $('#cont').pleaseWait();
                $('#dTbA').show();
                $('#dTbKepK').hide();
                $('#dTbFax').hide();
                $('#dTbBA').hide();
                $('#dTbBB').hide();
                $('#dTbC').hide();
                $('#dTbD').hide();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    fixedHeader: true,
                    ajax:"{{ url('data/st') }}",
                    initComplete:function(){
                        $('#cont').pleaseWait('stop');
                        $('#tbA').show();
                    },
                    columns:[
                        {data:'nomor_urut'},
                        {data:'nomor_surat'},
                        {data:'tanggal_surat'},
                        {data:'tujuan'},
                        {data:'perihal_surat'},
                        {data:'tembusan'},
                        {data:'menjawab'},
                        {data:'kode_seksi_pembuat'},
                        {data:function(data,type,dataToSet){
                            return '<a style="z-index:0;" class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hpsOut" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        { "width": "5%", "targets": 0 },
                        { "width": "15%", "targets": 1 },
                        { "width": "15%", "targets": 2 },
                        { "width": "5%", "targets": 7},
                        { "width": "5%", "targets": 8},
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });   
                break;
            case '15':
                $('#frmF').show();
                $('#cont').pleaseWait();
                $('#dTbA').hide();
                $('#dTbKepK').hide();
                $('#dTbFax').show();
                $('#dTbBA').hide();
                $('#dTbBB').hide();
                $('#dTbC').hide();
                $('#dTbD').hide();
                var table = $('#dTbFax').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    fixedHeader: true,
                    ajax:"{{ url('data/fax') }}",
                    initComplete:function(){
                        $('#cont').pleaseWait('stop');
                        $('#tbFax').show();
                    },
                    columns:[
                        {data:'tanggal_berita_fax'},
                        {data:'tujuan'},
                        {data:'jumlah_hal'},
                        {data:'tanggal_kirim'},
                        {data:'hal'},
                        {data:'tembusan'},
                        {data:'nama_petugas'},
                        {data:'nip'},
                        {data:'jabatan_petugas'},
                        {data:'penandatangan'},
                        {data:'nama_kasi'},
                        {data:'nip_kasi'},
                        {data:function(data,type,dataToSet){
                            return '<a style="z-index:0;" class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hpsOut" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        { "width": "5%", "targets": 0 },
                        { "width": "5%", "targets": 2 },
                        { "width": "5%", "targets": 3 },
                        { "width": "5%", "targets": 12},
                        {className:"noWrapTd",targets:[0]},
                        {className:"noWrapTd",targets:[3]},
                        {className:"noWrapTd",targets:[7]},
                        {className:"noWrapTd",targets:[12]},
                    ]
                });   
                break;
            case '16':
                $('#frmA').show();
                $('#cont').pleaseWait();
                $('#dTbA').show();
                $('#dTbKepK').hide();
                $('#dTbFax').hide();
                $('#dTbBA').hide();
                $('#dTbBB').hide();
                $('#dTbC').hide();
                $('#dTbD').hide();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    fixedHeader: true,
                    ajax:"{{ url('data/lhppu') }}",
                    initComplete:function(){
                        $('#cont').pleaseWait('stop');
                        $('#tbA').show();
                    },
                    columns:[
                        {data:'nomor_urut'},
                        {data:'nomor_surat'},
                        {data:'tanggal_surat'},
                        {data:'tujuan'},
                        {data:'perihal_surat'},
                        {data:'tembusan'},
                        {data:'menjawab'},
                        {data:'kode_seksi_pembuat'},
                        {data:function(data,type,dataToSet){
                            return '<a style="z-index:0;" class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hpsOut" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        { "width": "5%", "targets": 0 },
                        { "width": "15%", "targets": 1 },
                        { "width": "15%", "targets": 2 },
                        { "width": "5%", "targets": 7},
                        { "width": "5%", "targets": 8},
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });   
                break;
            case '17':
                $('#frmA').show();
                $('#cont').pleaseWait();
                $('#dTbA').show();
                $('#dTbKepK').hide();
                $('#dTbFax').hide();
                $('#dTbBA').hide();
                $('#dTbBB').hide();
                $('#dTbC').hide();
                $('#dTbD').hide();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    fixedHeader: true,
                    ajax:"{{ url('data/lap') }}",
                    initComplete:function(){
                        $('#cont').pleaseWait('stop');
                        $('#tbA').show();
                    },
                    columns:[
                        {data:'nomor_urut'},
                        {data:'nomor_surat'},
                        {data:'tanggal_surat'},
                        {data:'tujuan'},
                        {data:'perihal_surat'},
                        {data:'tembusan'},
                        {data:'menjawab'},
                        {data:'kode_seksi_pembuat'},
                        {data:function(data,type,dataToSet){
                            return '<a style="z-index:0;" class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hpsOut" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        { "width": "5%", "targets": 0 },
                        { "width": "15%", "targets": 1 },
                        { "width": "15%", "targets": 2 },
                        { "width": "5%", "targets": 7},
                        { "width": "5%", "targets": 8},
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });   
                break;
            case '18':
                $('#frmA').show();
                $('#cont').pleaseWait();
                $('#dTbA').show();
                $('#dTbKepK').hide();
                $('#dTbFax').hide();
                $('#dTbBA').hide();
                $('#dTbBB').hide();
                $('#dTbC').hide();
                $('#dTbD').hide();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    fixedHeader: true,
                    ajax:"{{ url('data/lat') }}",
                    initComplete:function(){
                        $('#cont').pleaseWait('stop');
                        $('#tbA').show();
                    },
                    columns:[
                        {data:'nomor_urut'},
                        {data:'nomor_surat'},
                        {data:'tanggal_surat'},
                        {data:'tujuan'},
                        {data:'perihal_surat'},
                        {data:'tembusan'},
                        {data:'menjawab'},
                        {data:'kode_seksi_pembuat'},
                        {data:function(data,type,dataToSet){
                            return '<a style="z-index:0;" class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hpsOut" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        { "width": "5%", "targets": 0 },
                        { "width": "15%", "targets": 1 },
                        { "width": "15%", "targets": 2 },
                        { "width": "5%", "targets": 7},
                        { "width": "5%", "targets": 8},
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });   
                break;
            case '19':
                $('#frmA').show();
                $('#cont').pleaseWait();
                $('#dTbA').show();
                $('#dTbKepK').hide();
                $('#dTbFax').hide();
                $('#dTbBA').hide();
                $('#dTbBB').hide();
                $('#dTbC').hide();
                $('#dTbD').hide();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    fixedHeader: true,
                    ajax:"{{ url('data/ba') }}",
                    initComplete:function(){
                        $('#cont').pleaseWait('stop');
                        $('#tbA').show();
                    },
                    columns:[
                        {data:'nomor_urut'},
                        {data:'nomor_surat'},
                        {data:'tanggal_surat'},
                        {data:'tujuan'},
                        {data:'perihal_surat'},
                        {data:'tembusan'},
                        {data:'menjawab'},
                        {data:'kode_seksi_pembuat'},
                        {data:function(data,type,dataToSet){
                            return '<a style="z-index:0;" class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hpsOut" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        { "width": "5%", "targets": 0 },
                        { "width": "15%", "targets": 1 },
                        { "width": "15%", "targets": 2 },
                        { "width": "5%", "targets": 7},
                        { "width": "5%", "targets": 8},
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '20':
                //TODO CHECK LII IDLP
                $('#frmBB').show();
                $('#cont').pleaseWait();
                $('#dTbA').hide();
                $('#dTbKepK').hide();
                $('#dTbFax').hide();
                $('#dTbBA').show();
                $('#dTbBB').hide();
                $('#dTbC').hide();
                $('#dTbD').hide();
                var table = $('#dTbBA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    fixedHeader: true,
                    ajax:"{{ url('data/lii') }}",
                    initComplete:function(){
                        $('#cont').pleaseWait('stop');
                        $('#tbBA').show();
                    },
                    columns:[
                        {data:'nomor_urut'},
                        {data:'nomor_surat'},
                        {data:'tanggal'},
                        {data:'nama_wp'},
                        {data:'npwp'},
                        {data:'tahun_pajak'},
                        {data:'analis'},
                        {data:function(data,type,dataToSet){
                            return '<a style="z-index:0;" class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hpsOut" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        { "width": "5%", "targets": 0 },
                        { "width": "15%", "targets": 1 },
                        { "width": "15%", "targets": 2 },
                        { "width": "15%", "targets": 4 },
                        { "width": "5%", "targets": 5},
                        { "width": "5%", "targets": 7},
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[4]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '21':
                $('#frmBA').show();
                $('#cont').pleaseWait();
                $('#dTbA').hide();
                $('#dTbKepK').hide();
                $('#dTbFax').hide();
                $('#dTbBA').hide();
                $('#dTbBB').show();
                $('#dTbC').hide();
                $('#dTbD').hide();
                var table = $('#dTbBB').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    fixedHeader: true,
                    ajax:"{{ url('data/lapju_idlp') }}",
                    initComplete:function(){
                        $('#cont').pleaseWait('stop');
                        $('#tbBB').show();
                    },
                    columns:[
                        {data:'nomor_urut'},
                        {data:'nomor_surat'},
                        {data:'tanggal'},
                        {data:'nama_wp'},
                        {data:'npwp'},
                        {data:'tahun_pajak'},
                        {data:'analis'},
                        {data:'tindak_lanjut'},
                        {data:function(data,type,dataToSet){
                            return '<a style="z-index:0;" class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hpsOut" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        { "width": "5%", "targets": 0 },
                        { "width": "5%", "targets": 1 },
                        { "width": "5%", "targets": 2 },
                        { "width": "5%", "targets": 4},
                        { "width": "5%", "targets": 5},
                        { "width": "5%", "targets": 8},
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[4]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '22':
                $('#frmD').show();
                $('#cont').pleaseWait();
                $('#dTbA').hide();
                $('#dTbKepK').hide();
                $('#dTbFax').hide();
                $('#dTbBA').hide();
                $('#dTbBB').hide();
                $('#dTbC').hide();
                $('#dTbD').show();
                var table = $('#dTbD').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    fixedHeader: true,
                    ajax:"{{ url('data/lhpa_idlp') }}",
                    initComplete:function(){
                        $('#cont').pleaseWait('stop');
                        $('#tbD').show();
                    },
                    columns:[
                        {data:'nomor_urut'},
                        {data:'nomor_surat'},
                        {data:'tanggal'},
                        {data:'nama_wp'},
                        {data:'npwp'},
                        {data:'tahun_pajak'},
                        {data:'tindak_lanjut'},
                        {data:function(data,type,dataToSet){
                            return '<a style="z-index:0;" class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hpsOut" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        { "width": "5%", "targets": 0 },
                        { "width": "5%", "targets": 1 },
                        { "width": "5%", "targets": 2 },
                        { "width": "5%", "targets": 4},
                        { "width": "5%", "targets": 5},
                        { "width": "5%", "targets": 7},
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[4]},
                        {className:"noWrapTd",targets:[5]},
                        {className:"noWrapTd",targets:[7]}
                    ]
                });
                break;
            case '23':
                $('#frmBA').show();
                $('#cont').pleaseWait();
                $('#dTbA').hide();
                $('#dTbKepK').hide();
                $('#dTbFax').hide();
                $('#dTbBA').hide();
                $('#dTbBB').show();
                $('#dTbC').hide();
                $('#dTbD').hide();
                var table = $('#dTbBB').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    fixedHeader: true,
                    ajax:"{{ url('data/lia_idlp') }}",
                    initComplete:function(){
                        $('#cont').pleaseWait('stop');
                        $('#tbBB').show();
                    },
                    columns:[
                        {data:'nomor_urut'},
                        {data:'nomor_surat'},
                        {data:'tanggal'},
                        {data:'nama_wp'},
                        {data:'npwp'},
                        {data:'tahun_pajak'},
                        {data:'analis'},
                        {data:'tindak_lanjut'},
                        {data:function(data,type,dataToSet){
                            return '<a style="z-index:0;" class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hpsOut" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        { "width": "5%", "targets": 0 },
                        { "width": "5%", "targets": 1 },
                        { "width": "5%", "targets": 2 },
                        { "width": "5%", "targets": 4},
                        { "width": "5%", "targets": 5},
                        { "width": "5%", "targets": 8},
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[4]},
                        {className:"noWrapTd",targets:[5]},
                        {className:"noWrapTd",targets:[8]}
                    ]
                });
                break;
            case '24':
                $('#frmC').show();
                $('#cont').pleaseWait();
                $('#dTbA').hide();
                $('#dTbKepK').hide();
                $('#dTbFax').hide();
                $('#dTbBA').hide();
                $('#dTbBB').hide();
                $('#dTbC').show();
                $('#dTbD').hide();
                var table = $('#dTbC').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    fixedHeader: true,
                    ajax:"{{ url('data/ba_pen_idlp') }}",
                    initComplete:function(){
                        $('#cont').pleaseWait('stop');
                        $('#tbC').show();
                    },
                    columns:[
                        {data:'nomor_urut'},
                        {data:'nomor_surat'},
                        {data:'tanggal'},
                        {data:'perihal_surat'},
                        {data:'tahun_pajak'},
                        {data:'kesimpulan'},
                        {data:function(data,type,dataToSet){
                            return '<a style="z-index:0;" class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hpsOut" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        { "width": "5%", "targets": 0 },
                        { "width": "5%", "targets": 1 },
                        { "width": "5%", "targets": 2 },
                        { "width": "5%", "targets": 4},
                        { "width": "5%", "targets": 6},
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[4]},
                        {className:"noWrapTd",targets:[6]}
                    ]
                });
                break;
            case '25':
            //BA.PEN
                $('#frmA').show();
                $('#cont').pleaseWait();
                $('#dTbA').show();
                $('#dTbKepK').hide();
                $('#dTbFax').hide();
                $('#dTbBA').hide();
                $('#dTbBB').hide();
                $('#dTbC').hide();
                $('#dTbD').hide();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    fixedHeader: true,
                    ajax:"{{ url('data/ba_pen') }}",
                    initComplete:function(){
                        $('#cont').pleaseWait('stop');
                        $('#tbA').show();
                    },
                    columns:[
                        {data:'nomor_urut'},
                        {data:'nomor_surat'},
                        {data:'tanggal_surat'},
                        {data:'tujuan'},
                        {data:'perihal_surat'},
                        {data:'tembusan'},
                        {data:'menjawab'},
                        {data:'kode_seksi_pembuat'},
                        {data:function(data,type,dataToSet){
                            return '<a style="z-index:0;" class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hpsOut" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        { "width": "5%", "targets": 0 },
                        { "width": "15%", "targets": 1 },
                        { "width": "15%", "targets": 2 },
                        { "width": "5%", "targets": 7},
                        { "width": "5%", "targets": 8},
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[7]},
                        {className:"noWrapTd",targets:[8]}
                    ]
                });
                break;
            case '26':
            //PRIN.BP
                $('#frmA').show();
                $('#cont').pleaseWait();
                $('#dTbA').show();
                $('#dTbKepK').hide();
                $('#dTbFax').hide();
                $('#dTbBA').hide();
                $('#dTbBB').hide();
                $('#dTbC').hide();
                $('#dTbD').hide();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    fixedHeader: true,
                    ajax:"{{ url('data/print_bp') }}",
                    initComplete:function(){
                        $('#cont').pleaseWait('stop');
                        $('#tbA').show();
                    },
                    columns:[
                        {data:'nomor_urut'},
                        {data:'nomor_surat'},
                        {data:'tanggal_surat'},
                        {data:'tujuan'},
                        {data:'perihal_surat'},
                        {data:'tembusan'},
                        {data:'menjawab'},
                        {data:'kode_seksi_pembuat'},
                        {data:function(data,type,dataToSet){
                            return '<a style="z-index:0;" class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hpsOut" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        { "width": "5%", "targets": 0 },
                        { "width": "15%", "targets": 1 },
                        { "width": "15%", "targets": 2 },
                        { "width": "5%", "targets": 7},
                        { "width": "5%", "targets": 8},
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '27':
                $('#frmA').show();
                $('#cont').pleaseWait();
                $('#dTbA').show();
                $('#dTbKepK').hide();
                $('#dTbFax').hide();
                $('#dTbBA').hide();
                $('#dTbBB').hide();
                $('#dTbC').hide();
                $('#dTbD').hide();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    fixedHeader: true,
                    ajax:"{{ url('data/sppbp_p') }}",
                    initComplete:function(){
                        $('#cont').pleaseWait('stop');
                        $('#tbA').show();
                    },
                    columns:[
                        {data:'nomor_urut'},
                        {data:'nomor_surat'},
                        {data:'tanggal_surat'},
                        {data:'tujuan'},
                        {data:'perihal_surat'},
                        {data:'tembusan'},
                        {data:'menjawab'},
                        {data:'kode_seksi_pembuat'},
                        {data:function(data,type,dataToSet){
                            return '<a style="z-index:0;" class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hpsOut" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        { "width": "5%", "targets": 0 },
                        { "width": "15%", "targets": 1 },
                        { "width": "15%", "targets": 2 },
                        { "width": "5%", "targets": 7},
                        { "width": "5%", "targets": 8},
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '28':
                $('#frmA').show();
                $('#cont').pleaseWait();
                $('#dTbA').show();
                $('#dTbKepK').hide();
                $('#dTbFax').hide();
                $('#dTbBA').hide();
                $('#dTbBB').hide();
                $('#dTbC').hide();
                $('#dTbD').hide();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    fixedHeader: true,
                    ajax:"{{ url('data/spemb_bp') }}",
                    initComplete:function(){
                        $('#cont').pleaseWait('stop');
                        $('#tbA').show();
                    },
                    columns:[
                        {data:'nomor_urut'},
                        {data:'nomor_surat'},
                        {data:'tanggal_surat'},
                        {data:'tujuan'},
                        {data:'perihal_surat'},
                        {data:'tembusan'},
                        {data:'menjawab'},
                        {data:'kode_seksi_pembuat'},
                        {data:function(data,type,dataToSet){
                            return '<a style="z-index:0;" class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hpsOut" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        { "width": "5%", "targets": 0 },
                        { "width": "15%", "targets": 1 },
                        { "width": "15%", "targets": 2 },
                        { "width": "5%", "targets": 7},
                        { "width": "5%", "targets": 8},
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '29':
                $('#frmA').show();
                $('#cont').pleaseWait();
                $('#dTbA').show();
                $('#dTbKepK').hide();
                $('#dTbFax').hide();
                $('#dTbBA').hide();
                $('#dTbBB').hide();
                $('#dTbC').hide();
                $('#dTbD').hide();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    fixedHeader: true,
                    ajax:"{{ url('data/pemb_bp') }}",
                    initComplete:function(){
                        $('#cont').pleaseWait('stop');
                        $('#tbA').show();
                    },
                    columns:[
                        {data:'nomor_urut'},
                        {data:'nomor_surat'},
                        {data:'tanggal_surat'},
                        {data:'tujuan'},
                        {data:'perihal_surat'},
                        {data:'tembusan'},
                        {data:'menjawab'},
                        {data:'kode_seksi_pembuat'},
                        {data:function(data,type,dataToSet){
                            return '<a style="z-index:0;" class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hpsOut" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        { "width": "5%", "targets": 0 },
                        { "width": "15%", "targets": 1 },
                        { "width": "15%", "targets": 2 },
                        { "width": "5%", "targets": 7},
                        { "width": "5%", "targets": 8},
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '30':
            //LAPJU.Penyidikan
                $('#frmBB').show();
                $('#cont').pleaseWait();
                $('#dTbA').hide();
                $('#dTbKepK').hide();
                $('#dTbFax').hide();
                $('#dTbBA').show();
                $('#dTbBB').hide();
                $('#dTbC').hide();
                $('#dTbD').hide();
                var table = $('#dTbBA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    fixedHeader: true,
                    ajax:"{{ url('data/lapju_penyidikan') }}",
                    initComplete:function(){
                        $('#cont').pleaseWait('stop');
                        $('#tbBA').show();
                    },
                    columns:[
                        {data:'nomor_urut'},
                        {data:'nomor_surat'},
                        {data:'tanggal'},
                        {data:'nama_wp'},
                        {data:'npwp'},
                        {data:'tahun_pajak'},
                        {data:'analis'},
                        {data:function(data,type,dataToSet){
                            return '<a style="z-index:0;" class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hpsOut" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        { "width": "5%", "targets": 0 },
                        { "width": "15%", "targets": 1 },
                        { "width": "15%", "targets": 2 },
                        { "width": "5%", "targets": 4},
                        { "width": "5%", "targets": 5},
                        { "width": "5%", "targets": 7},
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[4]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '31':
            //LK.DIK
                $('#frmA').show();
                $('#cont').pleaseWait();
                $('#dTbA').show();
                $('#dTbKepK').hide();
                $('#dTbFax').hide();
                $('#dTbBA').hide();
                $('#dTbBB').hide();
                $('#dTbC').hide();
                $('#dTbD').hide();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    fixedHeader: true,
                    ajax:"{{ url('data/lk_dik') }}",
                    initComplete:function(){
                        $('#cont').pleaseWait('stop');
                        $('#tbA').show();
                    },
                    columns:[
                        {data:'nomor_urut'},
                        {data:'nomor_surat'},
                        {data:'tanggal_surat'},
                        {data:'tujuan'},
                        {data:'perihal_surat'},
                        {data:'tembusan'},
                        {data:'menjawab'},
                        {data:'kode_seksi_pembuat'},
                        {data:function(data,type,dataToSet){
                            return '<a style="z-index:0;" class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hpsOut" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        { "width": "5%", "targets": 0 },
                        { "width": "15%", "targets": 1 },
                        { "width": "15%", "targets": 2 },
                        { "width": "5%", "targets": 7},
                        { "width": "5%", "targets": 8},
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '32':
            //PRIN.DIK
                $('#frmA').show();
                $('#cont').pleaseWait();
                $('#dTbA').show();
                $('#dTbKepK').hide();
                $('#dTbFax').hide();
                $('#dTbBA').hide();
                $('#dTbBB').hide();
                $('#dTbC').hide();
                $('#dTbD').hide();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    fixedHeader: true,
                    ajax:"{{ url('data/prin_dik') }}",
                    initComplete:function(){
                        $('#cont').pleaseWait('stop');
                        $('#tbA').show();
                    },
                    columns:[
                        {data:'nomor_urut'},
                        {data:'nomor_surat'},
                        {data:'tanggal_surat'},
                        {data:'tujuan'},
                        {data:'perihal_surat'},
                        {data:'tembusan'},
                        {data:'menjawab'},
                        {data:'kode_seksi_pembuat'},
                        {data:function(data,type,dataToSet){
                            return '<a style="z-index:0;" class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hpsOut" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        { "width": "5%", "targets": 0 },
                        { "width": "15%", "targets": 1 },
                        { "width": "15%", "targets": 2 },
                        { "width": "5%", "targets": 7},
                        { "width": "5%", "targets": 8},
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '33':
                $('#frmA').show();
                $('#cont').pleaseWait();
                $('#dTbA').show();
                $('#dTbKepK').hide();
                $('#dTbFax').hide();
                $('#dTbBA').hide();
                $('#dTbBB').hide();
                $('#dTbC').hide();
                $('#dTbD').hide();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    fixedHeader: true,
                    ajax:"{{ url('data/lhps') }}",
                    initComplete:function(){
                        $('#cont').pleaseWait('stop');
                        $('#tbA').show();
                    },
                    columns:[
                        {data:'nomor_urut'},
                        {data:'nomor_surat'},
                        {data:'tanggal_surat'},
                        {data:'tujuan'},
                        {data:'perihal_surat'},
                        {data:'tembusan'},
                        {data:'menjawab'},
                        {data:'kode_seksi_pembuat'},
                        {data:function(data,type,dataToSet){
                            return '<a style="z-index:0;" class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hpsOut" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        { "width": "5%", "targets": 0 },
                        { "width": "15%", "targets": 1 },
                        { "width": "15%", "targets": 2 },
                        { "width": "5%", "targets": 7},
                        { "width": "5%", "targets": 8},
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '34':
                $('#frmA').show();
                $('#cont').pleaseWait();
                $('#dTbA').show();
                $('#dTbKepK').hide();
                $('#dTbFax').hide();
                $('#dTbBA').hide();
                $('#dTbBB').hide();
                $('#dTbC').hide();
                $('#dTbD').hide();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    fixedHeader: true,
                    ajax:"{{ url('data/pang_bp') }}",
                    initComplete:function(){
                        $('#cont').pleaseWait('stop');
                        $('#tbA').show();
                    },
                    columns:[
                        {data:'nomor_urut'},
                        {data:'nomor_surat'},
                        {data:'tanggal_surat'},
                        {data:'tujuan'},
                        {data:'perihal_surat'},
                        {data:'tembusan'},
                        {data:'menjawab'},
                        {data:'kode_seksi_pembuat'},
                        {data:function(data,type,dataToSet){
                            return '<a style="z-index:0;" class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hpsOut" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        { "width": "5%", "targets": 0 },
                        { "width": "15%", "targets": 1 },
                        { "width": "15%", "targets": 2 },
                        { "width": "5%", "targets": 7},
                        { "width": "5%", "targets": 8},
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '35':
                $('#frmA').show();
                $('#cont').pleaseWait();
                $('#dTbA').show();
                $('#dTbKepK').hide();
                $('#dTbFax').hide();
                $('#dTbBA').hide();
                $('#dTbBB').hide();
                $('#dTbC').hide();
                $('#dTbD').hide();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    fixedHeader: true,
                    ajax:"{{ url('data/lpbp') }}",
                    initComplete:function(){
                        $('#cont').pleaseWait('stop');
                        $('#tbA').show();
                    },
                    columns:[
                        {data:'nomor_urut'},
                        {data:'nomor_surat'},
                        {data:'tanggal_surat'},
                        {data:'tujuan'},
                        {data:'perihal_surat'},
                        {data:'tembusan'},
                        {data:'menjawab'},
                        {data:'kode_seksi_pembuat'},
                        {data:function(data,type,dataToSet){
                            return '<a style="z-index:0;" class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hpsOut" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        { "width": "5%", "targets": 0 },
                        { "width": "15%", "targets": 1 },
                        { "width": "15%", "targets": 2 },
                        { "width": "5%", "targets": 7},
                        { "width": "5%", "targets": 8},
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '36':
                $('#frmA').show();
                $('#cont').pleaseWait();
                $('#dTbA').show();
                $('#dTbKepK').hide();
                $('#dTbFax').hide();
                $('#dTbBA').hide();
                $('#dTbBB').hide();
                $('#dTbC').hide();
                $('#dTbD').hide();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    fixedHeader: true,
                    ajax:"{{ url('data/dupak') }}",
                    initComplete:function(){
                        $('#cont').pleaseWait('stop');
                        $('#tbA').show();
                    },
                    columns:[
                        {data:'nomor_urut'},
                        {data:'nomor_surat'},
                        {data:'tanggal_surat'},
                        {data:'tujuan'},
                        {data:'perihal_surat'},
                        {data:'tembusan'},
                        {data:'menjawab'},
                        {data:'kode_seksi_pembuat'},
                        {data:function(data,type,dataToSet){
                            return '<a style="z-index:0;" class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hpsOut" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        { "width": "5%", "targets": 0 },
                        { "width": "15%", "targets": 1 },
                        { "width": "15%", "targets": 2 },
                        { "width": "5%", "targets": 7},
                        { "width": "5%", "targets": 8},
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '37':
            //KEPKakanwil
                $('#frmKepK').show();
                $('#cont').pleaseWait();
                $('#dTbA').hide();
                $('#dTbKepK').show();
                $('#dTbFax').hide();
                $('#dTbBA').hide();
                $('#dTbBB').hide();
                $('#dTbC').hide();
                $('#dTbD').hide();
                var table = $('#dTbKepK').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    fixedHeader: true,
                    ajax:"{{ url('data/kepkakanwil') }}",
                    initComplete:function(){
                        $('#cont').pleaseWait('stop');
                        $('#tbKepK').show();
                    },
                    columns:[
                        {data:'nomor_urut'},
                        {data:'nomor_surat'},
                        {data:'tanggal_surat'},
                        {data:'tujuan'},
                        {data:'perihal_surat'},
                        {data:'kode_seksi_pembuat'},
                        {data:function(data,type,dataToSet){
                            return '<a style="z-index:0;" class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hpsOut" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        { "width": "5%", "targets": 0 },
                        { "width": "5%", "targets": 1 },
                        { "width": "5%", "targets": 2 },
                        { "width": "5%", "targets": 5},
                        { "width": "5%", "targets": 6},
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '38':
                $('#frmA').show();
                $('#cont').pleaseWait();
                $('#dTbA').show();
                $('#dTbKepK').hide();
                $('#dTbFax').hide();
                $('#dTbBA').hide();
                $('#dTbBB').hide();
                $('#dTbC').hide();
                $('#dTbD').hide();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    fixedHeader: true,
                    ajax:"{{ url('data/print_mat') }}",
                    initComplete:function(){
                        $('#cont').pleaseWait('stop');
                        $('#tbA').show();
                    },
                    columns:[
                        {data:'nomor_urut'},
                        {data:'nomor_surat'},
                        {data:'tanggal_surat'},
                        {data:'tujuan'},
                        {data:'perihal_surat'},
                        {data:'tembusan'},
                        {data:'menjawab'},
                        {data:'kode_seksi_pembuat'},
                        {data:function(data,type,dataToSet){
                            return '<a style="z-index:0;" class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hpsOut" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        { "width": "5%", "targets": 0 },
                        { "width": "15%", "targets": 1 },
                        { "width": "15%", "targets": 2 },
                        { "width": "5%", "targets": 7},
                        { "width": "5%", "targets": 8},
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '39':
                $('#frmA').show();
                $('#cont').pleaseWait();
                $('#dTbA').show();
                $('#dTbKepK').hide();
                $('#dTbFax').hide();
                $('#dTbBA').hide();
                $('#dTbBB').hide();
                $('#dTbC').hide();
                $('#dTbD').hide();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    fixedHeader: true,
                    ajax:"{{ url('data/ins_mat') }}",
                    initComplete:function(){
                        $('#cont').pleaseWait('stop');
                        $('#tbA').show();
                    },
                    columns:[
                        {data:'nomor_urut'},
                        {data:'nomor_surat'},
                        {data:'tanggal_surat'},
                        {data:'tujuan'},
                        {data:'perihal_surat'},
                        {data:'tembusan'},
                        {data:'menjawab'},
                        {data:'kode_seksi_pembuat'},
                        {data:function(data,type,dataToSet){
                            return '<a style="z-index:0;" class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hpsOut" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        { "width": "5%", "targets": 0 },
                        { "width": "15%", "targets": 1 },
                        { "width": "15%", "targets": 2 },
                        { "width": "5%", "targets": 7},
                        { "width": "5%", "targets": 8},
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '40':
                $('#frmA').show();
                $('#cont').pleaseWait();
                $('#dTbA').show();
                $('#dTbKepK').hide();
                $('#dTbFax').hide();
                $('#dTbBA').hide();
                $('#dTbBB').hide();
                $('#dTbC').hide();
                $('#dTbD').hide();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    fixedHeader: true,
                    ajax:"{{ url('data/lap_mat') }}",
                    initComplete:function(){
                        $('#cont').pleaseWait('stop');
                        $('#tbA').show();
                    },
                    columns:[
                        {data:'nomor_urut'},
                        {data:'nomor_surat'},
                        {data:'tanggal_surat'},
                        {data:'tujuan'},
                        {data:'perihal_surat'},
                        {data:'tembusan'},
                        {data:'menjawab'},
                        {data:'kode_seksi_pembuat'},
                        {data:function(data,type,dataToSet){
                            return '<a style="z-index:0;" class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hpsOut" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        { "width": "5%", "targets": 0 },
                        { "width": "15%", "targets": 1 },
                        { "width": "15%", "targets": 2 },
                        { "width": "5%", "targets": 7},
                        { "width": "5%", "targets": 8},
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '41':
                $('#frmA').show();
                $('#cont').pleaseWait();
                $('#dTbA').show();
                $('#dTbKepK').hide();
                $('#dTbFax').hide();
                $('#dTbBA').hide();
                $('#dTbBB').hide();
                $('#dTbC').hide();
                $('#dTbD').hide();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    fixedHeader: true,
                    ajax:"{{ url('data/lhip') }}",
                    initComplete:function(){
                        $('#cont').pleaseWait('stop');
                        $('#tbA').show();
                    },
                    columns:[
                        {data:'nomor_urut'},
                        {data:'nomor_surat'},
                        {data:'tanggal_surat'},
                        {data:'tujuan'},
                        {data:'perihal_surat'},
                        {data:'tembusan'},
                        {data:'menjawab'},
                        {data:'kode_seksi_pembuat'},
                        {data:function(data,type,dataToSet){
                            return '<a style="z-index:0;" class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hpsOut" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        { "width": "5%", "targets": 0 },
                        { "width": "15%", "targets": 1 },
                        { "width": "15%", "targets": 2 },
                        { "width": "5%", "targets": 7},
                        { "width": "5%", "targets": 8},
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '42':
                $('#frmA').show();
                $('#cont').pleaseWait();
                $('#dTbA').show();
                $('#dTbKepK').hide();
                $('#dTbFax').hide();
                $('#dTbBA').hide();
                $('#dTbBB').hide();
                $('#dTbC').hide();
                $('#dTbD').hide();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    fixedHeader: true,
                    ajax:"{{ url('data/lap_atensi') }}",
                    initComplete:function(){
                        $('#cont').pleaseWait('stop');
                        $('#tbA').show();
                    },
                    columns:[
                        {data:'nomor_urut'},
                        {data:'nomor_surat'},
                        {data:'tanggal_surat'},
                        {data:'tujuan'},
                        {data:'perihal_surat'},
                        {data:'tembusan'},
                        {data:'menjawab'},
                        {data:'kode_seksi_pembuat'},
                        {data:function(data,type,dataToSet){
                            return '<a style="z-index:0;" class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hpsOut" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        { "width": "5%", "targets": 0 },
                        { "width": "15%", "targets": 1 },
                        { "width": "15%", "targets": 2 },
                        { "width": "5%", "targets": 7},
                        { "width": "5%", "targets": 8},
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            default:
                console.log('Tidak Ada ID Surat Terdaftar');
                break;
        }        
    });
    $('#btnResetPilihSurat').click(function(){
        $('#frmA').hide();
        $('#frmKepK').hide();
        $('#frmF').hide();
        $('#frmBA').hide();
        $('#frmBB').hide();
        $('#frmC').hide();
        $('#frmD').hide();

        $('#navTabs').hide();
        $('#contentTabs').hide();

        $('#tbA').hide();
        $('#tbKepK').hide();
        $('#tbFax').hide();
        $('#tbBA').hide();
        $('#tbBB').hide();
        $('#tbC').hide();
        $('#tbD').hide();
        $('#btnResetPilihSurat').hide();
        $('#btnPilihSurat').show();
        $('#jenisSurat').prop('disabled',false);
    });

    $('#btnfrmA').click(function(){
        var data = $('#frmInA').serializeArray();
        var id = $('#jenisSurat').val();
        data.push({name:'jenis_surat',value:id});
        $.ajax({
            url:"{{ url('/post/outbox') }}",
            data:data,
            type:'post',
            dataType:'json',
            cache:false,
            beforeSend:function(){
                $('#cont').pleaseWait();
            },
            success:function(response){
                console.log(response);
                 $.toast({
                    heading: 'Information',
                    text: response.message,
                    position: 'bottom-right',
                    stack: false,
                    showHideTransition: 'slide',
                    icon: response.status,
                    hideAfter: false
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
            },
            complete:function(){
                 {{--  $('#frmInA').trigger('reset');   --}}
                 $('#dTbA').DataTable().ajax.reload(null,false);
                 $('#cont').pleaseWait('stop');
            }
        });
        console.log(data);
    });
    $('#btnKepK').click(function(){
        var data = $('#frmInKepK').serializeArray();
        var id = $('#jenisSurat').val();
        data.push({name:'jenis_surat',value:id});
        $.ajax({
            url:"{{ url('/post/outbox') }}",
            data:data,
            type:'post',
            dataType:'json',
            cache:false,
            beforeSend:function(){
                $('#cont').pleaseWait();
            },
            success:function(response){
                console.log(response);
                 $.toast({
                    heading: 'Information',
                    text: response.message,
                    position: 'bottom-right',
                    stack: false,
                    showHideTransition: 'slide',
                    icon: response.status,
                    hideAfter: false
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
                //TODO
            },
            complete:function(){
                 {{--  $('#frmInKepK').trigger('reset');   --}}
                 $('#dTbKepK').DataTable().ajax.reload(null,false);
                 $('#cont').pleaseWait('stop');
            }
        });
    });
    $('#btnF').click(function(){
        var data = $('#frmInF').serializeArray();
        var id = $('#jenisSurat').val();
        data.push({name:'jenis_surat',value:id});
        $.ajax({
            url:"{{ url('/post/outbox') }}",
            data:data,
            type:'post',
            dataType:'json',
            cache:false,
            beforeSend:function(){
                $('#cont').pleaseWait();
            },
            success:function(response){
                console.log(response);
                 $.toast({
                    heading: 'Information',
                    text: response.message,
                    position: 'bottom-right',
                    stack: false,
                    showHideTransition: 'slide',
                    icon: response.status,
                    hideAfter: false
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
            },
            complete:function(){
                 {{--  $('#frmInF').trigger('reset');   --}}
                 $('#dTbFax').DataTable().ajax.reload(null,false);
                 $('#cont').pleaseWait('stop');
            }
        });
        console.log(data);
    });
    $('#btnfrmBA').click(function(){
        var data = $('#frmInBA').serializeArray();
        var id = $('#jenisSurat').val();
        data.push({name:'jenis_surat',value:id});
        $.ajax({
            url:"{{ url('/post/outbox') }}",
            data:data,
            type:'post',
            dataType:'json',
            cache:false,
            beforeSend:function(){
                $('#cont').pleaseWait();
            },
            success:function(response){
                console.log(response);
                 $.toast({
                    heading: 'Information',
                    text: response.message,
                    position: 'bottom-right',
                    stack: false,
                    showHideTransition: 'slide',
                    icon: response.status,
                    hideAfter: false
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
            },
            complete:function(){
                 {{--  $('#frmInBA').trigger('reset');   --}}
                 $('#dTbBB').DataTable().ajax.reload(null,false);
                 $('#cont').pleaseWait('stop');
            }
        });
        console.log(data);
    });
    $('#btnfrmBB').click(function(){
        var data = $('#frmInBB').serializeArray();
        var id = $('#jenisSurat').val();
        data.push({name:'jenis_surat',value:id});
        $.ajax({
            url:"{{ url('/post/outbox') }}",
            data:data,
            type:'post',
            dataType:'json',
            cache:false,
            beforeSend:function(){
                $('#cont').pleaseWait();
            },
            success:function(response){
                console.log(response);
                 $.toast({
                    heading: 'Information',
                    text: response.message,
                    position: 'bottom-right',
                    stack: false,
                    showHideTransition: 'slide',
                    icon: response.status,
                    hideAfter: false
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
            },
            complete:function(){
                 {{--  $('#frmInBB').trigger('reset');   --}}
                 $('#dTbBA').DataTable().ajax.reload(null,false);
                 $('#cont').pleaseWait('stop');
            }
        });
        console.log(data);
    });
    $('#btnfrmD').click(function(){
        var data = $('#frmInD').serializeArray();
        var id = $('#jenisSurat').val();
        data.push({name:'jenis_surat',value:id});
        $.ajax({
            url:"{{ url('/post/outbox') }}",
            data:data,
            type:'post',
            dataType:'json',
            cache:false,
            beforeSend:function(){
                $('#cont').pleaseWait();
            },
            success:function(response){
                console.log(response);
                 $.toast({
                    heading: 'Information',
                    text: response.message,
                    position: 'bottom-right',
                    stack: false,
                    showHideTransition: 'slide',
                    icon: response.status,
                    hideAfter: false
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
            },
            complete:function(){
                 {{--  $('#frmInD').trigger('reset');   --}}
                 $('#dTbD').DataTable().ajax.reload(null,false);
                 $('#cont').pleaseWait('stop');
            }
        });
        console.log(data);
    });
    $('#btnfrmC').click(function(){
        var data = $('#frmInC').serializeArray();
        var id = $('#jenisSurat').val();
        data.push({name:'jenis_surat',value:id});
        $.ajax({
            url:"{{ url('/post/outbox') }}",
            data:data,
            type:'post',
            dataType:'json',
            cache:false,
            beforeSend:function(){
                $('#cont').pleaseWait();
            },
            success:function(response){
                console.log(response);
                 $.toast({
                    heading: 'Information',
                    text: response.message,
                    position: 'bottom-right',
                    stack: false,
                    showHideTransition: 'slide',
                    icon: response.status,
                    hideAfter: false
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
            },
            complete:function(){
                 {{--  $('#frmInC').trigger('reset');   --}}
                 $('#dTbC').DataTable().ajax.reload(null,false);
                 $('#cont').pleaseWait('stop');
            }
        });
        console.log(data);
    });
});
$(document).on('click','.hpsOut',function(){
    $(this).confirmation('show');
    $(this).on('confirmed.bs.confirmation',function(){
        var id = $(this).attr('data-id');
        var type = $('option:selected','#jenisSurat').attr('data-type');
        $.post("{{ url('/outbox/delete')}}",{
            "_token":"{{ csrf_token() }}",
            "id":id,
            "type":type
        },function(response){
            $.toast({
                heading: 'Information',
                text: response.message,
                position: 'bottom-right',
                stack: false,
                showHideTransition: 'slide',
                icon: response.status
            });
        },"json").done(function(){
            if($('#tbA').css('display')=="block"){
                $('#dTbA').DataTable().ajax.reload(null,false);
            }else if($('#tbKepK').css('display')=="block"){
                $('#dTbKepK').DataTable().ajax.reload(null,false);
            }else if($('#tbFax').css('display')=="block"){
                $('#dTbFax').DataTable().ajax.reload(null,false);
            }else if($('#tbBA').css('display')=="block"){
                $('#dTbBA').DataTable().ajax.reload(null,false);
            }else if($('#tbBB').css('display')=="block"){
                $('#dTbBB').DataTable().ajax.reload(null,false);
            }else if($('#tbC').css('display')=="block"){
                $('#dTbC').DataTable().ajax.reload(null,false);
            }else if($('#tbD').css('display')=="block"){
                $('#dTbD').DataTable().ajax.reload(null,false);
            }
        });
    });
});
</script>
<script>
    jQuery('.dateAutoClose').datepicker({
        autoclose: true,
        todayHighlight: true
    });
</script>
@endsection