// Creación del módulo
var app = angular.module('pagina', ['ngRoute']);

// Configuración de las rutas
app.config(function($routeProvider){
  $routeProvider
    .when('/',{
      templateUrl: 'localhost/pagina/proyectos.php',
      controller: 'mainController'
    })
    .when('/buscar', {
        templateUrl : 'localhost/pagina/buscar.php',
        controller: 'mainController'
    })
    .when('/phpinfo', {
        templateUrl : 'localhost/pagina/info.php',
        controller: 'mainController'
    })
  
    .otherwise({
        redirectTo: '/'
    });
});


app.controller('mainController', function($scope) {
    $scope.titulo = 'Página Inicio';
    $scope.mensaje = 'Ha creado su aplicación Angular JS.';
});
