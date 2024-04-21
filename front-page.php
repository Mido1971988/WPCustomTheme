<?php  get_header(); ?> 

<!-- to get the page created from WP dashboard ( we choosed specific page as home page from wp dashboard > setting > reading > 
    Your homepage displays > A static page > your chosen page ) -->
<?php  
    if( have_posts()){
        while( have_posts()){
            the_post();
            the_content();
        }
    }
?>

<?php get_footer(); ?>