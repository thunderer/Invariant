<?php get_header(); ?>

<ul class="pages">
    <?php wp_list_pages('title_li='); ?>
    <li>
        <form role="search" method="get" id="searchform" class="searchform" action="<?php bloginfo('url'); ?>">
            <div>
                <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="szukaj..." />
            </div>
        </form>
    </li>
</ul>

</div>
<div class="container-outer">

<?php while(have_posts()): ?>
<?php the_post(); ?>
<div class="block">
    <div class="container-header">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </div>
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
</div>
<div class="container-outer">
<?php endwhile; ?>

<div class="nav nav-prev"><?php next_posts_link('&laquo;'); ?></div>
<div class="nav nav-next"><?php previous_posts_link('&raquo;'); ?></div>

<?php get_footer(); ?>