<div class="container-inner container-header">
    Skomentuj
</div>
<div class="container-short">
<?php comment_form(array(
    'title_reply' => '',
    'comment_notes_before' => '',
    'comment_notes_after' => '',
    'fields' => array(
        'author' => '<p><input id="author" name="author" placeholder="Nick *" type="text" /></p>',
        'email' => '<p><input id="email" name="email" placeholder="Email *" type="email" /></p>',
        'url' => '<p><input id="url" name="url" placeholder="URL" type="url" /></p>',
        ),
    'comment_field' => '<p><textarea id="comment" name="comment" placeholder="Comment" rows="5"></textarea></p>',
    'label_submit' => 'Wyślij',
    'format' => 'html5',
    )); ?>
</div>
<div class="container-inner container-header">
    Komentarze (<?php echo get_comments_number(); ?>)
</div>
<div class="container-short">
    <ul class="comments"><?php wp_list_comments(); ?></ul>
</div>