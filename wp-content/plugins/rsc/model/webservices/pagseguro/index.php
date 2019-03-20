<?php
  $url = 'https://ws.sandbox.pagseguro.uol.com.br/v2/pre-approvals/request';
  $data['email'] = 'claudiopablosilva@hotmail.com';
  $data['token'] = '2382B416442D464CADC943D232AD6045';
  $data['currency'] = 'BRL';
  $data['reference'] = '1';
  $data['senderName'] = 'Comprador de Teste';
  $data['senderEmail'] = 'c33369909359912722748@sandbox.pagseguro.com.br';
   $data['senderAreaCode'] = '55';
   $data['senderPhone'] = '98988197084';
   $data['shippingAddressStreet'] = "Avenida Santos Dumont";
   $data['shippingAddressNumber'] = "1";
   $data['shippingAddressPostalCode'] = "65046660";
   $data['shippingAddressCity'] = "São Luis";
   $data['shippingAddressState'] = "MA";
   $data['shippingAddressCountry'] = 'BRA';
  //$data['redirectURL'] = 'http//www.rsccontabilidade.com.br/?page_id=5202';
  $data['preApprovalCharge'] = 'auto';
  $data['preApprovalName'] = 'Assinatura mensal';
  $data['preApprovalDetails'] = 'Cobrança de valor mensal para assinatura';
  $data['preApprovalAmountPerPayment'] = '199.99';
  $data['preApprovalPeriod'] = 'MONTHLY';
  $data['preApprovalFinalDate'] = '2020-10-17T19:20:30.45+01:00';
  $data['preApprovalMaxTotalAmount'] = '999.00';
  //$data['reviewURL'] = 'http://localhost/pagseguro/planos.php';
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
    echo "XML ERRO </br>";
	echo $xml->error->message;
    exit();
  }
  header('Location: https://sandbox.pagseguro.uol.com.br/v2/pre-approvals/request.html?code='.$xml->code);