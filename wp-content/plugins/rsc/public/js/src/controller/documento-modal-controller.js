appBackRsc.controller('documentoModalController', function ($scope, id_contrato, $window,PATHS, $document, RscBackService) {
    var getUrlParams = function(location, valueOf) {
        var arrayValues = [];
        var search = location.search.substring(1);
        var pairs  = search.split('&');

        for (var i = 0; i < pairs.length; i++) {
            var pair = pairs[i].split('=');
            arrayValues[pair[0]] = pair[1];
        }

        if(valueOf != undefined && arrayValues[valueOf] != undefined) {
            return arrayValues[valueOf];
        }

        return arrayValues;
    };

    var id_contrato = getUrlParams($window.location, 'id_contrato');

 var tiposDocumentos =[
     {
      id: 1,
      nome: "Fiscal - PGDAS"
     },
     {
      id: 2,
      nome: "Cadastro"
     }
 ];

 $scope.listaDocumentos = tiposDocumentos;

 $scope.salvarDocumento = function(){
  $scope.documento.id_contrato = id_contrato;
    RscBackService.enviarDocumento($scope);
 };


});