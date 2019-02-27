appFrontRsc.service('RscService', function ($request) {
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

    this.getFaturamentosByFuncionarioESocio = function ($scope,formulario) {
        console.log("chegiou aqui");
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
                console.log(data);
                $scope.listFaturamentos = data;
            }, function (meta) {
                $scope.alert.responseError(meta);
                $scope.alert.changeType("danger");
            });
    };
});