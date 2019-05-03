appFrontRsc.factory('loginService', function($http, $request, $rootScope, $q, $location, sessionService){
    return{
        login: function($scope){
            $scope.alert.changeShow(false);
            $request.post(urlAdmin("admin-ajax.php")).addParams({
                page: 'login',
                action: 'logar'
            }).addData($scope.formLogin).load($scope.loading.getRequestLoad('Entrando no sistema...')).send(function (data) {
                $scope.alert.responseSuccess(data.message);
                $rootScope.autenticado = true;
                var uid = data.uid;
                var completou = data.dados[0].completou;
                if(uid){
                    sessionService.set('user',uid);
                    if (completou == 1)
                        $location.path("/areacliente");
                    else{
                        //$scope.formCliente = data[0];
                        $location.path("/cadastro");
                    }

                }
            }, function (meta) {
                $scope.successLogin = false;
                $scope.errorLogin = true;
                $scope.alert.responseError(meta);
                $scope.alert.changeType('danger');
                $scope.alert.changeTitle('');
            });
        },
        logout: function(){
            sessionService.destroy('user');
            $location.path('/login');
        },
        islogged: function(){
            var deferred = $q.defer();
            $request.get(urlAdmin("admin-ajax.php"))
                .addParams({
                    page: "login",
                    action: "estaLogado",
                })
                .send(function (data) {
                    deferred.resolve(data);
                }, function (meta) {
                    $rootScope.alert.responseError(meta);
                    $rootScope.alert.changeType("danger");
                    deferred.reject(meta);
                });

            return deferred.promise;
        },
        fetchuser: function(){
            var user = $http.get('fetch.php');
            return user;
        }
    }
});