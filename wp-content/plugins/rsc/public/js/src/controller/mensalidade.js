appFrontRsc.controller('mensalidadeController', function ($scope,$document,RscService, ModalService) {

    $scope.listarFaturamentos = function(){
        console.log("controller");
        //RscService.getFaturamentosByFuncionarioESocio($scope,formulario);
    };
    $scope.showFormMensalidadeModal = function () {
        ModalService.showModal({
            templateUrl: './wp-content/plugins/rsc/view/mensalidade/modal_calculo.phtml',
            controller: "mensalidadeModalController",
        }).then(function (modal) {
            modal.element.show();
            modal.close.then(function (result) {
                angular.element('.modal-backdrop').hide();
                angular.element($document[0].body).removeClass('modal-open');
                $timeout(function () {
                    $scope.flashMessage = false;
                }, 2000);
            });
        });
    };
});
