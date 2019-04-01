var appFrontRsc = angular.module('appFrontRsc', [
    'Barbara-Js',
    'idf.br-filters',
    'ngRoute',
    'ngMessages',
    'angularModalService',
    'mgo-angular-wizard',
    'ui.utils.masks',
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
                page: "mensalidade",
                action: "formulario_calculo"
            })),
            controller: 'mensalidadeController',
        })
        .when('/cadastro', {
            templateUrl: urlAdmin("admin-post.php?" + serialize({
                page: "cliente",
                action: "cadastro"
            })),
            controller: 'clienteController',
        })
        .otherwise({redirectTo: '/login'});
});

appFrontRsc.run(function ($rootScope, bootstrap) {
    $rootScope.alert = bootstrap.alert();
    $rootScope.loading = bootstrap.loading();
//prevent going to homepage if not loggedin
    var routePermit = ['/home'];
    $rootScope.$on('$routeChangeStart', function(){
        if(routePermit.indexOf($location.path()) !=-1){
            var connected = loginService.islogged();
            connected.then(function(response){
                if(!response.data){
                    $location.path('/');
                }
            });

        }
    });
    //prevent going back to login page if session is set
    var sessionStarted = ['/'];
    $rootScope.$on('$routeChangeStart', function(){
        if(sessionStarted.indexOf($location.path()) !=-1){
            var cantgoback = loginService.islogged();
            cantgoback.then(function(response){
                if(response.data){
                    $location.path('/home');
                }
            });
        }
    });
});