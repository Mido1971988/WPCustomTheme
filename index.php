<?php  get_header(); ?> 

<!-- we create page and called it blog page then from WP dashboard > setting > reading mark blog page as post page then add this code in index.php and this page will get content from template-parts/content-archive.php so when you press on blog page link on menu will show posts-->
<?php  
    if( have_posts()){
        while( have_posts()){
            the_post();
            get_template_part('template-parts/content' , 'archive');
        }
    }
?>

<!-- you can change how many posts shown from wp Dashboard > setting > reading > Blog pages show at most -->
<!-- then we can add the_posts_pagination to add 1,2,3 at bottom and go to next page -->
<?php the_posts_pagination(); ?>

<?php get_footer(); ?>