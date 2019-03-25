<?php
/**
 * Plugin Name: RSC
 * Plugin URI: http://www.rsccontabilidade.com.br
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
use RSC\controller\AssinaturaController;
use RSC\controller\ClienteController;
use RSC\controller\MensalidadeController;
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
    $mensalidadePage = MbPage::create("Mensalidade")
        ->setController(MensalidadeController::class)
        ->setSlug("mensalidade");

    $clientePage = MbPage::create("Cliente")
        ->setController(ClienteController::class)
        ->setSlug("cliente");

    $assinaturaPage = MbPage::create("Assinatura")
        ->setController(AssinaturaController::class)
        ->setSlug("assinatura");

    $assinaturaPage->addMbAction("criarPlano")
        ->setRequiresMethod("GET")
        ->setCapability("read")
        ->setRequiresLogin(false);

    $assinaturaPage->addMbAction("cancelar")
        ->setRequiresMethod("GET")
        ->setCapability("read")
        ->setRequiresLogin(false);

    $assinaturaPage->addMbAction("assinar")
        ->setRequiresMethod("POST")
        ->setRequiresLogin(false)
        ->setCapability("read");

    $assinaturaPage->addMbAction("getDadosParaAssinatura")
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

    $mensalidadePage->addMbAction("formulario_calculo")
        ->setRequiresMethod("GET")
        ->setCapability("read")
        ->setRequiresLogin(false);

    $mensalidadePage->addMbAction("getMensalidade")
        ->setRequiresMethod("GET")
        ->setRequiresAjax()
        ->setRequiresLogin(false)
        ->setCapability("read");

    $mensalidadePage->addMbAction("getTiposEmpresas")
        ->setRequiresMethod("GET")
        ->setRequiresAjax()
        ->setCapability("read")
        ->setRequiresLogin(false)
        ->setCallback(function () {
            return TipoEmpresa::all();
        });

    $mensalidadePage->addMbAction("getUnidades")
        ->setRequiresMethod("GET")
        ->setRequiresAjax()
        ->setCapability("read")
        ->setRequiresLogin(false)
        ->setCallback(function () {
            return Unidade::all();
        });

    $mensalidadePage->addMbAction("getFaturamentosByFuncionarioESocio")
        ->setRequiresMethod("GET")
        ->setRequiresAjax()
        ->setCapability("read")
        ->setRequiresLogin(false)
        ->setCallback(function (MbRequest $mbRequest) {
            return Faturamento::getFaturamentoBySociosFuncionarios( $mbRequest->query('socios'),$mbRequest->query('funcionarios'));
        });

    $mocabonita->addMbShortcode("mensalidade_calc", $mensalidadePage, "mensalidade");

    $mensalidadePage->getMbAsset()
        ->setJs(MbPath::pBwDir("jquery/dist/jquery.min.js"))
        ->setCss(MbPath::pCssDir("style.css"))
        //->setCss(MbPath::pBwDir("bootstrap/dist/css/bootstrap.min.css"))
        //->setCss(MbPath::pBwDir("bootstrap/dist/css/bootstrap-grid.min.css"))
        //->setJs(MbPath::pBwDir("bootstrap/dist/js/bootstrap.min.js"))
        ->setJs(MbPath::pBwDir("angular/angular.min.js"))
        ->setJs(MbPath::pBwDir("angular-sanitize/angular-sanitize.min.js"))
        ->setJs(MbPath::pBwDir("angular-i18n/angular-locale_pt-br.js"))
        ->setJs(MbPath::pBwDir("barbara-js/barbarajs.min.js"))
        ->setJs(MbPath::pBwDir("angular-modal-service/dst/angular-modal-service.min.js"))
        ->setJs(MbPath::pBwDir("angular-br-filters/release/angular-br-filters.min.js"))
        ->setJs(MbPath::pBwDir("angular-messages/angular-messages.min.js"))
        ->setJs(MbPath::pBwDir("angular-route/angular-route.min.js"))

        ->setJs(MbPath::pJsDir("src/app.js"))
        ->setJs(MbPath::pJsDir("src/controller/mensalidade.js"))
        ->setJs(MbPath::pJsDir("src/controller/mensalidade-modal.js"))
        ->setJs(MbPath::pJsDir("src/service/RscFrontService.js"));

    $mocabonita->addMbShortcode("cadastro_cliente", $clientePage, "cliente")
        ->getMbAsset()
        ->setJs(MbPath::pBwDir("jquery/dist/jquery.min.js"))
        //->setCss(MbPath::pCssDir("style.css"))
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
        ->setJs(MbPath::pJsDir("src/app.js"))
        ->setJs(MbPath::pJsDir("src/controller/cliente.js"))
        ->setJs(MbPath::pJsDir("src/service/RscFrontService.js"));




    $mocabonita->addMbPage($mensalidadePage);
    $mocabonita->addMbPage($clientePage);
    $mocabonita->addMbPage($assinaturaPage);

},true);
