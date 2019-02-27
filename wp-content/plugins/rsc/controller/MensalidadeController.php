<?php
/**
 * Created by PhpStorm.
 * User: claud
 * Date: 17/02/2019
 * Time: 11:20
 */

namespace RSC\controller;
use MocaBonita\tools\MbRequest;
use MocaBonita\tools\MbResponse;
use MocaBonita\controller\MbController;
use RSC\model\Mensalidade;

class MensalidadeController extends MbController
{
    public function indexAction(MbRequest $mbRequest, MbResponse $mbResponse)
    {
        throw new \Exception("Action indisponível!");
    }

    public function getMensalidadeAction(MbRequest $mbRequest){
        return (new Mensalidade())->getMensalidade($mbRequest->query('socios'),$mbRequest->query('funcionarios'),$mbRequest->query('id_faturamento'),$mbRequest->query('id_tipo_empresa'));
    }

    public function mensalidadeShortcode()
    {
        return $this->getMbView()
            ->setPage("mensalidade")
            ->setAction("index");
    }

    public function formularioCalculoAction()
    {
        return $this->getMbView()
            ->setTemplate("modal")
            ->setPage("mensalidade")
            ->setAction("formulario_calculo");
    }

}