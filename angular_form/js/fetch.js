var app = angular.module('myApp',[]);
app.controller('myCtrl',function($scope,$http){

	$http.get("fetch.php")
		.then(function (response) {$scope.result = response.data;});
		$scope.delete_user = function(id) {
			if(confirm("Are You Sure You Want to Delete?")) {
				$http.post("delete.php",{
					'id':id
				})
				.then(function(data) {
					alert("deleted");
					},function(error) {
				alert("Sorry could not insered");
				console.log(error);

				});
			} //if ends
			else 	{
				alert("error");
						return false;

					} //else ends
		}
$scope.editData =function(id,name,email,mobile,address){
	$scope.uid = id;
	$scope.name = name;
	$scope.email = email;
	$scope.mobile = mobile;
	$scope.address =address;
}
		$scope.update_data = function(){
			if($scope.name==null) {
				alert("Enter Your Name");
			}
			else if($scope.email==null) {
				alert("Enter Your email");
			}
			else if($scope.mobile==null)
			{
				alert("Enter Your Mobile number");
			}
			else if($scope.address==null)
			{
				alert("Enter Your Address");
			}

			else { 
				$http.post("update_userDetail.php",{
					'name':$scope.name,
					'email':$scope.email,
					'mobile':$scope.mobile,
					'address':$scope.address,
					'id':$scope.uid
				})
				.then(function(response){
					alert("updated");
				})
			}
		}

});
