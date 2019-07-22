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

class DocumentoCliente extends MbController
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
        return (new \RSC\model\DocumentoCliente())->getDocumentos($request->query('id_contrato'));
    }


}