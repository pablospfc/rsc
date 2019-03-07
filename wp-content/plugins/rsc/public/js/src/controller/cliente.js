appFrontRsc.controller('clienteController', function ($scope,$document,RscService) {
    RscService.getGeneros($scope);
    RscService.getEstadosCivis($scope);

    $scope.buscarCep = function(formulario){
        $scope.formCliente = formulario;
        if(angular.isDefined($scope.formCliente.cep) && $scope.formCliente.cep.length)
            RscService.getDadosPorCep($scope);
    };

    $scope.salvarCliente = function(){
        console.log($scope.formCliente);
        RscService.cadastrarCliente($scope);
    };

    $scope.testar = function(){
        console.log("testando");
    };

});