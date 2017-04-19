<?php

//print_r($_SERVER);
//print_r($_ENV);

$process = curl_init("http://localhost:4040/api/tunnels"); 
$return = curl_exec($process); 
curl_close($process); 
$return = json_decode($return);
echo $public_url = $return[0]['public_url'];

