appBackRsc.controller('clienteBackController', function ($scope, $window,PATHS, $document, RscBackService) {

    RscBackService.getClientes($scope);

    $scope.goToDocumentos = function(id) {
        $window.location.href = PATHS.PATH_DOC + "&id_contrato=" + id;
    };


});