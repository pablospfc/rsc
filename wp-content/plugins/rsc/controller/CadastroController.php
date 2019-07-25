<?php
/**
 * Created by PhpStorm.
 * User: claudio.santos
 * Date: 25/07/2019
 * Time: 09:05
 */

namespace RSC\controller;


use MocaBonita\controller\MbController;
use MocaBonita\tools\MbRequest;
use MocaBonita\tools\MbResponse;
use RSC\model\Contrato;
use RSC\model\Cliente;

class CadastroController extends MbController
{
    public function indexAction(MbRequest $mbRequest, MbResponse $mbResponse)
    {
        throw new \Exception("Action indisponível!");
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

    public function cadastroShortcode()
    {
        return $this->getMbView()
            ->setPage("cadastro")
            ->setAction("index");
    }

    public function cadastroAction()
    {
        return $this->getMbView()
            ->setTemplate("modal")
            ->setPage("cadastro")
            ->setAction("cadastro");
    }

}