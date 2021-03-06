<?php
/**
 * Created by PhpStorm.
 * User: claudio.santos
 * Date: 08/04/2019
 * Time: 11:27
 */

namespace RSC\controller;


use MocaBonita\controller\MbController;
use MocaBonita\tools\MbRequest;
use MocaBonita\tools\MbResponse;
use RSC\model\Cliente;
use RSC\model\DocumentoCliente;

class AreaClienteController extends MbController
{
    public function indexAction(MbRequest $mbRequest, MbResponse $mbResponse)
    {
        throw new \Exception("Action indisponível!");
    }

    public function areaClienteShortcode()
    {
        return $this->getMbView()
            ->setPage("areacliente")
            ->setAction("index");
    }

    public function areaClienteAction()
    {
        return $this->getMbView()
            ->setTemplate("modal")
            ->setPage("areacliente")
            ->setAction("areacliente");
    }

    public function getDadosPessoaisAction(){
        return (new Cliente())->getDadosPessoais();
    }

    public function getDocumentosAction(MbRequest $request){
        return (new DocumentoCliente())->getDocumentos($request->query('id_contrato'));
    }

}