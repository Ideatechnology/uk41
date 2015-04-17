// JavaScript Document

var app = angular.module("app", ["ngTouch", "ui.grid", 'ui.grid.pagination']);
 
app.controller("MainCtrl", ["$scope",'$http', function ($scope,$http) {
 
 
 
	 $scope.gridOptions = {
    paginationPageSizes: [25, 50, 75],
    paginationPageSize: 25,
    columnDefs:  [
         { name: 'kode_ujian' },
         { name: 'lastName'},
         { name: 'Hyperlink',
             cellTemplate:'<div>' +
                       '  <a class="btn btn-default btn-xs" href="http://stackoverflow.com">Click me</a>' +
                       '</div>' }
       ]
  };
 
$http.get('<?php echo site_url("admin/content/ujian/getData");?>')
    .success(function(data) {
      $scope.gridOptions.data = data;
    });


}]);