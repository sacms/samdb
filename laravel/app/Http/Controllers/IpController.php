<?php

namespace App\Http\Controllers;

class IpController extends Controller
{
    public function getSacmsData($id, $accessToken)
    {
        $url = 'https://samdb.eu.org/api/ip?id='.$id;
        $data = array();
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        $authorization = 'Authorization: Bearer '.$accessToken;
        $headers = array(
            'Content-Type: application/json',
            $authorization
        );
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }
}
