navigate.controller('authCtrl', function($scope,$http){
	$scope.url= "register.php";
	$scope.register= function(isValid){
		if(isValid)
		{
			var pass = $scope.password;
			var cpass = $scope.cPass;
			if(pass===cpass)
			{
				$http.post($scope.url, {'name': $scope.name, 'email': $scope.email, 'mobile': $scope.mobile,'password': $scope.password}).
				then(function(response){
					alert("inserted");
					console.log(response);
					$scope.show=true;
					$scope.result="Data Inserted Succesfully";
					$scope.name=null;
					$scope.email=null;
					$scope.mobile=null;
					$scope.password=null;
					$scope.cPass=null;
				})
			}
			else
			{
				alert("Password Do Not Match");
			}
			//return false;
			
		} //end of if
		else {
			alert("form is not valid");
		}
	}
});