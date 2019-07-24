appBackRsc.controller('documentoModalController', function ($scope, id_contrato, documento, $window,PATHS, $document, RscBackService) {

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




    if(angular.isUndefined(documento)) {
        $scope.documento = {
            id: '',
            id_tipo_arquivo: '',
            id_contrato: id_contrato
        };
    }
    else {
        $scope.documento = {
            id: documento.id,
            id_tipo_documento: documento.id_tipo_documento,
            id_contrato: id_contrato
        };
    }
console.log($scope.documento);
    $scope.listaDocumentos = tiposDocumentos;
 $scope.salvarDocumento = function(){
  $scope.documento.id_contrato = id_contrato;
    RscBackService.enviarDocumento($scope);
 };


});