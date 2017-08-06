@extends('../template') 
@section('css')
<!-- DataTables -->
<link href="{{ url('assets/plugins/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ url('assets/plugins/datatables/buttons.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ url('assets/plugins/datatables/fixedHeader.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ url('assets/plugins/datatables/responsive.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ url('assets/plugins/datatables/scroller.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ url('assets/plugins/datatables/dataTables.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ url('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css"/>

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
                                    <option value="1" data-type="1">BA.TA</option>
                                    <option value="2" data-type="1">TA</option>
                                    <option value="3" data-type="1">S</option>
                                    <option value="4" data-type="1">KET</option>
                                    <option value="5" data-type="1">ND</option>
                                    <option value="6" data-type="1">SPR</option>
                                    <option value="7" data-type="1">NDR</option>
                                    <option value="8" data-type="1">SP</option>
                                    <option value="9" data-type="1">SR</option>
                                    <option value="10" data-type="1">S-RIKSIS</option>
                                    <option value="11" data-type="1">SI</option>
                                    <option value="12" data-type="1">WPJ.14</option>
                                    <option value="13" data-type="1">UND</option>
                                    <option value="14" data-type="1">ST</option>
                                    <option value="15" data-type="3">Fax</option>
                                    <option value="16" data-type="1">LHPPU</option>
                                    <option value="17" data-type="1">LAP</option>
                                    <option value="18" data-type="1">LAT</option>
                                    <option value="19" data-type="1">BA</option>
                                    <option value="20" data-type="2">LII</option>
                                    <option value="21" data-type="2">LAPJU.IDLP</option>
                                    <option value="22" data-type="2">LHPA.IDLP</option>
                                    <option value="23" data-type="2">LIA.IDLP</option>
                                    <option value="24" data-type="2">BA.PEN.IDLP</option>
                                    <option value="25" data-type="1">BA.PEN</option>
                                    <option value="26" data-type="1">PRIN.BP</option>
                                    <option value="27" data-type="1">SPPBP.P</option>
                                    <option value="28" data-type="1">SPEMB.BP</option>
                                    <option value="29" data-type="1">PEMB.BP</option>
                                    <option value="30" data-type="2">LAPJU.Penyidikan</option>
                                    <option value="31" data-type="1">LK.DIK</option>
                                    <option value="32" data-type="1">PRIN.DIK</option>
                                    <option value="33" data-type="1">LHPS</option>
                                    <option value="34" data-type="1">PANG.BP</option>
                                    <option value="35" data-type="1">LPBP</option>
                                    <option value="36" data-type="1">DUPAK</option>
                                    <option value="37" data-type="1">KEPKakanwil</option>
                                    <option value="38" data-type="1">PRIN.MAT</option>
                                    <option value="39" data-type="1">INS.MAT</option>
                                    <option value="40" data-type="1">LAP.MAT</option>
                                    <option value="41" data-type="1">LHIP</option>
                                    <option value="42" data-type="1">LAP.ATENSI</option>
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
                    <div class="row" id="FormInputOutboxFirst" hidden>
                        <div class="col-md-6">
                            {!! Form::open(array('class'=>'form-horizontal','role'=>'form','id'=>'FormOutboxFirst')) !!}
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
                                        <button type="button" class="btn btn-success waves-effect w-md waves-light m-b-5" id="btnFormInputOutboxFirst">Simpan</button>
	                                </div>
	                            </div>
                            </form>
                        </div>
                    </div>

                    <div class="row" id="FormInputOutboxFirstKEPKakanwil" hidden>
                        <div class="col-md-6">
                            {!! Form::open(array('class'=>'form-horizontal','role'=>'form','id'=>'FormOutboxFirstKEPKakanwil')) !!}
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
                                        <button type="button" class="btn btn-success waves-effect w-md waves-light m-b-5" id="btnFormInputOutboxFirstKEPKakanwil">Simpan</button>
	                                </div>
	                            </div>
                            </form>
                        </div>
                    </div>

                    <div class="row" id="FormInputOutboxFax" hidden>
                        <div class="col-md-6">
                            {!! Form::open(array('class'=>'form-horizontal','role'=>'form','id'=>'FormOutboxFax')) !!}
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
                                        <button type="button" class="btn btn-success waves-effect w-md waves-light m-b-5" id="btnFormInputOutboxFax">Simpan</button>
	                                </div>
	                            </div>
                            </form>
                        </div>
                    </div>

                    <div class="row" id="FormInputOutboxSecond" hidden>
                        <div class="col-md-6">
                            {!! Form::open(array('class'=>'form-horizontal','role'=>'form','id'=>'FormOutboxSecond')) !!}
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
                                        <button type="button" class="btn btn-success waves-effect w-md waves-light m-b-5" id="btnFormInputOutboxSecond">Simpan</button>
	                                </div>
	                            </div>
                            </form>
                        </div>
                    </div>

                    <div class="row" id="FormInputOutboxSecondB" hidden>
                        <div class="col-md-6">
                            {!! Form::open(array('class'=>'form-horizontal','role'=>'form','id'=>'FormOutboxSecondB')) !!}
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
                                        <button type="button" class="btn btn-success waves-effect w-md waves-light m-b-5" id="btnFormInputOutboxSecondB">Simpan</button>
	                                </div>
	                            </div>
                            </form>
                        </div>
                    </div>

                    <div class="row" id="FormInputOutboxSecondBaPenIDLP" hidden>
                        <div class="col-md-6">
                            {!! Form::open(array('class'=>'form-horizontal','role'=>'form','id'=>'FormOutboxSecondBaPenIDLP')) !!}
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
                                        <button type="button" class="btn btn-success waves-effect w-md waves-light m-b-5" id="btnFormInputOutboxSecondBaPenIDLP">Simpan</button>
	                                </div>
	                            </div>
                            </form>
                        </div>
                    </div>

                    <div class="row" id="FormInputOutboxSecondLhpaIDLP" hidden>
                        <div class="col-md-6">
                            {!! Form::open(array('class'=>'form-horizontal','role'=>'form','id'=>'FormOutboxSecondLhpaIDLP')) !!}
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
                                        <button type="button" class="btn btn-success waves-effect w-md waves-light m-b-5" id="btnFormInputOutboxSecondLhpaIDLP">Simpan</button>
	                                </div>
	                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="dataSurat">
                    <div class="row">
                        <div class="col-md-12" id="fieldDataSurat">

                            <div id="divTableDataOutboxFirst" hidden>
                                <table id="tableDataOutboxFirst" class="table table-striped table-bordered table-hover">
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

                            <div id="divTableDataOutboxKEPKakanwil" hidden>
                                <table id="tableDataOutboxKEPKakanwil" class="table table-striped table-bordered table-hover">
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

                            <div id="divTableDataOutboxFax" hidden>
                                <table id="tableDataOutboxFax" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Tanggal Berita</th>
                                            <th>Tujuan</th>
                                            <th>Jumlah Hal</th>
                                            <th>Tanggal Kirim</th>
                                            <th>Hal</th>
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

                            <div id="divTableDataOutboxSecond-A" hidden>
                                <table id="tableDataOutboxSecond-A" class="table table-striped table-bordered table-hover">
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

                            <div id="divTableDataOutboxSecond-B" hidden>
                                <table id="tableDataOutboxSecond-B" class="table table-striped table-bordered table-hover">
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

                            <div id="divTableDataOutboxSecondBaPenIDLP" hidden>
                                <table id="tableDataOutboxSecondBaPenIDLP" class="table table-striped table-bordered table-hover">
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

                            <div id="divTableDataOutboxSecondLhpaIDLP" hidden>
                                <table id="tableDataOutboxSecondLhpaIDLP" class="table table-striped table-bordered table-hover">
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
<script src="{{ url('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ url('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ url('assets/plugins/datatables/responsive.bootstrap.min.js') }}"></script>

