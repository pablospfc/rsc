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

}