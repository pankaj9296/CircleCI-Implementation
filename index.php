<?php

//print_r($_SERVER);
//print_r($_ENV);

$process = curl_init("http://localhost:4040/api/tunnels"); 
$output = curl_exec($process); 
curl_close($process); 
$return = json_decode($output);
echo $public_url = $return['tunnels'][0]['public_url'];
echo "<br/><br/><br/>";
//$return = json_decode($return);
echo $public_url = $output['tunnels'][0]['public_url'];

