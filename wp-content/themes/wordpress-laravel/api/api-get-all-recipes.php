<?php

$curl_recipes = curl_init();

curl_setopt_array($curl_recipes, array(
    CURLOPT_URL => "https://laravel-recipe-api.herokuapp.com/api/recipes",
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

$response_recipes = curl_exec($curl_recipes);
$err_recipes = curl_error($curl_recipes);

curl_close($curl_recipes);

if($err_recipes){
    echo "curl error #:" . $err_recipes;
} else {
  $json_recipes =  json_decode($response_recipes);
//   print_r($json_recipes);
}

?>