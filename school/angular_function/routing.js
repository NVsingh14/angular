var navigate = angular.module('schoolApp',['ngRoute','ngMessages']);

	navigate.config(['$routeProvider', function($routeProvider){
		$routeProvider
						.when('/welcome',{
							title: 'Welcome',
							templateUrl: 'welcome.html',
							controller: 'welcomeCtrl'
						})
						.when('/login',{
							title: 'Login',
							templateUrl: 'login.html',
							controller: 'loginAuth'
						})
						.when('/signup',{
							title: 'Register',
							templateUrl: 'signup.html',
							controller: 'authCtrl'
						})
						.when('/dashboard',{
							title: 'Dashboard',
							templateUrl: 'dashboard.html',
							controller: 'dashboardCtrl'
						})
						.when('/image_upload',{
							title: 'Image',
							templateUrl: 'image_upload.html',
							controller: 'imageCtrl'
						})
						.otherwise({
							redirectTo: 'welcome'
						});
	}]);