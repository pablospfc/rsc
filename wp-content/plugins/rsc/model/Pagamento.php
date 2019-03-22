<?php
/**
 * Created by PhpStorm.
 * User: claud
 * Date: 04/03/2019
 * Time: 17:58
 */

namespace RSC\model;


use MocaBonita\tools\eloquent\MbModel;

class Pagamento extends MbModel
{
    protected $table = "rsc_pagamento";
    public $timestamps = false;
    protected $fillable = [
        'id_contrato',
        'valor',
        'id_status',
        'codigo_assinatura'
    ];

    public function inserir($dados){
        try {
            $pagamento = Pagamento::createOrUpdate([
                'id_contrato' => $dados['id_contrato'],
                'valor' => $dados['valor'],
                'id_status' => $dados['id_status'],
                'codigo_assinatura' => $dados['codigo_assinatura']
            ]);
            return ['message'=>'Pagamento realizado com sucesso','id'=>$pagamento->id];
        }catch(\Exception $e){
            Log::createFromException($e->getMessage());
            throw new \Exception("Não foi possível cadastrar pagamento no sistema.");
        }


    }

}