<?php

//print_r($_SERVER);
//print_r($_ENV);

$process = curl_init("http://localhost:4040/api/tunnels"); 
$return = curl_exec($process); 
curl_close($process); 
print_r($return);


