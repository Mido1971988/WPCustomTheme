<!-- this file to show page -->
<?php  get_header(); ?> 
<!-- to get Page created from WP dashboard -->
<?php  
    if( have_posts()){
        while( have_posts()){
            the_post();
            get_template_part('template-parts/content' , 'page');
        }
    }
?>

<?php get_footer(); ?>