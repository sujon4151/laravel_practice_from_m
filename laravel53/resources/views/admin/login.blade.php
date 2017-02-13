<?php
if(Session::get('admin_name')!=""){
            return redirect('/date')->send();    
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="{{URL::to('/check-login')}}" method="post">
	{{ csrf_field() }}
<input type="text" name="admin_email">&nbsp;&nbsp;
<input type="text" name="admin_password">&nbsp;&nbsp;
<input type="submit" name="save" value="Login">

</form>

</body>
</html>