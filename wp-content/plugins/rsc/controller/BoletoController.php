<?php
/**
 * Created by PhpStorm.
 * User: claudio.santos
 * Date: 16/05/2019
 * Time: 15:13
 */

namespace RSC\controller;


use MocaBonita\controller\MbController;
use MocaBonita\tools\MbRequest;
use MocaBonita\tools\MbResponse;
use RSC\model\Boleto;

class BoletoController extends MbController
{
    public function indexAction(MbRequest $mbRequest, MbResponse $mbResponse)
    {
        throw new \Exception("Action indisponível!");
    }

    public function listarBoletosAction()
    {
        return (new Boleto())->getBoletos();
    }

}