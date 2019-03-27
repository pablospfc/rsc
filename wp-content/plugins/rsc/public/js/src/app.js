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
        .otherwise({redirectTo: '/'});
});

appFrontRsc.run(function ($rootScope, bootstrap) {
    $rootScope.alert = bootstrap.alert();
    $rootScope.loading = bootstrap.loading();

});