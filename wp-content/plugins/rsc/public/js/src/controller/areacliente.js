appFrontRsc.controller('areaclienteController', function ($scope, PATHS, $window, RscService,loginService) {



    $scope.abrirDadosPessoais = function(){
        RscService.getGeneros($scope);
        RscService.getEstadosCivis($scope);
        RscService.getDadosPessoais($scope);
    };

    $scope.abrirDocumentos = function(){
      RscService.getDocumentos($scope);
    };

    $scope.atualizarCliente = function(){
       RscService.atualizarCliente($scope);
    };

    $scope.visualizarDocumento = function(documento){
        $window.open(PATHS.PATH_ARQUIVOS + documento.caminho, '_blank');
    };

    $scope.selecionaTipo = function(tipo){
        $scope.tipo = tipo;
    };

    $scope.abrirPagamentos = function(){
        RscService.listarTransacoes($scope);
    };

    $scope.abrirBoletos = function(){
      RscService.listarBoletos($scope);
    };

    $scope.abrirAssinatura = function(){
      RscService.getDadosAssinatura($scope);
    };

    $scope.sair = function(){
        loginService.logout();
    };


});