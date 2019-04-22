appFrontRsc.controller('simuladorController', function ($scope, $timeout,$document,RscService, ModalService) {

    $scope.showFormSimuladorModal = function () {
        ModalService.showModal({
            templateUrl: './wp-content/plugins/rsc/view/simulador/modal_calculo.phtml',
            controller: "simuladorModalController",
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
