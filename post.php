<?php


//POST To Platform
$url = "http://fillthegaps.xyz/accenture/jsonapi/node/cellphones";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Content-Type: application/vnd.api+json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = '{"user":"sifhufhi","password":"sifhufhi"}';

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
$data = array(
  'sku' => '123456',
  'name' => 'iPhone 6s',
  'description' => 'The latest iPhone with 64GB of storage',
  'price' => '649.99'
);
$postBody = json_encode($data);

curl_setopt($curl, CURLOPT_POSTFIELDS, $postBody);
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);





?>