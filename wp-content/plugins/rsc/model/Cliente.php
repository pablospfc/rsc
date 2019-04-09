<?php
/**
 * Created by PhpStorm.
 * User: claud
 * Date: 04/03/2019
 * Time: 17:13
 */

namespace RSC\model;



use MocaBonita\tools\eloquent\MbDatabase;
use MocaBonita\tools\eloquent\MbModel;
use RSC\common\Encryption;
use RSC\common\Sessao;
use RSC\common\Validation;

class Cliente extends  MbModel
{
    protected $table = "rsc_cliente";
    public $timestamps = true;

    protected $fillable = [
        "nome",
        "id_usuario",
        "id_sexo",
        "id_estado_civil",
        "data_nascimento",
        "cpf",
        "rg",
        "orgao_rg",
        "data_emissao_rg",
        "email",
        "ddd",
        "telefone_residencial",
        "telefone_celular",
        "rua",
        "numero",
        "cep",
        "bairro",
        "complemento",
        "cidade",
        "estado"
    ];

    public function inserir($dados){
        try {
            MbDatabase::beginTransaction();
            $usuario = Usuario::updateOrCreate([
               'login' => $dados['cpf'],
               'senha' => Encryption::encrypt($dados['senha']),
            ]);

            $cliente = Cliente::updateOrCreate([
                'nome' => $dados['nome'],
                'id_usuario' => $usuario->id,
                'data_nascimento' => Validation::dateToMysql($dados['data_nascimento']),
                'id_sexo' => $dados['id_sexo'],
                'id_estado_civil' => $dados['id_estado_civil'],
                'cpf' => $dados['cpf'],
                'rg' => $dados['rg'],
                'orgao_rg' => $dados['orgao_rg'],
                'data_emissao_rg' => Validation::dateToMysql($dados['data_emissao_rg']),
                'email' => $dados['email'],
                'ddd' => $dados['ddd'],
                'telefone_residencial' => $dados['telefone_residencial'],
                'telefone_celular' => $dados['telefone_celular'],
                'cep' => $dados['cep'],
                'rua' => $dados['rua'],
                'numero' => $dados['numero'],
                'bairro' => $dados['bairro'],
                'complemento' => $dados['complemento'],
                'cidade' => $dados['cidade'],
                'estado' => $dados['estado'],
            ]);

            MbDatabase::commit();
            return ['message'=>'O seu cadastro básico foi realizado com sucesso! Por favor, avance para a epata de contratação.','id'=>$cliente->id];

        }catch(\Exception $e){
            MbDatabase::rollBack();
            Log::createFromException($e);
            throw new \Exception("Não foi possível fazer o seu cadastro. Por favor tente novamente!");
        }
    }

    public function getDadosPessoais(){
        try {
            $dados = Sessao::instanciar()->get('user');

            return $dados;
        }catch(\Exception $e){
            Log::createFromException($e);
            throw new \Exception("Erro ao carregar dados!");
        }
    }

}