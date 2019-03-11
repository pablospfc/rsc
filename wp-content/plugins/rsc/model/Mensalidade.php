<?php
/**
 * Created by PhpStorm.
 * User: claud
 * Date: 17/02/2019
 * Time: 11:27
 */
namespace RSC\model;

use MocaBonita\tools\eloquent\MbDatabase;
use MocaBonita\tools\eloquent\MbModel;

class Mensalidade extends MbModel
{

    protected $table = "rsc_mensalidade";

    public $timestamps = false;

    protected $fillable = [
        "id_tipo_empresa",
        "socios_minimo",
        "socios_maximo",
        "funcionarios_minimo",
        "funcionarios_maximo",
        "mensalidade",
        "faturamento",
    ];

    public function getMensalidade($socios,$funcionarios,$idFaturamento,$idTipoEmpresa)
    {

            $dados = self::select(
                        "id",
                                 "mensalidade"
            )
                ->from("rsc_mensalidade")
                ->where("id_tipo_empresa", $idTipoEmpresa)
                ->where("id_faturamento", $idFaturamento)
                ->where("socios_minimo", "<=", $socios)
                ->where("socios_maximo", ">=", $socios)
                ->where("funcionarios_minimo", "<=", $funcionarios)
                ->where("funcionarios_maximo", ">=", $funcionarios)
                ->get()
                ->toArray();

           if (!is_array($dados) || empty($dados))
               throw new \Exception('Não oferecemos mensalidade para os dados fornecidos. Por favor entre em contato conosco enviando um email para cadastro@rsccontabilidade.com.br.');

            return $dados;

    }


}