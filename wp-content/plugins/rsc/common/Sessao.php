<?php
/**
 * Created by PhpStorm.
 * User: claud
 * Date: 30/03/2019
 * Time: 20:54
 */

namespace RSC\common;


class Sessao
{

    private static $instancia;

    /**
     *
     * @return Sessao
     */
    public static function instanciar()
    {

        if (self::$instancia = !null)
            self::$instancia = new Sessao();

        return self::$instancia;
    }

    public function set($chave, $valor)
    {
        session_start();
        $_SESSION[$chave] = $valor;
        session_write_close();
    }

    public function get($chave)
    {
        session_start();
        $value = isset($_SESSION[$chave]) ? $_SESSION[$chave] : false;
        session_write_close();
        return $value;
    }

    public function existe($chave)
    {
        session_start();
        if (isset($_SESSION[$chave]) && (!empty($_SESSION[$chave]))) {
            session_write_close();
            return true;
        } else {
            session_write_close();
            return false;
        }
    }

    public function destruir($chave)
    {
        session_start();
        if (isset($_SESSION[$chave])) {
            unset($_SESSION[$chave]);
            session_write_close();
            return true;
        }
        session_write_close();
        return false;
    }
}