
var app = angular.module('myApp', []);
app.controller('usersCtrl', function($scope, $http) {
   $http.get("https://freewebmentor.com/api/users_mysql.php")
   .then(function (response) {$scope.names = response.data.records;});
});
