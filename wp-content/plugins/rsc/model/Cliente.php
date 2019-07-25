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

class Cliente extends MbModel
{
    protected $table = "rsc_cliente";
    public $timestamps = true;

    protected $fillable = [
        "nome",
        "id_usuario",
        "id_sexo",
        "id_estado_civil",
        "id_tipo_pessoa",
        "data_nascimento",
        "cpf_cnpj",
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

    public function inserir($dados)
    {
        error_log(var_export($dados,true));
        try {
            MbDatabase::beginTransaction();
            $usuario = Usuario::updateOrCreate(
                [
                    'login' => $dados['cpf_cnpj']
                ], [
                'login' => $dados['cpf_cnpj'],
                'senha' => Encryption::encrypt($dados['senha']),
            ]);

            $cliente = Cliente::updateOrCreate(
                ['id' => $dados['id'],
                ],
                [
                    'nome' => $dados['nome'],
                    'id_usuario' => $usuario->id,
                    'data_nascimento' => Validation::dateToMysql($dados['data_nascimento']),
                    'id_sexo' => $dados['id_sexo'],
                    'id_estado_civil' => $dados['id_estado_civil'],
                    'id_tipo_pessoa' => $dados['id_tipo_pessoa'],
                    'cpf_cnpj' => ($dados['id_tipo_pessoa'] == 1) ? $dados['cpf'] : $dados['cnpj'],
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
            return ['message' => 'O seu cadastro básico foi realizado com sucesso! Por favor, preencha os dados da sua contratação.', 'id' => $cliente->id];

        } catch (\Exception $e) {
            MbDatabase::rollBack();
            Log::createFromException($e);
            throw new \Exception("Não foi possível fazer o seu cadastro. Por favor tente novamente!");
        }
    }

    public function atualizar($dados){
        try {
            $data = [
                'nome' => $dados['nome'],
                'data_nascimento' => Validation::dateToMysql($dados['data_nascimento']),
                'id_sexo' => $dados['id_sexo']['id'],
                'id_estado_civil' => $dados['id_estado_civil']['id'],
                'id_tipo_pessoa' => $dados['id_tipo_pessoa'],
                'cpf_cnpj' => ($dados['id_tipo_pessoa'] == 1) ? $dados['cpf'] : $dados['cnpj'],
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
            ];
            Cliente::where('id', $dados['id'])
                     ->update($data);

            return ['message' => "Os seus dados foram atualizados com sucesso"];
        }catch(\Exception $e){
            Log::createFromException($e);
            throw new \Exception('Erro ao atualizar seus dados. Por favor tente novamente!');
        }
    }

    public function getDadosPessoais()
    {
        try {
            $dados = Sessao::instanciar()->get('user');
            $cliente = Cliente::where('id','=',$dados[0]['id'])->get();
            $cliente[0]['data_nascimento'] = Validation::dateToBr($cliente[0]['data_nascimento']);
            $cliente[0]['data_emissao_rg'] = Validation::dateToBr($cliente[0]['data_emissao_rg']);
            if (strlen($cliente[0]['cpf_cnpj']) > 11)
                $cliente[0]['cnpj'] = $cliente[0]['cpf_cnpj'];
            else
                $cliente[0]['cpf'] = $cliente[0]['cpf_cnpj'];

            return $cliente;

        } catch (\Exception $e) {
            Log::createFromException($e);
            throw new \Exception("Erro ao carregar dados!");
        }
    }

    public static function getClientes(){
        try {
            $dados = self::select(
                "cli.id as id_cliente",
                "cli.nome as nome",
                "cli.cpf_cnpj as cpf_cnpj",
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
                "con.id as id_contrato",
                "pla.valor",
                "fat.nome as faturamento",
                "tip.nome as tipo_empresa"
            )
                ->from("rsc_contrato as con")
                ->join("rsc_cliente as cli","cli.id","=","con.id_cliente")
                ->join("rsc_plano as pla","pla.id","con.id_plano")
                ->join("rsc_faturamento as fat","fat.id","=","pla.id_faturamento")
                ->join("rsc_tipo_empresa as tip","tip.id","=","pla.id_tipo_empresa")
                ->get()
                ->toArray();

            return $dados;

        }catch(\Exception $e){
            Log::createFromException($e);
            throw new \Exception("Não foi possível listar os clientes.");
        }
    }

}