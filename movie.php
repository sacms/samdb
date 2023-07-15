<?php 
function sacms($id, $accessToken) {
    $url = 'https://samdb.eu.org/api/imdb?id='.$id;
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

echo sacms('tt1630029',$accessToken);
?>
