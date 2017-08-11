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
@section('content')<div class="row">
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
                    <a href="#dataSurat" data-toggle="tab" aria-expanded="false">
                        <span class="visible-xs"><i class="fa fa-user"></i></span>
                        <span class="hidden-xs">Data Surat Keluar</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="contentTabs" hidden>
                <div class="tab-pane active" id="dataSurat">
                    <div class="row">
                        <div class="col-md-12" id="fieldDataSurat">
                            <div id="tbA" hidden>
                                <table id="dTbA" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nomor Surat</th>
                                            <th>Tanggal</th>
                                            <th>Tujuan</th>
                                            <th>Perihal</th>
                                            <th>Tembusan</th>
                                            <th>Sehubungan</th>
                                            <th>Kode Seksi</th>
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
                                            <th>Tanggal</th>
                                            <th>Tujuan</th>
                                            <th>Perihal</th>
                                            <th>Kode Seksi</th>
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
        var token = "{{ csrf_token() }}";
        $('#jenisSurat').prop('disabled',true);
        $('#btnResetPilihSurat').show();
        $('#btnPilihSurat').hide();
        $('#navTabs').show();
        $('#contentTabs').show();
        switch(id){
            case '1':
                console.log('BA.TA');
                $('#cont').pleaseWait();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
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
                        {data:'kode_seksi_pembuat'}
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
                $('#cont').pleaseWait();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
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
                        {data:'kode_seksi_pembuat'}
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
                $('#cont').pleaseWait();
                
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
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
                        {data:'kode_seksi_pembuat'}
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
                $('#cont').pleaseWait();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
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
                        {data:'kode_seksi_pembuat'}
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
                $('#cont').pleaseWait();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
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
                        {data:'kode_seksi_pembuat'}
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
                $('#cont').pleaseWait();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
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
                        {data:'kode_seksi_pembuat'}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '7':
                $('#cont').pleaseWait();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
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
                        {data:'kode_seksi_pembuat'}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '8':
                $('#cont').pleaseWait();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
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
                        {data:'kode_seksi_pembuat'}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '9':
                $('#cont').pleaseWait();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
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
                        {data:'kode_seksi_pembuat'}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '10':
                $('#cont').pleaseWait();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
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
                        {data:'kode_seksi_pembuat'}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '11':
                $('#cont').pleaseWait();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
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
                        {data:'kode_seksi_pembuat'}
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
                $('#cont').pleaseWait();
                
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
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
                        {data:'kode_seksi_pembuat'}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '13': 
                $('#cont').pleaseWait();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
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
                        {data:'kode_seksi_pembuat'}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '14':
                $('#cont').pleaseWait();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
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
                        {data:'kode_seksi_pembuat'}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });   
                break;
            case '15':
                $('#cont').pleaseWait();
                
                var table = $('#dTbFax').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
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
                        {data:'nip_kasi'}
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
                $('#cont').pleaseWait();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
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
                        {data:'kode_seksi_pembuat'}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });   
                break;
            case '17':
                $('#cont').pleaseWait();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
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
                        {data:'kode_seksi_pembuat'}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });   
                break;
            case '18':
                $('#cont').pleaseWait();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
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
                        {data:'kode_seksi_pembuat'}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });   
                break;
            case '19':
                $('#cont').pleaseWait();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
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
                        {data:'kode_seksi_pembuat'}
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
                $('#cont').pleaseWait();
                var table = $('#dTbBA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
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
                        {data:'analis'}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '21':
                $('#cont').pleaseWait();
                var table = $('#dTbBB').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
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
                        {data:'tindak_lanjut'}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '22':
                $('#cont').pleaseWait();
                var table = $('#dTbD').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
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
                        {data:'tindak_lanjut'}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '23':
                $('#cont').pleaseWait();
                var table = $('#dTbBB').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
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
                        {data:'tindak_lanjut'}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '24':
                $('#cont').pleaseWait();
                var table = $('#dTbC').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
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
                        {data:'kesimpulan'}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '25':
                $('#cont').pleaseWait();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
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
                        {data:'kode_seksi_pembuat'}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '26':
                $('#cont').pleaseWait();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
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
                        {data:'kode_seksi_pembuat'}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '27':
                $('#cont').pleaseWait();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
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
                        {data:'kode_seksi_pembuat'}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '28':
                $('#cont').pleaseWait();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
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
                        {data:'kode_seksi_pembuat'}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '29':
                $('#cont').pleaseWait();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
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
                        {data:'kode_seksi_pembuat'}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '30':
                $('#cont').pleaseWait();
                var table = $('#dTbBA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
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
                        {data:'analis'}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '31':
                $('#cont').pleaseWait();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
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
                        {data:'kode_seksi_pembuat'}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '32':
                $('#cont').pleaseWait();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
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
                        {data:'kode_seksi_pembuat'}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '33':
                $('#cont').pleaseWait();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
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
                        {data:'kode_seksi_pembuat'}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '34':
                $('#cont').pleaseWait();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
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
                        {data:'kode_seksi_pembuat'}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '35':
                $('#cont').pleaseWait();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
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
                        {data:'kode_seksi_pembuat'}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '36':
                $('#cont').pleaseWait();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
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
                        {data:'kode_seksi_pembuat'}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '37':
                $('#cont').pleaseWait();
                var table = $('#dTbKepK').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
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
                        {data:'kode_seksi_pembuat'}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '38':
                $('#cont').pleaseWait();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
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
                        {data:'kode_seksi_pembuat'}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '39':
                $('#cont').pleaseWait();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
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
                        {data:'kode_seksi_pembuat'}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '40':
                $('#cont').pleaseWait();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
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
                        {data:'kode_seksi_pembuat'}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '41':
                $('#cont').pleaseWait();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
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
                        {data:'kode_seksi_pembuat'}
                    ],
                    columnDefs:[
                        {className:"noWrapTd",targets:[1]},
                        {className:"noWrapTd",targets:[2]},
                        {className:"noWrapTd",targets:[-1]}
                    ]
                });
                break;
            case '42':
                $('#cont').pleaseWait();
                var table = $('#dTbA').DataTable({
                    processing:true,
                    serverSide:true,
                    destroy:true,
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
                        {data:'kode_seksi_pembuat'}
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
});
</script>
@endsection