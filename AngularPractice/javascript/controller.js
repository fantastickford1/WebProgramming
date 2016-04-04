var validationApp = angular.module('validacionApp', []);

// create angular controller
validationApp.controller('controladorValidacion', function($scope) {
  $scope.nombre = "Carlos Alejandro Zenteno Robles";
  $scope.materia = "Programacion web";
  $scope.matricula = "143382";
  $scope.universidad = "Universidad Politécnica de Chiapas";
  $scope.profesor = "Dr. Juan Carlos López Pimentel";
  // function to submit the form after all validation has occurred
  $scope.submitForm = function(isValid) {

    // check to make sure the form is completely valid
    if (isValid) {
      alert('Your package has shiped');
    }

  };

});

  var tienda = angular.module('tiendaApp', []);
  tienda.controller('tiendaController',function($scope){
    $scope.items = [
      {title: 'Mens Spiral Symbol Tee', quantity: 0, price: 26,url:"img/shirt.jpg"},    {title: 'NYJAH B-PARK TWIG7.6', quantity: 0, price: 90,url:"img/skate1.jpg"},    {title: 'NYJAH CROWN COMPLETE SKATEBOARD 7.6"', quantity: 0, price: 90,url:"img/skate2.jpg"}      ];
  });
