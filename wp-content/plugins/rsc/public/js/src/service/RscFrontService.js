appFrontRsc.service('RscService', function ($request, WizardHandler, $rootScope, $q) {

    this.cadastrarCliente = function ($scope) {
        var deferred = $q.defer();
        $rootScope.alert.changeShow(false);
        $request.post(urlAdmin("admin-ajax.php")).addParams({
            page: 'cliente',
            action: 'cadastrarCliente'
        }).addData($scope.formCliente).load($rootScope.loading.getRequestLoad('Cadastrando cliente...')).send(function (data) {
            $rootScope.alert.responseSuccess(data.message);
            deferred.resolve(data);
            $scope.processando = false;
            $scope.id_cliente = data.id;
            //WizardHandler.wizard().next();
        }, function (meta) {
            $scope.formCliente = undefined;
            $rootScope.alert.responseError(meta);
            $rootScope.alert.changeType('danger');
            $rootScope.alert.changeTitle('');
            deferred.reject(meta);
        });

        return deferred.promise;
    };

    this.cadastrarContrato = function ($scope) {
        $rootScope.alert.changeShow(false);
        $request.post(urlAdmin("admin-ajax.php")).addParams({
            page: 'cliente',
            action: 'cadastrarContrato'
        }).addData($scope.formContrato).load($rootScope.loading.getRequestLoad('Cadastrando contrato...')).send(function (data) {
            $rootScope.alert.responseSuccess(data.message);
            $scope.processando = false;
        }, function (meta) {
            $scope.formContrato = undefined;
            $rootScope.alert.responseError(meta);
            $rootScope.alert.changeType('danger');
            $rootScope.alert.changeTitle('');
        });
    };

    this.getDadosPorCep = function($scope){
        var requestLink = function(cep){
            return "https://viacep.com.br/ws/" + cep + "/json/";
        };

        $scope.alert.changeShow(false);
        $scope.formCliente.onRequest = true;

        $request.get(requestLink($scope.formCliente.cep))
            .load($scope.loading.getRequestLoad('Carregando informações do seu CEP'))
            .checkResponse(false)
            .send(function(response){
                var dados = response.data;
                if(angular.isUndefined(dados.erro)){
                    $scope.formCliente.estado = dados.uf;
                    $scope.formCliente.cep    = dados.cep;
                    $scope.formCliente.cidade = dados.localidade;
                    $scope.formCliente.bairro = dados.bairro;
                    $scope.formCliente.rua = dados.logradouro;
                }
                $scope.formCliente.onRequest = false;
            }, function(){
                $scope.alert.changeMessage("Não foi possível carregar o endereço deste CEP");
                $scope.alert.changeTitle("");
                $scope.alert.changeType("warning");
                $scope.alert.changeShow(true);
                $scope.formCliente.onRequest = false;
            });
    };
    this.getMensalidade = function ($scope,formulario) {
        $scope.alert.changeShow(false);
        $scope.mensalidade =undefined;
        $request.get(urlAdmin("admin-ajax.php"))
            .addParams({
                page: "mensalidade",
                action: "getMensalidade",
                socios: formulario.socios,
                funcionarios: formulario.funcionarios,
                id_faturamento: formulario.id_faturamento,
                id_tipo_empresa: formulario.id_tipo_empresa,
                id_unidade: formulario.id_unidade
            })
            .load($scope.loading.getRequestLoad('Calculando a mensalidade...'))
            .send(function (data) {
                $scope.mensalidade = data;
            }, function (meta) {
                $scope.alert.responseError(meta);
                $scope.alert.changeType("danger");

            });
    };

    this.getUnidades = function ($scope) {
        $scope.alert.changeShow(false);
        $request.get(urlAdmin("admin-ajax.php"))
            .addParams({
                page: "mensalidade",
                action: "getUnidades",
            })
            .load($scope.loading.getRequestLoad('Listando Unidades...'))
            .send(function (data) {
                $scope.listUnidades = data;
            }, function (meta) {
                $scope.alert.responseError(meta);
                $scope.alert.changeType("danger");

            });
    };

    this.getTiposEmpresa = function ($scope) {
        $scope.alert.changeShow(false);
        $request.get(urlAdmin("admin-ajax.php"))
            .addParams({
                page: "mensalidade",
                action: "getTiposEmpresas",
            })
            .load($scope.loading.getRequestLoad('Listando Tipos de Empresas...'))
            .send(function (data) {
                $scope.listTiposEmpresas = data;
            }, function (meta) {
                $scope.alert.responseError(meta);
                $scope.alert.changeType("danger");

            });
    };

    this.getFaturamentos = function ($scope) {
        $scope.alert.changeShow(false);
        $request.get(urlAdmin("admin-ajax.php"))
            .addParams({
                page: "mensalidade",
                action: "getFaturamentos",
            })
            .load($scope.loading.getRequestLoad('Listando Faturamentos...'))
            .send(function (data) {
                $scope.listFaturamentos = data;
            }, function (meta) {
                $scope.alert.responseError(meta);
                $scope.alert.changeType("danger");
            });
    };

    this.getEstadosCivis = function ($scope) {
        $scope.alert.changeShow(false);
        $request.get(urlAdmin("admin-ajax.php"))
            .addParams({
                page: "cliente",
                action: "getEstadosCivis",
            })
            .load($scope.loading.getRequestLoad('Listando Estados Civís...'))
            .send(function (data) {
                $scope.listaEstadosCivis = data;
            }, function (meta) {
                $scope.alert.responseError(meta);
                $scope.alert.changeType("danger");
            });
    };

    this.getGeneros = function ($scope) {
        $scope.alert.changeShow(false);
        $request.get(urlAdmin("admin-ajax.php"))
            .addParams({
                page: "cliente",
                action: "getGeneros",
            })
            .load($scope.loading.getRequestLoad('Listando Gêneros...'))
            .send(function (data) {
                $scope.listaGeneros = data;
            }, function (meta) {
                $scope.alert.responseError(meta);
                $scope.alert.changeType("danger");
            });
    };

    this.getFaturamentosByFuncionarioESocio = function ($scope,formulario) {
        $scope.alert.changeShow(false);
        $request.get(urlAdmin("admin-ajax.php"))
            .addParams({
                page: "mensalidade",
                action: "getFaturamentosByFuncionarioESocio",
                socios: formulario.socios,
                funcionarios: formulario.funcionarios,
            })
            .load($scope.loading.getRequestLoad('Listando Faturamentos...'))
            .send(function (data) {
                $scope.listFaturamentos = data;
            }, function (meta) {
                $scope.listFaturamentos= undefined;
                $scope.alert.responseError(meta);
                $scope.alert.changeType("danger");
            });
    };

});