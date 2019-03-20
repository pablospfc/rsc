<?php
// Documentação disponível em: 
// https://dev.pagseguro.uol.com.br/documentacao/pagamentos/pagamento-padrao
// URL DE SANDBOX
$url = 'https://ws.sandbox.pagseguro.uol.com.br/v2/checkout';
$data['email'] = 'claudiopablosilva@hotmail.com';
$data['token'] = '2382B416442D464CADC943D232AD6045';
$data['currency'] = 'BRL';
$data['itemId1'] = "1";
$data['itemDescription1'] = "Descrição do item/produto";
$data['itemAmount1'] = '199.90';
$data['itemQuantity1'] = 1;
$data['itemWeight1'] = 0;
$data['reference'] = 1; //aqui vai o código que será usado para receber os retornos das notificações
$data['senderName'] = "Darvin Sánchez";
// $data['senderAreaCode'] = "";
// $data['senderPhone'] = "";
$data['senderEmail'] = "c33369909359912722748@sandbox.pagseguro.com.br";
// $data['shippingType'] = "";
// $data['shippingAddressStreet'] = "";
// $data['shippingAddressNumber'] = "";
// $data['shippingAddressComplement'] = "";
// $data['shippingAddressDistrict'] = "";
// $data['shippingAddressPostalCode'] = "";
// $data['shippingAddressCity'] = "";
// $data['shippingAddressState'] = "";
// $data['shippingAddressCountry'] = "";
$data['redirectURL'] = 'http://localhost/pagseguro/pedido-finalizado';
$data = http_build_query($data);
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
$xml= curl_exec($curl);
if($xml == 'Unauthorized'){
  echo "Unauthorized";
  exit();
}
curl_close($curl);
$xml= simplexml_load_string($xml);
if(count($xml->error) > 0){
  echo "XML ERRO";
  var_dump($xml->error);
  exit();
}
// Utilize sua lógica para atualizar o pedido com o código da transação, para ser atualizado depois
//$db->query("UPDATE pedido SET token = '{$xml->code}' WHERE id = $pedido_id"); 
// Redireciona o comprador para a página de pagamento
header('Location: https://sandbox.pagseguro.uol.com.br/v2/checkout/payment.html?code='.$xml->code);





?>