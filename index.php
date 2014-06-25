<?php get_header(); ?>

<?php while(have_posts()): ?>
<?php the_post(); ?>
<div class="container-inner container-header">
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</div>

<div class="container-short">
    <div class="post">
        <div class="post-content">
            <?php the_post_thumbnail('thumbnail'); ?>
            <?php the_excerpt(); ?>
        </div>
    </div>
    <div class="post-info">
        <div class="date"><?php the_date('d.m.Y'); ?></div>
        <div class="tags"><?php the_tags('', ', ', ''); ?></div>
        <div class="category"><?php the_category(); ?></div>
    </div>
</div>
<?php endwhile; ?>

<div class="nav nav-prev"><?php next_posts_link('&laquo;'); ?></div>
<div class="nav nav-next"><?php previous_posts_link('&raquo;'); ?></div>

<?php get_footer(); ?>