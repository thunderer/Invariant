<!DOCTYPE html>
<html>
    <head>
        <title><?php bloginfo('name'); ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link href="http://fonts.googleapis.com/css?family=Condiment|Poiret+One|Merriweather&subset=latin,latin-ext" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="/wp-content/themes/invariant/css/style.css" />
        <link rel="stylesheet" href="/wp-content/themes/invariant/css/highlight/railscasts.css">
    </head>
    <body>

<div class="container">

<?php get_sidebar(); ?>

<div class="container-outer">
<div class="header">
    <a href="<?php bloginfo('url'); ?>">
        <div class="title"><?php bloginfo('title'); ?></div>
        <div class="subtitle"><?php bloginfo('description'); ?></div>
    </a>
</div>