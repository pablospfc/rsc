<?php
/**
 * Created by PhpStorm.
 * User: claudio.santos
 * Date: 08/04/2019
 * Time: 11:27
 */

namespace RSC\controller;


use MocaBonita\controller\MbController;
use MocaBonita\tools\MbRequest;
use MocaBonita\tools\MbResponse;

class HomeController extends MbController
{
    public function indexAction(MbRequest $mbRequest, MbResponse $mbResponse)
    {
        return $this->getMbView()
            ->setPage("home")
            ->setAction("index");
    }


}