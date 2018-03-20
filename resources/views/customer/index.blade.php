@extends('master')
@section('content')
  <div ng-app="myApp" ng-controller="customersCtrl">
  <div class="row">
		<div class="col-md-12">
      <h3 class="text-left">Klienci</h3>
      <input type="text" class="" placeholder="Szukaj klienta ..." ng-model="searchCustomer">
      <a href="" class="btn btn-xs btn-info" ng-click="newShowTr=!newShowTr">
        Nowy <span ng-show="newShowTr" class="glyphicon glyphicon-plus"></span>
        <span ng-show="!newShowTr"class="glyphicon glyphicon-minus"></span>
      </a>
    </div>
  </div>
	<div class="row">
		<div class="col-md-12">
			  <table class="table table-striped">
          <thead>
              <tr>
  							<th ng-click="sortType = 'name'; sortReverse = !sortReverse">
                  Imię
                  <span ng-show="sortType == 'name' && !sortReverse" class="glyphicon glyphicon-sort-by-alphabet"></span>
                  <span ng-show="sortType == 'name' && sortReverse" class="glyphicon glyphicon-sort-by-alphabet-alt"></span>
                </th>
                <th ng-click="sortType = 'surname'; sortReverse = !sortReverse">
                  Nazwisko
                  <span ng-show="sortType == 'surname' && !sortReverse" class="glyphicon glyphicon-sort-by-alphabet"></span>
                  <span ng-show="sortType == 'surname' && sortReverse" class="glyphicon glyphicon-sort-by-alphabet-alt"></span>
                </th>
  							<th ng-click="sortType = 'email'; sortReverse = !sortReverse">
                  e-mail
                  <span ng-show="sortType == 'email' && !sortReverse" class="glyphicon glyphicon-sort-by-alphabet"></span>
                  <span ng-show="sortType == 'email' && sortReverse" class="glyphicon glyphicon-sort-by-alphabet-alt"></span>
                </th>
  							<th ng-click="sortType = 'phone'; sortReverse = !sortReverse">
                  tel.
                  <span ng-show="sortType == 'phone' && !sortReverse" class="glyphicon glyphicon-sort-by-order"></span>
                  <span ng-show="sortType == 'phone' && sortReverse" class="glyphicon glyphicon-sort-by-order-alt"></span>
                </th>
                <th>
                  ---
                </th>
              </tr>
              <tr ng-hide="newShowTr">
                <th>
                  <input ng-model="tokenAdd" type="text" value="{{ csrf_token() }}" hidden>
                  <input ng-model="nameAdd" class="form-control input-sm" type="text" name="" value="">
                </th>
                <th><input ng-model="surnameAdd" class="form-control input-sm" type="text" name="" value=""></th>
                <th><input ng-model="email" class="form-control input-sm" type="email" name="" value=""></th>
                <th><input ng-model="phone" class="form-control input-sm" type="text" name="" value=""></th>
                <th>
                  <button type="button" class="btn btn-xs btn-info">
                    <span class="glyphicon glyphicon-floppy-save"></span>
                  </button>
                  <button type="button" class="btn btn-xs btn-info" onclick="$('#addNewCostomerTr').hide();">
                    <span class="glyphicon glyphicon-remove"></span>
                  </button>
                <th>
              </tr>
         </thead>
         <tbody>
            <tr ng-repeat="x in customers | orderBy:sortType:sortReverse | filter:searchCustomer">
              <td>
  							<% x.name %>
  						</td>
              <td>
  							<% x.surname %>
  						</td>
              <td>
  							<% x.email %>
  						</td>
              <td>
  							<% x.phone %>
  						</td>
            </tr>
         </tbody>
        </table>
    </div>
  </div>
  <script>
    var app = angular.module('myApp', [], function($interpolateProvider){
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    });
    app.controller('customersCtrl', function($scope, $http) {
      $http.get("{{ action('CustomerController@allCustomers') }}")
      .then(function (response) {$scope.customers = response.data;});
      $scope.sortType     = 'name';
      $scope.sortReverse  = false;
      $scope.searchCustomer   = '';

      $scope.newShowTr  = !false;
    });
</script>
</div>
@stop
