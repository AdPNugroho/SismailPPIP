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
            <h4 class="page-title">User Control Panel</h4>
            <ol class="breadcrumb p-0 m-0">
                <li>
                    <a href="{{ url('adm/dashboard') }}">Home</a>
                </li>
                <li class="active">
                    User Control Panel
                </li>
            </ol>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-6">
        <div class="card-box">
            <h4 class="header-title m-t-0 m-b-30">Navigasi</h4>
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#inputUser" data-toggle="tab" aria-expanded="true">
                        <span class="visible-xs"><i class="fa fa-home"></i></span>
                        <span class="hidden-xs">Input User</span>
                    </a>
                </li>
                <li class="">
                    <a href="#dataUser" data-toggle="tab" aria-expanded="false">
                        <span class="visible-xs"><i class="fa fa-user"></i></span>
                        <span class="hidden-xs">Data User</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="divContent">
                <div class="tab-pane active" id="inputUser">
                    <div class="row">
                        <div class="col-md-6">
                            {!! Form::open(array('class'=>'form-horizontal','id'=>'formUser')) !!}
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Username</label>
                                <div class="col-sm-9">
                                    <input type="text" name="username" class="form-control" placeholder="Username">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword4" class="col-sm-3 control-label">Password Confirmation</label>
                                <div class="col-sm-9">
                                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword4" class="col-sm-3 control-label">Status</label>
                                <div class="col-sm-9">
                                    <select name="status" class="form-control">
                                        <option value='2'>Sekretaris</option>
                                        <option value='3'>Kasi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group m-b-0">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <a class="btn btn-info waves-effect waves-light" id='simpan_user'>Register</a>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="dataUser">
                    <table id="tableUser" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID Pengguna</th>
                                <th>Username</th>
                                <th>Last Login</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="modalUpdate" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content" id="contentModalUpdate">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Update Data User</h4>
            </div>
            <div class="modal-body">
            {!! Form::open(array('id'=>'formUpdateUser')) !!}
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-1" class="control-label">ID</label>
                            <input type="text" class="form-control" id="id_pengguna" placeholder="ID" name="id_pengguna" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-1" class="control-label">Username</label>
                            <input type="text" class="form-control" id="username_update" placeholder="Username" name="username_update">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="field-3" class="control-label">Password</label>
                            <input type="password" class="form-control" id="field-3" placeholder="Password" name="password_update">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="field-3" class="control-label">Password Confirmation</label>
                            <input type="password" class="form-control" id="field-3" placeholder="Password Confirmation" name="password_update_confirmation">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                            <div class="form-group">
                                <label for="inputPassword4" class="col-sm-3 control-label">Status</label>
                                    <select name="status_update" class="form-control" id='status_update'>
                                        <option value='2'>Sekretaris</option>
                                        <option value='3'>Kasi</option>
                                    </select>
                            </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-info waves-effect waves-light" id="updateUser">Save changes</button>
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

