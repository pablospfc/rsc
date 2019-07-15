appBackRsc.service('RscBackService', function ($request, $location, $rootScope, $q) {
    this.getClientes = function ($scope) {
        $scope.alert.changeShow(false);
        $request.get("admin-ajax.php")
            .addParams({
                page: "documentocliente",
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
});
