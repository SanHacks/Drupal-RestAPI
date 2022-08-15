<?php




//DELETE WITH AUTHORIZATION


$url = "http://fillthegaps.xyz/accenture/jsonapi/node/{{article_uuid}}";

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

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);




?>