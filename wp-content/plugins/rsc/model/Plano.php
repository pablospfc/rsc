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

class Plano extends MbModel
{

    protected $table = "rsc_plano";

    public $timestamps = false;

    protected $fillable = [
        "id_tipo_empresa",
        "socios_minimo",
        "socios_maximo",
        "funcionarios_minimo",
        "funcionarios_maximo",
        "valor",
        "faturamento",
    ];

    public function getPlano($socios, $funcionarios, $idFaturamento, $idTipoEmpresa)
    {
        $dados = self::select(
            "pla.id",
            "pla.valor as valor",
            "tpe.nome as tipo_empresa",
            "fat.nome as faturamento",
            "pla.socios_minimo",
            "pla.socios_maximo",
            "pla.funcionarios_minimo",
            "pla.funcionarios_maximo"
        )
            ->from("rsc_plano as pla")
            ->join("rsc_tipo_empresa as tpe", "tpe.id", "=", "pla.id_tipo_empresa")
            ->join("rsc_faturamento as fat", "fat.id", "=", "pla.id_faturamento")
            ->where("pla.id_tipo_empresa", $idTipoEmpresa)
            ->where("pla.id_faturamento", $idFaturamento)
            ->where("pla.socios_minimo", "<=", $socios)
            ->where("pla.socios_maximo", ">=", $socios)
            ->where("pla.funcionarios_minimo", "<=", $funcionarios)
            ->where("pla.funcionarios_maximo", ">=", $funcionarios)
            ->get()
            ->toArray();

        if (!is_array($dados) || empty($dados))
            throw new \Exception('Não oferecemos plano para os dados fornecidos. Por favor entre em contato conosco enviando um email para cadastro@rsccontabilidade.com.br.');

        return $dados;

    }


    public function getPlanos()
    {

        $dados = self::select(
            "pla.id",
            "pla.valor as valor",
            "tpe.nome as tipo_empresa",
            "fat.nome as faturamento",
            "pla.socios_minimo",
            "pla.socios_maximo",
            "pla.funcionarios_minimo",
            "pla.funcionarios_maximo"
        )
            ->from("rsc_plano as pla")
            ->join("rsc_tipo_empresa as tpe", "tpe.id", "=", "pla.id_tipo_empresa")
            ->join("rsc_faturamento as fat", "fat.id", "=", "pla.id_faturamento")
            ->where("pla.valor", "<>", "0.00")
            ->whereNull("pla.codigo_pagseguro")
            ->get()
            ->toArray();

        if (!is_array($dados) || empty($dados))
            throw new \Exception("Não foi possível listar dados de planos!");


        return $dados;
    }


}