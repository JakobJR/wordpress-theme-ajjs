<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    <title>Document</title>
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
    <nav>
        <div class="logo">
            <a href="#">
                <?php
                    if ( function_exists( 'the_custom_logo' ) ) {
                        the_custom_logo();
                    }
                ?>
            </a>
        </div>
        <div class="menu-items">
            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'top-menu'
                    )
                );
            ?>
        </div>
    </nav>
    <div class="nav-placeholder" id="top"></div>