appFrontRsc.controller('cadastroController', function ($scope, loginService, $rootScope, $window, $document, WizardHandler, RscService) {

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

    $scope.habilitaCartao = function(){
      $scope.cartao =true;
      $scope.boleto = false;
    };

    $scope.habilitaBoleto = function(){
        $scope.boleto = true;
        $scope.cartao = false;
    };

    $scope.getDadosCartao = function () {
        console.log(PagSeguroDirectPayment.getSenderHash());
    };

    $scope.selecionaPessoa = function(tipo){
        if (tipo == 'fisica')
            $scope.fisica = true;
        else
            $scope.fisica = false;
    };

    $scope.iniciaSessao = function () {
        RscService.getSessao($scope).then(function (data) {
            PagSeguroDirectPayment.setSessionId(data);
        }, function (error) {
        });
    };

    $scope.calculaMensalidade = function (formulario) {
        RscService.getPlano($scope, formulario);
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
        console.log("chegou aqui");
        RscService.getSessao($scope).then(function (data) {
            PagSeguroDirectPayment.setSessionId(data);
            PagSeguroDirectPayment.getBrand({
                cardBin: numero,
                success: function (response) {
                    console.log(response);
                },
                error: function (response) {
                },
            });
        }, function (error) {

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
        console.log(formulario);
        RscService.getSessao($scope).then(function (data) {
            console.log("chegou aqui sessao");
            PagSeguroDirectPayment.setSessionId(data);
            formulario.hash = PagSeguroDirectPayment.getSenderHash();
            PagSeguroDirectPayment.getBrand({
                cardBin: formulario.numero_cartao,
                success: function (response) {
                    var mes = formulario.expiracao.substring(0,2);
                    var ano = formulario.expiracao.substring(2,6);
                    PagSeguroDirectPayment.createCardToken({
                        cardNumber: formulario.numero_cartao,
                        brand: response.brand.name,
                        cvv: formulario.cvv,
                        expirationMonth: mes,
                        expirationYear: ano,
                        success: function (response) {
                            formulario.token = response.card.token;
                            console.log("chegou aqui ultimo");
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
            console.log(error);
        });

        /*
                RscService.assinarPlano(formulario).then(function(sucess){
                    //$window.open(sucess.url,'_blank');
                },function(error){

                })
                */
    };

    $scope.gerarBoletos = function(formulario){
      RscService.getBoletos(formulario);
    };


    $scope.listarFaturamentos = function (formulario) {
        if (!angular.isUndefined(formulario.socios) && !angular.isUndefined(formulario.funcionarios))
            RscService.getFaturamentosByFuncionarioESocio($scope, formulario);
    };


});