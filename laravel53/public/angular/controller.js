app.controller('medicincontroller',function($scope,$http,API_URL){

	//retrive all medicin

	$http.get(API_URL+"/angular")
	.success(function(response){
		$scope.allmedicin=response.data.record;
	});

	//show modal form


	//save 
	// $scope.save=function(modalstat,id){
	// 	var url=API_URL+"/angular";
	// 	if (modalstat==='edit') {
	// 		url+="/"+id;
	// 	}
	// 	$http({
	// 		method:'POST',
	// 		url:url,
	// 		data:$.param($scope.medicin),
	// 		headers:{'Content-Type':'application/x-www-form-urlencoded'}
	// 	}).success(function(response){
	// 		console.log(response);
	// 		location.reload();
	// 	}).error(function(response){
	// 		console.log(response);
	// 		alert("an error occured");
	// 	});
	// }
   



});