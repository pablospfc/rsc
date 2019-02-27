var appFrontRsc = angular.module('appFrontRsc', [
    'Barbara-Js',
    'idf.br-filters',
    'ngRoute',
    'ngMessages',
    'angularModalService',
]);

appFrontRsc.config(function ($routeProvider) {

    $routeProvider
        .when('/', {
            templateUrl: urlAdmin("admin-post.php?" + serialize({
                page : "mensalidade",
                action : "formulario_calculo"
            })),
            controller: 'mensalidadeController',
        })
        .otherwise({redirectTo: '/'});
});

appFrontRsc.run(function ($rootScope, bootstrap) {
    $rootScope.alert   = bootstrap.alert();
    $rootScope.loading = bootstrap.loading();

});