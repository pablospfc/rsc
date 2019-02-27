<?php
/**
 * Created by PhpStorm.
 * User: claud
 * Date: 17/02/2019
 * Time: 23:06
 */

namespace RSC\model;

use MocaBonita\tools\eloquent\MbDatabase;
use MocaBonita\tools\eloquent\MbModel;

class Faturamento extends MbModel
{
    protected $table = "rsc_faturamento";
    public $timestamps = false;

    public static function getFaturamentoBySociosFuncionarios($socios,$funcionarios)
    {
        $dados = self::select(
            "fat.*"
        )
            ->from("rsc_faturamento as fat")
            ->join("rsc_mensalidade as men","men.id","=","fat.id_mensalidade")
            ->where("men.socios_minimo", "<=", $socios)
            ->where("men.socios_maximo", ">=", $socios)
            ->where("men.funcionarios_minimo", "<=", $funcionarios)
            ->where("men.funcionarios_maximo", ">=", $funcionarios)
            ->groupBy("fat.id")
            ->get()
            ->toArray();

        if (!is_array($dados) || empty($dados))
            throw new \Exception('Não foi possível listar os faturamentos!');

        return $dados;

    }

}