 angular.module('userForm', [])
    .controller('UserController', ['$scope', function($scope) {
      $scope.master = {};
      $scope.user.name = "Rohit";
      $scope.update = function(user) {
        $scope.master = angular.copy(user);
      };

      $scope.reset = function() {
        $scope.user = angular.copy($scope.master);
      };

      $scope.reset();
    }]);