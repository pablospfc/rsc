<?php
/**
 * Created by PhpStorm.
 * User: claudio.santos
 * Date: 07/03/2019
 * Time: 11:50
 */

namespace RSC\model;


use MocaBonita\tools\eloquent\MbModel;

class Contrato extends MbModel
{
    protected $table = "rsc_contrato";
    public $timestamps = true;

    protected $fillable= [
        'id_cliente',
        'id_mensalidade',
        'codigo_assinatura',
    ];

    public function inserir($dados){
        try{
            $contrato=  Contrato::updateOrCreate([
                'id_cliente' => $dados['id_cliente'],
            ],[
                'id_cliente'        => $dados['id_cliente'],
                'id_mensalidade'    => $dados['id_mensalidade'],
                'codigo_assinatura' => $dados['codigo_assinatura'],
            ]);

            return ['message'=>'Contrato cadastrado com sucesso','id'=> $contrato->id];

        }catch(\Exception $e){
            Log::createFromException($e->getMessage());
            throw new \Exception("Erro ao cadastrar o seu contrato. Por favor entre em contato com o administrador do site");
        }
    }

    public function getDadosParaAssinatura($idContrato){
        $dados = self::select(
            "cli.id as id_cliente",
            "cli.nome as nome",
            "cli.cpf as cpf",
            "cli.email as email",
            "cli.telefone_residencial as telefone",
            "cli.telefone_celular as celular",
            "cli.rua",
            "cli.numero",
            "cli.complemento",
            "cli.bairro",
            "cli.cidade",
            "cli.estado",
            "cli.cep",
            "cli.data_nascimento",
            "pla.mensalidade",
            "pla.codigo_pagseguro",
            "fat.nome as faturamento",
            "tip.nome as tipo_empresa"
        )
            ->from("rsc_contrato as con")
            ->join("rsc_cliente as cli","cli.id","=","con.id_cliente")
            ->join("rsc_mensalidade as pla","pla.id","con.id_mensalidade")
            ->join("rsc_faturamento as fat","fat.id","=","pla.id_faturamento")
            ->join("rsc_tipo_empresa as tip","tip.id","=","pla.id_tipo_empresa")
            ->where("con.id", "=", $idContrato)
            ->get()
            ->toArray();

        if (!is_array($dados) || empty($dados))
            throw new \Exception('Não foi possível listar dados da sua assinatura!');

        return $dados;
    }

}