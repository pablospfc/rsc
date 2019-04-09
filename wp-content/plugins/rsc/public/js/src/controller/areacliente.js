appFrontRsc.controller('areaclienteController', function ($scope, RscService,loginService) {

    RscService.getGeneros($scope);
    RscService.getEstadosCivis($scope);

    $scope.abrirDadosPessoais = function(){
        RscService.getDadosPessoais($scope);
    };

    $scope.abrirPagamentos = function(){

    };

    $scope.abrirDocumentos = function(){

    };

    $scope.abrirPlano = function(){

    };

    $scope.sair = function(){
        loginService.logout();
    };


});