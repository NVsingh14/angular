<!DOCTYPE html>
<html >
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://code.angularjs.org/1.6.0-rc.0/angular.min.js"></script>
</head>
<body>
<div class="container"  ng-app="myApp" ng-controller="myCtrl">
	<div class="row">
		<h1 class="page-header">Users List</h1>
	</div>

	<div class="row">

	<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th>S.no.</th>
      <th>Name</th>
      <th>Email</th>
      <th>Mobile</th>
      <th>Address</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <tr ng-repeat="x in result">
      <td>{{$index+1}}</td>
      <td>{{x.name | uppercase}}</td>
      <td>{{x.email}}</td>
      <td>{{x.mobile}}</td>
      <td>{{x.address}}</td>
<td>
	<button class="btn btn-primary" ng-click="editData(x.id,x.name,x.email,x.mobile,x.address)">Edit</button>
	<button class="btn btn-danger" ng-click="delete_user(x.id)">Delete</button>

</td>
    </tr>
  </tbody>
</table> 
	</div>
 <form name="form" role="form">
  <input type="hidden" name="uid" ng-model="uid">
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
      <button type="submit" ng-click="update_data()" class="btn btn-primary">Submit</button>
    </div>
    </div>
  </div>
</form>

</div>
<script type="text/javascript" src="js/fetch.js"></script>
</body>
</html>