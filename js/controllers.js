'use strict';

/* Controllers */

angular.module('myApp.controllers', []).
  controller('locationsCtrl', ['$scope','cakeService', '$log', function($scope, cakeService, $log) {
  	cakeService.cakeIndex("Locations").then(function(data) {
  		$scope.locations = data.data.locationsAll;
  	});


  	$scope.getGroceries = function(location) {
  		location.loading = true;
  		cakeService.cakeView('Locations',location.Location.id).then(function(data) {
			location.groceries = data.data.location.Grocery;
			location.loading = false;
		});
  	}

  }])
  .controller('needsCtrl', [function() {

  }])
  .controller('homeCtrl', [function() {

  }])
  .controller('recipeCtrl', [function() {

  }]);