<!DOCTYPE html>
<html>
<head>
	<title>Angular form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="https://code.angularjs.org/1.6.0-rc.0/angular.min.js"></script>
</head>
<body>
	<div class="container" ng-app="myApp" ng-controller="myCtrl">
			<form name="form" role="form">
<div class="row">
	<h1 class="page-header">New User Registration</h1> <a href="#!user_list" class="btn btn-primary pull-right">View User List</a>
		<div class="row">
			<span id="errname" style="color: red;"></span>
		<div class="form-group col-md-6">
  			<label class="control-label" for="inputSmall">Name</label>
  			<input class="form-control input-sm" ng-model="name" required="required" type="text"  placeholder="Enter Your Name here" autocomplete="off">
  		
		</div>
		</div>

		<div class="row">
			<span id="erremail" style="color: red;"></span>
		<div class="form-group col-md-6" >
  			<label class="control-label" for="inputSmall">Email Address</label>
  			<input class="form-control input-sm" ng-model="email" required="required" type="text" placeholder="Enter Your Email here" autocomplete="off">
  			
		</div>
		</div>
		<div class="row">
		<span id="errcont" style="color: red;"></span>
		<div class="form-group col-md-6">
  			<label class="control-label" for="inputSmall">Mobile</label>
  			<input class="form-control input-sm" type="text" ng-model="mobile" required="required" ng-maxlength="10" placeholder="Enter Your Mobile Number here" autocomplete="off">
  			
		</div>
		</div>
		<div class="row">
		
		<div class="form-group col-md-6">
  			<label class="control-label" for="inputSmall">address</label>
  			<textarea class="form-control" ng-model="address" required="required"></textarea>
		</div>
		</div>

		<div class="row">
		<div class="form-group col-md-6">
			<button type="submit" ng-click="insertdata()" class="btn btn-primary">Submit</button>
		</div>
		</div>
	</div>
</form>
</div>
<div ng-view></div>
<script type="text/javascript">
	var app = angular.module('myApp', []);
	app.controller('myCtrl',function($scope,$http){
		$scope.insertdata = function() {
			$http.post("data.php", {
				'name':$scope.name,
				'email':$scope.email,
				'mobile':$scope.mobile,
				'address':$scope.address
			}).then(function(response){
				console.log("Data Inserted succusfully");
				alert("inserted");
				$scope.name = null;
				$scope.email = null;
				$scope.mobile = null;
				$scope.address = null;
			},function(error) {
				alert("Sorry could not insered");
				console.log(error);
			});
		}
	});
</script>
</body>
</html>