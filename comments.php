<div class="block post">
    <div class="block-header post-header">Skomentuj</div>
    <div class="post-content">
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
</div>
<?php if(have_comments()): ?>
<div class="block comments">
    <div class="block-header comments-header">
        Komentarze (<?php echo get_comments_number(); ?>)
    </div>
    <ul class="comments-content">
        <?php wp_list_comments(); ?>
    </ul>
</div>
<?php endif; ?>