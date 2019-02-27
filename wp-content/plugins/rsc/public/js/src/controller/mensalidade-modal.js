appFrontRsc.controller('mensalidadeModalController', function ($scope, $window, close, RscService) {

    RscService.getUnidades($scope);
    RscService.getTiposEmpresa($scope);
    //RscService.getFaturamentos($scope);
    $scope.fechar = function(result) {
        close(result, 200);
    };

    $scope.calculaMensalidade = function(formulario){
        RscService.getMensalidade($scope,formulario);
    };


});