<!-- App js -->
<script src="{{ url('assets/js/jquery.core.js') }}"></script>
<script src="{{ url('assets/js/jquery.app.js') }}"></script>

<script src="{{ asset('assets/js/jquery.pleaseWait.js') }}"></script>
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
                $('#FormInputOutboxFirst').show();
                $('#containerContent').pleaseWait();
                var table = $('#tableDataOutboxFirst').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    ajax:"{{ url('data/ba_ta') }}",
                    initComplete:function(){
                        $('#containerContent').pleaseWait('stop');
                        $('#divTableDataOutboxFirst').show();
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
                            return '<a class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hapusOutbox" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '2':
                console.log('TA'); 
                $('#FormInputOutboxFirst').show();
                $('#containerContent').pleaseWait();
                
                var table = $('#tableDataOutboxFirst').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    ajax:"{{ url('data/ta') }}",
                    initComplete:function(){
                        $('#containerContent').pleaseWait('stop');
                        $('#divTableDataOutboxFirst').show();
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
                            return '<a class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hapusOutbox" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '3':
                console.log('S');
                $('#FormInputOutboxFirst').show();
                $('#containerContent').pleaseWait();
                
                var table = $('#tableDataOutboxFirst').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    ajax:"{{ url('data/s') }}",
                    initComplete:function(){
                        $('#containerContent').pleaseWait('stop');
                        $('#divTableDataOutboxFirst').show();
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
                            return '<a class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hapusOutbox" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '4':
                console.log('KET');
                $('#FormInputOutboxFirst').show();
                $('#containerContent').pleaseWait();
                
                var table = $('#tableDataOutboxFirst').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    ajax:"{{ url('data/ket') }}",
                    initComplete:function(){
                        $('#containerContent').pleaseWait('stop');
                        $('#divTableDataOutboxFirst').show();
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
                            return '<a class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hapusOutbox" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '5':
                console.log('ND');
                $('#FormInputOutboxFirst').show();
                $('#containerContent').pleaseWait();
                
                var table = $('#tableDataOutboxFirst').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    ajax:"{{ url('data/nd') }}",
                    initComplete:function(){
                        $('#containerContent').pleaseWait('stop');
                        $('#divTableDataOutboxFirst').show();
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
                            return '<a class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hapusOutbox" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                //TODO SAMPAI SINI
                break;
            case '6':
                console.log('SPR');
                $('#FormInputOutboxFirst').show();
                $('#containerContent').pleaseWait();
                
                var table = $('#tableDataOutboxFirst').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    ajax:"{{ url('data/spr') }}",
                    initComplete:function(){
                        $('#containerContent').pleaseWait('stop');
                        $('#divTableDataOutboxFirst').show();
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
                            return '<a class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hapusOutbox" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '7':
                $('#FormInputOutboxFirst').show();
                $('#containerContent').pleaseWait();
                
                var table = $('#tableDataOutboxFirst').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    ajax:"{{ url('data/ndr') }}",
                    initComplete:function(){
                        $('#containerContent').pleaseWait('stop');
                        $('#divTableDataOutboxFirst').show();
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
                            return '<a class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hapusOutbox" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '8':
                $('#FormInputOutboxFirst').show();
                $('#containerContent').pleaseWait();
                
                var table = $('#tableDataOutboxFirst').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    ajax:"{{ url('data/sp') }}",
                    initComplete:function(){
                        $('#containerContent').pleaseWait('stop');
                        $('#divTableDataOutboxFirst').show();
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
                            return '<a class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hapusOutbox" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '9':
                $('#FormInputOutboxFirst').show();
                $('#containerContent').pleaseWait();
                
                var table = $('#tableDataOutboxFirst').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    ajax:"{{ url('data/sr') }}",
                    initComplete:function(){
                        $('#containerContent').pleaseWait('stop');
                        $('#divTableDataOutboxFirst').show();
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
                            return '<a class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hapusOutbox" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '10':
                $('#FormInputOutboxFirst').show();
                $('#containerContent').pleaseWait();
                
                var table = $('#tableDataOutboxFirst').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    ajax:"{{ url('data/s_riksis') }}",
                    initComplete:function(){
                        $('#containerContent').pleaseWait('stop');
                        $('#divTableDataOutboxFirst').show();
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
                            return '<a class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hapusOutbox" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '11':
                $('#FormInputOutboxFirst').show();
                $('#containerContent').pleaseWait();
                
                var table = $('#tableDataOutboxFirst').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    ajax:"{{ url('data/si') }}",
                    initComplete:function(){
                        $('#containerContent').pleaseWait('stop');
                        $('#divTableDataOutboxFirst').show();
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
                            return '<a class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hapusOutbox" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
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
                $('#FormInputOutboxFirst').show();
                $('#containerContent').pleaseWait();
                
                var table = $('#tableDataOutboxFirst').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    ajax:"{{ url('data/wpj') }}",
                    initComplete:function(){
                        $('#containerContent').pleaseWait('stop');
                        $('#divTableDataOutboxFirst').show();
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
                            return '<a class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hapusOutbox" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '13': 
                $('#FormInputOutboxFirst').show();
                $('#containerContent').pleaseWait();
                
                var table = $('#tableDataOutboxFirst').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    ajax:"{{ url('data/und') }}",
                    initComplete:function(){
                        $('#containerContent').pleaseWait('stop');
                        $('#divTableDataOutboxFirst').show();
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
                            return '<a class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hapusOutbox" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '14':
                $('#FormInputOutboxFirst').show();
                $('#containerContent').pleaseWait();
                
                var table = $('#tableDataOutboxFirst').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    ajax:"{{ url('data/st') }}",
                    initComplete:function(){
                        $('#containerContent').pleaseWait('stop');
                        $('#divTableDataOutboxFirst').show();
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
                            return '<a class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hapusOutbox" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });   
                break;
            case '15':
                $('#FormInputOutboxFax').show();
                $('#containerContent').pleaseWait();
                
                var table = $('#tableDataOutboxFax').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    ajax:"{{ url('data/fax') }}",
                    initComplete:function(){
                        $('#containerContent').pleaseWait('stop');
                        $('#divTableDataOutboxFax').show();
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
                            return '<a class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hapusOutbox" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[0]},
                        {className:"noWrapTd",targets:[3]},
                        {className:"noWrapTd",targets:[8]},
                        {className:"noWrapTd",targets:[-1]},
                    ]
                });   
                break;
            case '16':
                $('#FormInputOutboxFirst').show();
                $('#containerContent').pleaseWait();
                
                var table = $('#tableDataOutboxFirst').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    ajax:"{{ url('data/lhppu') }}",
                    initComplete:function(){
                        $('#containerContent').pleaseWait('stop');
                        $('#divTableDataOutboxFirst').show();
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
                            return '<a class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hapusOutbox" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });   
                break;
            case '17':
                $('#FormInputOutboxFirst').show();
                $('#containerContent').pleaseWait();
                
                var table = $('#tableDataOutboxFirst').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    ajax:"{{ url('data/lap') }}",
                    initComplete:function(){
                        $('#containerContent').pleaseWait('stop');
                        $('#divTableDataOutboxFirst').show();
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
                            return '<a class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hapusOutbox" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });   
                break;
            case '18':
                $('#FormInputOutboxFirst').show();
                $('#containerContent').pleaseWait();
                
                var table = $('#tableDataOutboxFirst').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    ajax:"{{ url('data/lat') }}",
                    initComplete:function(){
                        $('#containerContent').pleaseWait('stop');
                        $('#divTableDataOutboxFirst').show();
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
                            return '<a class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hapusOutbox" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });   
                break;
            case '19':
                $('#FormInputOutboxFirst').show();
                $('#containerContent').pleaseWait();
                
                var table = $('#tableDataOutboxFirst').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    ajax:"{{ url('data/ba') }}",
                    initComplete:function(){
                        $('#containerContent').pleaseWait('stop');
                        $('#divTableDataOutboxFirst').show();
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
                            return '<a class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hapusOutbox" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '20':
                //TODO CHECK LII IDLP
                $('#FormInputOutboxSecondB').show();
                $('#containerContent').pleaseWait();

                var table = $('#tableDataOutboxSecond-A').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    ajax:"{{ url('data/lii') }}",
                    initComplete:function(){
                        $('#containerContent').pleaseWait('stop');
                        $('#divTableDataOutboxSecond-A').show();
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
                            return '<a class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hapusOutbox" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '21':
                $('#FormInputOutboxSecond').show();
                $('#containerContent').pleaseWait();

                var table = $('#tableDataOutboxSecond-B').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    ajax:"{{ url('data/lapju_idlp') }}",
                    initComplete:function(){
                        $('#containerContent').pleaseWait('stop');
                        $('#divTableDataOutboxSecond-B').show();
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
                            return '<a class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hapusOutbox" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '22':
                $('#FormInputOutboxSecondLhpaIDLP').show();
                $('#containerContent').pleaseWait();

                var table = $('#tableDataOutboxSecondLhpaIDLP').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    ajax:"{{ url('data/lhpa_idlp') }}",
                    initComplete:function(){
                        $('#containerContent').pleaseWait('stop');
                        $('#divTableDataOutboxSecondLhpaIDLP').show();
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
                            return '<a class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hapusOutbox" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '23':
                $('#FormInputOutboxSecond').show();
                $('#containerContent').pleaseWait();
                
                var table = $('#tableDataOutboxSecond-B').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    ajax:"{{ url('data/lia_idlp') }}",
                    initComplete:function(){
                        $('#containerContent').pleaseWait('stop');
                        $('#divTableDataOutboxSecond-B').show();
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
                            return '<a class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hapusOutbox" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '24':
                $('#FormInputOutboxSecondBaPenIDLP').show();
                $('#containerContent').pleaseWait();
                
                var table = $('#tableDataOutboxSecondBaPenIDLP').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    ajax:"{{ url('data/ba_pen_idlp') }}",
                    initComplete:function(){
                        $('#containerContent').pleaseWait('stop');
                        $('#divTableDataOutboxSecondBaPenIDLP').show();
                    },
                    columns:[
                        {data:'nomor_urut'},
                        {data:'nomor_surat'},
                        {data:'tanggal'},
                        {data:'perihal_surat'},
                        {data:'tahun_pajak'},
                        {data:'kesimpulan'},
                        {data:function(data,type,dataToSet){
                            return '<a class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hapusOutbox" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '25':
            //BA.PEN
                $('#FormInputOutboxFirst').show();
                $('#containerContent').pleaseWait();

                var table = $('#tableDataOutboxFirst').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    ajax:"{{ url('data/ba_pen') }}",
                    initComplete:function(){
                        $('#containerContent').pleaseWait('stop');
                        $('#divTableDataOutboxFirst').show();
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
                            return '<a class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hapusOutbox" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '26':
            //PRIN.BP
                $('#FormInputOutboxFirst').show();
                $('#containerContent').pleaseWait();

                var table = $('#tableDataOutboxFirst').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    ajax:"{{ url('data/print_bp') }}",
                    initComplete:function(){
                        $('#containerContent').pleaseWait('stop');
                        $('#divTableDataOutboxFirst').show();
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
                            return '<a class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hapusOutbox" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '27':
                $('#FormInputOutboxFirst').show();
                $('#containerContent').pleaseWait();

                var table = $('#tableDataOutboxFirst').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    ajax:"{{ url('data/sppbp_p') }}",
                    initComplete:function(){
                        $('#containerContent').pleaseWait('stop');
                        $('#divTableDataOutboxFirst').show();
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
                            return '<a class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hapusOutbox" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '28':
                $('#FormInputOutboxFirst').show();
                $('#containerContent').pleaseWait();

                var table = $('#tableDataOutboxFirst').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    ajax:"{{ url('data/spemb_bp') }}",
                    initComplete:function(){
                        $('#containerContent').pleaseWait('stop');
                        $('#divTableDataOutboxFirst').show();
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
                            return '<a class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hapusOutbox" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '29':
                $('#FormInputOutboxFirst').show();
                $('#containerContent').pleaseWait();

                var table = $('#tableDataOutboxFirst').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    ajax:"{{ url('data/pemb_bp') }}",
                    initComplete:function(){
                        $('#containerContent').pleaseWait('stop');
                        $('#divTableDataOutboxFirst').show();
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
                            return '<a class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hapusOutbox" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '30':
            //LAPJU.Penyidikan
                $('#FormInputOutboxSecondB').show();
                $('#containerContent').pleaseWait();

                var table = $('#tableDataOutboxSecond-A').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    ajax:"{{ url('data/lapju_penyidikan') }}",
                    initComplete:function(){
                        $('#containerContent').pleaseWait('stop');
                        $('#divTableDataOutboxSecond-A').show();
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
                            return '<a class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hapusOutbox" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '31':
            //LK.DIK
                $('#FormInputOutboxFirst').show();
                $('#containerContent').pleaseWait();

                var table = $('#tableDataOutboxFirst').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    ajax:"{{ url('data/lk_dik') }}",
                    initComplete:function(){
                        $('#containerContent').pleaseWait('stop');
                        $('#divTableDataOutboxFirst').show();
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
                            return '<a class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hapusOutbox" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '32':
            //PRIN.DIK
                $('#FormInputOutboxFirst').show();
                $('#containerContent').pleaseWait();

                var table = $('#tableDataOutboxFirst').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    ajax:"{{ url('data/prin_dik') }}",
                    initComplete:function(){
                        $('#containerContent').pleaseWait('stop');
                        $('#divTableDataOutboxFirst').show();
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
                            return '<a class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hapusOutbox" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '33':
                $('#FormInputOutboxFirst').show();
                $('#containerContent').pleaseWait();

                var table = $('#tableDataOutboxFirst').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    ajax:"{{ url('data/lhps') }}",
                    initComplete:function(){
                        $('#containerContent').pleaseWait('stop');
                        $('#divTableDataOutboxFirst').show();
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
                            return '<a class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hapusOutbox" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '34':
                $('#FormInputOutboxFirst').show();
                $('#containerContent').pleaseWait();

                var table = $('#tableDataOutboxFirst').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    ajax:"{{ url('data/pang_bp') }}",
                    initComplete:function(){
                        $('#containerContent').pleaseWait('stop');
                        $('#divTableDataOutboxFirst').show();
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
                            return '<a class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hapusOutbox" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '35':
                $('#FormInputOutboxFirst').show();
                $('#containerContent').pleaseWait();

                var table = $('#tableDataOutboxFirst').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    ajax:"{{ url('data/lpbp') }}",
                    initComplete:function(){
                        $('#containerContent').pleaseWait('stop');
                        $('#divTableDataOutboxFirst').show();
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
                            return '<a class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hapusOutbox" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '36':
                $('#FormInputOutboxFirst').show();
                $('#containerContent').pleaseWait();

                var table = $('#tableDataOutboxFirst').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    ajax:"{{ url('data/dupak') }}",
                    initComplete:function(){
                        $('#containerContent').pleaseWait('stop');
                        $('#divTableDataOutboxFirst').show();
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
                            return '<a class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hapusOutbox" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '37':
            //KEPKakanwil
                $('#FormInputOutboxFirstKEPKakanwil').show();
                $('#containerContent').pleaseWait();
                var table = $('#tableDataOutboxKEPKakanwil').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    ajax:"{{ url('data/kepkakanwil') }}",
                    initComplete:function(){
                        $('#containerContent').pleaseWait('stop');
                        $('#divTableDataOutboxKEPKakanwil').show();
                    },
                    columns:[
                        {data:'nomor_urut'},
                        {data:'nomor_surat'},
                        {data:'tanggal_surat'},
                        {data:'tujuan'},
                        {data:'perihal_surat'},
                        {data:'kode_seksi_pembuat'},
                        {data:function(data,type,dataToSet){
                            return '<a class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hapusOutbox" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '38':
                $('#FormInputOutboxFirst').show();
                $('#containerContent').pleaseWait();

                var table = $('#tableDataOutboxFirst').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    ajax:"{{ url('data/print_mat') }}",
                    initComplete:function(){
                        $('#containerContent').pleaseWait('stop');
                        $('#divTableDataOutboxFirst').show();
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
                            return '<a class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hapusOutbox" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '39':
                $('#FormInputOutboxFirst').show();
                $('#containerContent').pleaseWait();

                var table = $('#tableDataOutboxFirst').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    ajax:"{{ url('data/ins_mat') }}",
                    initComplete:function(){
                        $('#containerContent').pleaseWait('stop');
                        $('#divTableDataOutboxFirst').show();
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
                            return '<a class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hapusOutbox" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '40':
                $('#FormInputOutboxFirst').show();
                $('#containerContent').pleaseWait();

                var table = $('#tableDataOutboxFirst').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    ajax:"{{ url('data/lap_mat') }}",
                    initComplete:function(){
                        $('#containerContent').pleaseWait('stop');
                        $('#divTableDataOutboxFirst').show();
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
                            return '<a class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hapusOutbox" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '41':
                $('#FormInputOutboxFirst').show();
                $('#containerContent').pleaseWait();

                var table = $('#tableDataOutboxFirst').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    ajax:"{{ url('data/lhip') }}",
                    initComplete:function(){
                        $('#containerContent').pleaseWait('stop');
                        $('#divTableDataOutboxFirst').show();
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
                            return '<a class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hapusOutbox" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '42':
                $('#FormInputOutboxFirst').show();
                $('#containerContent').pleaseWait();

                var table = $('#tableDataOutboxFirst').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
                    ajax:"{{ url('data/lap_atensi') }}",
                    initComplete:function(){
                        $('#containerContent').pleaseWait('stop');
                        $('#divTableDataOutboxFirst').show();
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
                            return '<a class="btn btn-sm btn-icon waves-effect waves-light btn-youtube m-b-5 hapusOutbox" data-id="'+ data.id +'" data-title="Hapus Surat Keluar?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"><i class="fa fa-remove"></i> Hapus</a>';
                        }}
                    ],
                    columnDefs:[
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
        $('#FormInputOutboxFirst').hide();
        $('#FormInputOutboxFirstKEPKakanwil').hide();
        $('#FormInputOutboxFax').hide();
        $('#FormInputOutboxSecond').hide();
        $('#FormInputOutboxSecondB').hide();
        $('#FormInputOutboxSecondBaPenIDLP').hide();
        $('#FormInputOutboxSecondLhpaIDLP').hide();

        $('#navTabs').hide();
        $('#contentTabs').hide();

        $('#divTableDataOutboxFirst').hide();
        $('#divTableDataOutboxKEPKakanwil').hide();
        $('#divTableDataOutboxFax').hide();
        $('#divTableDataOutboxSecond-A').hide();
        $('#divTableDataOutboxSecond-B').hide();
        $('#divTableDataOutboxSecondBaPenIDLP').hide();
        $('#divTableDataOutboxSecondLhpaIDLP').hide();
        $('#btnResetPilihSurat').hide();
        $('#btnPilihSurat').show();
        $('#jenisSurat').prop('disabled',false);
    });

    $('#btnFormInputOutboxFirst').click(function(){
        var data = $('#FormOutboxFirst').serializeArray();
        var id = $('#jenisSurat').val();
        data.push({name:'jenis_surat',value:id});
        $.ajax({
            url:"{{ url('/post/outbox') }}",
            data:data,
            type:'post',
            dataType:'json',
            cache:false,
            beforeSend:function(){
                $('#containerContent').pleaseWait();
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
                 {{--  $('#FormOutboxFirst').trigger('reset');   --}}
                 $('#tableDataOutboxFirst').DataTable().ajax.reload(null,false);
                 $('#containerContent').pleaseWait('stop');
            }
        });
        console.log(data);
    });
    $('#btnFormInputOutboxFirstKEPKakanwil').click(function(){
        var data = $('#FormOutboxFirstKEPKakanwil').serializeArray();
        var id = $('#jenisSurat').val();
        data.push({name:'jenis_surat',value:id});
        $.ajax({
            url:"{{ url('/post/outbox') }}",
            data:data,
            type:'post',
            dataType:'json',
            cache:false,
            beforeSend:function(){
                $('#containerContent').pleaseWait();
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
                 {{--  $('#FormOutboxFirstKEPKakanwil').trigger('reset');   --}}
                 $('#tableDataOutboxKEPKakanwil').DataTable().ajax.reload(null,false);
                 $('#containerContent').pleaseWait('stop');
            }
        });
    });
    $('#btnFormInputOutboxFax').click(function(){
        var data = $('#FormOutboxFax').serializeArray();
        var id = $('#jenisSurat').val();
        data.push({name:'jenis_surat',value:id});
        $.ajax({
            url:"{{ url('/post/outbox') }}",
            data:data,
            type:'post',
            dataType:'json',
            cache:false,
            beforeSend:function(){
                $('#containerContent').pleaseWait();
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
                 {{--  $('#FormOutboxFax').trigger('reset');   --}}
                 $('#tableDataOutboxFax').DataTable().ajax.reload(null,false);
                 $('#containerContent').pleaseWait('stop');
            }
        });
        console.log(data);
    });
    $('#btnFormInputOutboxSecond').click(function(){
        var data = $('#FormOutboxSecond').serializeArray();
        var id = $('#jenisSurat').val();
        data.push({name:'jenis_surat',value:id});
        $.ajax({
            url:"{{ url('/post/outbox') }}",
            data:data,
            type:'post',
            dataType:'json',
            cache:false,
            beforeSend:function(){
                $('#containerContent').pleaseWait();
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
                 {{--  $('#FormOutboxSecond').trigger('reset');   --}}
                 $('#tableDataOutboxSecond-B').DataTable().ajax.reload(null,false);
                 $('#containerContent').pleaseWait('stop');
            }
        });
        console.log(data);
    });
    $('#btnFormInputOutboxSecondB').click(function(){
        var data = $('#FormOutboxSecondB').serializeArray();
        var id = $('#jenisSurat').val();
        data.push({name:'jenis_surat',value:id});
        $.ajax({
            url:"{{ url('/post/outbox') }}",
            data:data,
            type:'post',
            dataType:'json',
            cache:false,
            beforeSend:function(){
                $('#containerContent').pleaseWait();
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
                 {{--  $('#FormOutboxSecondB').trigger('reset');   --}}
                 $('#tableDataOutboxSecond-A').DataTable().ajax.reload(null,false);
                 $('#containerContent').pleaseWait('stop');
            }
        });
        console.log(data);
    });
    $('#btnFormInputOutboxSecondLhpaIDLP').click(function(){
        var data = $('#FormOutboxSecondLhpaIDLP').serializeArray();
        var id = $('#jenisSurat').val();
        data.push({name:'jenis_surat',value:id});
        $.ajax({
            url:"{{ url('/post/outbox') }}",
            data:data,
            type:'post',
            dataType:'json',
            cache:false,
            beforeSend:function(){
                $('#containerContent').pleaseWait();
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
                 {{--  $('#FormOutboxSecondLhpaIDLP').trigger('reset');   --}}
                 $('#tableDataOutboxSecondLhpaIDLP').DataTable().ajax.reload(null,false);
                 $('#containerContent').pleaseWait('stop');
            }
        });
        console.log(data);
    });
    $('#btnFormInputOutboxSecondBaPenIDLP').click(function(){
        var data = $('#FormOutboxSecondBaPenIDLP').serializeArray();
        var id = $('#jenisSurat').val();
        data.push({name:'jenis_surat',value:id});
        $.ajax({
            url:"{{ url('/post/outbox') }}",
            data:data,
            type:'post',
            dataType:'json',
            cache:false,
            beforeSend:function(){
                $('#containerContent').pleaseWait();
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
                 {{--  $('#FormOutboxSecondBaPenIDLP').trigger('reset');   --}}
                 $('#tableDataOutboxSecondBaPenIDLP').DataTable().ajax.reload(null,false);
                 $('#containerContent').pleaseWait('stop');
            }
        });
        console.log(data);
    });
});
$(document).on('click','.detailOutbox',function(){
    var id = $(this).attr('data-id');
    var type = $('option:selected','#jenisSurat').attr('data-type');
    if(type=="1"){
        $.post("{{ url('') }}");
    }else if(type=="2"){

    }else if(type=="3"){

    }
    console.log(id);
});
$(document).on('click','.hapusOutbox',function(){
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
            if($('#divTableDataOutboxFirst').css('display')=="block"){
                $('#tableDataOutboxFirst').DataTable().ajax.reload(null,false);
            }else if($('#divTableDataOutboxKEPKakanwil').css('display')=="block"){
                $('#tableDataOutboxKEPKakanwil').DataTable().ajax.reload(null,false);
            }else if($('#divTableDataOutboxFax').css('display')=="block"){
                $('#tableDataOutboxFax').DataTable().ajax.reload(null,false);
            }else if($('#divTableDataOutboxSecond-A').css('display')=="block"){
                $('#tableDataOutboxSecond-A').DataTable().ajax.reload(null,false);
            }else if($('#divTableDataOutboxSecond-B').css('display')=="block"){
                $('#tableDataOutboxSecond-B').DataTable().ajax.reload(null,false);
            }else if($('#divTableDataOutboxSecondBaPenIDLP').css('display')=="block"){
                $('#tableDataOutboxSecondBaPenIDLP').DataTable().ajax.reload(null,false);
            }else if($('#divTableDataOutboxSecondLhpaIDLP').css('display')=="block"){
                $('#tableDataOutboxSecondLhpaIDLP').DataTable().ajax.reload(null,false);
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