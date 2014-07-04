<?php
register_sidebar(array(
    'name' => 'Right',
    'id' => 'sidebar-right',
    'description' => 'Right sidebar',
    'before_widget' => '<div class="block widget">',
    'before_title'  => '<div class="block-header">',
    'after_title'   => '</div><div class="block-content">',
    'after_widget' => '</div></div>',
    ));

add_shortcode('code', function($attributes, $content = null) {
    if(is_null($content))
        {
        return '';
        }
    $content = str_replace("</p>\n<p>", "\n\n", $content);
    $content = preg_replace('@<br\s*/?>@', '', $content);
    if("\n" == $content[0]) { $content = mb_substr($content, 1); }
    // $content .= "\n";
    return '<pre><code lang="'.@$attributes['lang'].'">'.$content.'</code></pre>';
    });

add_filter('the_content', function($content) {
    $content = preg_replace(
        array('{<a(.*?)(wp-att|wp-content/uploads)[^>]*><img}', '{ wp-image-[0-9]*" /></a>}'),
        array('<img', '" />'),
        $content);
    return $content;
    });
