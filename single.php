<!-- this file to show single post -->
<?php  get_header(); ?> 
<!-- to get post created from WP dashboard -->
<?php  
    if( have_posts()){
        while( have_posts()){
            the_post();
            // if you want to show content directly as it is
            // the_content();

            // if you want to show content from different file ( if you have a lot of 
            // different post content like gallery post , artile post , ... etc)
            // arguments are location of the file so location will be template-parts/content-article
            get_template_part('template-parts/content' , 'article');
        }
    }
?>

<?php get_footer(); ?>