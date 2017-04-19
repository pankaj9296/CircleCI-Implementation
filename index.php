<?php

//print_r($_SERVER);
//print_r($_ENV);

$process = curl_init("http://localhost:4040/api/tunnels"); 
curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($process); 
curl_close($process); 
//$return = json_decode($output);
//echo $public_url = $return['tunnels'][0]['public_url'];
//echo "<br/><br/><br/>";
//$return = json_decode($return);

echo "complete array :"; print_r($output);
echo "<br/><br/><br/>";
echo "without decode :".$public_url = $output['tunnels'][0]['public_url'];
echo "<br/><br/><br/>";
$o = json_decode($output);
echo "with decode array:"; print_r($o);
echo "<br/><br/><br/>";
echo "with decode :".$public_url = $o['tunnels'][0]['public_url'];