<script src="{{ url('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ url('assets/plugins/datatables/buttons.bootstrap.min.js') }}"></script>
<script src="{{ url('assets/plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ url('assets/plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ url('assets/plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ url('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ url('assets/plugins/datatables/buttons.print.min.js') }}"></script>
<script src="{{ url('assets/plugins/datatables/dataTables.fixedHeader.min.js') }}"></script>
<script src="{{ url('assets/plugins/datatables/dataTables.keyTable.min.js') }}"></script>
<script src="{{ url('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ url('assets/plugins/datatables/responsive.bootstrap.min.js') }}"></script>
<script src="{{ url('assets/plugins/datatables/dataTables.scroller.min.js') }}"></script>
<script src="{{ url('assets/plugins/datatables/dataTables.colVis.js') }}"></script>
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
        loadDt()
    });
    $(document).on('click','#simpan_user',function(){
        var data = $('#formUser').serialize();
        $.ajax({
            url:"{{ url('/adm/user') }}",
            data:data,
            type:'post',
            dataType:'json',
            cache:false,
            beforeSend:function(){
                $('#divContent').pleaseWait();
            },
            success:function(response){
                loadDt()
                $.toast({
                    heading: 'Information',
                    text: response.message,
                    position: 'bottom-right',
                    stack: false,
                    showHideTransition: 'slide',
                    icon: response.status
                });
                $('#formUser').trigger("reset");
                
            },
            error:function(xhr,ajaxOptions,thrownError){
                var error = xhr.responseJSON;
                var no = 0;
                var errorArray = [];
                $.each(error,function(key,value){
                    errorArray[no] = value[0];
                    no++;
                });
                $.toast({
                    heading: 'Kesalahan!',
                    text: errorArray,
                    icon: 'error',
                    position : 'bottom-right'
                });
            },
            complete:function(){
                $('#divContent').pleaseWait('stop');
            }
        });
    });
    $(document).on('click','.deleteUser',function(){
        $(this).confirmation('show');
        $(this).on('confirmed.bs.confirmation',function(){
            var id = $(this).attr('data-id');
            $('#divContent').pleaseWait();
            $.post("{{ url('adm/deleteUser') }}",{
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
                loadDt()
            },"json")
            .done(function(){
                $('#divContent').pleaseWait('stop');
                $('#tableUser').DataTable().ajax.reload(null,false);
            });
        });
    });
    $(document).on('click','.updateUser',function(){
        var id = $(this).attr('data-id');
        $('#divContent').pleaseWait();
        $.post("{{ url('adm/getUser') }}",{
            "_token":"{{ csrf_token() }}",
            "id":id
        },
        function(notice){
            console.log(notice);
            $('#id_pengguna').val(notice.id_pengguna);
            $('#username_update').val(notice.username);
            $('#status_update').val(notice.status);
        },"json")
        .done(function(){
            $('#divContent').pleaseWait('stop');
            $('#modalUpdate').modal('show');
        });
    });
    $(document).on('click','#updateUser',function(){
        var data = $('#formUpdateUser').serialize();
        $.ajax({
            url:"{{ url('adm/updateUser') }}",
            data: data,
            type:'post',
            dataType:'json',
            cache:false,
            beforeSend:function(){
                $('#contentModalUpdate').pleaseWait();
            },
            success:function(response){
                loadDt()
                $.toast({
                    heading: 'Information',
                    text: response.message,
                    position: 'bottom-right',
                    stack: false,
                    showHideTransition: 'slide',
                    icon: response.status
                });
                $('#modalUpdate').modal('hide');
                $('#formUpdateUser').trigger('reset')
            },
            error: function (xhr, ajaxOptions, thrownError) {
                var error = xhr.responseJSON;
                var no = 0;
                var errorArray = [];
                $.each(error,function(key,value){
                    errorArray[no] = value[0];
                    no++;
                });
                $.toast({
                    heading: 'Kesalahan!',
                    text: errorArray,
                    icon: 'error',
                    position : 'bottom-right'
                });
            },
            complete:function(){
                $('#contentModalUpdate').pleaseWait('stop');
            }
        });
    });
    function loadDt(){
        var table = $("#tableUser").DataTable({
            processing:true,
            serverSide:true,
            destroy:true,
            ajax:"{{ url('adm/dataUser')}}",
            columns:[
                {data: 'id_pengguna'},
                {data: 'username'},
                {data: 'last_login'},
                {data: 'status',render:function(data,type,row){
                    if(data=='2'){
                        return '<a class="btn-sm btn-warning">Sekretaris</a>';
                    }else{
                        return '<a class="btn-sm btn-success">Kasi</a>';
                    }
                }},
                {data: 'id_pengguna',render:function(data,type,row){
                    return '<a class="updateUser btn-sm btn-success" data-id='+data+'>Update</a>'+
                            '<a class="deleteUser btn-sm btn-danger" data-title="Hapus User ?" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak" data-toggle="confirmation" data-placement="left"  data-id='+data+'>Delete</a>';
                }}
            ]
        });
    }
</script>
@endsection