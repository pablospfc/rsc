<?php
/**
 * Created by PhpStorm.
 * User: claudio.santos
 * Date: 10/07/2019
 * Time: 16:31
 */

namespace RSC\controller;


use MocaBonita\controller\MbController;
use MocaBonita\tools\MbRequest;
use MocaBonita\tools\MbResponse;

class DocumentosController extends MbController
{
    public function indexAction(MbRequest $mbRequest, MbResponse $mbResponse)
    {
        //return $this->getMbView()->setAction('clientes');
        throw new \Exception("Action indisponível!");
    }

    public function documentosAction(){

        return $this->getMbView()
            ->setTemplate("modal")
            ->setPage("documentocliente")
            ->setAction("documentos");
    }

    public function clientesAction(){
    return $this->getMbView()
        ->setTemplate("modal")
        ->setPage("documentocliente")
        ->setAction("clientes");
}

}