appFrontRsc.controller('loginController', function ($scope, $location, $document, WizardHandler, RscService) {

    $scope.logar = function(){
        RscService.autenticar($scope);
    };

    $scope.redirecionar = function(url){
        $location.path(url);
    }

});