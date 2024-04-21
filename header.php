<!DOCTYPE html>
<html>
    <head>
        <!-- option 1 : hard code the liknk of style sheet -->
        <!-- <link rel="stylesheet" href="./wp-content/themes/MyCustomTheme/style.css"> -->

        <!-- option 2 : use php code to add head ( check code in functions.php) -->
        <?php wp_head() ?>

        <!-- <title>My Custom Theme</title> -->
    </head>
    <body>

        <?php  //echo '<p>Hello World</p>'; ?>
        <!-- <p class="hi">HIIIII</p> -->
        
        <!-- to get site title dynamically from WP dashboard > setting > general -->
        <h1><?php echo get_bloginfo("name"); ?></h1>

        <!-- to get page title dynamically from WP created page not hard coded here -->
        <h1><?php the_title(); ?></h1>

        <!-- to get Logo dynamically from WP dashboard not hard coded here -->
        <?php 
            if(function_exists('the_custom_logo')){
                // option 1 :  if you want to add logo without custom classes
                // the_custom_logo();

                // option 2 : if you want to add logo with custom classes (create logo variable and add it to src prop of img element with custom classes)
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id);
            }
        ?>
        <img src="<?php echo $logo[0] ?>" class="logo" alt="logo">

        <!-- to show menu that added from wp dashboard > apperance > Menus -->
        <!-- theme_location should be same added in function myCustomTheme_menus in functions.php and chosen at wp dashboard > apperance > Menus -->
        <!-- items wrap if you want to customize wrapper element of menu ( ul ) but if you want to add class to ( li ) inside wrapper ( ul ) you have to add it at WP dashboard > apperance > Menu but if you need to customize or add class to ( a tag or anything else inside ( li ) ) you cannot do this here nor WP Dashboard you have to target it at style.css like ul > li > a { color : red }) -->
        <?php  
            wp_nav_menu(
                array(
                    'menu' => "primary",
                    "container" => "",
                    "theme_location" => "primary",
                    'items_wrap' => '<ul id="customId" class="customClass">%3$s</ul>'
                )
            )
        ?> 
        <!-- to show widget -->
        <?php
            dynamic_sidebar('sidebar-1');
        ?>