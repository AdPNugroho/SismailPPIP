<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SIPAMA Login System</title>
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{ asset('/assets/css/jquery.toast.css') }}"> 

<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.toast.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.pleaseWait.js') }}"></script>
<script type="text/javascript">
$(document).ready(function() {
	$(".username").focus(function() {
		$(".user-icon").css("left","-48px");
	});
	$(".username").blur(function() {
		$(".user-icon").css("left","0px");
	});
	
	$(".password").focus(function() {
		$(".pass-icon").css("left","-48px");
	});
	$(".password").blur(function() {
		$(".pass-icon").css("left","0px");
	});
	$('#doLogin').click(function(){
		var data = $('#formLogin').serialize();
		$.ajax({
			url:"{{ url('auth/login') }}",
			data:data,
			type:'post',
			dataType:'json',
			cache:false,
			beforeSend:function(){
				$('#wrapper').pleaseWait();
			},
			success:function(response){
				$('#wrapper').pleaseWait('stop');
				console.log(response);
				if(response.status=="success"){
					console.log('success');
					$('#doLogin').prop('disabled','true');
				}else if(response.status="error"){
					console.log('error');
					$('#doLogin').removeAttr('disabled');
				}
				$.toast({
                    heading: 'Information',
                    text: response.message,
                    position: 'bottom-right',
                    stack: false,
                    showHideTransition: 'slide',
                    icon: response.status,
					afterHidden:function(){
						if(response.level==1){
							window.location.href = "{{ url('adm') }}";
						}else if(response.level==2){
							window.location.href = "{{ url('sec') }}";
						}else if(response.level==3){
							window.location.href = "{{ url('kasi') }}";
						}
					}
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
                    heading: 'Kesalahan!',
                    text: errorArray,
                    icon: 'error',
                    position: 'bottom-right'
                });
			}
		});
	});
});
</script>
</head>
<body>
<div id="wrapper">
    <div class="user-icon"></div>
    <div class="pass-icon"></div>
    
{!! Form::open(array('url'=>'auth/login','class'=>'login-form','name'=>'login-form','id'=>'formLogin')) !!}    
    <div class="header">
        <h1><center>SIPAMA</center></h1>
        <span><h3>Sistem Informasi Pengelolaan Surat Masuk.<br>&nbsp;</h3></span>
    </div>
    <div class="content">
	    <input name="username" type="text" class="input username" placeholder="Username"  required/>
        <input name="password" type="password" class="input password" placeholder="Password" required/>
    </div>
    <div class="footer">
        <button type="button" class="button" id="doLogin">Login</button>
    </div>
</form>
</div>
<div class="gradient"></div>
</body>
</html>