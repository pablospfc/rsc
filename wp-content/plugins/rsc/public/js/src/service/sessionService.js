appFrontRsc.factory('sessionService', ['$http','$request','$q', function($http,$request,$q){
    return{
        set: function(key, value){
            return sessionStorage.setItem(key, value);
        },
        get: function(key){
            return sessionStorage.getItem(key);
        },
        destroy: function(key){
            $request.get(urlAdmin("admin-ajax.php"))
                .addParams({
                    page: "login",
                    action: "sair",
                })
                .send(function (data) {
                }, function (meta) {
                    $rootScope.alert.responseError(meta);
                    $rootScope.alert.changeType("danger");
                });
            return sessionStorage.removeItem(key);
        }
    };
}]);