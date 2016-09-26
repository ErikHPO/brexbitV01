var app = angular.module('calcbtc', []);

var mbCtrl = function($scope, $http, $resource) {

  $http.get("https://blockchain.info/ticker?cors=true").then(function(response) {
    $scope.blockchain = response.data;
  });

}

app.controller("mbCtrl", ["$scope", "$http", mbCtrl]);
