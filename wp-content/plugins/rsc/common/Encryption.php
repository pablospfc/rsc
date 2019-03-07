<?php
/**
 * Created by PhpStorm.
 * User: claud
 * Date: 06/03/2019
 * Time: 13:21
 */

namespace RSC\common;


class Encryption
{

    public static function encrypt($password){
        $salt = md5("$2567bTyZY9675241!yx#&");
        return md5($salt.$password);
    }

    public static function decrypt($password){

    }

}