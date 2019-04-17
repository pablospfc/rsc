<?php
/**
 * Created by PhpStorm.
 * User: claud
 * Date: 16/04/2019
 * Time: 21:15
 */

namespace RSC\model;
use \Sounoob\pagseguro\Boleto;

class BoletoPagseguro
{
    private $boleto;
    function __construct()
    {
        $this->boleto = new Boleto();

    }

    public function gerarBoletos(){
        $this->boleto->setAmount('5.12');
//Descrição do boleto
        $this->boleto->setDescription('Assinatura SDK SNoob');
//O CPF do comprador
        $this->boleto->setCustomerCPF('01234567890');//Se for CNPJ use $boleto->setCustomerCNPJ('33085736000169');
//Nome do comprador
        $this->boleto->setCustomerName('Noob Master');
//Email do comprador
        $this->boleto->setCustomerEmail('email.comprador@sounoob.com.br');
//Telefone do comprador
        $this->boleto->setCustomerPhone('11', '98909084');
        /*
         * Campos opcionais
         */
//Data de vencimento do boleto no formato de Ano-Mês-Dia. Essa data precisa ser no futuro, e no máximo 30 dias apatir do dia atual.
        $this->boleto->setFirstDueDate(date("Y-m-d", strtotime("+3 days", time())));
//Esse é o numero de boletos a ser gerado.
        $this->boleto->setNumberOfPayments(2);
//Uma referência de quem é o boleto (note que terá multiplos boletos com a mesma referência)
        $this->boleto->setReference('boonuos');//**
//Instruções para quem irá receber o pagamento
        $this->boleto->setInstructions('Aloprar o comprador se ele tentar pagar atrasado');
//CEP do comprador
        $this->boleto->setCustomerAddressPostalCode('01230000');
//Endereço do comprador
        $this->boleto->setCustomerAddress('Av Faria lima', '103 A');
//Bairro do comprador
        $this->boleto->setCustomerAddressDistrict('Vila Olimpia');
//Cidade do comprador
        $this->boleto->setCustomerAddressCity('São Paulo');
//Estado do comprador
        $this->boleto->setCustomerAddressState('SP');
//Executa a conexão e captura a resposta do PagSeguro.
        $data = $this->boleto->send();
//Você terá uma array de objeto, precisará de uma estrutura de laço para percorrer um a um.
        foreach ($data->boletos as $row) {
            echo 'A transação de código ' . $row->code .
                ' que vence em ' . $row->dueDate .
                ' gerou um boleto que pode ser acessado no link ' . $row->paymentLink .
                ' ou pago com o código de barras ' . $row->barcode .
                '<hr>';
        }
    }


}