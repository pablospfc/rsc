<?php
/**
 * Created by PhpStorm.
 * User: claud
 * Date: 31/03/2019
 * Time: 12:23
 */

namespace RSC\model;
use MocaBonita\tools\eloquent\MbModel;
use RSC\common\Encryption;
use RSC\common\Sessao;
use RSC\common\Validation;

class Login extends MbModel
{
    protected $table = "rsc_usuario";
    public $timestamps = true;

    public function autenticar($dados){

        $dados = self::select(
            "cli.*",
            "usu.login"
        )
            ->from("rsc_usuario as usu")
            ->join("rsc_cliente as cli","cli.id_usuario","=","usu.id")
            ->where("usu.login", "=", $dados['login'])
            ->where('usu.senha','=',Encryption::encrypt($dados['senha']))
            ->get()
            ->toArray();



        if (!is_array($dados) || empty($dados))
            throw new \Exception('Não foi possível realizar o login no sistema. É possível que os dados fornecidos estejam incorretos!');
        else{
            $dados[0]['data_nascimento'] = Validation::dateToBr($dados[0]['data_nascimento']);
            $dados[0]['data_emissao_rg'] = Validation::dateToBr($dados[0]['data_emissao_rg']);
        }

        $user = uniqid("ang_");
        Sessao::instanciar()->set('user',$user);

        return ['dados' => $dados,'uid' => $user];
    }

}