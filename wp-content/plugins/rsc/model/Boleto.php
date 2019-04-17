<?php
/**
 * Created by PhpStorm.
 * User: claud
 * Date: 16/04/2019
 * Time: 23:16
 */

namespace RSC\model;


use MocaBonita\tools\eloquent\MbModel;

class Boleto extends MbModel
{
    protected $table = "rsc_boletos";

    public $timestamps = true;

    protected $fillable = [
        "id_contrato",
        "codigo_transacao",
        "codigo_barras",
        "data_vencimento",
        "link",
        ];

    public function inserir($dados){
        try {
            $boleto = Boleto::updateOrCreate(
                [
                'id_contrato' => $dados['id_contrato'],
                'codigo_transacao' => $dados['codigo_transacao'],
                'codigo_barras' => $dados['codigo_barras'],
                'data_vencimento' => $dados['data_vencimento'],
                'link' => $dados['link'],
                'senha' => Encryption::encrypt($dados['senha']),
            ]);
               return['message'=> 'Boleto gerados com sucesso'];

        }catch(\Exception $e){
            throw new \Exception("Não foi possível cadastrar os boletos");
        }
    }

}