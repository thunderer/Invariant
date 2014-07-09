<?php get_header(); ?>

<?php while(have_posts()): ?>
<?php the_post(); ?>
<?php $post = get_post(); ?>
<?php $imageUrl = wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID)); ?>
<div class="block post">
    <div class="block-header post-header-image">
        <a class="post-header" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </div>
    <div class="block-content post-content">
        <?php the_content(); ?>
    </div>
    <div class="post-info">
        <div class="category"><?php the_category(); ?></div>
        <div class="tags"><?php the_tags('', ', ', ''); ?></div>
    </div>
</div>
<?php comments_template(); ?>
<?php endwhile; ?>

<?php get_footer(); ?>