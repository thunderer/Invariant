<?php
register_sidebar(array(
    'name' => 'Right',
    'id' => 'sidebar-right',
    'description' => 'Right sidebar',
    'before_widget' => '<div class="container-inner sidebar-header">',
    'after_widget' => '</div>',
    'before_title'  => '',
    'after_title'   => '</div><div class="sidebar-short" style="padding: 10px; width: 160px;">',
    ));

add_shortcode('code', function($attributes, $content = null) {
    if(is_null($content))
        {
        return '';
        }
    $content = str_replace("</p>\n<p>", "\n\n", $content);
    $content = preg_replace('@<br\s*/?>@', '', $content);
    return '<pre><code lang="'.@$attributes['lang'].'">'.$content.'</code></pre>';
    });