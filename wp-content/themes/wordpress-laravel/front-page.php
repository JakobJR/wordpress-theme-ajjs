<?php get_header();

$curl = curl_init();

curl_setopt_array($curl, array(
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

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if($err){
    echo "curl error #:" . $err;
} else {
  $json =  json_decode($response);
//   print_r($json);
}

?>

<div class="top-section">
    <div class="top-left">
        <div class="hero-text">
            <h4>Be inspired</h4>
            <p>Find your next meal and browse upwards of 5.000 unique delicious recipes.</p>
        </div>
    </div>
    <div class="top-right">
        <h5>Today's Top 4</h5>
        

    <?php
    $i=0;
    foreach ($json as $data => $key){
        foreach ($key as $item => $value){ 
            if($i==4) break;
            ?>
            <!-- <div class="show-wrapper">
                <h3><?php echo $value->title?></h3>
                <img src="<?php echo $value->imageUrl?>">
                <a href="">Read more</a>
            </div> -->

            <a href="recipe/19/?id=<?php echo $value->id ?>">
            <div class="top-item">      
                <div class="image" style="background-image: url(<?php echo $value->imageUrl?>)"></div>
                <div class="text"><p><?php echo $value->title?></p></div>
            </div>
        </a>
    <?php $i++;}
       } 

    ?>



        <a href="#">
            <div class="top-item">      
                <div class="image" style="background-image: url(http://localhost/wordpress-theme-ajjs/wp-content/themes/wordpress-laravel/img/dish-1.jpg)"></div>
                <div class="text"><p>Chicken Masala with with rice and fresh vegetables</p></div>  
            </div>
        </a>
        <a href="#">
        <div class="top-item">
        <div class="image" style="background-image: url(http://localhost/wordpress-theme-ajjs/wp-content/themes/wordpress-laravel/img/dish-1.jpg)"></div>
            <div class="text"><p>Chicken Masala with with rice and fresh vegetables</p></div>
        </div>
        </a>
    </div>
</div>

<div class="section-1">
    <?php get_template_part('includes/section', 'content');?>
</div>

<?php get_footer();?>