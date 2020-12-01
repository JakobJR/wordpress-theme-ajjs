<?php
if(!isset($_GET['id'])) {
    header('Location: ../../');
}
get_header();
require_once(__DIR__.'/api/api-get-ingredients.php');
require_once(__DIR__.'/api/api-get-specific-recipe.php');
require_once(__DIR__.'/api/api-get-instructions.php');
?>

<div class="single-page-section">
    <h3><?php echo $json_recipe->data->title?></h3>
    <p>Recipe created: <?php echo date('d-m-Y', strtotime($json_recipe->data->created_at));?></p>
    <div class="top-wrapper">
        <div class="top-img" style="background-image: url(<?php echo $json_recipe->data->imageUrl?>);"></div>
        <div class="top-info">
            <h3>Ingredients</h3>
            <ul>
            <?php
            foreach ($json_ingredients as $data => $key){
                foreach ($key as $item => $value){ ?>
                    <li><?php echo $value->amount.' '.$value->measurement_unit.' '.$value->ingredient?></li>
            <?php }
            } 

            ?>
            </ul>
        </div>
    </div>
    <div class="instructions-wrapper">
    <h3>Directions</h3>
    <?php
        $i = 1;
        foreach ($json_instructions as $data => $key){
            foreach ($key as $item => $value){ 
                ?>
                    <span class="step">Step <?php echo $i ?></span>
                    <div class="instruction"><?php echo $value->instruction ?></div>
                    <br>
        <?php $i++; }
        } 
    ?>
    </div>
    <div class="section-1">
        <?php get_template_part('includes/section', 'content');?>
    </div>
</div>

<?php get_footer();?>