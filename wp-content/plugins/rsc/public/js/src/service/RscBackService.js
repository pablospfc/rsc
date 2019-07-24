appBackRsc.service('RscBackService', function ($request, $q, $rootScope, $timeout, PATHS, Upload, $location, $rootScope, $q) {
    this.getClientes = function ($scope) {
        $scope.alert.changeShow(false);
        $request.get("admin-ajax.php")
            .addParams({
                page: "cliente",
                action: "clientes",
            })
            .load($scope.loading.getRequestLoad('Listando Clientes...'))
            .send(function (data) {
                $scope.listaClientes = data;
            }, function (meta) {
                $scope.alert.responseError(meta);
                $scope.alert.changeType("danger");
            });

    };

    this.removerDocumento = function (id) {
        var deferred = $q.defer();
        $rootScope.alert.changeShow(false);
        $request.post("admin-ajax.php").addParams({
            page: 'documentocliente',
            action: 'removerDocumento'
        }).addData({id: id}).load($rootScope.loading.getRequestLoad('Removendo Documento...')).send(function (data) {
            $rootScope.alert.responseSuccess(data.message);
            deferred.resolve(data);
        }, function (meta) {
            $rootScope.alert.responseError(meta);
            $rootScope.alert.changeType('danger');
            $rootScope.alert.changeTitle('');
            deferred.reject(meta);
        });
        return deferred.promise;
    };

    this.getDocumentos = function ($scope,id) {
        $scope.alert.changeShow(false);
        $request.get("admin-ajax.php")
            .addParams({
                page: "documentocliente",
                action: "getDocumentos",
                id_contrato: id
            })
            .load($scope.loading.getRequestLoad('Listando Documentos...'))
            .send(function (data) {
                $scope.listaDocumentos = data;
            }, function (meta) {
                $scope.alert.responseError(meta);
                $scope.alert.changeType("danger");
            });

    };

    this.enviarDocumento = function($scope) {
        console.log($scope.documento);
        Upload.upload({
            url: PATHS.PATH_UPLOAD+'?page=documentocliente&action=enviarDocumento',
            data: {
                id_tipo_documento: $scope.documento.id_tipo_documento.id,
                id_contrato: $scope.documento.id_contrato,
                caminho: $scope.documento.caminho,
                arquivo: $scope.documento.arquivo,
                id: $scope.documento.id
            }
        }).then(function(data){
            $scope.alert.responseSuccess(data.data.data.message);
            $scope.alert.changeTitle('');
        }, function(meta) {
            $scope.alert.responseError(meta);
        }, function(evt) {

        });

/*
        $rootScope.alert.changeShow(false);
        $request.post("admin-ajax.php").addParams({
            page: 'documentocliente',
            action: 'enviarDocumento'
        }).addData(scope.documento).load($rootScope.loading.getRequestLoad('Gerando Boletos. Por favor aguarde e não feche esta tela.')).send(function (data) {
            $rootScope.alert.responseSuccess(data.message);
        }, function (meta) {
            //$scope.formContrato = undefined;
            $rootScope.alert.responseError(meta);
            $rootScope.alert.changeType('danger');
            $rootScope.alert.changeTitle('');
            //deferred.reject(meta);
        });
*/
    };

});
