<?php


$ch = curl_init("http://localhost:4040/api/tunnels");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch); 
    curl_close($ch); 
    $tunnels = json_decode($output, true);
    echo $public_url = $tunnels['tunnels'][0]['public_url'];
echo "<br/><br/><br/><br/>";

print_r($_SERVER);
print_r($_ENV);
echo getenv('DATABASE1_HOST');
