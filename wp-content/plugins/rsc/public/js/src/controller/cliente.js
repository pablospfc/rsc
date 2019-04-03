appFrontRsc.controller('clienteController', function ($scope, loginService, $rootScope, $window, $document, WizardHandler, RscService) {

    RscService.getGeneros($scope);
    RscService.getEstadosCivis($scope);
    $scope.buscarCep = function (formulario) {
        $scope.formCliente = formulario;
        if (angular.isDefined($scope.formCliente.cep) && $scope.formCliente.cep.length)
            RscService.getDadosPorCep($scope);
    };

    $scope.salvarCliente = function () {
        RscService.cadastrarCliente($scope).then(function (sucess) {
            WizardHandler.wizard().next();
            RscService.getUnidades($scope);
            RscService.getTiposEmpresa($scope);
        }, function (error) {
            //
        });
    };

    $scope.sair = function(){
        loginService.logout();
    };

    $scope.getDadosCartao = function () {
        console.log(PagSeguroDirectPayment.getSenderHash());
    };


    $scope.iniciaSessao = function () {
        RscService.getSessao($scope).then(function (data) {
            PagSeguroDirectPayment.setSessionId(data);
        }, function (error) {
            console.log(error);
        });
    };

    $scope.calculaMensalidade = function (formulario) {
        RscService.getMensalidade($scope, formulario);
    };

    $scope.salvarContrato = function (formulario) {
        RscService.cadastrarContrato(formulario).then(function (sucess) {
            $scope.id_contrato = $rootScope.id_contrato;
            WizardHandler.wizard().next();
            RscService.getDadosParaAssinatura($scope)
        }, function (error) {

        });
    };

    $scope.getBandeiraCartao = function (numero) {
        //this.iniciaSessao();
        RscService.getSessao($scope).then(function (data) {
            PagSeguroDirectPayment.setSessionId(data);
            PagSeguroDirectPayment.getBrand({
                cardBin: numero,
                success: function (response) {
                    console.log(response.brand.name);
                },
                error: function (response) {
                    console.log(response);
                },
            });
        }, function (error) {
            console.log(error);
        });
        // PagSeguroDirectPayment.getBrand({cardBin: numero,
        //     success: function(response) {
        //         console.log(response.brand.name);
        //     },
        //     error: function(response) {
        //         console.log(response);
        //     },
        // });

    };


    $scope.assinarCartao = function (formulario) {
        RscService.getSessao($scope).then(function (data) {
            PagSeguroDirectPayment.setSessionId(data);
            formulario.hash = PagSeguroDirectPayment.getSenderHash();
            PagSeguroDirectPayment.getBrand({
                cardBin: formulario.numero,
                success: function (response) {
                    console.log(response.brand.name);

                    PagSeguroDirectPayment.createCardToken({
                        cardNumber: formulario.numero,
                        brand: response.brand.name,
                        cvv: formulario.cvv,
                        expirationMonth: formulario.mes_expiracao,
                        expirationYear: formulario.ano_expiracao,
                        success: function (response) {
                            console.log('Token: ' + response.card.token);
                            formulario.token = response.card.token;
                            RscService.assinarPlano(formulario);
                        },
                        error: function (response) {
                            console.log(response);
                        },
                    });
                },
                error: function (error) {
                    console.log(error);
                },
            });

        }, function (error) {

        });

        /*
                RscService.assinarPlano(formulario).then(function(sucess){
                    //$window.open(sucess.url,'_blank');
                },function(error){

                })
                */
    };


    $scope.listarFaturamentos = function (formulario) {
        if (!angular.isUndefined(formulario.socios) && !angular.isUndefined(formulario.funcionarios))
            RscService.getFaturamentosByFuncionarioESocio($scope, formulario);
    };


});