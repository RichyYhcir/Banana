<?php

function send_LINE($msg){
 $access_token = '/1fyXsNQtqg0KIa9fFA7drEkgisYBI9fvDpsAQOgEQRY+/m7+vVUA57JP7sG4tq0kh5LngFuo2ZfpgYMZTVyNF/dtbX2zl37WSc45FJjsBRQiDl7XITQPNfROVX0PO63KkVJudoJtT14xlSRYokPDQdB04t89/1O/w1cDnyilFU='; 
 $messages = [
        'type' => 'text',
        'text' => $msg
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [
        'to' => 'U4cb08d24106128c760f5f69bf55622f3',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}
//HEY!!!
?>
