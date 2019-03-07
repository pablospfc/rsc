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

class ClienteController extends MbController
{
    public function indexAction(MbRequest $mbRequest, MbResponse $mbResponse)
    {
        throw new \Exception("Action indisponível!");
    }

    public function cadastrarClienteAction(MbRequest $mbRequest){
        return (new Cliente())->inserir($mbRequest->inputSource());
    }

    public function clienteShortcode()
    {
        return $this->getMbView()
            ->setPage("cliente")
            ->setAction("index");
    }

    public function cadastroAction()
    {
        return $this->getMbView()
            ->setTemplate("modal")
            ->setPage("cliente")
            ->setAction("cadastro");
    }

}