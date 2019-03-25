<?php
/**
 * Created by PhpStorm.
 * User: claudio.santos
 * Date: 20/03/2019
 * Time: 14:54
 */

namespace RSC\model;
use CWG\PagSeguro\PagSeguroAssinaturas;

class Assinatura
{
       private $email = "claudiopablosilva@hotmail.com";
       private $token = "2382B416442D464CADC943D232AD6045";
       private $sandbox = true;
       private $pagseguro = null;

        function __construct()
        {
        $this->pagseguro = new PagSeguroAssinaturas($this->email, $this->token, $this->sandbox);
        }

    public function criarPlano(){
        //Cria um nome para o plano
        $this->pagseguro->setReferencia('LUCRO PRESUMIDO - SERVIÇO');

//Cria uma descrição para o plano
        $this->pagseguro->setDescricao('Libera o acesso mensalmente aos serviços de abertura de empresa lucro presumido de serviço com 1 sócio e nenhum funcionário da RSC Contabilidade');

//Valor a ser cobrado a cada renovação
        $this->pagseguro->setValor('180.00');

//De quanto em quanto tempo será realizado uma nova cobrança (MENSAL, BIMESTRAL, TRIMESTRAL, SEMESTRAL, ANUAL)
        $this->pagseguro->setPeriodicidade(PagSeguroAssinaturas::MENSAL);

//=== Campos Opcionais ===//
//Após quanto tempo a assinatura irá expirar após a contratação = valor inteiro + (DAYS||MONTHS||YEARS). Exemplo, após 5 anos
        $this->pagseguro->setExpiracao(25, 'YEARS');

//URL para redicionar a pessoa do portal PagSeguro para uma página de cancelamento no portal
        //$this->pagseguro->setURLCancelamento('http://localhost/rsc/wp-admin/cancelando.php');

//Local para o comprador será redicionado após a compra com o código (code) identificador da assinatura
        //$this->pagseguro->setRedirectURL('http://carloswgama.com.br/pagseguro/not/assinando.php');

//Máximo de pessoas que podem usar esse plano. Exemplo 10.000 pessoas podem usar esse plano
        $this->pagseguro->setMaximoUsuariosNoPlano(10000);

        try{
            $codigoPlano =  $this->pagseguro->criarPlano();
            return ['message'=>'Plano com código '.$codigoPlano.' criado com sucesso'];
        } catch (\Exception $e) {
            Log::createFromException($e);
            throw new \Exception('Não foi possível criar o plano.'.$e->getMessage());
        }

    }

    public function assinar($dados){
                    //Nome do comprador igual a como esta no CARTÂO
        $this->pagseguro->setNomeCliente($dados['nome']);
            //Email do comprovador
        $this->pagseguro->setEmailCliente($dados['email']);
            //Informa o telefone DD e número
        $this->pagseguro->setTelefone($dados['ddd'], $dados['telefone']);
            //Informa o CPF
        $this->pagseguro->setCPF($dados['cpf']);
            //Informa o endereço RUA, NUMERO, COMPLEMENTO, BAIRRO, CIDADE, ESTADO, CEP
        $this->pagseguro->setEnderecoCliente($dados['rua'], $dados['numero'], $dados['complemento'], $dados['bairro'], $dados['cidade'], $dados['estado'], $dados['cep']);
            //Informa o ano de nascimento
        $this->pagseguro->setNascimentoCliente($dados['data_nascimento']);
            //Infora o Hash  gerado na etapa anterior (assinando.php), é obrigatório para comunicação com checkoutr transparente
        //$this->pagseguro->setHashCliente($_POST['hash']);
            //Informa o Token do Cartão de Crédito gerado na etapa anterior (assinando.php)
        //$this->pagseguro->setTokenCartao($_POST['token']);
            //Código usado pelo vendedor para identificar qual é a compra
        $this->pagseguro->setReferencia("CWG004");
            //Plano usado (Esse código é criado durante a criação do plano)
        $this->pagseguro->setPlanoCode($dados['plano_pagseguro']);

            try{
                $codigo = $this->pagseguro->assinaPlano();

                $url = $this->pagseguro->assinarPlanoCheckout($codigo);
                header('Location: '.$url);
            } catch (\Exception $e) {
                Log::createFromException($e);
                throw new \Exception('Não foi possível realizar sua assinatura'.$e->getMessage());
            }
    }

    public function cancelar($codePagSeguro){
        try {
            print_r($this->pagseguro->cancelarAssinatura($codePagSeguro));
        } catch (\Exception $e) {
            Log::createFromException($e);
            throw new \Exception('Não foi possível cancelar sua assinatura.');
        }
    }

    public function getNotificacao($post){
        if ($post['notificationType'] == 'preApproval') {
            $codigo = $post['notificationCode']; //Recebe o código da notificação e busca as informações de como está a assinatura
            $response = $this->pagseguro->consultarNotificacao($codigo);
             (new Pagamento())->inserir([
                'id_status' => $response['status'],
                'valor' => $response['grossAmount'],
                'codigo_assinatura' => $response['code'],
                'id_contrato'       => 1,
            ]);
            //print_r($response);die;
        }
    }

}