'use strict';

/* Controllers */

angular.module('myApp.controllers', []).
  controller('locationsCtrl', ['$scope','cakeService', '$log', function($scope, cakeService, $log) {
  	cakeService.cakeIndex("Locations").then(function(data) {
  		$scope.locations = data.data.locationsAll;
  	}).then(function(){
  		angular.forEach($scope.locations, function(value,key){
  			value.loading = false;
  			value.hide = true;
  		});
  	});
  	cakeService.cakeIndex("Units").then(function(data) {
  		$scope.units = data.data.unitsAll;
  	});	


  	$scope.getGroceries = function(location) {
  		if (location.groceries === undefined) {
	  		location.loading = true;
			cakeService.cakeView('Locations',location.Location.id).then(function(data) {
				location.groceries = data.data.location.Grocery;
				location.loading = false;
				location.hide = false;
			});
		} else {
			location.hide = !location.hide
		}
  	}

  	$scope.removeGrocery = function(grocery,location) {
  		cakeService.cakeDelete('Groceries',grocery.id).then(function(data) {
  			if (data.data.status.status == "Success") {
				var idx = location.groceries.indexOf(grocery);
				location.groceries.splice(idx,1)
  			}
  		});
  	}

  	$scope.addItem = function(item,location) {
  		cakeService.cakeAdd('Groceries',{name:item.name,qty:item.qty,location_id:location.Location.id,unit_id:item.unit.Unit.id}).then(function(data) {
  			if (data.data.status.status == "Success") {
  				location.groceries.splice(0,0,{"id":data.data.status.id,"name":item.name,"qty":item.qty,"Unit":{"abbreviation":item.unit.Unit.abbreviation}});
  				item.name = '';
  				item.qty = '';
  				item.unit = '';
  				$("#itemName").focus();
  			}
  		});
  	}

  }])
  .controller('needsCtrl', [function() {

  }])
  .controller('homeCtrl', [function() {

  }])
  .controller('recipeCtrl', ['$scope','yummlyService', '$log', function($scope, yummlyService, $log) {
	yummlyService.getRecipes("allowedIngredient[]=garlic").then(function(data){
		$scope.recipes = data.data.contents.matches;
		angular.forEach($scope.recipes, function(value,key){
  			value.hide = true;
  		});
	});

	$scope.showDetails = function(recipe) {
		recipe.hide = !recipe.hide;
		if (recipe.info === undefined) {
			yummlyService.getRecipe(recipe.id).then(function(data){
				recipe.info = data.data.contents;
			});
		}
	}
  }]);