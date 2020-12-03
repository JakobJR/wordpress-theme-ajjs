<?php get_header();
require_once(__DIR__.'/api/api-get-all-recipes.php');
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
        foreach ($json_recipes as $data => $key){
            foreach ($key as $item => $value){ 
                if($i==4) break;
                ?>
                <a href="recipe/recipe/?id=<?php echo $value->id ?>">
                    <div class="top-item">      
                        <div class="image" style="background-image: url(<?php echo $value->imageUrl?>)"></div>
                        <div class="text"><p><?php echo $value->title?></p></div>
                    </div>
                </a>
        <?php $i++;}
        } 
        ?>
    </div>
</div>

<div class="section-1">
    <?php get_template_part('includes/section', 'content');?>
</div>

<?php get_footer();?>