<?php
/**
 * Plugin Name: RSC
 * Plugin URI: https://www.rsccontabilidade.com.br
 * Description: RSC Contabilidade
 * Version: 2.0
 * Author: Pablo Santos
 * Author URI: github.com/pablosantos
 * License: GLPU
 */

namespace RSC;

use MocaBonita\tools\MbRequest;
use MocaBonita\MocaBonita;
use MocaBonita\tools\MbEvent;
use MocaBonita\tools\MbPage;
use MocaBonita\tools\MbPath;
use RSC\common\Sessao;
use RSC\controller\AssinaturaController;
use RSC\controller\BoletoController;
use RSC\controller\ClienteController;
use RSC\controller\AreaClienteController;
use RSC\controller\LoginController;
use RSC\controller\SimuladorController;
use RSC\controller\PagamentoController;
use RSC\model\Cliente;
use RSC\model\EstadoCivil;
use RSC\model\Genero;
use RSC\model\Log;
use RSC\model\TipoEmpresa;
use RSC\model\Unidade;
use RSC\model\Faturamento;


if (!defined('ABSPATH')) {
    die('Acesso negado!' . PHP_EOL);
}

$pluginPath = plugin_dir_path(__FILE__);
$loader = require $pluginPath . "vendor/autoload.php";
$loader->addPsr4(__NAMESPACE__ . '\\', $pluginPath);

MocaBonita::active(function () {
    Log::createSchemaModel();
});


