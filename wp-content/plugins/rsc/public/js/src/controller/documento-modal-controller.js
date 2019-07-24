appBackRsc.controller('documentoModalController', function ($scope, close, id_contrato, documento, $window,PATHS, $document, RscBackService) {

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

    var getFromArray = function(array,id) {
        var result = $.grep(array, function(e){ return e.id == id; });
        return result[0];
    };

    $scope.listaDocumentos = tiposDocumentos;

    $scope.cerrar = function (result) {
        close(result, 100);
    };

    if(angular.isUndefined(documento)) {
        $scope.documento = {
            id: undefined,
            id_tipo_arquivo: '',
            caminho: '',
            id_contrato: id_contrato
        };
    }
    else {
        $scope.documento = {
            id: documento.id,
            id_tipo_documento: getFromArray($scope.listaDocumentos,documento.id_tipo_documento),
            caminho: documento.caminho,
            id_contrato: id_contrato
        };
    }

 $scope.salvarDocumento = function(){
  $scope.documento.id_contrato = id_contrato;
    RscBackService.enviarDocumento($scope);
 };


});