navigate.controller('imageCtrl',function($scope){
			$scope.imgFrm = [];
			$scope.files = [];

			$scope.image_upload = function() {
				alert("enter in the section");
				$scope.imgFrm.image = $scope.files[0];

					$http({
						method : 'POST',
						url : 'upload.php',
						processData : false,
						transformRequest : function(data) {
								var formData = new FormData();
								formData.append('image',$scope.imgFrm.image);
								return formData;
						},
						data : $scope.imgFrm,
						headers : 	{
										'Content-Type' : undefined
									}
					}).then(fucntion(data){
						alert(data);
					})
			};

			$scope.uploadedFile = function(element) {
				alert("image show");
				$scope.currentFile = element.files[0];
				var reader = new FileReader();

				reader.onload = function(event) {
					$scope.image_source = event.target.result
					$scope.$apply(function($scope){
						$scope.files = element.files;
					});
				}
				reader.readAsDataURL(element.files[0]);
			}
})