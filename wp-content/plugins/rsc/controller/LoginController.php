<?php
/**
 * Created by PhpStorm.
 * User: claud
 * Date: 31/03/2019
 * Time: 12:22
 */

namespace RSC\controller;


use MocaBonita\controller\MbController;
use MocaBonita\tools\MbRequest;
use MocaBonita\tools\MbResponse;
use RSC\model\Log;
use RSC\model\Login;

class LoginController extends MbController
{
    public function indexAction(MbRequest $mbRequest, MbResponse $mbResponse)
    {
        throw new \Exception("Action indisponível!");
    }

    public function loginShortcode()
    {
        return $this->getMbView()
            ->setPage("login")
            ->setAction("index");
    }

    public function loginAction()
    {
        return $this->getMbView()
            ->setTemplate("modal")
            ->setPage("login")
            ->setAction("login");
    }

    public function logarAction(MbRequest $request){
        return (new Login())->autenticar($request->inputSource());
    }

}