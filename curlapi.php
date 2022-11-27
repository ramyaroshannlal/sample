<?php

$ch = curl_init(); //initiate curl handle avariable
$url= "https://reqres.in/api/users?page=2";
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNYTRANSFER, true);
$resp = curl_exec($ch);
if($e = curl_error($ch)){
    echo $e;
}
else{
   $decoded = json_decode($resp);
   print_r($decoded); 
}
curl_close($ch);