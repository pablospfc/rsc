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



    public function clientesAction()
    {
        return $this->getMbView()
            ->setTemplate("index")
            ->setPage("cliente")
            ->setAction("clientes");
    }

}