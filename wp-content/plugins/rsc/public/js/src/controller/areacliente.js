appFrontRsc.controller('areaclienteController', function ($scope, RscService,loginService) {



    $scope.abrirDadosPessoais = function(){
        RscService.getGeneros($scope);
        RscService.getEstadosCivis($scope);
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