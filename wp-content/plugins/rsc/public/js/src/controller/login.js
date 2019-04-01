appFrontRsc.controller('loginController', function ($scope, $rootScope, $window, $document, WizardHandler, RscService) {

    $scope.logar = function(){
        RscService.autenticar($scope){

        }
    }

});