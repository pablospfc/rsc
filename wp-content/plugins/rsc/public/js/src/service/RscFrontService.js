appFrontRsc.service('RscService', function ($request, $location, WizardHandler, $rootScope, $q) {

    var getFromArray = function(array,id) {
        var result = $.grep(array, function(e){ return e.id == id; });
        return result[0];
    };
    this.cadastrarCliente = function ($scope) {
        var deferred = $q.defer();
        $rootScope.alert.changeShow(false);
        $request.post(urlAdmin("admin-ajax.php")).addParams({
            page: 'cliente',
            action: 'cadastrarCliente'
        }).addData($scope.formCliente).load($rootScope.loading.getRequestLoad('Cadastrando cliente...')).send(function (data) {
            $rootScope.alert.responseSuccess(data.message);
            $scope.processando = false;
            $scope.id_cliente = data.id;
            $rootScope.formCliente = data;
            deferred.resolve(data);
        }, function (meta) {
            $scope.formCliente = undefined;
            $rootScope.alert.responseError(meta);
            $rootScope.alert.changeType('danger');
            $rootScope.alert.changeTitle('');
            deferred.reject(meta);
        });

        return deferred.promise;
    };

    this.atualizarCliente = function ($scope) {
        $scope.alert.changeShow(false);
        $request.post(urlAdmin("admin-ajax.php")).addParams({
            page: 'cliente',
            action: 'atualizarCliente'
        }).addData($scope.formCliente).load($scope.loading.getRequestLoad('Atualizando seus dados...')).send(function (data) {
            $scope.alert.responseSuccess(data.message);
            $scope.processando = false;
            //$scope.formCliente = data;
        }, function (meta) {
            //$scope.formCliente = data;
            $scope.alert.responseError(meta);
            $scope.alert.changeType('danger');
            $scope.alert.changeTitle('');
        });

    };


    this.cadastrarContrato = function (formulario) {
        var deferred = $q.defer();
        $rootScope.alert.changeShow(false);
        $request.post(urlAdmin("admin-ajax.php")).addParams({
            page: 'cliente',
            action: 'cadastrarContrato'
        }).addData(formulario).load($rootScope.loading.getRequestLoad('Cadastrando contrato...')).send(function (data) {
            $rootScope.alert.responseSuccess(data.message);
            $rootScope.id_contrato= data.id;
            deferred.resolve(data);
        }, function (meta) {
            //$scope.formContrato = undefined;
            $rootScope.alert.responseError(meta);
            $rootScope.alert.changeType('danger');
            $rootScope.alert.changeTitle('');
            deferred.reject(meta);
        });

        return deferred.promise;
    };

    this.assinarPlano = function (formulario) {
        //var deferred = $q.defer();
        $rootScope.alert.changeShow(false);
        $request.post(urlAdmin("admin-ajax.php")).addParams({
            page: 'assinatura',
            action: 'assinar'
        }).addData(formulario).load($rootScope.loading.getRequestLoad('Processando Pagamento...')).send(function (data) {
            $rootScope.alert.responseSuccess(data.message);
            $rootScope.formAssinatura = undefined;
            WizardHandler.wizard().next();
        }, function (meta) {
            //$scope.formContrato = undefined;
            console.log("erro ao assinar");
            $rootScope.alert.responseError(meta);
            $rootScope.alert.changeType('danger');
            $rootScope.alert.changeTitle('');
            //deferred.reject(meta);
        });

        //return deferred.promise;
    };

    this.getBoletos = function (formulario) {
        //var deferred = $q.defer();
        $rootScope.alert.changeShow(false);
        $request.post(urlAdmin("admin-ajax.php")).addParams({
            page: 'assinatura',
            action: 'gerarBoletos'
        }).addData(formulario).load($rootScope.loading.getRequestLoad('Gerando Boletos. Por favor aguarde e não feche esta tela.')).send(function (data) {
            $rootScope.alert.responseSuccess(data.message);
            $rootScope.boletos = data.boletos;
            console.log($rootScope.boletos);
            //WizardHandler.wizard().next();
        }, function (meta) {
            //$scope.formContrato = undefined;
            $rootScope.alert.responseError(meta);
            $rootScope.alert.changeType('danger');
            $rootScope.alert.changeTitle('');
            //deferred.reject(meta);
        });

        //return deferred.promise;
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
    this.getPlano = function ($scope,formulario) {
        $scope.alert.changeShow(false);
        $scope.mensalidade =undefined;
        $request.get(urlAdmin("admin-ajax.php"))
            .addParams({
                page: "simulador",
                action: "getPlano",
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

    this.listarTransacoes = function ($scope) {
        $scope.formCliente = undefined;
        $scope.listaAssinaturas = undefined;
        $scope.alert.changeShow(false);
        $request.get(urlAdmin("admin-ajax.php"))
            .addParams({
                page: "pagamento",
                action: "listarTransacoes",
            })
            .load($scope.loading.getRequestLoad('Listando Transações...'))
            .send(function (data) {
                $scope.listaTransacoes = data;
            }, function (meta) {
                $scope.alert.responseError(meta);
                $scope.alert.changeType("danger");
            });
    };

    this.getSessao = function ($scope) {
        var deferred = $q.defer();
        $scope.alert.changeShow(false);
        $request.get(urlAdmin("admin-ajax.php"))
            .addParams({
                page: "assinatura",
                action: "iniciaSessao",
            })
            .load($scope.loading.getRequestLoad('Iniciando Sessao...'))
            .send(function (data) {
                //$scope.id_sessao = data[0][0];
                deferred.resolve(data[0][0]);
            }, function (meta) {
                console.log(meta);
                $scope.alert.responseError(meta);
                $scope.alert.changeType("danger");
                deferred.reject(meta);
            });
        return deferred.promise;
    };

    this.getDadosParaAssinatura = function ($scope) {
        $scope.alert.changeShow(false);
        $request.get(urlAdmin("admin-ajax.php"))
            .addParams({
                page: "assinatura",
                action: "getDadosParaAssinatura",
                id_contrato: $scope.id_contrato,
            })
            .load($scope.loading.getRequestLoad('listando dados para confirmação...'))
            .send(function (data) {
                $scope.formAssinatura = data[0];
            }, function (meta) {
                $scope.alert.responseError(meta);
                $scope.alert.changeType("danger");
            });
    };

    this.getUnidades = function ($scope) {
        $scope.alert.changeShow(false);
        $request.get(urlAdmin("admin-ajax.php"))
            .addParams({
                page: "simulador",
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
                page: "simulador",
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
                page: "simulador",
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

    this.getDadosAssinatura = function ($scope) {
        $scope.listaTransacoes = undefined;
        $scope.formCliente = undefined
        $scope.alert.changeShow(false);
        $request.get(urlAdmin("admin-ajax.php"))
            .addParams({
                page: "assinatura",
                action: "getDadosAssinatura",
            })
            .load($scope.loading.getRequestLoad('Gerando dados da assinatura...'))
            .send(function (data) {
                $scope.listaAssinaturas = data;
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
                page: "simulador",
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

    this.getDadosPessoais = function ($scope) {
        $scope.listaTransacoes = undefined;
        $scope.listaAssinaturas = undefined;
        $scope.alert.changeShow(false);
        $scope.mensalidade =undefined;
        $request.get(urlAdmin("admin-ajax.php"))
            .addParams({
                page: "areacliente",
                action: "getDadosPessoais",
            })
            .load($scope.loading.getRequestLoad('Carregando dados pessoais...'))
            .send(function (data) {
                $scope.formCliente = data[0];
                $scope.formCliente.id_sexo = getFromArray($scope.listaGeneros,$scope.formCliente.id_sexo);
                $scope.formCliente.id_estado_civil = getFromArray($scope.listaEstadosCivis,$scope.formCliente.id_estado_civil);
            }, function (meta) {
                $scope.alert.responseError(meta);
                $scope.alert.changeType("danger");

            });
    };

});