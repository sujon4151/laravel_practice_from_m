<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="{{URL::to('jquery-ui/external/jquery/jquery.js')}}"></script>
	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
	<form action=""  id="frm">
		 {{ csrf_field() }}
		 <input type="text" id="name" name="name" value="{{ old('name') }}">&nbsp;&nbsp;
		  <input type="text" id="email" name="email" value="{{ old('email') }}">&nbsp;&nbsp;
		  <input type="text" id="dept" name="dept" value="{{ old('dept') }}">&nbsp;&nbsp;
		  <input type="text" id="fname" name="fname" value="{{ old('father_name') }}">&nbsp;&nbsp;
		  <input type="text" id="mname" name="mname" value="{{ old('father_name') }}">&nbsp;&nbsp;
		  <input type="button" id="btnSave" name="button" value="Save">
	</form>

	<div id="data"></div>

	<script type="text/javascript">
		$(document).ready(function(){

			$.ajaxSetup({
				headers:{
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

			$(document).on('click','#btnSave',function(){
					var name=$("#name").val();
					var email=$("#email").val();
					var dept=$("#dept").val();
					var fname=$("#fname").val();
					var mname=$("#mname").val();
					//alert(mname);
				$.ajax({
					
					url:"{{URL::to('/save-personal-info')}}",
					type:"post",
					data:{name:name, email:email, dept:dept, fname:fname, mname:mname},
					async:false,
					success:function(data){
						alert(data);
					}

				});
			});


			


			// $("#frm").submit(function(){
			// 		var name=$("name").val();
			// 		var email=$("email").val();
			// 		var dept=$("dept").val();
			// 		var fname=$("fname").val();
			// 		var mname=$("mname").val();
			// 		$.post('/save-personal-info',{ name:name, email:email, dept:dept, fname:fname, mname:mname },function(data){
			// 				//alert(data);
			// 				console.log(data);
			// 				//$("#data").html(data);
			// 		});
			// });

		});
	</script>
</body>
</html>