<?php
/**
 * Created by PhpStorm.
 * User: claudio.santos
 * Date: 22/03/2019
 * Time: 15:26
 */

namespace RSC\controller;


use MocaBonita\controller\MbController;
use MocaBonita\tools\MbRequest;
use MocaBonita\tools\MbResponse;
use RSC\model\Pagamento;

class PagamentoController extends MbController
{
    public function indexAction(MbRequest $mbRequest, MbResponse $mbResponse)
    {
        throw new \Exception("Action indisponível!");
    }

    public function inserirAtualizarPagamento(MbRequest $request){
       return (new Pagamento())->inserir($request->inputSource('notificationCode'),$request->inputSource());
    }

    public function listarTransacoesAction(){
        return (new Pagamento())->listarTransacoes();
    }

}