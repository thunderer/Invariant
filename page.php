<?php get_header(); ?>

<?php while(have_posts()): ?>
<?php the_post(); ?>
<div class="container-inner container-header">
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</div>
<div class="container-short">
    <div class="post">
        <div class="post-content"><?php the_content(); ?></div>
    </div>
</div>
<?php endwhile; ?>

<?php get_footer(); ?>