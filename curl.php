<?php
/*if( $curl = curl_init() ) {
    curl_setopt($curl,CURLOPT_URL,'http://filmix.net');
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
    $out = curl_exec($curl);
    echo $out;
    curl_close($curl);
}*/


$ch = curl_init('http://www.cruzo.net/user/images/k/d760fbd8f50d9b92dc054ee8390df166_617.jpg');
$fp = fopen('./images/', 'wb');
curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
curl_close($ch);
fclose($fp);
?>

