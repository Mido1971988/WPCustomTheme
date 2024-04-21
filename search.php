<?php  get_header(); ?> 

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