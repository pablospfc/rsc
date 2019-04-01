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

class Login extends MbModel
{
    protected $table = "rsc_usuario";
    public $timestamps = true;

    public function autenticar($dados){
        $dados = self::select(
            "cli.id as id_cliente",
            "cli.nome as nome",
            "cli.cpf as cpf",
            "cli.email as email",
            "cli.ddd as ddd",
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

        return $dados;
    }

}