<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="{{URL::to('/store')}}" method="post">
	 {{ csrf_field() }}
	 <input type="text" name="name" value="{{ old('name') }}">&nbsp;&nbsp;
	  <input type="text" name="email" value="{{ old('email') }}">&nbsp;&nbsp;
	  <input type="submit" name="button" value="Save">

</form>

</body>
</html>