MocaBonita::plugin(function (MocaBonita $mocabonita) {
    $simuladorPage = MbPage::create("Simulador")
        ->setController(SimuladorController::class)
        ->setSlug("simulador");

    $pagamentoPage = MbPage::create("Pagamento")
        ->setController(PagamentoController::class)
        ->setSlug("pagamento");

    $boletoPage = MbPage::create("Boleto")
        ->setController(BoletoController::class)
        ->setSlug("boleto");

    $clientePage = MbPage::create("Cliente")
        ->setController(ClienteController::class)
        ->setSlug("cliente");

    $assinaturaPage = MbPage::create("Assinatura")
        ->setController(AssinaturaController::class)
        ->setSlug("assinatura");

    $loginPage = MbPage::create("Login")
        ->setController(LoginController::class)
        ->setSlug("login");

    $pagamentoPage->addMbAction("listarTransacoes")
        ->setRequiresMethod("GET")
        ->setRequiresLogin(false)
        ->setCapability("read");

    $areaClientePage = MbPage::create("AreaCliente")
        ->setController(AreaClienteController::class)
        ->setSlug("areacliente");

    $areaClientePage->addMbAction("getDadosPessoais")
        ->setRequiresMethod("GET")
        ->setRequiresLogin(false)
        ->setCapability("read")
        ->setCallback(function () {
            return (new Cliente())->getDadosPessoais();
        });

    $areaClientePage->addMbAction("atualizarCliente")
        ->setRequiresMethod("POST")
        ->setRequiresLogin(false)
        ->setCapability("read");

    $areaClientePage->addMbAction("areacliente")
        ->setRequiresMethod("GET")
        ->setCapability("read")
        ->setRequiresLogin(false);

    $loginPage->addMbAction("logar")
        ->setRequiresMethod("POST")
        ->setRequiresLogin(false)
        ->setCapability("read");

    $loginPage->addMbAction("sair")
        ->setRequiresMethod("GET")
        ->setRequiresLogin(false)
        ->setCapability("read")
        ->setCallback(function () {
            $retorno = Sessao::instanciar()->destruir('user');
            return ['status'=>$retorno];
        });

    $loginPage->addMbAction("login")
        ->setRequiresMethod("GET")
        ->setCapability("read")
        ->setRequiresLogin(false);

    $loginPage->addMbAction("estaLogado")
        ->setRequiresMethod("GET")
        ->setCapability("read")
        ->setRequiresLogin(false)
        ->setCallback(function () {
            $retorno = Sessao::instanciar()->existe('user');
            return ['status'=>$retorno];
        });

    $boletoPage->addMbAction("listarBoletos")
        ->setRequiresMethod("GET")
        ->setCapability("read")
        ->setRequiresLogin(false);

    $assinaturaPage->addMbAction("criarPlano")
        ->setRequiresMethod("GET")
        ->setCapability("read")
        ->setRequiresLogin(false);

    $assinaturaPage->addMbAction("cancelar")
        ->setRequiresMethod("GET")
        ->setCapability("read")
        ->setRequiresLogin(false);

    $assinaturaPage->addMbAction("getDadosAssinatura")
        ->setRequiresMethod("GET")
        ->setCapability("read")
        ->setRequiresLogin(false);

    $assinaturaPage->addMbAction("assinar")
        ->setRequiresMethod("POST")
        ->setRequiresLogin(false)
        ->setCapability("read");

    $assinaturaPage->addMbAction("gerarBoletos")
        ->setRequiresMethod("POST")
        ->setRequiresLogin(false)
        ->setCapability("read");

    $assinaturaPage->addMbAction("getNotificacao")
        ->setRequiresMethod("POST")
        ->setRequiresLogin(false)
        ->setCapability("read");

    $assinaturaPage->addMbAction("getDadosParaAssinatura")
        ->setRequiresMethod("GET")
        ->setCapability("read")
        ->setRequiresLogin(false);

    $assinaturaPage->addMbAction("iniciaSessao")
        ->setRequiresMethod("GET")
        ->setCapability("read")
        ->setRequiresLogin(false);

    $clientePage->addMbAction("cadastro")
        ->setRequiresMethod("GET")
        ->setCapability("read")
        ->setRequiresLogin(false);

    $clientePage->addMbAction("getGeneros")
        ->setRequiresMethod("GET")
        ->setRequiresAjax()
        ->setCapability("read")
        ->setRequiresLogin(false)
        ->setCallback(function () {
            return Genero::all();
        });

    $clientePage->addMbAction("getEstadosCivis")
        ->setRequiresMethod("GET")
        ->setRequiresAjax()
        ->setCapability("read")
        ->setRequiresLogin(false)
        ->setCallback(function () {
            return EstadoCivil::all();
        });

    $clientePage->addMbAction("cadastrarCliente")
        ->setRequiresMethod("POST")
        ->setRequiresLogin(false)
        ->setCapability("read");

    $clientePage->addMbAction("cadastrarContrato")
        ->setRequiresMethod("POST")
        ->setRequiresLogin(false)
        ->setCapability("read");

    $simuladorPage->addMbAction("formulario_calculo")
        ->setRequiresMethod("GET")
        ->setCapability("read")
        ->setRequiresLogin(false);

    $simuladorPage->addMbAction("getPlano")
        ->setRequiresMethod("GET")
        ->setRequiresAjax()
        ->setRequiresLogin(false)
        ->setCapability("read");

    $simuladorPage->addMbAction("getTiposEmpresas")
        ->setRequiresMethod("GET")
        ->setRequiresAjax()
        ->setCapability("read")
        ->setRequiresLogin(false)
        ->setCallback(function () {
            return TipoEmpresa::all();
        });

    $simuladorPage->addMbAction("getUnidades")
        ->setRequiresMethod("GET")
        ->setRequiresAjax()
        ->setCapability("read")
        ->setRequiresLogin(false)
        ->setCallback(function () {
            return Unidade::all();
        });

    $simuladorPage->addMbAction("getFaturamentosByFuncionarioESocio")
        ->setRequiresMethod("GET")
        ->setRequiresAjax()
        ->setCapability("read")
        ->setRequiresLogin(false)
        ->setCallback(function (MbRequest $mbRequest) {
            return Faturamento::getFaturamentoBySociosFuncionarios($mbRequest->query('socios'), $mbRequest->query('funcionarios'));
        });

    $mocabonita->addMbShortcode("simulador_calc", $simuladorPage, "simulador")
        ->getMbAsset()
        ->setJs(MbPath::pBwDir("jquery/dist/jquery.min.js"))
        ->setCss(MbPath::pCssDir("style.css"))
        //->setCss(MbPath::pBwDir("bootstrap/dist/css/bootstrap.min.css"))
        //->setCss(MbPath::pBwDir("bootstrap/dist/css/bootstrap-grid.min.css"))
        //->setJs(MbPath::pBwDir("bootstrap/dist/js/bootstrap.min.js"))
        ->setJs(MbPath::pBwDir("angular/angular.min.js"))
        ->setJs(MbPath::pBwDir("angular-sanitize/angular-sanitize.min.js"))
        //->setJs(MbPath::pBwDir("angular-i18n/angular-locale_pt-br.js"))
        ->setJs(MbPath::pBwDir("barbara-js/barbarajs.min.js"))
        ->setJs(MbPath::pBwDir("angular-modal-service/dst/angular-modal-service.min.js"))
        ->setJs(MbPath::pBwDir("angular-br-filters/release/angular-br-filters.min.js"))
        ->setJs(MbPath::pBwDir("angular-messages/angular-messages.min.js"))
        ->setJs(MbPath::pBwDir("angular-route/angular-route.min.js"))
        ->setJs(MbPath::pBwDir("angular-wizard/dist/angular-wizard.min.js"))
        ->setJs(MbPath::pBwDir("angular-input-masks/angular-input-masks-standalone.js"))
        ->setJs(MbPath::pBwDir("ng-cpf-cnpj/lib/ngCpfCnpj.js"))
        ->setJs(MbPath::pBwDir("angular-ui-mask/dist/mask.js"))
        ->setJs(MbPath::pJsDir("src/app.js"))
        ->setJs(MbPath::pJsDir("src/controller/login.js"))
        ->setJs(MbPath::pJsDir("src/controller/simulador.js"))
        ->setJs(MbPath::pJsDir("src/controller/simulador-modal.js"))
        ->setJs(MbPath::pJsDir("src/service/loginService.js"))
        ->setJs(MbPath::pJsDir("src/service/sessionService.js"))
        ->setJs(MbPath::pJsDir("src/service/RscFrontService.js"));

    //$mocabonita->addMbShortcode("cadastro_cliente", $clientePage, "cliente")
    //$mocabonita->addMbShortcode("login", $loginPage, "login")
    $mocabonita->addMbShortcode("cadastro_cliente", $clientePage, "cliente")
        ->getMbAsset()
        ->setJs(MbPath::pBwDir("jquery/dist/jquery.min.js"))
        ->setCss(MbPath::pCssDir("payment.css"))
        //->setCss(MbPath::pBwDir("bootstrap/dist/css/bootstrap.min.css"))
        //->setCss(MbPath::pBwDir("bootstrap/dist/css/bootstrap-grid.min.css"))
        //->setJs(MbPath::pBwDir("bootstrap/dist/js/bootstrap.min.js"))
        ->setJs(MbPath::pBwDir("angular/angular.min.js"))
        ->setJs(MbPath::pBwDir("angular-sanitize/angular-sanitize.min.js"))
        ->setJs(MbPath::pBwDir("angular-locale-pt-br/angular-locale_pt-br.js"))
        ->setJs(MbPath::pBwDir("barbara-js/barbarajs.min.js"))
        ->setJs(MbPath::pBwDir("angular-modal-service/dst/angular-modal-service.min.js"))
        ->setJs(MbPath::pBwDir("angular-br-filters/release/angular-br-filters.min.js"))
        ->setJs(MbPath::pBwDir("angular-messages/angular-messages.min.js"))
        ->setJs(MbPath::pBwDir("angular-route/angular-route.min.js"))
        ->setJs(MbPath::pBwDir("angular-wizard/dist/angular-wizard.min.js"))
        ->setJs(MbPath::pBwDir("angular-input-masks/angular-input-masks-standalone.js"))
        ->setJs(MbPath::pBwDir("ng-cpf-cnpj/lib/ngCpfCnpj.js"))
        ->setJs(MbPath::pBwDir("angular-ui-mask/dist/mask.js"))
        ->setJs(MbPath::pJsDir("pagseguro/pagseguro.directpayment.js"))
        ->setJs(MbPath::pJsDir("src/app.js"))
        ->setJs(MbPath::pJsDir("src/controller/login.js"))
        ->setJs(MbPath::pJsDir("src/controller/cliente.js"))
        ->setJs(MbPath::pJsDir("src/service/RscFrontService.js"))
        ->setJs(MbPath::pJsDir("src/service/loginService.js"))
        ->setJs(MbPath::pJsDir("src/service/sessionService.js"));

    $mocabonita->addMbShortcode("area_cliente", $areaClientePage, "areacliente")
        ->getMbAsset()
        ->setJs(MbPath::pBwDir("jquery/dist/jquery.min.js"))
        ->setCss(MbPath::pCssDir("area-cliente.css"))
        //->setCss(MbPath::pBwDir("bootstrap/dist/css/bootstrap.min.css"))
        //->setCss(MbPath::pBwDir("bootstrap/dist/css/bootstrap-grid.min.css"))
        //->setJs(MbPath::pBwDir("bootstrap/dist/js/bootstrap.min.js"))
        ->setJs(MbPath::pBwDir("angular/angular.min.js"))
        ->setJs(MbPath::pBwDir("angular-sanitize/angular-sanitize.min.js"))
        ->setJs(MbPath::pBwDir("angular-locale-pt-br/angular-locale_pt-br.js"))
        ->setJs(MbPath::pBwDir("barbara-js/barbarajs.min.js"))
        ->setJs(MbPath::pBwDir("angular-modal-service/dst/angular-modal-service.min.js"))
        ->setJs(MbPath::pBwDir("angular-br-filters/release/angular-br-filters.min.js"))
        ->setJs(MbPath::pBwDir("angular-messages/angular-messages.min.js"))
        ->setJs(MbPath::pBwDir("angular-route/angular-route.min.js"))
        ->setJs(MbPath::pBwDir("angular-wizard/dist/angular-wizard.min.js"))
        ->setJs(MbPath::pBwDir("angular-input-masks/angular-input-masks-standalone.js"))
        ->setJs(MbPath::pBwDir("ng-cpf-cnpj/lib/ngCpfCnpj.js"))
        ->setJs(MbPath::pBwDir("angular-ui-mask/dist/mask.js"))
        ->setJs(MbPath::pJsDir("pagseguro/pagseguro.directpayment.js"))
        ->setJs(MbPath::pJsDir("src/app.js"))
        ->setJs(MbPath::pJsDir("src/controller/login.js"))
        ->setJs(MbPath::pJsDir("src/controller/areacliente.js"))
        ->setJs(MbPath::pJsDir("src/controller/cliente.js"))
        ->setJs(MbPath::pJsDir("src/service/RscFrontService.js"))
        ->setJs(MbPath::pJsDir("src/service/loginService.js"))
        ->setJs(MbPath::pJsDir("src/service/sessionService.js"));


    $mocabonita->addMbPage($simuladorPage);
    $mocabonita->addMbPage($clientePage);
    $mocabonita->addMbPage($assinaturaPage);
    $mocabonita->addMbPage($loginPage);
    $mocabonita->addMbPage($areaClientePage);
    $mocabonita->addMbPage($pagamentoPage);
    $mocabonita->addMbPage($boletoPage);

}, true);
