appFrontRsc.controller('clienteController', function ($scope,$document,WizardHandler, RscService) {
    RscService.getGeneros($scope);
    RscService.getEstadosCivis($scope);

    $scope.buscarCep = function(formulario){
        $scope.formCliente = formulario;
        if(angular.isDefined($scope.formCliente.cep) && $scope.formCliente.cep.length)
            RscService.getDadosPorCep($scope);
    };

    $scope.salvarCliente = function(){
        RscService.cadastrarCliente($scope);
    };

    $scope.calculaMensalidade = function(formulario){
        RscService.getMensalidade($scope,formulario);
    };

    $scope.salvarContrato = function(){
        RscService.cadastrarContrato($scope);
    };

    $scope.nextToContratacao = function(){
        WizardHandler.wizard().next();
        RscService.getUnidades($scope);
        RscService.getTiposEmpresa($scope);
    };

    $scope.listarFaturamentos = function(formulario){
        if (!angular.isUndefined(formulario.socios) && !angular.isUndefined(formulario.funcionarios))
            RscService.getFaturamentosByFuncionarioESocio($scope,formulario);
    };



});