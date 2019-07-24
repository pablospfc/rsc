<?php
/**
 * Created by PhpStorm.
 * User: claudio.santos
 * Date: 10/07/2019
 * Time: 08:45
 */

namespace RSC\controller;


use MocaBonita\controller\MbController;
use MocaBonita\tools\MbRequest;
use MocaBonita\tools\MbResponse;
use RSC\model\DocumentoCliente;

class DocumentoClienteController extends MbController
{
    public function indexAction(MbRequest $mbRequest, MbResponse $mbResponse)
    {
        return $this->getMbView()->setAction('documentos');
    }

    public function documentosAction(){

        return $this->getMbView()
            ->setTemplate("index")
            ->setPage("documentocliente")
            ->setAction("documentos");
    }

    public function getDocumentosAction(MbRequest $request){
        return (new DocumentoCliente())->getDocumentos($request->query('id_contrato'));
    }

    public function enviarDocumentoAction(MbRequest $request){
        return (new DocumentoCliente())->salvar($request->inputSource(),$_FILES['arquivo']);
    }

    public function removerDocumentoAction(MbRequest $request){
        return (new DocumentoCliente())->remover($request->inputSource());
    }


}