<?php
/**
 * Created by PhpStorm.
 * User: claud
 * Date: 16/04/2019
 * Time: 21:15
 */

namespace RSC\model;
use MocaBonita\tools\eloquent\MbDatabase;
use \Sounoob\pagseguro\Boleto;
use \Sounoob\pagseguro\config\Config;

class BoletoPagseguro
{
    private $boleto;
    private $config;
    function __construct()
    {
        $this->boleto = new Boleto();

        $this->config = new Config();

    }

    public function gerarBoletos($dados){
        try {
            $this->config->setAccountCredentials('claudiopablosilva@hotmail.com', '2382B416442D464CADC943D232AD6045');
            $this->boleto->setAmount($dados['mensalidade']);
//Descrição do boleto
            $this->boleto->setDescription('Assinatura');
//O CPF do comprador
            $this->boleto->setCustomerCPF('01234567890');//Se for CNPJ use $boleto->setCustomerCNPJ('33085736000169');
//Nome do comprador
            $this->boleto->setCustomerName($dados['nome']);
//Email do comprador
            $this->boleto->setCustomerEmail($dados['email']);
//Telefone do comprador
            $this->boleto->setCustomerPhone($dados['ddd'], $dados['telefone']);
            /*
             * Campos opcionais
             */
//Data de vencimento do boleto no formato de Ano-Mês-Dia. Essa data precisa ser no futuro, e no máximo 30 dias apatir do dia atual.
            $this->boleto->setFirstDueDate(date("Y-m-d", strtotime("+3 days", time())));
//Esse é o numero de boletos a ser gerado.
            $this->boleto->setNumberOfPayments(12);
//Uma referência de quem é o boleto (note que terá multiplos boletos com a mesma referência)
            $this->boleto->setReference($dados['id_cliente']);//**
//Instruções para quem irá receber o pagamento
            $this->boleto->setInstructions('Faça o pagamento até o dia do vencimento');
//CEP do comprador
            $this->boleto->setCustomerAddressPostalCode($dados['cep']);
//Endereço do comprador
            $this->boleto->setCustomerAddress($dados['rua'], $dados['numero']);
//Bairro do comprador
            $this->boleto->setCustomerAddressDistrict($dados['bairro']);
//Cidade do comprador
            $this->boleto->setCustomerAddressCity($dados['cidade']);
//Estado do comprador
            $this->boleto->setCustomerAddressState($dados['estado']);
//Executa a conexão e captura a resposta do PagSeguro.
            $data = $this->boleto->send();
//Você terá uma array de objeto, precisará de uma estrutura de laço para percorrer um a um.
            foreach ($data->boletos as $row) {
                //\RSC\model\Boleto
                $boletos[] = [
                    'id_contrato' => $dados['id_contrato'],
                    'codigo_transacao' => $row->code,
                    'codigo_barras' => $row->barcode,
                    'data_vencimento' => $row->dueDate,
                    'link' => $row->paymentLink,
                ];
                /*
                echo 'A transação de código ' . $row->code .
                    ' que vence em ' . $row->dueDate .
                    ' gerou um boleto que pode ser acessado no link ' . $row->paymentLink .
                    ' ou pago com o código de barras ' . $row->barcode .
                    '<hr>';
                */
            }

            MbDatabase::table('rsc_boletos')->insert($boletos);

            return ['message'=>'Boletos gerados com sucesso','boletos'=>$boletos];

        }catch(\Exception $e){
            Log::createFromException($e);
            throw new \Exception('Erro ao gerar boletos');
        }

    }


}