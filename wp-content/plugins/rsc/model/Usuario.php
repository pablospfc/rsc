<?php
/**
 * Created by PhpStorm.
 * User: claud
 * Date: 04/03/2019
 * Time: 17:13
 */

namespace RSC\model;


use MocaBonita\tools\eloquent\MbModel;

class Usuario extends MbModel
{
    protected $table = "rsc_usuario";
    public $timestamps = true;
    protected $fillable = [
        'login',
        'senha',
    ];

}