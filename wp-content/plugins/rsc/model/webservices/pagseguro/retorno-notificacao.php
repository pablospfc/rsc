<?php
header("access-control-allow-origin: https://sandbox.pagseguro.uol.com.br");
$code = $_POST['notificationCode'];
$type = $_POST['notificationType'];
if($type == 'transaction'){
  $url = "https://ws.sandbox.pagseguro.uol.com.br/v2/transactions/notifications/".$code."?email=claudiopablosilva@hotmail.com&token=2382B416442D464CADC943D232AD6045";
  $url2 = 'https://ws.sandbox.pagseguro.uol.com.br/v2/transactions/notifications/8B802B4B92F792F766066444AFB96A3A137B?email=claudiopablosilva@hotmail.com&token=2382B416442D464CADC943D232AD6045';
  $content = file_get_contents($url);
  $xml = simplexml_load_string($content);

  print_r($xml);
//  if($xml->status > 3){
//    //$db->query("UPDATE pedido SET status = 2 WHERE token = '{$xml->reference}'");
//  }
}


?>