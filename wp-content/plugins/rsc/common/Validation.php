<?php
/**
 * Created by PhpStorm.
 * User: claud
 * Date: 06/03/2019
 * Time: 16:33
 */

namespace RSC\common;


class Validation
{
    public static function dateToMysql($date){
            $newDate = str_replace("/", "-", $date);
            return date('Y-m-d', strtotime($newDate));
    }

    public static function dateToBr($date){
        return date("d/m/Y", strtotime($date));
    }


}