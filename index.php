<?php get_header(); ?>

<?php while(have_posts()): ?>
<?php the_post(); ?>
<?php $post = get_post(); ?>
<?php $imageUrl = wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID)); ?>
<div class="block post">
    <div class="post-header-image" style="background-image: url('<?php echo $imageUrl; ?>')">
        &nbsp;
    </div>
    <div class="block-header">
        <a class="post-header" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </div>
    <div class="block-content post-content">
        <?php the_excerpt(); ?>
    </div>
    <div class="post-info">
        <div class="category"><?php the_category(); ?></div>
        <div class="tags"><?php the_tags('', ', ', ''); ?></div>
    </div>
</div>
<?php endwhile; ?>

<div class="block nav">
    <div class="nav-item nav-prev"><?php next_posts_link('<b>&laquo;</b> poprzednie'); ?></div>
    <div class="nav-item nav-next"><?php previous_posts_link('następne <b>&raquo;</b>'); ?></div>
</div>

<?php get_footer(); ?>