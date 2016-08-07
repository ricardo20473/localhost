// Creación del módulo
var app = angular.module('pagina', ['ngRoute', 'angularUtils.directives.dirPagination']);

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

    $scope.$watch('directorio', function(newValue) {
        var arreglo = [];
        for (var i = 0; i < newValue.length; i++) {
            if (newValue[i][0] !='..' && newValue[i][0] !='.' && newValue[i][0] !='Index.php' && newValue[i][0] !='Localhost' && newValue[i][0] !='Phpmyadmin') {
                arreglo.push({
                    "0" :newValue[i][0],
                    "1" :newValue[i][1] 
                });
            }
        }
        $scope.arreglo = arreglo;
    });
});
