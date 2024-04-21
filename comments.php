<h1>Comment1</h1>
<h1>Comment2</h1>
<h1>Comment3</h1>
<h1>Comment4</h1>

<!-- to customize comments and reply -->
<?php 
    wp_list_comments(
        array(
            'avatar_size' => 20,
            'style' => 'div',
        )
    )
?>

<!-- to add form so user can reply and comment-->
<?php 
    if(comments_open()) {
        comment_form(
            array(
                'class_form' => '',
                'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
                'title-reply-after' => '</h2>'
            )
        );
    }
?>