<?php
/**
 * Created by PhpStorm.
 * User: claudio.santos
 * Date: 20/03/2019
 * Time: 15:47
 */

namespace RSC\controller;


use MocaBonita\controller\MbController;
use MocaBonita\tools\MbRequest;
use MocaBonita\tools\MbResponse;
use RSC\model\Assinatura;
use RSC\model\Contrato;

class AssinaturaController extends MbController
{
    public function indexAction(MbRequest $mbRequest, MbResponse $mbResponse)
    {
        throw new \Exception("Action indisponível!");
    }

    public function criarPlanoAction(){
        return (new Assinatura())->criarPlano();
    }
    public function cancelarAction(){
        return (new Assinatura())->cancelar();
    }

    public function assinarAction(MbRequest $mbRequest){
        return (new Assinatura())->assinar($mbRequest->inputSource());
    }

    public function getDadosParaAssinaturaAction(MbRequest $request){
        return (new Contrato())->getDadosParaAssinatura($request->query('id_contrato'));
    }

    public function getNotificacaoAction(MbRequest $request){
        return (new Assinatura())->getNotificacao($request->inputSource());
    }

}