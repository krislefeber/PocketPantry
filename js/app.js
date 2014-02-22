'use strict';


// Declare app level module which depends on filters, and services
angular.module('myApp', [
  'ngRoute',
  'myApp.filters',
  'myApp.services',
  'myApp.directives',
  'myApp.controllers',
  'ui.bootstrap',
  'ui.utils'
]).
config(['$routeProvider', function($routeProvider) {
  $routeProvider.when('/locations', {templateUrl: 'partials/locations.html', controller: 'locationsCtrl'});
  $routeProvider.when('/needs', {templateUrl: 'partials/needs.html', controller: 'needsCtrl'});
  $routeProvider.when('/recipe', {templateUrl: 'partials/recipe.html', controller: 'recipeCtrl'});
  $routeProvider.when('/home', {templateUrl: 'partials/home.html', controller: 'homeCtrl'});
  $routeProvider.otherwise({redirectTo: '/home'});
}]);
