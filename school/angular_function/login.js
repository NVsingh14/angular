navigate.controller('loginAuth', function($scope,$http){

		$scope.logme = function(isValid)
		{
			if(isValid)
			{
				$http.post('login_submit.php',{'email':$scope.username,'password':$scope.password}).
				then(function(response){
					console.log(response);
					alert("logged in");
					$scope.username=null;
					$scope.password=null;
				})
			} //end of if
		} //end of $scope.logme

});