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
    ];

    public function inserir($dados){
        try{
            $contrato=  Contrato::updateOrCreate([
                'id_cliente'     => $dados['id_cliente'],
                'id_mensalidade' => $dados['id_mensalidade'],
            ]);

            //error_log(var_export($dados,true));
            return ['message'=>'Contrato cadastrado com sucesso','id'=> $contrato->id];

        }catch(\Exception $e){
            Log::createFromException($e->getMessage());
            throw new \Exception("Erro ao cadastrar o seu contrato. Por favor entre em contato com o administrador do site");
        }
    }

}