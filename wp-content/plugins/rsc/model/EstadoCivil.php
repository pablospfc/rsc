<?php
/**
 * Created by PhpStorm.
 * User: claud
 * Date: 05/03/2019
 * Time: 15:42
 */

namespace RSC\model;


use MocaBonita\tools\eloquent\MbModel;

class EstadoCivil extends MbModel
{
    protected $table = "rsc_estado_civil";
    public $timestamps = false;

}