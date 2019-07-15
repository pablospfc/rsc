appBackRsc.controller('documentoClienteController', function ($scope, $window, PATHS, RscBackService) {
    RscBackService.getClientes($scope);

    $scope.goToDocumentos = function(id) {
        $window.location.href = PATHS.PATH_DOC + "&action=documentos&id_contrato=" + id;
    };
});