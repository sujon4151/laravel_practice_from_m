<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="{{URL::to('jquery-ui/jquery-ui.css')}}">
	<meta name="csrf_token" content="{{ csrf_token() }}" />
	<script src="{{URL::to('jquery-ui/external/jquery/jquery.js')}}"></script>
	<script src="{{URL::to('jquery-ui/jquery-ui.js')}}"></script>
</head>
<body>
		<input type="text" id="datepicker" name="date">&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="{{URL::to('/logout')}}">Logout</a>
		<script type="text/javascript">
			// $( function() {
   //  			$( "#datepicker" ).datepicker();
  	// 		} );


  			var disabledDays = ["11-21-2016", "11-24-2016", "11-27-2016", "11-28-2016", "11-3-2016", "11-17-2016", "11-2-2016", "11-3-2016", "11-4-2016", "11-5-2010"];
				function disableAllTheseDays(date) {
				    var m = date.getMonth(), d = date.getDate(), y = date.getFullYear();
				    for (i = 0; i < disabledDays.length; i++) {
				        if($.inArray((m+1) + '-' + d + '-' + y,disabledDays) != -1) {
				            return [false];
				        }
				    }
				    return [true];
				}

				$('#datepicker').datepicker({
			        dateFormat: 'mm-dd-yy',
			        beforeShowDay: disableAllTheseDays
				});

			$(document).ready(function(){
				alert("Hellow");
			});
		</script>
</body>
</html>