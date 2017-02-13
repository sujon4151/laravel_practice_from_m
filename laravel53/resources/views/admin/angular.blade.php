<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<script src="{{URL::to('js/jquery-2.1.4.min.js')}}"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.0/angular.min.js" ></script>
	<script src="{{URL::to('angular/app.js')}}" ></script>
	<script src="{{URL::to('angular/controller.js')}}" ></script>
</head>
<body ng-app="medicinmodule">
	<div class="container">
		<div class="row">
			<div ng-controller="medicincontroller">
				<table border="1px">
					<thead>
						<tr>
							<th>Id</th>
							<th>product</th>
							<th>qty</th>
							<th>price</th>
						</tr>
					</thead>
					<tbody>
						<tr ng-repeat="medicin in allmedicin">
							<td>@{{medicin.id}}</td>
							<td>@{{medicin.product}}</td>
							<td>@{{medicin.qty}}</td>
							<td>@{{medicin.price}}</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</body>
</html>