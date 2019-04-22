var appFrontRsc = angular.module('appFrontRsc', [
    'Barbara-Js',
    'idf.br-filters',
    'ngRoute',
    'ngMessages',
    'angularModalService',
    'mgo-angular-wizard',
    'ui.utils.masks',
    'ngCpfCnpj',
]);

appFrontRsc.directive('ngUpdateHidden', function () {
    return function (scope, el, attr) {
        var model = attr['ngModel'];
        scope.$watch(model, function (nv) {
            el.val(nv);
        });
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