'use strict';

/* Services */


// Demonstrate how to register services
// In this case it is a simple value service.
angular.module('myApp.services', []).factory('cakeService', function($log, $http) {
    return {
        cakeIndex: function(apiFunction) {
			return $http.get("/PocketPantry/api/" + apiFunction + "/index.json").then(function(data) {
				$log.log(data);
				return data.data.contents.result;
			});
        }
    };
});
