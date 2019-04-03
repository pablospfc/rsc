appFrontRsc.controller('loginController', function ($scope, $location, $document, WizardHandler, loginService) {

    $scope.logar = function(){
        loginService.login($scope);
    };

    $scope.redirecionar = function(url){
        $location.path(url);
    }

});