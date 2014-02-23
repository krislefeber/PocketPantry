'use strict';

/* Services */


// Demonstrate how to register services
// In this case it is a simple value service.
angular.module('myApp.services', []).factory('cakeService', function($http) {
    return {
        cakeIndex: function(apiFunction) {
			return $http.get("/PocketPantry/api/" + apiFunction + "/index.json");
        },
        cakeView: function(apiFunction, id) {
			return $http.get("/PocketPantry/api/" + apiFunction + "/view/" + id + ".json");
        },
        cakeAdd: function(apiFunction,postData) {
			return $http.post("/PocketPantry/api/" + apiFunction + "/jsonAdd.json", postData);
        }
    };
}).factory('yummlyService',function($log, $http){
	return {
		getRecipes: function(searchParameters) {
			return $http.get("proxy.php?full_headers=0&full_status=0&url=http://api.yummly.com/v1/api/recipes?_app_id=f0ad6796%26_app_key=4cb6b5ae549177393313614ddf016c3f%26requirePictures=true%26maxResult=25%26" + searchParameters);
		},
		getRecipe: function(id) {
			return $http.get("proxy.php?full_headers=0&full_status=0&url=http://api.yummly.com/v1/api/recipe/" + id + "?_app_id=f0ad6796%26_app_key=4cb6b5ae549177393313614ddf016c3f");
		}
	}
});
