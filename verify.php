<?php
$access_token = '/1fyXsNQtqg0KIa9fFA7drEkgisYBI9fvDpsAQOgEQRY+/m7+vVUA57JP7sG4tq0kh5LngFuo2ZfpgYMZTVyNF/dtbX2zl37WSc45FJjsBRQiDl7XITQPNfROVX0PO63KkVJudoJtT14xlSRYokPDQdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/v1/oauth/verify';
$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>
