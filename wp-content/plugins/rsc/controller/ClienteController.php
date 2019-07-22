<?php
/**
 * Created by PhpStorm.
 * User: claud
 * Date: 05/03/2019
 * Time: 15:10
 */

namespace RSC\controller;

use MocaBonita\controller\MbController;
use MocaBonita\tools\MbRequest;
use MocaBonita\tools\MbResponse;
use RSC\model\Cliente;
use RSC\model\Contrato;

class ClienteController extends MbController
{
    public function indexAction(MbRequest $mbRequest, MbResponse $mbResponse)
    {
        //throw new \Exception("Action indisponível!");
        return $this->getMbView()->setAction('clientes');
    }

    public function cadastrarClienteAction(MbRequest $mbRequest)
    {
        return (new Cliente())->inserir($mbRequest->inputSource());
    }

    public function atualizarClienteAction(MbRequest $mbRequest)
    {
        return (new Cliente())->atualizar($mbRequest->inputSource());
    }

    public function cadastrarContratoAction(MbRequest $mbRequest)
    {
        return (new Contrato())->inserir($mbRequest->inputSource());
    }

    public function clienteShortcode()
    {
        return $this->getMbView()
            ->setPage("cliente")
            ->setAction("index");
    }

    public function docentesAction()
    {
        return $this->getMbView()
            ->setTemplate("index")
            ->setPage("cliente")
            ->setAction("clientes");
    }

    public function cadastroAction()
    {
        return $this->getMbView()
            ->setTemplate("modal")
            ->setPage("cliente")
            ->setAction("cadastro");
    }

}