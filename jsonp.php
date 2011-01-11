<?php

header('Content-Type: text/javascript; charset=utf8');
header('Access-Control-Allow-Origin: http://www.example.com/');
header('Access-Control-Max-Age: 3628800');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

$url = $_GET['callback'];
foreach ($_GET as $key => $value) {
        $url = $url . '&' . $key . '=' . $value;
}
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch);
echo $output;

?>
