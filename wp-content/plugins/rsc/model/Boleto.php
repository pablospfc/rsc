<?php
/**
 * Created by PhpStorm.
 * User: claud
 * Date: 16/04/2019
 * Time: 23:16
 */

namespace RSC\model;


use MocaBonita\tools\eloquent\MbModel;
use RSC\common\Sessao;

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
            ]);
               return['message'=> 'Boleto gerados com sucesso'];

        }catch(\Exception $e){
            throw new \Exception("Não foi possível cadastrar os boletos");
        }
    }

    public function getBoletos(){
        $idCliente = Sessao::instanciar()->get('user')[0]['id'];

        $dados = self::select(
            "bol.*",
            "pla.valor"
        )
            ->from("rsc_boletos as bol")
            ->join("rsc_contrato as con","con.id","=","bol.id_contrato")
            ->join("rsc_cliente as cli","cli.id","=","con.id_cliente")
            ->join("rsc_plano as pla", "pla.id", "=","con.id_plano")
            ->where("cli.id","=",$idCliente)
            ->get()
            ->toArray();

        if (!is_array($dados) || empty($dados))
            throw new \Exception('Não foi possível listar os boletos!');

        return $dados;
    }

}