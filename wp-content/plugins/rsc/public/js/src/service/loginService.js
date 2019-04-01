appFrontRsc.factory('loginService', function($http, $location, sessionService){
    return{
        login: function(user, $scope){
            $scope.alert.changeShow(false);
            $request.post(urlAdmin("admin-ajax.php")).addParams({
                page: 'login',
                action: 'logar'
            }).addData($scope.formLogin).load($scope.loading.getRequestLoad('Entrando no sistema...')).send(function (data) {
                $scope.alert.responseSuccess(data.message);
                $rootScope.formCliente = data.dados[0];
                $rootScope.autenticado = true;
                var uid = data.uid;
                if(uid){
                    sessionService.set('user',uid);
                    $location.path("/cadastro");
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
            $location.path('/');
        },
        islogged: function(){
            var checkSession = $http.post('session.php');
            return checkSession;
        },
        fetchuser: function(){
            var user = $http.get('fetch.php');
            return user;
        }
    }
});