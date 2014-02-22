'use strict';

/* Controllers */

angular.module('myApp.controllers', []).
  controller('locationsCtrl', ['$scope','cakeService', function($scope, cakeService) {
  	$scope.list = cakeService.cakeIndex("Locations");

  }])
  .controller('needsCtrl', [function() {

  }])
  .controller('homeCtrl', [function() {

  }])
  .controller('recipeCtrl', [function() {

  }]);