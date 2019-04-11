<?php
/**
 * Created by PhpStorm.
 * User: claud
 * Date: 04/03/2019
 * Time: 17:58
 */

namespace RSC\model;


use MocaBonita\tools\eloquent\MbModel;
use RSC\common\Sessao;

class Pagamento extends MbModel
{
    protected $table = "rsc_pagamento";
    public $timestamps = false;
    protected $fillable = [
        'id_contrato',
        'valor',
        'id_status',
        'codigo_transacao',
        'data_transacao',
        'id_forma_pagamento',
    ];

    public function inserir($dados){
        try {
            $pagamento = Pagamento::updateOrCreate([
                'id_contrato'      => $dados['id_contrato'],
                'valor'            => $dados['valor'],
                'id_status'        => $dados['id_status'],
                'codigo_transacao' => $dados['codigo_transacao'],
                'data_transacao'   => $dados['data_transacao'],
                'id_forma_pagamento' => $dados['id_forma_pagamento'],
            ]);
            return ['message'=>'Pagamento realizado com sucesso','id'=>$pagamento->id];
        }catch(\Exception $e){
            Log::createFromException($e);
            throw new \Exception("Não foi possível cadastrar pagamento no sistema.");
        }
    }

    public function listarTransacoes(){
        $idCliente = Sessao::instanciar()->get('user')[0]['id'];
        $dados = self::select(
            "pag.valor",
            "pag.data_transacao",
            "sta.nome as status",
            "cli.nome as nome",
            "men.socios_minimo",
            "men.socios_maximo",
            "men.funcionarios_minimo",
            "men.funcionarios_maximo",
            "tpe.nome as tipo_empresa",
            "fpg.nome as forma_pagamento"
        )
            ->from("rsc_pagamento as pag")
            ->join("rsc_forma_pagamento as fpg","fpg.id","=","pag.id_forma_pagamento")
            ->join("rsc_contrato as con","con.id","=","pag.id_contrato")
            ->join("rsc_cliente as cli","cli.id","=","con.id_cliente")
            ->join("rsc_status as sta","sta.id","=","pag.id_status")
            ->join("rsc_mensalidade as men","men.id","=","con.id_mensalidade")
            ->join("rsc_tipo_empresa as tpe","tpe.id","=","men.id_tipo_empresa")
            ->where("cli.id","=",$idCliente)
            ->where("sta.id","=",3)
            ->get()
            ->toArray();

        if (!is_array($dados) || empty($dados))
            throw new \Exception('Não foi possível listar suas transações!');

        return $dados;

    }

}