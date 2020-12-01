<?php
$curl_instructions = curl_init();

$id = $_GET['id'];

curl_setopt_array($curl_instructions, array(
    CURLOPT_URL => "https://laravel-recipe-api.herokuapp.com/api/instructions/$id",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'Accept: application/json'
    ),
));

$response_instructions = curl_exec($curl_instructions);
$err_instructions = curl_error($curl_instructions);

curl_close($curl_instructions);

if($err_instructions){
    echo "curl error #:" . $err_instructions;
} else {
  $json_instructions =  json_decode($response_instructions);
//   print_r($json_instructions);
}
?>