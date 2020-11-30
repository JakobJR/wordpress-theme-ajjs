<?php get_header();

$curl = curl_init();

$id = $_GET['id'];

curl_setopt_array($curl, array(
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

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if($err){
    echo "curl error #:" . $err;
} else {
  $json =  json_decode($response);
//   print_r($json);
}


$curlx = curl_init();

curl_setopt_array($curlx, array(
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

$responsex = curl_exec($curlx);
$errx = curl_error($curlx);

curl_close($curlx);

if($errx){
    echo "curl error #:" . $errx;
} else {
  $jsonx =  json_decode($responsex);
//   print_r($jsonx);
}


?>

<div class="single-page-section">
    <h3><?php echo $jsonx->data->title?></h3>
    <p>Recipe created: <?php echo date('d-m-Y', strtotime($jsonx->data->created_at));?></p>
    <div class="top-wrapper">
        <div class="top-img" style="background-image: url(http://localhost/wordpress-theme-ajjs/wp-content/themes/wordpress-laravel/img/dish-1.jpg);"></div>
        <div class="top-info">
            <h3>Ingredients</h3>
            <ul>
            <?php
            foreach ($json as $data => $key){
                foreach ($key as $item => $value){ ?>
                    <!-- <div class="show-wrapper">
                        <h3><?php echo $value->ingredient?></h3>
                        <h3><?php echo $value->amount?></h3>
                        <h3><?php echo $value->measurement_unit?></h3>
                        <img src="<?php echo $value->imageUrl?>">
                        <a href="">Read more</a>
                    </div> -->

                    <li><?php echo $value->amount.' '.$value->measurement_unit.' '.$value->ingredient?></li>
            <?php }
            } 

            ?>
            </ul>
        </div>
    </div>
    <div class="section-1">
        <?php get_template_part('includes/section', 'content');?>
    </div>
</div>

<?php get_footer();?>