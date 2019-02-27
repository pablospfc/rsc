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

class TipoEmpresa extends MbModel
{
    protected $table = "rsc_tipo_empresa";
    public $timestamps = false;


}