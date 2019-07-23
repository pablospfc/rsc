var appFrontRsc = angular.module('appFrontRsc', [
    'Barbara-Js',
    'idf.br-filters',
    'ngRoute',
    'ngMessages',
    'angularModalService',
    'mgo-angular-wizard',
    'ui.utils.masks',
    'ngCpfCnpj',
    'ui.mask'
]);

appFrontRsc.directive('ngUpdateHidden', function () {
    return function (scope, el, attr) {
        var model = attr['ngModel'];
        scope.$watch(model, function (nv) {
            el.val(nv);
        });
    };
});
appFrontRsc.directive("matchPassword", function () {
    return {
        require: "ngModel",
        scope: {
            otherModelValue: "=matchPassword"
        },
        link: function(scope, element, attributes, ngModel) {

            ngModel.$validators.matchPassword = function(modelValue) {
                return modelValue == scope.otherModelValue;
            };

            scope.$watch("otherModelValue", function() {
                ngModel.$validate();
            });
        }
    }
});
appFrontRsc.directive('numericOnly', function(){
    return {
        require: 'ngModel',
        link: function(scope, element, attrs, modelCtrl) {

            modelCtrl.$parsers.push(function (inputValue) {
                var transformedInput = inputValue ? inputValue.replace(/[^\d.-]/g,'') : null;

                if (transformedInput!=inputValue) {
                    modelCtrl.$setViewValue(transformedInput);
                    modelCtrl.$render();
                }

                return transformedInput;
            });
        }
    };
});

appFrontRsc.config(function ($routeProvider) {

    $routeProvider
        .when('/', {
            templateUrl: urlAdmin("admin-post.php?" + serialize({
                page: "login",
                action: "login"
            })),
            controller: 'loginController',
        })
        .when('/login', {
            templateUrl: urlAdmin("admin-post.php?" + serialize({
                page: "login",
                action: "login"
            })),
            controller: 'loginController',
        })
        .when('/simulador', {
            templateUrl: urlAdmin("admin-post.php?" + serialize({
                page: "simulador",
                action: "formulario_calculo"
            })),
            controller: 'simuladorController',
        })
        .when('/cadastro', {
            templateUrl: urlAdmin("admin-post.php?" + serialize({
                page: "cliente",
                action: "cadastro"
            })),
            controller: 'clienteController',
        })
        .when('/areacliente', {
            templateUrl: urlAdmin("admin-post.php?" + serialize({
                page: "areacliente",
                action: "areacliente"
            })),
            controller: 'areaclienteController',
        })
        .otherwise({redirectTo: '/login'});
});

appFrontRsc.run(function ($rootScope, bootstrap, $location, loginService) {
    $rootScope.alert = bootstrap.alert();
    $rootScope.loading = bootstrap.loading();
//prevent going to homepage if not loggedin
    var routePermit = ['/areacliente'];
    $rootScope.$on('$routeChangeStart', function(){
        if(routePermit.indexOf($location.path()) !=-1){
            loginService.islogged().then(function(response){
                if(response.status == false){
                    $location.path('/');
                }
            },function(error){
            });
        }
    });
    //prevent going back to login page if session is set
    var sessionStarted = ['/'];
    $rootScope.$on('$routeChangeStart', function(){
        if(sessionStarted.indexOf($location.path()) !=-1){
            loginService.islogged().then(function(response){
                if(response.status == true){
                    $location.path('/');
                }
            },function(error){

            });
        }
    });
});

var appBackRsc = angular.module('appBackRsc', [
    'Barbara-Js',
    'idf.br-filters',
    'ngRoute',
    'ngMessages',
    'angularModalService',
    'ui.utils.masks',
    'ngFileUpload',
    'ui.mask'
]);

appBackRsc.run(function ($rootScope, bootstrap) {
    $rootScope.alert   = bootstrap.alert();
    $rootScope.loading = bootstrap.loading();
});
/*
appBackRsc.config(['$qProvider', function ($qProvider) {
    $qProvider.errorOnUnhandledRejections(false);
}]);
*/
appBackRsc.constant('PATHS', {
    PATH_DOC  : './admin.php?page=documentocliente',
    PATH_ARQUIVOS: 'http://localhost/rsc/wp-content/uploads',
    PATH_UPLOAD: './admin-ajax.php'
});

