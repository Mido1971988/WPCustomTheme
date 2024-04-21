<!-- to show the date -->
<h1> <?php the_date();?></h1>
<!-- to show the tags of the post -->
<h1> <?php the_tags();?></h1>
<!-- to show the comments on the post -->
<h1> <?php 
if( ! have_comments()){
    echo "Leave a Comment";
}
else{
    echo comments_number();
}
    ?></h1>
<?php 
the_content();
?>
<!-- to get comments from file comments.php -->
<?php comments_template(); ?>