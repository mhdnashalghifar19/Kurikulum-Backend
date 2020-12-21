<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$response = $client->request('POST', 'https://api.pondokprogrammer.com/api/student_login' , [
    'form_params' => [
        'email' => 'mhdnasrullahal@gmail.com',
        'password' => "Hafidzqur'an(/)"
    ]
]);

    // print_r($response);

// $result = json_decode($response->getBody(), true);
$result = json_decode($response->getBody());

// // $token = $result["token"];
$token = $result->token;

$response = $client->request('POST', 'https://api.pondokprogrammer.com/api/class/qr?class_id=111' , [
    'headers' => [
        'Authorization' => "bearer $token"  
    ]

]);

?>