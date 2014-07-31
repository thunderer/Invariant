<?php get_header(); ?>

<?php while(have_posts()): ?>
<?php the_post(); ?>
<?php $post = get_post(); ?>
<?php $imageUrl = wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID)); ?>
<div class="block post">
    <div class="block-header post-header-image" style="background-image: url('<?php echo $imageUrl; ?>')">
        <a class="post-header" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </div>
    <div class="block-content post-content">
        <?php is_home() ? the_excerpt() : the_content(); ?>
    </div>
    <div class="post-info" style="background-image: url('<?php echo $imageUrl; ?>')">
        <div class="category"><?php the_category(); ?></div>
        <div class="tags"><?php the_tags('', ', ', ''); ?></div>
    </div>
</div>
<?php if(!is_home()) { comments_template(); } ?>
<?php endwhile; ?>

<div class="block nav">
    <div class="nav-item nav-prev"><?php next_posts_link('<b>&laquo;</b> poprzednie'); ?></div>
    <div class="nav-item nav-next"><?php previous_posts_link('następne <b>&raquo;</b>'); ?></div>
</div>

<?php get_footer(); ?>