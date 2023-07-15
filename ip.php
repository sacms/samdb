<?php 
function sacms($ip, $accessToken) {
    $url = 'https://samdb.eu.org/api/ip?ip='.$ip;
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    $authorization = 'Authorization: Bearer '.$accessToken;
    $headers = array(
        'Content-Type: application/json',
        $authorization
    );
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $response = curl_exec($ch);
    curl_close($ch);
}

$accessToken = ''; // Enter your Bearer Token

echo sacms('66.102.0.0',$accessToken);
?>
