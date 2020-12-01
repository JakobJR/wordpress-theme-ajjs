<?php
$curl_recipe = curl_init();

curl_setopt_array($curl_recipe, array(
    CURLOPT_URL => "https://laravel-recipe-api.herokuapp.com/api/recipes/$id",
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

$response_recipe = curl_exec($curl_recipe);
$err = curl_error($curl_recipe);

curl_close($curl_recipe);

if($err_recipe){
    echo "curl error #:" . $err_recipe;
} else {
  $json_recipe =  json_decode($response_recipe);
//   print_r($json_recipe);
}
?>