<?php
$curl_ingredients = curl_init();

$id = $_GET['id'];

curl_setopt_array($curl_ingredients, array(
    CURLOPT_URL => "https://laravel-recipe-api.herokuapp.com/api/ingredients/$id",
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

$response_ingredients = curl_exec($curl_ingredients);
$err_ingredients = curl_error($curl_ingredients);

curl_close($curl_ingredients);

if($err_ingredients){
    echo "curl error #:" . $err_ingredients;
} else {
  $json_ingredients =  json_decode($response_ingredients);
//   print_r($json_ingredients);
}
?>