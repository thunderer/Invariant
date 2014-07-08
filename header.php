<!DOCTYPE html>
<html>
    <head>
        <title><?php bloginfo('name'); ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link href="http://fonts.googleapis.com/css?family=Poiret+One|PT+Sans&subset=latin,latin-ext" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="/wp-content/themes/invariant/css/style.css" />
        <link rel="stylesheet" href="/wp-content/themes/invariant/css/highlight/railscasts.css">
    </head>
    <body>

<div class="container">

<div class="block logo">
    <a href="<?php bloginfo('url'); ?>">
        <span class="title"><?php bloginfo('title'); ?></span>
        <span class="subtitle"><?php bloginfo('description'); ?></span>
    </a>
</div>

<div class="block">
    <ul class="pages">
        <?php wp_list_pages('title_li='); ?>
        <li>
            <form role="search" method="get" id="searchform" class="searchform" action="<?php bloginfo('url'); ?>">
            <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Szukaj" />
            </form>
        </li>
    </ul>
</div>