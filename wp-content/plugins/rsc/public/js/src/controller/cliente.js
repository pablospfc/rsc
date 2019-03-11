appFrontRsc.controller('clienteController', function ($scope,$document,WizardHandler, RscService) {
    RscService.getGeneros($scope);
    RscService.getEstadosCivis($scope);

    $scope.buscarCep = function(formulario){
        $scope.formCliente = formulario;
        if(angular.isDefined($scope.formCliente.cep) && $scope.formCliente.cep.length)
            RscService.getDadosPorCep($scope);
    };

    $scope.salvarCliente = function(){
        RscService.cadastrarCliente($scope).then(function(sucess){
            WizardHandler.wizard().next();
            RscService.getUnidades($scope);
            RscService.getTiposEmpresa($scope);
        },function(error){
            //
        });
    };

    $scope.calculaMensalidade = function(formulario){
        RscService.getMensalidade($scope,formulario);
    };

    $scope.salvarContrato = function(){
        RscService.cadastrarContrato($scope).then(function(sucess){
            WizardHandler.wizard().next();
        },function(error){

        });
    };

    $scope.listarFaturamentos = function(formulario){
        if (!angular.isUndefined(formulario.socios) && !angular.isUndefined(formulario.funcionarios))
            RscService.getFaturamentosByFuncionarioESocio($scope,formulario);
    };



});