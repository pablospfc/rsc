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
        'status',
    ];

    public function inserir($dados){
        $pagamento = Pagamento::createOrUpdate([
            'id_contrato' => $dados['id_contrato'],
            'valor'       => $dados['valor'],
            'status'      => 0,
        ]);


    }

}