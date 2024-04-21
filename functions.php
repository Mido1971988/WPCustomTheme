<?php 

// function to make wordpress add title dynamically from setting at dashboard
// wp_head() is nesssasry also to make add_theme_support works
function myCustomTheme_theme_support(){
    // add dynamic title support ( added from WP Dashboard > setting > General)
    add_theme_support('title-tag');
    // add dynamic Logo ( added from WP Dashboard > themes > customize > site identity)
    add_theme_support('custom-logo');
    // add thumbnail image options in posts in wp dashboard
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme' , 'myCustomTheme_theme_support');

// function to get styles.css 
function myCustomTheme_register_styles(){
    // variable to get version of theme ( we added version as comment in styles.css
    $version = wp_get_theme()->get( 'Version' );
    
    // to get styles from styles.css ( if you want styles from bootstrap to load first then styles from styles.css add bootstrap id at arrar())
    wp_enqueue_style('myCustomTheme-style' , get_template_directory_uri() . "/style.css" , array('myCustomTheme-bootstrap') , $version , "all");

    // to get styles from bootstrap 
    wp_enqueue_style('myCustomTheme-bootstrap' , "bootstrap link ", array() , " 4.4.1" , "all");
}

add_action('wp_enqueue_scripts' , 'myCustomTheme_register_styles');

// function to get main.js 
function myCustomTheme_register_scripts(){
    
    // to get script from main.js ( true means will add script to footer , false will add it to head)
    wp_enqueue_script('myCustomTheme-script' , get_template_directory_uri() . "/main.js" , array() , "1.0" , true);


}

add_action('wp_enqueue_scripts' , 'myCustomTheme_register_scripts');

// to add menus options to wp dashboard > apperance and add locations options inside Menus 
function myCustomTheme_menus(){
    $locations = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
}

add_action('init' , 'myCustomTheme_menus');

// to add widget option at WP dashboard > appearance > widgets
function myCustomTheme_widget_area(){
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Sidebar Area',
            'id' => 'sidebar-1',
            'description' => 'Sidebar Wideget Area'
        )
    );
}

add_action('widgets_init' , 'myCustomTheme_widget_area');
?>