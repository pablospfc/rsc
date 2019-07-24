appBackRsc.controller('documentoClienteController', function ($scope,ModalService, $window, PATHS, RscBackService) {
    var getUrlParams = function(location, valueOf) {
        var arrayValues = [];
        var search = location.search.substring(1);
        var pairs  = search.split('&');

        for (var i = 0; i < pairs.length; i++) {
            var pair = pairs[i].split('=');
            arrayValues[pair[0]] = pair[1];
        }

        if(valueOf != undefined && arrayValues[valueOf] != undefined) {
            return arrayValues[valueOf];
        }

        return arrayValues;
    };

    var id = getUrlParams($window.location, 'id_contrato');

    RscBackService.getDocumentos($scope, id);

    $scope.visualizar = function(documento) {
        $window.open(PATHS.PATH_ARQUIVOS + documento.caminho, '_blank');
    };

    $scope.showModalDocumentos = function (documento) {
        ModalService.showModal({
            templateUrl: './../wp-content/plugins/rsc/view/documentocliente/documentos-modal.phtml',
            controller: "documentoModalController",
            inputs: {
                id_contrato: id,
                documento: documento,
            }
        }).then(function (modal) {
            modal.element.modal();
            modal.close.then(function (result) {
                RscBackService.getDocumentos($scope, id_contrato);
                angular.element('.modal-backdrop').hide();
                angular.element($document[0].body).removeClass('modal-open');
                $timeout(function () {
                    $scope.flashMessage = false;

                }, 2000);
            });
        });
    };
});