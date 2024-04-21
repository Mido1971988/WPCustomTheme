<!-- to show each thumbnail of each post -->
<?php the_post_thumbnail(); ?>
<h1><?php the_title();?>
<h5><?php the_date(); ?>
<h5><?php comments_number();?></h5>
<!-- to go to each post page -->
<a href="<?php the_permalink(); ?>">Read More</a>
<h1><?php the_content();?></h1>